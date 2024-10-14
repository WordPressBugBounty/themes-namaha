<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Demo
 */

if ( ! function_exists( 'namaha_customizer_library_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function namaha_customizer_library_build_styles() {
	global $mobile_menu_breakpoint, $solidify_breakpoint;
	
	$color = 'namaha-background-color';
	$colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
	
	if ( $colormod !== get_background_color() ) {
	
		$sancolor = esc_html( $colormod );
	
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
				.content-container,
				.site-content .rpwe-block li'
			),
			'declarations' => array(
				'background-color' => $sancolor
			)
		) );
		
	}	
    
    // Site Logo Area Color - solid
    $color = 'namaha-header-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
    	
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-logo-area'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
			)
        ) );
	
    }
    
    // Site Logo Area Color - with opacity
    $color = 'namaha-header-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
    	$sancolor = esc_html( $colormod );
    	$sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );

		Customizer_Library_Styles()->add( array(
	    	'selectors' => array(
	    		'.site-header.translucent .site-logo-area'
	    	),
	    	'declarations' => array(
	    		'background-color' => 'rgba(' .$sancolor_rgb['r']. ',' .$sancolor_rgb['g']. ',' .$sancolor_rgb['b']. ', 0.4)'
	    	),
	    	'media' => '(min-width: ' .($solidify_breakpoint+1). 'px)'
		) );
    }
    
    // Site Identity Container Color
    $color = 'namaha-site-branding-container-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
    	
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .branding.contained'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
			)
        ) );
	
    }
    
    // Navigation Menu Color - solid
    $color = 'namaha-navigation-menu-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.main-navigation'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
        	)
        ) );
	
    }    
    
    // Navigation Menu Color - with opacity
    $color = 'namaha-navigation-menu-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
    	$sancolor = esc_html( $colormod );
    	$sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );

		Customizer_Library_Styles()->add( array(
	    	'selectors' => array(
	    		'.main-navigation.translucent'
	    	),
	    	'declarations' => array(
	    		'background-color' => 'rgba(' .$sancolor_rgb['r']. ',' .$sancolor_rgb['g']. ',' .$sancolor_rgb['b']. ', 0.4)'
	    	),
	    	'media' => '(min-width: ' .($solidify_breakpoint+1). 'px)'
		) );
    }
    
    // Site Intro Page Background Color
    $color = 'namaha-site-intro-page-background-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
    	
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-intro-container'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
			)
        ) );
	
    }
    
    // Primary Color
    $color = 'namaha-primary-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.search-button .otb-fa-search,
				.search-button .otb-fa-search:hover,
                .widget_mc4wp_form_widget .mc4wp-submit .otb-fa,
				.widget_search .search-submit .otb-fa,
                .widget_product_search .search-submit .otb-fa,
                .search-button .fa-search,
				.search-button .fa-search:hover,
                .widget_mc4wp_form_widget .mc4wp-submit .fa,
				.widget_search .search-submit .fa,
                .widget_product_search .search-submit .fa,
				.info-text em,
				.site-header .site-header-right a:hover,
				.site-header.translucent .site-header-right a:hover,
				.main-navigation ul ul a:hover,
                .main-navigation ul ul li.hover > a,
                .main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
                
				.site-header .site-container .main-navigation ul ul a:hover,
                .site-header .site-container .main-navigation ul ul li.hover > a,
                .site-header .site-container .main-navigation ul ul li.current-menu-item > a,
				.site-header .site-container .main-navigation ul ul li.current_page_item > a,
				.site-header .site-container .main-navigation ul ul li.current-menu-parent > a,
				.site-header .site-container .main-navigation ul ul li.current_page_parent > a,
				.site-header .site-container .main-navigation ul ul li.current-menu-ancestor > a,
				.site-header .site-container .main-navigation ul ul li.current_page_ancestor > a,
				
                .main-navigation.translucent ul ul a:hover,
                .main-navigation.translucent ul ul li.hover > a,
				.main-navigation.translucent ul ul li.current-menu-item > a,
				.main-navigation.translucent ul ul li.current_page_item > a,
				.main-navigation.translucent ul ul li.current-menu-parent > a,
				.main-navigation.translucent ul ul li.current_page_parent > a,
				.main-navigation.translucent ul ul li.current-menu-ancestor > a,
				.main-navigation.translucent ul ul li.current_page_ancestor > a,
                
                .site-header.translucent .site-container .main-navigation ul ul a:hover,
                .site-header.translucent .site-container .main-navigation ul ul li.hover > a,
                .site-header.translucent .site-container .main-navigation ul ul li.current-menu-item > a,
				.site-header.translucent .site-container .main-navigation ul ul li.current_page_item > a,
				.site-header.translucent .site-container .main-navigation ul ul li.current-menu-parent > a,
				.site-header.translucent .site-container .main-navigation ul ul li.current_page_parent > a,
				.site-header.translucent .site-container .main-navigation ul ul li.current-menu-ancestor > a,
				.site-header.translucent .site-container .main-navigation ul ul li.current_page_ancestor > a,
                
				.woocommerce .woocommerce-breadcrumb a,
				.woocommerce-page .woocommerce-breadcrumb a,
				.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
				blockquote,
				.wp-block-pullquote p,
				.wp-block-pullquote cite,
				.color-text,
                .namaha-page-builders-use-theme-styles .testimonials .sow-slider-base ul.sow-slider-images .sow-slider-image-wrapper p,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon .elementor-icon,
                .namaha-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-default .elementor-icon,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-framed .elementor-icon,
                .namaha-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-default .elementor-icon,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
                
                .wp-block-search__button-inside.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button,
                .wp-block-quote,
				.wp-block-pullquote'
            ),
            'declarations' => array(
                'color' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
            	'.site-header.forced-solid .main-navigation .search-button .otb-fa-search,
				.site-header.forced-solid .main-navigation .search-button .otb-fa-search:hover,
            	.site-header.forced-solid .main-navigation .search-button .fa-search,
				.site-header.forced-solid .main-navigation .search-button .fa-search:hover,
            	.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-front-module--bs-ad--price,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active::before,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td.today .cell,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td.today .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day.is-today .vc-day-content,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__input.is-checked + .el-checkbox__label,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active span,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li:hover,
				.namaha-bookingpress-use-theme-styles .bpa-vac-pd__item.__bpa-pd-is-total-item .bpa-vac-pd__val,
				.namaha-bookingpress-use-theme-styles .el-date-picker__header-label.active,
				.namaha-bookingpress-use-theme-styles .el-date-table td.available:hover,
				.namaha-bookingpress-use-theme-styles .el-date-table td.today:not(.current) span,
				.namaha-bookingpress-use-theme-styles .el-month-table td .cell:hover,
				.namaha-bookingpress-use-theme-styles .el-month-table td.current:not(.disabled) .cell,
				.namaha-bookingpress-use-theme-styles .el-year-table td .cell:hover,
				.namaha-bookingpress-use-theme-styles .el-year-table td.current:not(.disabled) .cell,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.next-month):not(.prev-month):not(.today):not(.current) span:hover,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.current):not(.today) span:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td.today .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td.today .cell,
				.namaha-bookingpress-use-theme-styles .el-date-picker__header-label:hover'
            ),
            'declarations' => array(
                'color' => $sancolor .' !important'
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button'
            ),
            'declarations' => array(
				'stroke' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag.__bpa-is-active svg,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si-card--checkmark-icon svg,
				.namaha-bookingpress-use-theme-styles .bpa-front-dcw__vector .bpa-front-dcw__vector-primary-color,
				.namaha-bookingpress-use-theme-styles .bpa-front-loader-cl-primary,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active svg,
				.namaha-bookingpress-use-theme-styles .bpa-front-data-empty-view--my-bookings .bpa-front-dev__primary-bg,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--booking-summary .bpa-front-module--bs-head .bpa-head__vector-item,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--confirmation .bpa-head__vector--confirmation .bpa-head__vector-item,
				.namaha-bookingpress-use-theme-styles .bpa-front-thankyou-module-container .bpa-front-tmc__head .bpa-front-tmc__vector--confirmation .bpa-head__vector-item,
        		.namaha-bookingpress-use-theme-styles .bpa-front-loader-cl-primary,
				.namaha-bookingpress-use-theme-styles .bpa-front-data-empty-view .bpa-front-dev__primary-bg,
				.namaha-bookingpress-use-theme-styles .bpa-front__no-timeslots-body svg .bpa-front-dev__primary-bg'
        	),
        	'declarations' => array(
        		'fill' => $sancolor .' !important'
     		)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-data-empty-view .bpa-front-dev__primary-bg,
				.namaha-bookingpress-use-theme-styles .bpa-front__no-timeslots-body svg .bpa-front-dev__primary-bg'
        	),
        	'declarations' => array(
        		'stroke' => $sancolor .' !important'
        	)
        ) );
        
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'div.wpforms-container form.wpforms-form input[type="text"]:focus,
				div.wpforms-container form.wpforms-form input[type="email"]:focus,
				div.wpforms-container form.wpforms-form input[type="tel"]:focus,
				div.wpforms-container form.wpforms-form input[type="number"]:focus,
				div.wpforms-container form.wpforms-form input[type="url"]:focus,
				div.wpforms-container form.wpforms-form input[type="password"]:focus,
				div.wpforms-container form.wpforms-form input[type="search"]:focus,
				div.wpforms-container form.wpforms-form select:focus,
				div.wpforms-container form.wpforms-form textarea:focus,
				input[type="text"]:focus,
				input[type="email"]:focus,
				input[type="tel"]:focus,
				input[type="number"]:focus,
				input[type="url"]:focus,
				input[type="password"]:focus,
				input[type="search"]:focus,
				select:focus,
				textarea:focus,
				.site-content .rpwe-block li,
				.hentry,
				.paging-navigation,
				.widget-area .widget_mc4wp_form_widget.focused *,
				.widget-area .widget_search.focused *,
				.widget-area .widget_product_search.focused *,
				.widget-area .widget,
				.site-footer-widgets .widget_mc4wp_form_widget.focused *,
				.site-footer-widgets .widget_search.focused *,
				.site-footer-widgets .widget_product_search.focused *,
				.search-results article,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-framed .elementor-icon,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
				.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper:focus-within'
			),
			'declarations' => array(
				'border-color' => $sancolor
			)
		) );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.namaha-bookingpress-use-theme-styles .bpa-front-form-control input:focus,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner:focus,
				.namaha-bookingpress-use-theme-styles .el-date-picker__time-header .el-input .el-input__inner:focus,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--service-item.__bpa-is-selected .bpa-front-si-card,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag.__bpa-is-active,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item.__bpa-is-selected,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item.__is-selected,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__input.is-checked .el-checkbox__inner,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__inner:hover,
				.namaha-bookingpress-use-theme-styles .el-radio__input.is-checked .el-radio__inner,
				.namaha-bookingpress-use-theme-styles .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item.__bpa-is-selected,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--atc-wrapper .bpa-front-btn:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-prev:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-next:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.active,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li:hover'
			),
			'declarations' => array(
				'border-color' => $sancolor .' !important'
			)
		) );
		
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'#comments .form-submit #submit,
				.no-results-btn,
				button,
        		a.button,
        		.widget-area .widget a.button,
        		.namaha-page-builders-use-theme-styles .widget_sow-button .ow-button-base a,
        		.namaha-page-builders-use-theme-styles .elementor-widget-button .elementor-button,
        		.namaha-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-stacked .elementor-icon,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
        		hr,
        		ul.sections > li hr.divider,
        		p.woocommerce-store-notice.demo_store,
        		.main-navigation li:hover .indicator,
        		.main-navigation li.hover .indicator,
        		.main-navigation li.current_page_item .indicator,
				.main-navigation li.current-menu-item .indicator,
				.main-navigation li.current-menu-parent .indicator,
        		.main-navigation li.current-menu-ancestor .indicator,
        		.main-navigation li.current_page_parent .indicator,
				.main-navigation .search-button:hover .indicator,
        		.site-header-right .header-menu-button,
        		.side-aligned-social-links .social-links li,
        		.namaha-pull-quote-border blockquote:before,
        		.site-footer-widgets .site-container .widgets-container .divider,
				.woocommerce ul.products li.product a.add_to_cart_button,
				.woocommerce-page ul.products li.product a.add_to_cart_button,
				.woocommerce ul.products li.product a.button.product_type_simple,
				.woocommerce-page ul.products li.product a.button.product_type_simple,
				.woocommerce button.button:disabled,
				.woocommerce button.button:disabled[disabled],
				.woocommerce button.button:disabled:hover,
				.woocommerce button.button:disabled[disabled]:hover,
				.woocommerce button.button.alt:disabled,
				.woocommerce button.button.alt:disabled[disabled],
				.woocommerce button.button.alt:disabled,
				.woocommerce button.button.alt:disabled:hover,
				.woocommerce button.button.alt:disabled[disabled],
				.woocommerce button.button.alt:disabled[disabled]:hover,
				.woocommerce button.button,
				.woocommerce button.button.alt,
				.woocommerce button.button.alt.disabled,
				.woocommerce button.button.alt.disabled:hover,
				.woocommerce button.button,
				.woocommerce button.button.alt,
				.woocommerce a.button.alt,
				.woocommerce-page button.button.alt,
				.woocommerce input.button.alt,
				.woocommerce-page #content input.button.alt,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button,
				.woocommerce-page a.button,
				.woocommerce input.button,
				.woocommerce-page #content input.button,
				.woocommerce-page input.button,
				.woocommerce #review_form #respond .form-submit input,
				.woocommerce-page #review_form #respond .form-submit input,
				.wpcf7-submit,
        		div.wpforms-container form.wpforms-form input[type=submit],
				div.wpforms-container form.wpforms-form button[type=submit],
				div.wpforms-container form.wpforms-form .wpforms-page-button,
        		html #infinite-handle span button,
				.site-footer-bottom-bar,
        		.namaha-page-builders-use-theme-styles .testimonials .sow-slider-base .sow-slide-nav,
        		.namaha-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-stacked .elementor-icon,
        		.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
				.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        		.wp-block-search__button,
        		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link'
			),
        	'declarations' => array(
        		'background-color' => $sancolor
        	)
		) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active span,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body strong.--is-service-price,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary:focus,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.active,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn:hover,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma-table-actions-wrap .bpa-front-btn--icon-without-box:hover,
				.namaha-bookingpress-use-theme-styles .el-date-table td.current:not(.disabled) span,
				.namaha-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day .vc-highlights .vc-day-layer .vc-highlight'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor .' !important'
        	)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
        		.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active span'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor .' !important'
        	),
        	'media' => '(min-width: 576px)'
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item::after'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor . ' !important'
        	),
        	'media' => '(max-width: 576px)'
        ) );        
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'#main-menu.namaha-mobile-menu-standard-color-scheme'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor . ' !important'
        	),
        	'media' => '(max-width: ' .$mobile_menu_breakpoint. 'px)'
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.woocommerce .woocommerce-info,
				.woocommerce .woocommerce-message'
        	),
        	'declarations' => array(
        		'border-top-color' => $sancolor
        	)
        ) );

		Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'::-moz-selection'
			),
			'declarations' => array(
				'background-color' => $sancolor
			)
		) );

		Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'::selection'
			),
			'declarations' => array(
				'background-color' => $sancolor
			)
		) );
        
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.widget-area .widget h2.widget-title:before,
				.widget-area .widget h2.widget-title:after,
    			.widget-area .widget h2.widgettitle:before,
				.widget-area .widget h2.widgettitle:after,
    			.widget-area .widget .wp-block-group__inner-container > h2:before,
    			.widget-area .widget .wp-block-group__inner-container > h2:after,
				.site-footer-widgets .site-container .widgets-container .widget h2.widgettitle:before,
				.site-footer-widgets .site-container .widgets-container .widget h2.widgettitle:after'
    		),
    		'declarations' => array(
    			'background-color' => $sancolor
    		)
    	) );
    	
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.site-header-right .header-menu-button'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
        	),
        	'media' => '(max-width: ' .$mobile_menu_breakpoint. 'px)'
        ) );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.main-navigation.floating-header-menu-button:not(.floated) .header-menu-button .otb-fa.otb-fa-bars,
        		.main-navigation.floating-header-menu-button:not(.floated) .header-menu-button .fa-solid.fa-bars'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
        	),
        	'media' => '(max-width: ' .$mobile_menu_breakpoint. 'px) and (min-width: ' .($solidify_breakpoint+1). 'px)'
        ) );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.main-navigation #main-menu'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
        	),
        	'media' => '(max-width: ' .$mobile_menu_breakpoint. 'px)'
        ) );
        
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.main-navigation.rollover-font-color .menu > ul > li > a:hover,
				.main-navigation.rollover-font-color ul.menu > li > a:hover,
				.main-navigation.rollover-font-color .menu > ul > li.current-menu-item > a,
    			.main-navigation.rollover-font-color ul.menu > li.current-menu-item > a,
				.main-navigation.rollover-font-color .menu > ul > li.current_page_item > a,
    			.main-navigation.rollover-font-color ul.menu > li.current_page_item > a,
				.main-navigation.rollover-font-color .menu > ul > li.current-menu-parent > a,
    			.main-navigation.rollover-font-color ul.menu > li.current-menu-parent > a,
				.main-navigation.rollover-font-color .menu > ul > li.current_page_parent > a,
    			.main-navigation.rollover-font-color ul.menu > li.current_page_parent > a,
				.main-navigation.rollover-font-color .menu > ul > li.current-menu-ancestor > a,
    			.main-navigation.rollover-font-color ul.menu > li.current-menu-ancestor > a,
				.main-navigation.rollover-font-color .menu > ul > li.current_page_ancestor > a,
    			.main-navigation.rollover-font-color ul.menu > ul > li.current_page_ancestor > a,
    			.main-navigation.rollover-font-color button,
				.main-navigation.rollover-font-color .search-button a:hover,
				.main-navigation.rollover-font-color .search-button a:hover .otb-fa-search,
    			.main-navigation.rollover-font-color .search-button a:hover .fa-search'
    		),
    		'declarations' => array(
    			'color' => $sancolor . ' !important'
			),
        		'media' => '(min-width: ' .$mobile_menu_breakpoint. 'px)'
    	) );

        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-intro-container .site-intro'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
			)
        ) );
    	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.main-navigation.rollover-background-color a:hover,
				.main-navigation.rollover-background-color li.current-menu-item > a,
				.main-navigation.rollover-background-color li.current_page_item > a,
				.main-navigation.rollover-background-color li.current-menu-parent > a,
				.main-navigation.rollover-background-color li.current_page_parent > a,
				.main-navigation.rollover-background-color li.current-menu-ancestor > a,
				.main-navigation.rollover-background-color li.current_page_ancestor > a,
				.main-navigation.rollover-background-color button'
    		),
    		'declarations' => array(
    			'background-color' => $sancolor
    		)
    	) );
        
    }
    
    // Secondary Color
    $color = 'namaha-secondary-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {

    	$sancolor = esc_html( $colormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.widget_mc4wp_form_widget .mc4wp-submit .otb-fa:hover,
                .widget_search .search-submit .otb-fa:hover,
				.widget_product_search .search-submit .otb-fa:hover,
                .widget_mc4wp_form_widget .mc4wp-submit .fa:hover,
                .widget_search .search-submit .fa:hover,
				.widget_product_search .search-submit .fa:hover,
                .widget_namaha_social_media_links_widget .social-links li a:hover,
                .site-content .rpwe-block h3.rpwe-title a:hover,
				.woocommerce .woocommerce-breadcrumb a:hover,
				.woocommerce-page .woocommerce-breadcrumb a:hover,
				.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
                .wp-block-search__button-inside.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button:hover'
            ),
            'declarations' => array(
                'color' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button:hover'
            ),
            'declarations' => array(
				'stroke' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'#back-to-top .hover,
				.main-navigation button:hover,
				#comments .form-submit #submit:hover,
				.no-results-btn:hover,
				button:hover,
        		a.button:hover,
        		.widget-area .widget a.button:hover,
				.namaha-page-builders-use-theme-styles .widget_sow-button .ow-button-base a.ow-button-hover:hover,
        		.namaha-page-builders-use-theme-styles .elementor-widget-button .elementor-button:hover,
				input[type="button"]:hover,
				input[type="reset"]:hover,
				input[type="submit"]:hover,
        		.side-aligned-social-links .social-links li:hover,
				.select2-container--default .select2-results__option--highlighted[aria-selected],
				.woocommerce input.button.alt:hover,
				.woocommerce-page #content input.button.alt:hover,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button:hover,
				.woocommerce-page a.button:hover,
				.woocommerce input.button:hover,
				.woocommerce-page #content input.button:hover,
				.woocommerce-page input.button:hover,
				.woocommerce ul.products li.product a.add_to_cart_button:hover,
				.woocommerce-page ul.products li.product a.add_to_cart_button:hover,
				.woocommerce ul.products li.product a.button.product_type_simple:hover,
				.woocommerce-page ul.products li.product a.button.product_type_simple:hover,
        		.woocommerce button.button:hover,
				.woocommerce button.button.alt:hover,
				.woocommerce a.button.alt:hover,
				.woocommerce-page button.button.alt:hover,
				.woocommerce #review_form #respond .form-submit input:hover,
				.woocommerce-page #review_form #respond .form-submit input:hover,
				.wpcf7-submit:hover,
        		html #infinite-handle span button:hover,
        		div.wpforms-container form.wpforms-form input[type=submit]:hover,
				div.wpforms-container form.wpforms-form button[type=submit]:hover,
				div.wpforms-container form.wpforms-form .wpforms-page-button:hover,
        		.namaha-page-builders-use-theme-styles .testimonials .sow-slider-base .sow-slide-nav:hover,
        		.wp-block-search__button:hover,
        		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor
        	)
		) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary:hover'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor .' !important'
        	)
        ) );        
        
    }
    
    // Link Color
    $color = 'namaha-link-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'a,
        		#cancel-comment-reply-link'
        	),
        	'declarations' => array(
        		'color' => $sancolor
        	)
        ) );
	
    }
    
    // Link Rollover Color
    $color = 'namaha-link-rollover-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'a:hover,
        		#cancel-comment-reply-link:hover,
        		.widget-area .widget ul li a:hover,
        		.site-footer-widgets .widget ul li a:hover,
        		.woocommerce-MyAccount-navigation li.is-active a'
        	),
        	'declarations' => array(
        		'color' => $sancolor
        	)
        ) );
	
    }
    
    // Footer Color
    $color = 'namaha-footer-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-footer'
    		),
    		'declarations' => array(
    			'background-color' => $sancolor
    		)
    	) );
    
    }

    // Site Title Font
	$font = 'namaha-site-title-font';
	$fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );
	    
    if ( $fontmod != customizer_library_get_default( $font ) ) {
    	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header .branding .title,
    			.google-fonts-disabled .site-header .branding .title'
    		),
    		'declarations' => array(
    			'font-family' => $fontstack
    		)
    	) );
    
    }
    
    // Site Title Font Size
    $fontsize = 'namaha-site-title-font-size';
    $fontsizemod = get_theme_mod( $fontsize, customizer_library_get_default( $fontsize ) );
    
    if ( $fontsizemod !== customizer_library_get_default( $fontsize ) ) {
    
    	$sanfontsize = intval( $fontsizemod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header .branding .title'
    		),
    		'declarations' => array(
    			'font-size' => $sanfontsize. 'px'
    		)
    	) );
    }
    
    // Site Title Font Weight
    $fontweight = 'namaha-site-title-font-weight';
    $fontweightmod = get_theme_mod( $fontweight, customizer_library_get_default( $fontweight ) );

    if ( $fontweightmod != customizer_library_get_default( $fontweight ) ) {
    	
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	            '.site-header .branding .title'
			),
            'declarations' => array(
                'font-weight' => $fontweightmod
            )
        ) );

    }
    
    // Site Title Font Letter Spacing
    $fontletterspacing = 'namaha-site-title-font-letter-spacing';
    $fontletterspacingmod = get_theme_mod( $fontletterspacing, customizer_library_get_default( $fontletterspacing ) );

    if ( $fontletterspacingmod != customizer_library_get_default( $fontletterspacing ) ) {
    	
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	        	'.site-header .branding .title'
			),
            'declarations' => array(
                'letter-spacing' => $fontletterspacingmod. 'px'
            )
        ) );

    }

    // Site Title Solid Font Color
    $color = 'namaha-site-title-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
    	
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .branding .title'
        	),
        	'declarations' => array(
        		'color' => $sancolor
			)
        ) );
	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header.forced-solid .branding .title'
    		),
    		'declarations' => array(
    			'color' => $sancolor .' !important'
    		)
    	) );
        
    }
    
    // Site Tagline Solid Font Color
    $color = 'namaha-tagline-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    	
        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );
    	
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .branding .description'
        	),
        	'declarations' => array(
        		'color' => $sancolor
			)
        ) );
	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header.forced-solid .branding .description'
    		),
    		'declarations' => array(
    			'color' => $sancolor .' !important'
    		)
    	) );
        
    }
    
    // Heading Font
    $font = 'namaha-heading-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );
    
    if ( $fontmod != customizer_library_get_default( $font ) ) {
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'h1, h2, h3, h4, h5, h6,
				h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
    			.namaha-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
    			.widget-area .widget h2,
				.site-footer-widgets ul li h2.widgettitle,
    			.header-image .overlay .opacity h1,
    			.header-image .overlay .opacity h2,
    			.slider-container.default .slider .slide .overlay-container .overlay .opacity h1,
				.slider-container.default .slider .slide .overlay-container .overlay .opacity h2,
    			
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-module-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si__card-body--heading'
    		),
    		'declarations' => array(
    			'font-family' => $fontstack
    		)
    	) );

    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-module-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si__card-body--heading'
    		),
    		'declarations' => array(
    			'font-family' => $fontstack .' !important'
    		)
    	) );
    	 
    }
    
    // Heading Font Weight
    $fontweight = 'namaha-heading-font-weight';
    $fontweightmod = get_theme_mod( $fontweight, customizer_library_get_default( $fontweight ) );

    if ( $fontweightmod != customizer_library_get_default( $fontweight ) ) {
    	
        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	            'h1, h2, h3, h4, h5, h6,
				h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
	            .namaha-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title a,
	            html #jp-relatedposts h3.jp-relatedposts-headline em,
	            .widget-area .widget h2,
				.site-footer-widgets ul li h2.widgettitle'
			),
            'declarations' => array(
                'font-weight' => $fontweightmod
            )
        ) );

    }    
    
    // Heading Font Color
    $fontcolor = 'namaha-heading-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {
    
    	$sanfontcolor = esc_html( $fontcolormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'h1, h2, h3, h4, h5, h6,
				h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
    			.namaha-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
    			.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title a'
    		),
    		'declarations' => array(
    			'color' => $sanfontcolor
    		)
    	) );
    	 
    }

    // Body Font
	$font = 'namaha-body-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );

    if ( $fontmod != customizer_library_get_default( $font ) ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	            'body,
	            input,
	            select,
	            textarea,
				.site-header .site-header-right a,
	            .site-header .site-header-right .main-navigation ul ul a,
	            .main-navigation ul ul a,
	            .widget-area .rpwe-block h3.rpwe-title a,
				.breadcrumbs,
	            #cancel-comment-reply-link,
				.site-footer-widgets .widget a,
	            .header-image .overlay .opacity,
	            .slider-container.default .slider .slide .overlay-container .overlay .opacity,
	            .woocommerce .woocommerce-ordering select,
				.woocommerce-page .woocommerce-ordering select,
				.namaha-page-builders-use-theme-styles .elementor-widget-text-editor,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description,
				.namaha-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
	            
				.namaha-bookingpress-use-theme-styles .bpa-front-tmc__head .bpa-front-tmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-cancel-module-container .bpa-front-cmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.namaha-bookingpress-use-theme-styles .bpa-cp-pd__title,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .bpa-cp-ma-cell-val,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .cell,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .el-table__header-wrapper tr th.el-table__cell,
				.namaha-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-title,
				.namaha-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--val,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac-sec-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control input,
				.namaha-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-id,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .bpa-ma-date-time-details .bpa-ma-dt__time-val,
				.namaha-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--label,
				.namaha-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__label,
				.namaha-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__val,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn__small,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.namaha-bookingpress-use-theme-styles .bpa-front-pill,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.number,
				.namaha-bookingpress-use-theme-styles .bpa-front-dcw__body-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-dcw__body-sub-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn,
				.namaha-bookingpress-use-theme-styles .el-popconfirm__main,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn__small,
				.namaha-bookingpress-use-theme-styles .el-date-picker__header-label,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table th,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td span,
				.namaha-bookingpress-use-theme-styles .bpa-front-data-empty-view--my-bookings .bpa-front-dev__title,
				.namaha-bookingpress-use-theme-styles .el-form-item__error,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control input::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-prev span,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-next span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-weeks .vc-weekday,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control input,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control .el-textarea__inner,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item .bpa-front-bs-sm__item-val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-head p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si-cb__specs .bpa-front-si-cb__specs-item p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .el-form-item__label .bpa-front-form-label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .--bpa-is-desc,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tab-menu .bpa-front-tab-menu--item,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-fm--bs-amount-item .bpa-front-total-payment-amount-label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-front-module--bs-ad--price,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs--foot .bpa-front-btn,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control.--bpa-country-dropdown.vue-tel-input strong,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__booking-id .bpa-front-bi__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__head .bpa-front-tmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__head p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-data-empty-view .bpa-front-dev__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .el-form-item__error,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control input::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control .el-textarea__inner::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control--file-upload .bpa-fu__placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-custom-datepicker .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-custom-datepicker .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-nav-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-nav-items .vc-nav-item,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-thankyou-module-container .bpa-front-cc__error-toast-notification,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front__no-timeslots-body .bpa-front-ntb__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--note-desc,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-refund-confirmation-content .bpa-front-rcc__body .bpa-front-rcc__empty-msg,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-day .vc-day-content,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt-ts__sub-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--bs-amount-details .bpa-fm--bs-amount-item .bpa-front-total-payment-amount-label'
			),
            'declarations' => array(
                'font-family' => $fontstack
            )
        ) );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-tmc__head .bpa-front-tmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-cancel-module-container .bpa-front-cmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.namaha-bookingpress-use-theme-styles .bpa-cp-pd__title,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .bpa-cp-ma-cell-val,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .cell,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .el-table__header-wrapper tr th.el-table__cell,
				.namaha-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-title,
				.namaha-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--val,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac-sec-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control input,
				.namaha-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-id,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item,
				.namaha-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell,
				.namaha-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .bpa-ma-date-time-details .bpa-ma-dt__time-val,
				.namaha-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--label,
				.namaha-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__label,
				.namaha-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__val,
				.namaha-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn__small,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.namaha-bookingpress-use-theme-styles .bpa-front-pill,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.number,
				.namaha-bookingpress-use-theme-styles .bpa-front-dcw__body-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-dcw__body-sub-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn,
				.namaha-bookingpress-use-theme-styles .el-popconfirm__main,
				.namaha-bookingpress-use-theme-styles .bpa-front-btn__small,
				.namaha-bookingpress-use-theme-styles .el-date-picker__header-label,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table th,
				.namaha-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td span,
				.namaha-bookingpress-use-theme-styles .bpa-front-data-empty-view--my-bookings .bpa-front-dev__title,
				.namaha-bookingpress-use-theme-styles .el-form-item__error,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control input::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-prev span,
				.namaha-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-next span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-weeks .vc-weekday,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control input,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control .el-textarea__inner,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item .bpa-front-bs-sm__item-val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-head p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si-cb__specs .bpa-front-si-cb__specs-item p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .el-form-item__label .bpa-front-form-label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .--bpa-is-desc,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tab-menu .bpa-front-tab-menu--item,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-fm--bs-amount-item .bpa-front-total-payment-amount-label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-front-module--bs-ad--price,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs--foot .bpa-front-btn,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control.--bpa-country-dropdown.vue-tel-input strong,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__booking-id .bpa-front-bi__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__head .bpa-front-tmc__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__label,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tmc__head p,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-data-empty-view .bpa-front-dev__title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .el-form-item__error,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control input::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control .el-textarea__inner::placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control--file-upload .bpa-fu__placeholder,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-custom-datepicker .el-year-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-custom-datepicker .el-month-table td .cell,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-nav-title,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-nav-items .vc-nav-item,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-thankyou-module-container .bpa-front-cc__error-toast-notification,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front__no-timeslots-body .bpa-front-ntb__val,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--note-desc,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-refund-confirmation-content .bpa-front-rcc__body .bpa-front-rcc__empty-msg,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-day .vc-day-content,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt-ts__sub-heading,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item span,
				.namaha-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--bs-amount-details .bpa-fm--bs-amount-item .bpa-front-total-payment-amount-label'
        	),
        	'declarations' => array(
        		'font-family' => $fontstack .' !important'
        	)
        ) );
        
    }
    
    // Body Font Color
    $fontcolor = 'namaha-body-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = esc_html( $fontcolormod );
        $sanfontcolor_rgb = customizer_library_hex_to_rgb( $sanfontcolor );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body,
	            .widget_namaha_social_media_links_widget .social-links li a,
				.breadcrumbs,
                .main-navigation ul ul a,
                .main-navigation.translucent ul ul a,
				.site-header .site-container .main-navigation ul ul a,
                .widget-area .widget ul li a,
                .widget-area .rpwe_widget .rpwe-block h3 a,
                .site-footer-widgets .widget ul li a,
				.woocommerce .woocommerce-breadcrumb,
				.woocommerce-page .woocommerce-breadcrumb,
                .woocommerce ul.products li.product .price,
				.woocommerce #content ul.products li.product span.price,
				.woocommerce-page #content ul.products li.product span.price,
				.woocommerce #content div.product p.price,
				.woocommerce-page #content div.product p.price,
				.woocommerce-page div.product p.price,
				.woocommerce #content div.product span.price,
				.woocommerce div.product span.price,
				.woocommerce-page #content div.product span.price,
				.woocommerce-page div.product span.price,
				.woocommerce div.product .woocommerce-tabs ul.tabs li a,
                .woocommerce #reviews #comments ol.commentlist li .meta,
				#add_payment_method #payment div.payment_box,
				.woocommerce-checkout #payment div.payment_box,
                .content-area ul.product_list_widget li .product-title,
                .site-content .rpwe-block h3 a,
                .site-content .rpwe-time:after,
				.namaha-page-builders-use-theme-styles .elementor-widget-text-editor,
				.namaha-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description,
                .wp-block-quote cite'
            ),
            'declarations' => array(
                'color' => $sanfontcolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.rpwe-time,
        		.select2-default'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7) !important'
        	)
        ) );
         
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'::-webkit-input-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		':-moz-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'::-moz-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		':-ms-input-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );        
    }
    
    // Button Font
	$font = 'namaha-button-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );

    if ( $fontmod != customizer_library_get_default( $font ) ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	            '.woocommerce a.button,
				.woocommerce-page a.button,
				.woocommerce a.button.alt,
				.woocommerce table.cart th,
				.woocommerce-page #content table.cart th,
				.woocommerce-page table.cart th,
				.woocommerce input.button.alt,
				.woocommerce-page #content input.button.alt,
				.woocommerce table.cart inputinput[type="submit"],
				.woocommerce-page #content table.cart inputinput[type="submit"],
				.woocommerce-page table.cart inputinput[type="submit"],
				.woocommerce #respond input#submit,
				.woocommerce a.button,
				.woocommerce button.button,
				.woocommerce input.button,
				button,
				a.button,
				.widget-area .widget a.button,
				.namaha-page-builders-use-theme-styles .widget_sow-button .ow-button-base a,
				.namaha-page-builders-use-theme-styles .elementor-widget-button .elementor-button,
				html #infinite-handle span button,
				html #infinite-handle span button:hover,
				div.wpforms-container form.wpforms-form input[type=submit],
				div.wpforms-container form.wpforms-form button[type=submit],
				div.wpforms-container form.wpforms-form .wpforms-page-button,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
	            
	            .namaha-bookingpress-use-theme-styles .bpa-front-btn--primary span,
	            
	            .wp-block-search__button,
	            .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link'
			),
            'declarations' => array(
                'font-family' => $fontstack
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.namaha-bookingpress-use-theme-styles .bpa-front-btn--primary span'
        	),
        	'declarations' => array(
        		'font-family' => $fontstack .' !important'
        	)
        ) );        

    }
    
	// Form Input Font Color
    $fontcolor = 'namaha-form-input-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = esc_html( $fontcolormod );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'div.wpforms-container form.wpforms-form input[type="text"],
				div.wpforms-container form.wpforms-form input[type="email"],
				div.wpforms-container form.wpforms-form input[type="tel"],
                div.wpforms-container form.wpforms-form input[type="number"],
				div.wpforms-container form.wpforms-form input[type="url"],
				div.wpforms-container form.wpforms-form input[type="password"],
				div.wpforms-container form.wpforms-form input[type="search"],
				div.wpforms-container form.wpforms-form select,
				div.wpforms-container form.wpforms-form textarea,
				input[type="text"],
				input[type="email"],
				input[type="tel"],
                input[type="number"],
				input[type="url"],
				input[type="password"],
				input[type="search"],
                select,
				textarea,
				.search-block .search-field,
				.select2-drop,
				.select2-container .select2-choice,
        		.select2-container--default .select2-selection--single .select2-selection__rendered,
        		.select2-container--default .select2-results__option,
        		.woocommerce .woocommerce-ordering select,
				.woocommerce-page .woocommerce-ordering select,
				.woocommerce #content .quantity input.qty,
				.woocommerce .quantity input.qty,
				.woocommerce-page #content .quantity input.qty,
        		.woocommerce-page .quantity input.qty'
        	),
        	'declarations' => array(
        		'color' => $sanfontcolor
        	)
        ) );
	
    }
    
    // Site Logo Area Solid Font Color
    $color = 'namaha-header-solid-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header .site-header-right,
    			.site-header .site-header-right a'
    		),
    		'declarations' => array(
    			'color' => $sancolor
    		)
    	) );
    	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header.forced-solid .site-header-right,
				.site-header.forced-solid .site-header-right a:not(:hover)'
    		),
    		'declarations' => array(
    			'color' => $sancolor .' !important'
    		)
    	) );
    
    }

    // Site Logo Area Translucent Font Color
    $color = 'namaha-header-translucent-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header.translucent .site-header-right,
    			.site-header.translucent .site-header-right a'
    		),
    		'declarations' => array(
    			'color' => $sancolor
    		)
    	) );
    
    }    
    
    // Navigation Menu Font
	$font = 'namaha-navigation-menu-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );

    if ( $fontmod != customizer_library_get_default( $font ) ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
				'.site-header .site-header-right .main-navigation .menu > ul > li > a,
				.site-header .site-header-right .main-navigation ul.menu > li > a,
				.main-navigation .menu > ul > li > a,
				.main-navigation ul.menu > li > a,
            	.main-navigation .search-button a'
			),
            'declarations' => array(
                'font-family' => $fontstack
            )
        ) );

    }    
    
    // Navigation Menu Solid Font Color
    $color = 'namaha-navigation-menu-solid-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.main-navigation .menu > ul > li > a,
				.main-navigation .menu > ul > li > a:hover,
				.main-navigation ul.menu > li > a,
				.main-navigation ul.menu > li > a:hover,
    			.main-navigation .search-button a,
				.main-navigation .search-button a:hover,
    			.header-menu-button .otb-fa.otb-fa-bars,
    			.header-menu-button .fa-solid.fa-bars'
    		),
    		'declarations' => array(
    			'color' => $sancolor
    		)
    	) );
    	
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header.forced-solid .main-navigation .menu > ul > li > a,
				.site-header.forced-solid .main-navigation .menu > ul > li > a:hover,
				.site-header.forced-solid .main-navigation ul.menu > li > a,
				.site-header.forced-solid .main-navigation ul.menu > li > a:hover,
				.site-header.forced-solid .main-navigation .search-button a,
				.site-header.forced-solid .main-navigation .search-button a:hover'
    		),
    		'declarations' => array(
    			'color' => $sancolor .' !important'
    		)
    	) );    	
    
    }    

    // Navigation Menu Translucent Font Color
    $color = 'namaha-navigation-menu-translucent-font-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.main-navigation.translucent .menu > ul > li > a,
				.main-navigation.translucent .menu > ul > li > a:hover,
				.main-navigation.translucent ul.menu > li > a,
				.main-navigation.translucent ul.menu > li > a:hover,
				.site-header.translucent .site-container .main-navigation .menu > ul > li > a,
				.site-header.translucent .site-container .main-navigation .menu > ul > li > a:hover,
				.site-header.translucent .site-container .main-navigation ul.menu > li > a,
				.site-header.translucent .site-container .main-navigation ul.menu > li > a:hover,
				.main-navigation .search-button a,
				.main-navigation .search-button a:hover,
				.site-header.translucent .site-container .main-navigation .search-button a,
				.site-header.translucent .site-container .main-navigation .search-button a:hover,
				.main-navigation.translucent .search-button .otb-fa-search,
				.main-navigation.translucent .search-button .otb-fa-search:hover,
				.site-header.translucent .site-container .main-navigation .search-button .otb-fa-search,
				.site-header.translucent .site-container .main-navigation .search-button .otb-fa-search:hover,
    			.main-navigation.translucent .search-button .fa-search,
				.main-navigation.translucent .search-button .fa-search:hover,
    			.site-header.translucent .site-container .main-navigation .search-button .fa-search,
				.site-header.translucent .site-container .main-navigation .search-button .fa-search:hover'
    		),
    		'declarations' => array(
    			'color' => $sancolor
    		)
    	) );
    
    }
    
    // Slider opacity overlay opacity
	$opacity = 'namaha-slider-overlay-opacity';
	$opacitymod = get_theme_mod( $opacity, customizer_library_get_default( $opacity ) );
	
    if ( $opacitymod !== customizer_library_get_default( $opacity ) ) {
    	    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.slider-container.default .slider .slide .opacity'
    		),
    		'declarations' => array(
    			'background-color' => 'rgba(0, 0, 0, '. floatval( $opacitymod ) .')'
    		)
    	) );
    
    }

    // Header Image opacity overlay opacity
	$opacity = 'namaha-header-image-overlay-opacity';
	$opacitymod = get_theme_mod( $opacity, customizer_library_get_default( $opacity ) );
	
    if ( $opacitymod !== customizer_library_get_default( $opacity ) ) {
    	    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.header-image .opacity'
    		),
    		'declarations' => array(
    			'background-color' => 'rgba(0, 0, 0, '. floatval( $opacitymod ) .')'
    		)
    	) );
    
    }
    
}
endif;

add_action( 'customizer_library_styles', 'namaha_customizer_library_build_styles' );

if ( ! function_exists( 'namaha_customizer_library_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function namaha_customizer_library_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"out-the-box-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'namaha_customizer_library_styles', 11 );