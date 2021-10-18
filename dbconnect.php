
<?php
error_reporting(E_COMPILE_ERROR | E_RECOVERABLE_ERROR | E_ERROR | E_CORE_ERROR);
try {
  $db = new PDO('mysql:dbname=mysql152.phy.lolipop.lan;host=LAA1356991-clicker;charset=utf8','LAA1356991','media7834');
} catch(PDOException $e){
  print('DB接続エラー:'.$e->getMessage());
}

?>
