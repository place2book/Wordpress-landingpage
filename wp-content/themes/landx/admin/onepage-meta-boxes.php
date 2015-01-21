<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'landx_onepage_meta_boxes' );

function landx_onepage_meta_boxes() {

  if( function_exists( 'ot_get_option' ) ): 

  $my_meta_box = array(
    'id'        => 'landx_onepage_meta_box',
    'title'     => 'Landx One-page Template Settings',
    'desc'      => 'This option only applicable when you select one page Template',
    'pages'     => array( 'page' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'onepage_general_settings',
        'label'       => 'General settings',      
        'type'        => 'tab',
        'operator'    => 'and'
      ),  
      array(
        'id'          => 'onepage_preloader',
        'label'       => __( 'Preloader', THEMENAME ),
        'desc'        => '',
        'std'         => THEMEURI . '/admin/assets/images/loading.gif',
        'type'        => 'upload',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array(
        )
        
      ), 
      array(
        'id'          => 'nav_display_type',
        'label'       => __( 'Navigation display in header', THEMENAME ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        
      ),
      array(
        'id'          => 'home_link',
        'label'       => __( 'Home link', THEMENAME ),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        
      ), 
      array(
        'id'          => 'home_text',
        'label'       => __( 'Home Text', THEMENAME ),
        'desc'        => '',
        'std'         => 'Home',
        'type'        => 'text',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'home_link:is(on)',
        'operator'    => 'and',
        
      ),
      array(
        'id'          => 'header_logo_display',
        'label'       => __( 'Header logo display', THEMENAME ),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        
      ), 
      array(
        'id'          => 'header_logo',
        'label'       => __( 'Header logo', THEMENAME ),
        'desc'        => '',
        'std'         => THEMEURI. '/images/logo.png',
        'type'        => 'upload',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_logo_display:is(on)',
        'operator'    => 'and',
        
      ),
      array(
        'id'          => 'social_button_display',
        'label'       => __( 'Social link display', THEMENAME ),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        
      ), 
     
      array(
        'id'          => 'content_settings',
        'label'       => 'Section settings',      
        'type'        => 'tab',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pages',
        'label'       => __( 'Pages', THEMENAME ),
        'desc'        => 'Selectd page will appear in onepage',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(
            array(
            'id'          => 'page_id',
            'label'       => 'Select a page',
            'desc'        => '',
            'std'         => '',
            'type'        => 'page-select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => '',
          ),
            array(
            'id'          => 'display_in_menu',
            'label'       => 'Display in menu',
            'desc'        => '',
            'std'         => 'on',
            'type'        => 'on-off',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => '',
          ),
            array(
            'id'          => 'link_type',
            'label'       => 'Menu link type',
            'desc'        => '',
            'std'         => 'internal',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => 'display_in_menu:is(on)',
            'operator'    => 'and',
            'choices'     => array(
                array(
                    'value'       => 'internal',
                    'label'       => 'Internal',
                    'src'         => ''
                  ),
                  array(
                    'value'       => 'external',
                    'label'       => 'External',
                    'src'         => ''
                  )
              ),
          ),
            

        )
      ),
    )
  );


  
  ot_register_meta_box( $my_meta_box );
  endif;  //if( function_exists( 'ot_get_option' ) ):

}
?>