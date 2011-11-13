<?php
/*
 * @ file:          header
 * @ project:       doktork       
 * @ author:        max.calabrese@greenpeace.org
 * @ time stamp:    Nov 12, 2011 - 2:45:26 PM
 */

defined('C5_EXECUTE') or die("Access Denied.");


?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE ?>" class="no-js">
    <head>
        <meta charset="utf-8" />
        <!--[if IE]>
             <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css') ?>" />
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'/>
        <?php Loader::element('header_required'); ?>
    </head>
    <body>
        <div class="wrapper">
            <header class="header fw">
                <div class="inner">
                    <div class="branding">
                        <h1 class="site-title">
                            <a href="<?php echo DIR_REL ?>/"><img src="<?php echo $this->getThemePath() ?>/logo.png"></a>
                        </h1>
                    </div>
                </div>                          
            </header>
            <nav class="site-nav">
                <div class="inner">
                    
                    <?php    
                    $currentPage = Page::getCurrentPage();
                    
                    if ( $currentPage->getCollectionID() === 1 ) {
                        $a = new Area('Header Nav');
                        $a->display($c);
                    }
                    
                    else {
                      $home = Page::getByID(1);
                      $blocks = $home->getBlocks('Header Nav');
                      foreach ( $blocks as $block ) {
                          $block->display();
                      }                    
                    }
                    ?>
                    </nav>
                </div>
            </nav>
            <div class="openspace fw" >
                <div class="inner">
                    <?php 
                    $a = new Area('Media');
                    $a->display($c);              
                    ?>
                </div>
            </div>
