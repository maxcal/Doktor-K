<?php

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * @ file:          blog
 * @ project:       doktork       
 * @ author:        max.calabrese@greenpeace.org
 * @ time stamp:    Nov 13, 2011 - 12:11:59 AM
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <div class="main">
        <div class="inner">
            <article class="entry">
                <hgroup>
                   <h1><?php echo $c->getCollectionName() ?></h1>
                   <h3>
                       <time datetime="<?php echo $c->getCollectionDatePublic("Y-m-d") ?>">
                               <?php echo $c->getCollectionDatePublic("Y-m-d") ?>
                       </time>
                   </h3>
                </hgroup>                
                <div class="contents">
                    <?php 
                    $a = new Area('Content');
                    $a->display($c);
                    ?>
                    
                </div>
                <footer class="entry-meta">
                </footer>
            </article>
            
            
        </div>     
    </div>
<?php 
$this->inc('elements/footer.php');