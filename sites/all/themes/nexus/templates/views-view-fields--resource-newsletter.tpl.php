<?php 
	//dpm($row);
	global $base_url;
	$rws =$row->field_field_newsletters;
	$mhtml="";
 ?>

<?php foreach ($rws as $mnewsletter): ?>
	<?php 
		$mpath= file_create_url($mnewsletter['raw']['uri']);
		$mhtml =$mhtml.'<li class="file" ><div class="ultb3-info ib3-info-left"><img class="file-icon pdfimage" alt="PDF icon" title="application/pdf"'. 
		'src="'.$base_url.'/modules/file/icons/application-pdf.png"></div><div class="ultb3-info ib3-info-right"><div class="ultb3-title ult-responsive">'.$mnewsletter['raw']['description'].'</div><a class="pdf-button btn btn-primary" href="'.$mpath.'">Download PDF</a></div></li>';
		 
	?>
<?php endforeach; ?>
<?php $output ='<div class="pdf-categary"><h2>'.$row->node_title.'</h2></div><ul>'.$mhtml.'</ul>'; print $output?>
<?php //dpm($output) ?>