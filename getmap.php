<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include "db_connect.php";

      $title = $_POST['title'];

      $sql = "select * from map_location where map_category like '%".$title."%'";



      $result = $connect->query($sql);
?>
  <script>alert('바보');</script>
<?php
      if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
          $x = $row['map_x'];
          $y = $row['map_y'];
          $title = $row['map_title'];
          $content = $row['map_content'];
          $r = array($x,$y,$title,$content);
?>
<script>alert('멍충아');</script>

<?php
        }
      }else{
        echo "<script>alert('해당하는 흡연구역이 존재하지 않습니다.');</script>";
        exit;
      }
      echo json_encode($r);
      $connect->close();
      exit;
    ?>
  </body>
</html>
