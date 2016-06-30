<?php 
	//dpm($row);
	global $base_url;
	$rws =$row->field_field_presenter_files;
	$mhtml="";
 ?>

<?php foreach ($rws as $presenter_files): ?>
	<?php 
		$mpath= file_create_url($presenter_files['raw']['uri']);
		$mhtml =$mhtml.'<li class="file" ><div class="ultb3-info ib3-info-left"><img class="file-icon pptimage" alt="PPT icon" title="application/pdf"'. 
		'src="'.$base_url.'/modules/file/icons/x-office-presentation.png"></div><div class="ultb3-info ib3-info-right"><div class="ultb3-title ult-responsive">'.$presenter_files['raw']['description'].'</div><a class="pdf-button btn btn-primary" href="'.$mpath.'">Download PPT</a></div></li>';
		 
	?>
<?php endforeach; ?>
<?php $output ='<div class="pdf-categary"><h2>'.$row->node_title.'</h2></div><ul>'.$mhtml.'</ul>'; print $output?>
<?php //dpm($output) ?>