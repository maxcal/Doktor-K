<?php

/*
 * @ file:          footer
 * @ project:       doktork       
 * @ author:        max.calabrese@greenpeace.org
 * @ time stamp:    Nov 12, 2011 - 2:49:23 PM
 */

defined('C5_EXECUTE') or die("Access Denied.");?>
        <footer class="footer fw">
            <div class="inner">
                <?php  
                    
                    $currentPage = Page::getCurrentPage();
                   
                    if ( $currentPage->getCollectionID() === 1 ) {
                        $a = new Area('Footer');
                        $a->display($c);
                    }
                    
                    else {
                      $home = Page::getByID(1);
                      $blocks = $home->getBlocks('Footer');
                      foreach ( $blocks as $block ) {
                          $block->display();
                      }                    
                    }
                ?>
			<?php 
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php  
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
				<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
			<?php  } else { ?>
				<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
			<?php  } ?>
            </div>
            
            
        </footer>
    </div><?php // end wrapper ?>
    <?php  Loader::element('footer_required'); ?>
</body>
</html>