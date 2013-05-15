<?php
// http://www.deluxeblogtips.com/pt/meta-box/define-fields/
function register_portfolio_meta_boxes()
{
    $prefix = 'trabalhos_';
    $meta_boxes = array();

    $meta_boxes[] = array(
        'title'    => 'Ano do trabalho',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'side',
        'clone' => true,
        'fields'  => array(
            array(
                //'name' => 'Ano',
                'id'   => $prefix . 'ano',
                'type' => 'text'
            )
        )
    );

    $meta_boxes[] = array(
        'title'    => 'Formato',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'side',
        'fields'  => array(
            array(
                //'name' => 'Formato',
                'id'   => $prefix . 'formato',
                'type' => 'text'
            )
        )
    );
    
    $meta_boxes[] = array(
        'title'    => 'Acabamento',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'side',
        'fields'  => array(
            array(
                //'name' => 'Acabamento',
                'id'   => $prefix . 'acabamento',
                'type' => 'text'
            )
        )
    );

    $meta_boxes[] = array(
        'title'    => 'Número de páginas',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'side',
        'fields'  => array(
            array(
                'id'    => $prefix . 'paginas',
                //'desc'  => 'Sua participação no desenvolvimento do projeto',
                'type'  => 'text'
            )
        )
    );

    $meta_boxes[] = array(
        'title'    => 'Imagem da capa',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'normal',
        'fields'  => array(
            array(
                'name'  => 'Arquivo',
                'id'    => $prefix . 'home_img',
                //'desc'  => 'Sua participação no desenvolvimento do projeto',
                'type'  => 'image'
            ),

            array(
                'name' => 'Manter na home?',
                'id'   => $prefix . 'is_inHome',
                'type' => 'checkbox'
            )
        )
    );

    $meta_boxes[] = array(
        'title'    => 'Imagens do trabalho',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'normal',
        'fields'  => array(
            array(
                // 'name'  => 'Instituição',
                'id'    => $prefix . 'imagens',
                // 'desc'  => 'Escritório/Empresa/Instituição na qual o trabalho foi desenvolvido',
                'type'  => 'plupload_image'
            ),
        )
    );

    $meta_boxes[] = array(
        'title'    => 'Informações',
        'desc'  => '',
        'pages'    => array( 'trabalhos' ),
        'context'  => 'normal',
        'fields'  => array(
            array(
                'name'  => 'Instituição',
                'id'    => $prefix . 'instituicao',
                'desc'  => 'Escritório/Empresa/Instituição na qual o trabalho foi desenvolvido',
                'type'  => 'text'
            ),
            array(
                'name'  => 'Atuação',
                'id'    => $prefix . 'atuacao',
                'desc'  => 'Sua participação no desenvolvimento do projeto',
                'type'  => 'textarea',
                'cols'  => 40,
                'rows'  => 2
            ),
            array(
                'name'  => 'Outras observações',
                'id'    => $prefix . 'observacoes',
                'desc'  => 'Informações adicionais à descrição do trabalho',
                'type'  => 'textarea',
                'cols'  => 40,
                'rows'  => 2
            )
        )
    );

    foreach ( $meta_boxes as $meta_box )
        new RW_Meta_Box( $meta_box );
}
 
add_action('admin_init', 'register_portfolio_meta_boxes');
?>