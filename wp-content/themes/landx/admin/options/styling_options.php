<?php
function landx_styling_options( $options = array() ){
	$options = array(
		array(
        'id'          => 'preset_color',
        'label'       => __( 'Preset color', THEMENAME ),
        'desc'        => '',
        'std'         => '#008ed6',
        'type'        => 'colorpicker',
        'section'     => 'styling_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector' => '.colored-line, .color-bg, .standard-button, .standard-button:hover, .feature-list-1 li .icon-container,
                .feature-list li .icon-container, .feature-list-2 li .icon-container, .screenshots .owl-theme .owl-controls .owl-page span,
                .perch-social-icon, .search-submit',
                'property'   => 'background-color'
                ),
                array(
                'selector' => 'a, .colored-text, .non-sticky .navbar-nav > li > a:hover, .secondary-button:hover, .sticky-navigation .main-navigation .current a,
                .sticky-navigation .navbar-nav > li > a:hover, .feature .icon, .contact-link, .contact-link:hover , .social-icons li a:hover,
                h5 span , h5 strong, h1 strong, h2 strong, h3 strong, body .colored-text, .sidebar li span, .sidebar li span a,
                .demo-style-switch .switch-button:hover ',
                'property'   => 'color'
                ),
                array(
                    'selector' => '.secondary-button:hover, .vertical-registration-form .input-box:focus,.vertical-registration-form .input-box:active ,
                    .vertical-registration-form .input-box:focus, .vertical-registration-form .input-box:active',
                    'property'   => 'border-color'
                ),
                array(
                    'selector' => '.subscription-form .input-box:focus, .subscription-form .input-box:active, .input-box:active,
.textarea-box:active, .input-box:focus,.textarea-box:focus, .vertical-registration-form .input-box, .vertical-registration-form .input-box:focus, .vertical-registration-form .input-box:active',
                    'property'   => 'border-left-color'
                ),
                array(
                    'selector' => '.vertical-registration-form .input-box, .form-control:focus',
                    'property' => 'border-top-color',
                    'opacity' => .5
                ),
                array(
                    'selector' => '.vertical-registration-form .input-box, .form-control:focus',
                    'property' => 'border-right-color',
                    'opacity' => .5
                ),
                array(
                    'selector' => '.vertical-registration-form .input-box, .form-control:focus',
                    'property' => 'border-bottom-color',
                    'opacity' => .5
                )
            )        

      ),
      array(
        'id'          => 'font_color',
        'label'       => __( 'Global font color', THEMENAME ),
        'desc'        => '',
        'std'         => '#727272',
        'type'        => 'colorpicker',
        'section'     => 'styling_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector' => 'body, .sidebar li a',
                'property'   => 'color'
                )
            )        

      ),
    );

	return apply_filters( 'landx_styling_options', $options );
}  
?>