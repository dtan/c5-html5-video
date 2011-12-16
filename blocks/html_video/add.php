<?php    
defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>
<div class="ccm-block-field-group">
<h2><?php  echo t('H.264 Video')?></h2>
<?php  echo $al->file('cm-b-mp4', 'fID', t('Choose Video'), $bf);?>
<p><?php  echo t('Choose a file with a .mp4 extension');?></p>
</div>
<div class="ccm-block-field-group">
<h2><?php  echo t('Ogg/Theora Video')?></h2>
<?php  echo $al->file('ccm-b-ogv', 'fOgvID', t('Choose Ogv Video'), $bf0);?>
<p><?php  echo t('Choose a file with a .ogv extension');?></p>
</div>


<div class="ccm-block-field-group">
<h2><?php  echo t('Maximum Dimensions')?></h2>
<table border="0" cellspacing="5" cellpadding="0">
<tr>
<td><?php  echo t('Width')?></td>
<td><?php  echo t('Height')?></td>
</tr><tr>
<td><?php  echo  $form->text('width', array('style' => 'width: 40px')); ?></td>
<td><?php  echo  $form->text('height', array('style' => 'width: 40px')); ?></td>
</tr>
</table>

</div>