<?php
require_once __DIR__ . '/vendor/autoload.php';
//16 trang mất 54s -->
//36 trang mất 1p53s
//trang A4 có chiều rộng 675px, chiều cao 1000px
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
	$mpdf = new mPDF();
	//set default cho header and footer
	$mpdf->defaultheaderfontsize = 10;
	$mpdf->defaultheaderfontstyle = 'B';
	$mpdf->defaultheaderline = 0;
	$mpdf->defaultfooterfontsize = 10;
	$mpdf->defaultfooterfontstyle = 'BI';
	$mpdf->defaultfooterline = 0;
	$mpdf->defaultPageNumStyle = 'A';//giống hiển thị như A, B, C hoặc 1, 2, 3 hoặc I, II, III...
	//set default cho content
	$mpdf->defaultAlign = 'L';
	$mpdf->defaultCSS;
	$mpdf->default_font;
	$mpdf->default_lang;
	$mpdf->defaultPagebreakType = 'BLANK';
	$mpdf->defaultSubsFont;
	$mpdf->defaultTableAlign;
	$mpdf->default_available_fonts;
	$mpdf->default_font_size;
	
	// Display at 90% zoom - note the 90 is a number not a string
	$mpdf->SetDisplayMode(10);
	// Display two pages side by side (book style)
	$mpdf->SetDisplayMode('fullpage','two');
	//chèn hình mờ trên nền page
	$mpdf->showWatermarkText = true;
	$mpdf->SetWatermarkText('GIA THANH PHAT', 0.5);
	//thiết lập cho phép xoay trang
	$mpdf->displayDefaultOrientation = true;
	//cách 1 xoay theo nhập góc là 90, xoay trái (đi kèm với defaultOrientation)
	// $mpdf->OrientationChanges[2] = '90';// ví dụ page vị trí 2 sẽ được xoay
	//cách 2 cài theo default đã định sẵn
	// 'P' là  ortrait page theo dọc, 'L' là landscape page xoay phải ngang 90
	$mpdf->DefOrientation = 'P';//xoay trang hiện tại
	//thiết lập hiển thị visible, hidden, screenonly, printonly
	$mpdf->SetVisibility('visible');
	//trước khi in or save phải nhập password
	// $mpdf->SetProtection(array('copy', 'print'), 'username', 'password');
	//trang đầu tạo mặc định
	//header and footer được set trước khi thêm vào trang
	$mpdf->SetHeader('|giã thành phát|'); //địng dạng theo left|center|right
	$mpdf->SetFooter('|Page {PAGENO}/{nb}|');
	// page first được thêm ở đây
	$html = file_get_contents('test.php');
	$mpdf->WriteHTML($html, 1);
	$mpdf->WriteHTML($html, 2);
	// đây là header của page 2, vì header set trước nên đặt trên AddPage()
	$mpdf->SetHeader('Hoc report PDF1');
	// đây là page trang 2
	$mpdf->AddPage();
	$mpdf->WriteHTML($html, 1);
	$mpdf->WriteHTML($html, 2);
	//chèn một hộp thoại vào page
	$mpdf->Shaded_box('phat','','B', 12);
	$mpdf->AliasNbPages();
	$mpdf->Output();
?>

