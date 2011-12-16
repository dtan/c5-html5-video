<?php   
 
defined('C5_EXECUTE') or die("Access Denied.");

class JacksHtmlVideoPackage extends Package {

	protected $pkgHandle = 'jacks_html_video';
	protected $appVersionRequired = '5.4.0';
	protected $pkgVersion = '1.0.1';
	
	public function getPackageName() {
		return t("Html5 Video");
	}
	
	public function getPackageDescription() {
		return t("Allow for posting of html5 videos.");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage("html_video", $pkg);
		//allow .ogv file extensions
		$allowOrig = array(".mp4;*");
		$allowTo = array(".mp4;*.ogv;*");
		$allowedExtensions=Config::get('UPLOAD_FILE_EXTENSIONS_ALLOWED');
		$ogvAllowed= str_replace($allowOrig, $allowTo, $allowedExtensions);
		Config::save('UPLOAD_FILE_EXTENSIONS_ALLOWED', $ogvAllowed); 
	}

}