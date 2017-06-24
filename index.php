<?php 
	//16 trang mất 54s
	require('mpdf60/mpdf.php');

	$mpdf = new mPDF('A4');
	// $mpdf->SetHeader('haha');
	// $mpdf->AliasNbPageGroups();
	// $mpdf->SetFooter('{nbpg}');

	// $mpdf->SetHeader('dfdfdfd');
	// // $mpdf->SetHtmlHeader('dfdfdfdfdfdf');
	// $mpdf->defaultheaderfontsize=20;


	// $mpdf->defaultheaderfontstyle='B';
	// $mpdf->SetFooter('{nb}');
	// // $mpdf->SetHtmlFooter('1/2');
	// $mpdf->AliasNbPages();
	// $mpdf->
	// $mPDF->SetColumns(2);


// $mpdf->SetColumns(2);
// $mpdf->WriteHTML('Some text...');
// $mpdf->AddColumn();
// $mpdf->WriteHTML('Next column...');
// 
	// $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
	// $mpdf->SetFooter('Document Title');
	// $mpdf->WriteHTML('Document text');

	$stylesheet = file_get_contents('test.php');
	// // $stylesheet1 = file_get_contents('test.css');
	$mpdf->WriteHTML($stylesheet,1);
	$mpdf->WriteHTML($stylesheet,2);
	$mpdf->Cell(0,5,'hahahah',1,0);

	$mpdf->Output();

?>
