<?php
    /* Подключение стилей и скриптов */
    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], time() );

        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], time(), true );

    } );

    add_action( 'after_setup_theme', function(){

        // Регистрируем главное меню
        register_nav_menu('header-menu', 'Меню в шапке');

        // Регистрируем меню в подвале
        register_nav_menu('footer-menu', 'Меню в подвале');

        // Смена логотипа
        add_theme_support('custom-logo');

        /* Добавляем возможность ставить постам миниатюры */
        add_theme_support('post-thumbnails');

        /* Тайтлы старницы ставятся автоматом */
        add_theme_support('title-tag');

        /* Включаем поддержку html5 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /* Отключаем админбар */
        add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

    });

    //Добавление "Цитаты" для страниц
    add_action('init', function() {
        add_post_type_support('page', array('excerpt'));
    });

    add_action( 'init', function () {
        register_taxonomy_for_object_type( 'category', 'page' );
    } );

	//	Подгрузка постов
	function true_loadmore_scripts() {
		wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/inc/loadmore.js', array('jquery') );
	}

	add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

	function true_load_posts(){

		$args = unserialize( stripslashes( $_POST['query'] ) );
		$args['paged'] = $_POST['page'] + 1; // следующая страница
		$args['post_status'] = 'publish';

		// обычно лучше использовать WP_Query, но не здесь
		query_posts( $args );
		// если посты есть
		if( have_posts() ) :

			// запускаем цикл
			while( have_posts() ): the_post();

				get_template_part( 'template-parts/template', 'post' );

			endwhile;

		endif;
		die();
	}

	add_action('wp_ajax_loadmore', 'true_load_posts');
	add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');