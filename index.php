<?php
require_once __DIR__ . '/vendor/autoload.php';
//16 trang mất 54s -->
//trang A4 có chiều rộng 675px
//thẻ div sẽ bao bọc toàn bộ kí tự cho dù có height = 0 (khác với khi xuất html);
//khi vượt quá một trang nội dung hiển thị vẫn tự dộng canh lề như đã chỉnh
//tự động thêm trang mới nếu vượt quá 1 trang
//có 2 cái chạy file:
//cách 1: download mPDF60 sau đó require thư viện.link: http://www.mpdf1.com/mpdf/index.php?page=Download
//cách 2: cài đặt composer, link: https://getcomposer.org/download/
//sau đó chạy lệnh: composer require mpdf/mpdf là ok

//Add Column
// $mPDF->SetColumns(2);
// $mpdf->WriteHTML('Some text...');
// $mpdf->AddColumn();
// $mpdf->WriteHTML('Next column...');

	//Định nghĩa thuộc tính của Header và Footer
	// $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
	// $mpdf->SetFooter('Document Title');
	// $mpdf->defaultheaderfontsize=10;
	// $mpdf->defaultheaderfontstyle='B';
	// $mpdf->defaultheaderline=0;
	// $mpdf->defaultfooterfontsize=10;
	// $mpdf->defaultfooterfontstyle='BI';
	// $mpdf->defaultfooterline=0;
	// $mpdf->WriteHTML('Document text');
	
	//Đánh số trang
	// $mpdf->SetHeader('haha');
	// $mpdf->AliasNbPageGroups();
	// $mpdf->SetFooter('{nbpg}');

	//Tạo Title cho html
	// $mpdf->SetHeader('dfdfdfd');
	// // $mpdf->SetHtmlHeader('dfdfdfdfdfdf');
	// $mpdf->defaultheaderfontsize=20;

 	//Tạo Header cho trang.
	// $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
	// $mpdf->SetFooter('Document Title');
	// $mpdf->WriteHTML('Document text');
	
	//Định dạng file html -> pdf
	// $stylesheet = file_get_contents('test.php');
	// $mpdf->WriteHTML($stylesheet,1); WriteHTML(FILE, 1(read only header part in file html))
	// $mpdf->WriteHTML($stylesheet,2);	WriteHTML(FILE, 2(read only body part in file html))
	// $mpdf->Cell(0,5,'hahahah',1,0); // Cell(width, heigh, content, border(0,1), link(0:continue, 1:newline), align(L:left, C:center, R:right))

	// $mpdf->Output();


// //làm mờ hình ảnnh
// $mpdf->SetAlpha(0.1);
// $mpdf->Image('mpdf60/examples/alpha.png', 0, 0, 200, 297, 'png'); Image(file, x, y, width, height, type)


// require_once __DIR__ . '/vendor/autoload.php';
// $x = 'I love you';
// require_once('mpdf60/mpdf.php');
// $mpdf = new mPDF();
// $mpdf->defaultheaderfontsize=10;
// $mpdf->defaultheaderfontstyle='B';

//test hiển thị nội dung
// // $mpdf->SetHeader('Document Title|Center Text|{PAGENO}');
// // $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $stylesheet = file_get_contents('test.php');
// 	// // $stylesheet1 = file_get_contents('test.css');
// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($stylesheet,2);
// // $mpdf->SetFooter('{PAGENO}');
// $mpdf->AddPage();
// $mpdf->Cell(5, 10, $x, 1, 0); 
// $mpdf->AliasNbPages();
// $mpdf->SetFooter('{PAGENO}');
// $mpdf->Output();


//hiển thị trang hiện tại PageNo
// $mpdf = new mPDF('A4');
// $mpdf->AddPage();
// $mpdf->SetHeader('Học CakePHP');
// $stylesheet = file_get_contents('test.php');
// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($stylesheet,2);
// $mpdf->SetFooter('Page '.$mpdf->PageNo().'/{nb}');
// $mpdf->AliasNbPages();

//trước khi in nhập mật khẩu (ở đây cho phép copy và print)
// $mpdf = new mPDF();
// $mpdf->SetProtection(array('copy', 'print'), 'UserPassword', 'giathanhphat');
// $mpdf->WriteHTML('Hallo World');
// $mpdf->Output();

//cho phép in ko hiển thị (printonly) và chỉ hiển thị ko cho phép in (screenonly)
// $mpdf = new mPDF();
// $mpdf->SetVisibility('printonly');
// $mpdf->WriteHTML('
// This text will only be visible when the document is printed
// ');
// $mpdf->SetVisibility('screenonly');
// $mpdf->WriteHTML('
// This text will only be visible on screen, and will not be included when the document is printed
// ');
// $mpdf->Output();

//set mặc định fon, size...
// $mpdf = new mPDF();
// $mpdf->SetDefaultFont('times');
// $mpdf->SetDefaultFontSize(20);
// $mpdf->WriteHTML('
// This text will only be visible when the document is printed
// ');

// $mpdf->WriteHTML('
// This text will only be visible on screen, and will not be included when the document is printed
// ');
// $mpdf->Output();
?>

