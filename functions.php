<?php

//定义模板文件所在目录为 single 文件夹
define(SINGLE_PATH,  get_stylesheet_directory() );
//自动选择模板的函数
function ptsynj_single_template($single) {
	
	//通过分类别名或ID选择模板文件
	
	foreach((array)get_the_category() as $cat) :
		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
			return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
		elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
			return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
	endforeach;
	
	return $single;
}
//通过 single_template 钩子挂载函数
add_filter('single_template', 'ptsynj_single_template');


$options[] = array(  "name"=>"favicon图标地址2",
				"desc"=>"输入您的favicon图标地址，将在浏览器地址栏显示",
				"id"=>$shortname."_favicon2",
				"type"=>"text",
				"std"=>"/wp-content/themes/Loostrive/images/favicon2.ico");

function ptsynj_scripts_styles() {
	wp_enqueue_style( 'ptsynj-style', get_stylesheet_uri(), array() );
	// Add Bootstrap JavaScript file.
	//wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2.0');
	// Add Bootstrap css.
	//wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.2.0');
}
add_action('wp_enqueue_scripts', 'ptsynj_scripts_styles');

function bodhi_widgets_init(){
    register_sidebar(array(
        'name'          => '活动侧边栏',
        'before_widget' => '',
        'after_widget'  => ''
    ));

}
add_action('widgets_init', 'bodhi_widgets_init');


//用户注册后前台浏览不显示默认工具栏
add_action("user_register", "set_user_admin_bar_false_by_default", 10, 1);
function set_user_admin_bar_false_by_default($user_id) {
	update_user_meta( $user_id, 'show_admin_bar_front', 'false' );
}
function loostrive_login_logo() {
	echo '<style type="text/css">
	        h1 a { background-image:url('. get_stylesheet_directory_uri()  .'/images/admin-login.jpg) !important; background-size:auto auto !important; width:320px !important; height:135px !important; }
	    </style>';
}
