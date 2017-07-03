
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" type="text/css" href="test.css"> -->
  <style type="text/css">
    * {
    margin: 0px;
    padding: 0px;
}

.wrapper {
    width: 275px;
    height: 1000px;
    border: solid 1px #000;
    margin: auto;
}

.title {
    width: 100%;
    height: 100px;
    border: solid 1px #000;
    color: #ff0000;
    background-color: #a1a1a1;
}

.header {
    width: 100%;
    height: 200px;
    border: solid 1px #000;
}

.content {
    width: 100%;
    height: 600px;
    border: solid 1px #000;
}

.content .left {
    width: 300px;
    height: 100%;
    border: solid 1px #000;
    float: left;
}

.content .right {
    width: 365px;
    height: 100%;
    border: solid 1px #000;
    float: right;
}

.clear {
    clear: both;
}

.footer {
    width: 100%;
    height: 100px;
    border: solid 1px #000;
}

#phat{
  color: #ff0000;
}
  </style>
  <title></title>
</head>

<body>
  <div class="wrapper">
      <table border="1" cellspacing="0" align="center">
        <tr>
        <td>id</td>
        <td>ten</td>
        <td>tuoi</td>
        <td>diachi</td>
        </tr>
      <?php
        $conn = mysqli_connect('localhost','root','','test') or die ('Không thể kết nối tới database');
        // Câu truy vấn
        $sql = 'SELECT * FROM users';
      
        // Thực hiện câu truy vấn, hàm này truyền hai tham số vào là biến kết nối và câu truy vấn
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
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
</body>

</html>