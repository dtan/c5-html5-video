<?php  
	Loader::block('library_file');
	defined('C5_EXECUTE') or die("Access Denied.");	
	class HtmlVideoBlockController extends BlockController {

		protected $btInterfaceWidth = 400;
		protected $btInterfaceHeight = 300;
		protected $btTable = 'btHtmlVideo';
		protected $btCacheBlockOutput = true;
		protected $btCacheBlockOutputOnPost = true;
		protected $btCacheBlockOutputForRegisteredUsers = true;

		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Adds an html5 video block.");
		}
		
		public function getBlockTypeName() {
			return t("Html5 Video");
		}		
		function getFileID() {return $this->fID;}
		function getFileOgvID() {return $this->fOgvID;}
		function getFileOgvObject() {
			return File::getByID($this->fOgvID);
		}
		function getFileObject() {
			return File::getByID($this->fID);
		}
		public function save($args) {		
			$args['fID'] = ($args['fID'] != '') ? $args['fID'] : 0;
			$args['fOgvId'] = ($args['fIDogv'] != '') ? $args['fIDogv'] : 0;
			$args['width'] = ($args['width'] === '') ? '0' : $args['width'];
			$args['height'] = ($args['height'] === '') ? '0' : $args['height'];
			parent::save($args);
		}
		public function validate($args) {
			$e = Loader::helper('validation/error');
			if ($args['fID'] < 1) {
				$e->add(t('You must select a H.264 file with a .mp4 extension.'));
			}
			if ($args['fOgvID'] < 1) {
				$e->add(t('You must select a Ogg/theora file with a .ogv extension.'));
			}
			return $e;
		}

	}

?>