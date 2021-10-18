<?php
session_start();
require('dbconnect.php');

$posts = $db->prepare('INSERT rowdatas SET user_id=?,data=?,created_at=NOW(),updated_at=NOW()');
  $posts ->execute(array($_POST['id'],$_POST['Raw']));
  $post =$posts->fetch();
  $mysqli->close();

?>