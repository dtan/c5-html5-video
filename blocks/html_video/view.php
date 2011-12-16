<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$p = Page::getCurrentPage();
if ($p->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item" style="<?php  if ($width>1){?>width: <?php  echo $width;?>px;<?php  } if($height>1){?> height:<?php  echo $height;?>px;<?php  }?>">
		<div style="padding:8px 0px; padding-top: <?php    echo round($height/2)-10; ?>px;"><?php  echo t('Video disabled in edit mode.')?></div>
	</div>
<?php   }else{
			$f = $controller->getFileObject();
			$relPath = $f->getRelativePath();
			$fOgv = $controller->getFileOgvObject();
			$relPathOgv = $fOgv->getRelativePath();			
?>
<video <?php  if ($width>1){?>width="<?php  echo $width;?>px;"<?php  } if($height>1){?> height="<?php  echo $height;?>px;"<?php  }?> controls="">
  <source src="<?php  echo $relPath;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
  <source src="<?php  echo $relPathOgv;?>" type='video/ogg; codecs="theora, vorbis"'>
  <?php  echo t('Your Browser doesn\'t support the html5 video element.');?>
</video>
<?php  } ?>