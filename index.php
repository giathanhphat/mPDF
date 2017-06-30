<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new mPDF();
$x = 'gia thanh phat';
$html1 = '
	<link rel="stylesheet" type="text/css" href="test.css">
	<table class="table" border="1">
		<thead>
			<tr>
				<th class="ho">"<?php echo $x; ?>"</th>
				<th class="ho">dfdfdfd</th>
				<th class="ho">dfdfdfd</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
			</tr>
			<tr>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
			</tr>
			<tr>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
				<td>dfdfdfd</td>
			</tr>
		</tbody>
	</table>
	<?php echo "hahaha";?>
	';

	$mpdf->WriteHTML($html1);
	$mpdf->Output();
?>