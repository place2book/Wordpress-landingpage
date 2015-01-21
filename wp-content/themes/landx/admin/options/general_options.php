<?php
function landx_general_options( $options = array() ){
    $social_array = array(
            array(
              'title' => 'Facebook',
              'link'  => '#',
              'icon'  => 'social_facebook_circle'
              ),
            array(
              'title' => 'Twitter',
              'link'  => '#',
              'icon'  => 'social_twitter_circle'
              ),
            array(
              'title' => 'Linkdin',
              'link'  => '#',
              'icon'  => 'social_linkedin_circle'
              ),
            );

        $choice= array( 
          array(
            'value'       => 'social_facebook_circle',
            'label'       => 'Facebook',
            'src'         => ''
          ),
          array(
            'value'       => 'social_twitter_circle',
            'label'       => 'Twitter',
            'src'         => ''
          ),
          array(
            'value'       => 'social_pinterest_circle',
            'label'       => 'Pinterest',
            'src'         => ''
          ),
          array(
            'value'       => 'social_googleplus_circle',
            'label'       => 'Google+',
            'src'         => ''
          ),
          array(
            'value'       => 'social_instagram_circle',
            'label'       => 'Instagram',
            'src'         => ''
          ),
          array(
            'value'       => 'social_linkedin_circle',
            'label'       => 'LinkdIn',
            'src'         => ''
          ),
        );

	$options = array(
		array(
        'id'          => 'fabicon',
        'label'       => __( 'Fabicon', THEMENAME ),
        'desc'        => __( 'Upload or put a url of an ico image that will appear your website\'s (16px X 16px)', THEMENAME ),
        'std'         => THEMEURI. 'images/favicon.ico',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'main_logo',
        'label'       => __( 'Logo', THEMENAME ),
        'desc'        => 'Appear in Menu bar',
        'std'         => THEMEURI. 'images/logo-dark.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'main_retina_logo',
        'label'       => __( 'Retina logo (@2x)', THEMENAME ),
        'desc'        => 'Appear in Menu bar',
        'std'         => THEMEURI. 'images/logo-dark@2x.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'admin_logo',
        'label'       => __( 'Admin logo', THEMENAME ),
        'desc'        => '',
        'std'         => THEMEURI. 'images/logo-dark.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'mailchimp_post_url',
        'label'       => __( 'Mailchimp post URL', THEMENAME ),
        'desc'        => 'Replace this with your own mailchimp post URL',
        'std'         => '//themeperch.us9.list-manage.com/subscribe/post?u=d33802e92fdc29def2e7af643&amp;id=0085e5e2b5',
        'type'        => 'text',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'header_social_icons',
        'label'       => 'Header Social Icons for one page',
        'desc'        => '',
        'std'         => $social_array,
        'type'        => 'list-item',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'link',
            'label'       => 'Link',
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'icon',
            'label'       => 'Icon',
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => $choice
          ),
        ),
        ),
      array(
        'id'          => 'show_breadcrumbs',
        'label'       => __( 'Show Breadcrumbs', THEMENAME ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bredcrumb_menu_prefix',
        'label'       => __( 'Breadcrumbs prefix', THEMENAME ),
        'desc'        => '',
        'std'         => 'Home',
        'type'        => 'text',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_breadcrumbs:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'google_analytic_code',
        'label'       => __( 'Google Analytic code', THEMENAME ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general_options',
        'rows'        => '3',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	);

	return apply_filters( 'landx_general_options', $options );
}
?>