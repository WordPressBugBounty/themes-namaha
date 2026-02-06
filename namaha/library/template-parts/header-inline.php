<?php
$logo = '';
$logo_link_content = home_url( '/' );

if ( function_exists( 'has_custom_logo' ) ) {
	if ( has_custom_logo() ) {
		$logo = get_custom_logo();
	}
}

$branding_classes = array();
?>

<div class="site-logo-area border-bottom">
	<div class="site-container">
	    
	    <?php
		if ( get_theme_mod( 'namaha-site-branding-contained', customizer_library_get_default( 'namaha-site-branding-contained' ) ) ) {
			$branding_classes[] = 'contained';
		}
	    ?>
	    
	    <div class="branding <?php echo esc_attr( implode( ' ', $branding_classes ) ); ?>">
	        <?php
	        if ( $logo ) {
	       		echo $logo;
	        
	        } else {
			?>
				<a href="<?php echo esc_url( $logo_link_content ); ?>" class="title <?php echo esc_attr( get_theme_mod( 'namaha-site-title-font-weight', customizer_library_get_default( 'namaha-site-title-font-weight' ) ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<div class="description"><?php bloginfo( 'description' ); ?></div>
	        <?php
	        }
	        ?>
		</div>
		
		<?php
		$top_right = '';
	        
		if ( namaha_is_woocommerce_activated() && get_theme_mod( 'namaha-header-shop-links', customizer_library_get_default( 'namaha-header-shop-links' ) ) ) {
			$top_right = 'shop-links';
		} else {
			$top_right = 'info-text';
		}
		?>		
	    
	    <div class="site-header-right <?php echo $top_right == '' ? 'top-empty' : ''; ?>">
	        
	        <div class="top <?php echo $top_right == '' ? 'empty' : $top_right; ?>">
		        <?php
		        switch ($top_right) {
		    		case 'shop-links':
		    			get_template_part( 'library/template-parts/shop-links' );
		    			break;
		    			
		    		case 'info-text':
		    			get_template_part( 'library/template-parts/info-text' );
		    			break;
		    	}
		    	?>	        
	        </div>
	
	        <div class="bottom navigation-menu">
	        	
	        	<div class="main-navigation-container">

					<?php
					get_template_part( 'library/template-parts/navigation-menu' );
					?>

				</div>
				
			</div>
			        
	    </div>
	    <div class="clearboth"></div>
	    
	</div>
</div>
