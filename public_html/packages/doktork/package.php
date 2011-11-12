<?php


/**
 * @file          package
 * @project       doktork       
 * @author        max.calabrese@greenpeace.org
 * @time stamp    Nov 12, 2011 - 9:54:12 PM
 */

/**
 * Description of Package
 *
 */
class DoktorK extends Package {
    protected $pkgHandle = 'doktork';
    protected $appVersionRequired = '5.3.0';
    protected $pkgVersion = '1.0';
    
    public function getPackageDescription() {
          return t("DoktorK package.");
    }
    
    public function getPackageName() {
          return t("Hello World");
     }
     
     public function install() {
          $pkg = parent::install();
     
          // install block 
          BlockType::installBlockTypeFromPackage('hello_world', $pkg); 
          PageTheme::add('dreamy', $pkg);
     }
    
}
