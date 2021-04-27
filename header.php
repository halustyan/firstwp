<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container header--container">
                <div class="row headerRow">
                <?php if ( is_active_sidebar( 'header-logo' ) ) : ?>

                   <div class="tab-header-menu container"> <a class="navbar-brand logo" href="/"><?php dynamic_sidebar( 'header-logo' ); ?></a>
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( [
	'theme_location'  => '',
	'menu'            => '', 
	'container'       => 'div', 
	'container_class' => 'dropdown-toggle', 
	'container_id'    => '',
	'menu_class'      => '', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => '',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto menu">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] ); ?> 

</div>
                   
                    </div>
                </div>
            </div>
        </nav>

    </header>