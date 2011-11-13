<?php

/*
 * @ file:          default
 * @ project:       doktork       
 * @ author:        max.calabrese@greenpeace.org
 * @ time stamp:    Nov 12, 2011 - 2:46:30 PM
 */

defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <div class="main">
        <div class="inner">
            <?php 
            $a = new Area('Main');
            $a->display($c);
            ?>
        </div>     
    </div>
<?php 
$this->inc('elements/footer.php');