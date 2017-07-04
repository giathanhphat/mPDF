<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new mPDF();
$x = 'gia thanh phat';
$html1 = '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="test.css">
  <title></title>
</head>

<body>
  <div class="wrapper">
    <div class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quod inventore expedita, autem laborum architecto nulla
      illum ipsa, quo totam repellat, aut facilis itaque laboriosam hic placeat? Assumenda ab eligendi, sequi neque ad repellat
      est, vero. Modi atque, sed facere repudiandae esse porro sit natus ad excepturi cum repellat accusantium amet illum
      fugiat debitis at labore! Quibusdam quae similique, saepe nemo vel, autem eos reprehenderit dolore ea non, ad beatae
      debitis ducimus qui perferendis doloremque distinctio aliquam quidem placeat porro assumenda consequatur? Ratione natus
      tempore nemo in quis, sed illo placeat aliquam nesciunt similique quaerat minus, excepturi, cumque fuga ut.</div>
    <div class="header">
    </div>
    <div class="content">
      <div class="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque possimus tempora vel veniam fugit repellat fuga exercitationem
        laboriosam, similique numquam iste esse aperiam quisquam totam quae animi mollitia accusamus accusantium porro ex
        minus. Corrupti quae, assumenda, ullam, voluptates distinctio soluta voluptatum sed enim esse omnis saepe explicabo
        aperiam neque sunt consectetur, consequuntur doloribus ut recusandae! Saepe earum et voluptate minima beatae sint
        rerum, tempore, itaque enim adipisci expedita dignissimos natus commodi nam error cum vel obcaecati impedit voluptatibus
        perspiciatis! Fuga optio tenetur voluptatibus nobis unde perspiciatis dolorem. Nostrum, quae esse fugit magni ea,
        nam quod aliquid vel quidem ab, numquam accusamus quibusdam odio. Voluptates velit dolores ratione natus iusto soluta
        quibusdam laborum ipsa tenetur. Quod dolores impedit rem dicta dolorem mollitia reiciendis harum, veritatis ad sequi
        magni, quasi debitis quia cupiditate quo id? Laborum, atque! Id, amet voluptas ad reprehenderit aliquid praesentium
        molestiae dolorum quaerat ea molestias odio, fugiat eius quis itaque magni facere atque eos sunt consequuntur nostrum.
        Voluptatem minus laboriosam, aperiam aut! Quas autem quaerat tempore adipisci natus cumque accusamus distinctio doloremque
        nobis soluta earum obcaecati maiores officiis, suscipit culpa tenetur. Laboriosam vitae voluptatem sunt, odio illum
        accusamus, labore placeat animi fugiat ipsam. Sapiente quo libero blanditiis et, ducimus placeat magni facere error
        deserunt magnam iste aliquid laboriosam, laudantium, architecto saepe a officiis vero voluptatem iusto voluptate
        unde repudiandae quod accusamus! Eius dolore sapiente nobis quidem, vel labore unde autem nemo saepe nam, fuga officiis
        ipsam numquam voluptas enim, cum officia a iure, maiores. Minima rerum odio quos, vero fugiat deserunt dolor hic
        commodi similique harum excepturi tempore cum dolorem, consectetur enim reprehenderit nam libero consequatur atque
        numquam molestias impedit ducimus et a perspiciatis! Dignissimos, incidunt accusantium eaque voluptates deserunt,
        nemo quae? Enim debitis voluptatem, rerum possimus at ratione. Esse quia mollitia, veniam laboriosam maxime, praesentium
        quos adipisci!</div>
      <div class="right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque consequatur inventore nobis, iusto atque explicabo,
        aliquam necessitatibus officiis nam sit iste ut sed eligendi modi aspernatur, saepe illo odit assumenda dolores dolore
        commodi dolor labore. Nulla suscipit alias minus, voluptatum recusandae. Debitis adipisci quae asperiores, officiis
        incidunt architecto sunt fugit quibusdam nam sapiente, delectus velit. Officia velit ipsam, incidunt, nisi nam distinctio
        delectus voluptates a doloribus nihil. Harum ducimus nihil, ad maxime quo fugit voluptate quaerat earum voluptatem
        itaque et veritatis, voluptas quas quisquam culpa suscipit fugiat iusto voluptatum autem ipsam. Nostrum nobis odio,
        qui molestias quod temporibus maiores officiis!</div>
    </div>
    <div class="clear"></div>
    <div class="footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nemo provident, ratione id, eos nisi vero voluptatum
      praesentium minima delectus veniam a quas suscipit perspiciatis numquam aliquam, dolorem ipsam, pariatur laboriosam
      reiciendis. Veritatis eius totam dolore modi ab amet tempora architecto eum debitis eaque inventore laudantium repellat
      facere autem, reprehenderit accusantium, incidunt quo sint dolorem voluptatibus, nobis minus impedit ad a, nostrum.
      Illum incidunt deserunt velit consectetur labore minima nihil molestiae fugiat soluta nostrum voluptas ad a, neque
      quasi culpa saepe sunt, ea obcaecati minus ipsam repellat delectus. Voluptates fuga alias officia vitae incidunt deleniti,
      pariatur esse officiis dicta porro.</div>
  </div>
</body>

</html>
	';
  $mpdf->defaultheaderfontsize = 15;
	$mpdf->defaultheaderfontstyle = 'B';
	$mpdf->defaultheaderline = 0;
	$mpdf->defaultfooterfontsize = 10;
	$mpdf->defaultfooterfontstyle = 'BI';
	$mpdf->defaultfooterline = 0;
	$mpdf->defaultPageNumStyle = '1';//giống hiển thị như A, B, C hoặc 1, 2, 3 hoặc I, II, III...
  $mpdf->showWatermarkText = true;
	$mpdf->SetWatermarkText('GIA THANH PHAT', 0.5);
 	$mpdf->SetHeader('||GIÃ THÀNH PHÁT'); //địng dạng theo left|center|right
	$mpdf->SetFooter('|Page {PAGENO}/{nb}|');
  
  $mpdf->autoScriptToLang = true;
  $mpdf->autoLangToFont = true;

  //KHÔNG ĐƯỢC
  // $mpdf->allow_charset_conversion=true;
  // $mpdf->charset_in='UTF-8';

	ob_start();
	include('test.php');
	$content = ob_get_clean();

  // $content = mb_convert_encoding($content, 'UTF-8', 'UTF-8');//KO ĐƯỢC
  // $content = utf8_encode($content);//CHẠY ĐƯỢC
	$mpdf->WriteHTML($content);
  $mpdf->AliasNbPages();
  $mpdf->Output();
	// $mpdf->Output('phatkita.pdf','F');
?>