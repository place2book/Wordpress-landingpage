<?php
function landx_sidebar_options( $options = array() ){
	$options = array(
		array(
        'id'          => 'create_sidebar',
        'label'       => __( 'Create Sidebar', 'landx' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'sidebar_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(           
          array(
            'id'          => 'desc',
            'label'       => __( 'Description', 'landx' ),
            'desc'        => __( '(optional)', 'landx' ),
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
    );

	return apply_filters( 'landx_sidebar_options', $options );
}   
?>