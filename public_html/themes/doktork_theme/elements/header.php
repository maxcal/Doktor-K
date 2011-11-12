<?php

/*
 * @ file:          header
 * @ project:       doktork       
 * @ author:        max.calabrese@greenpeace.org
 * @ time stamp:    Nov 12, 2011 - 2:45:26 PM
 */

defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>" class="no-js">
    <head>
        <meta charset="utf-8" />
        <title>HTML5 boilerplate—all you really need…</title>
        <!--[if IE]>
             <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('main.css')?>" />
        <?php  Loader::element('header_required'); ?>
    </head>
    <body>
        <header class="site-header">
            
        </header>    
        