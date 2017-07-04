<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" type="text/css" href="test.css"> -->
  <style type="text/css">
*{
    margin: 0px;
    padding: 0px;
}

.wrapper {
    width: 675px;
    height: auto;
    border: solid 1px #000;
}

.wrapper .left table{
    width: 100%;
    height: auto;
}




</style>
  <title></title>
</head>

<body>
  <div class="wrapper">
        <div class="left">
      <table border="1" cellspacing="0">
        <tr>
        <th class="id">id クアンガイ</th>
        <th class="ten">ten پښتو</th>
        <th class="tuoi">tuoi</th>
        <th class="diachi">diachi</th>
        </tr>
      <?php
        $conn = mysqli_connect('localhost','root','','test') or die ('Không thể kết nối tới database');
        // Change character set to utf8
        mysqli_set_charset($conn,"utf8");

        // Câu truy vấn
        $sql = 'SELECT * FROM users';
      
        // Thực hiện câu truy vấn, hàm này truyền hai tham số vào là biến kết nối và câu truy vấn
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)){
          ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['ten'] ?></td>
        <td><?php echo $row['tuoi'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        </tr>
        <?php
      }
       ?>
      </table>
      </div>
  </div>
</body>

</html>