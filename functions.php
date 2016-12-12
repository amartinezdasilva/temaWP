<?php register_nav_menus( array(
	'menua '=> __('Menua','temaa'),
	'menub' => __('Menub','temab')
) );
	register_sidebar( array(
		'name'          => __( 'SideBar1', 'temasxe' ),
		'id'            => 'sidebar1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'temasxe' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
?>