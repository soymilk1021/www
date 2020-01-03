<?php

include_once('link.php');
$pp = $db -> prepare("insert into userid(username,password,name,rank) values(:username,:pwd,:name,:rank)");
$pp -> bindvalue(':username',$_POST['username']);
$pp -> bindvalue(':pwd',$_POST['pwd']);
$pp -> bindvalue(':name',$_POST['name']);
$pp -> bindvalue(':rank',$_POST['rank']);
$pp -> execute();

?>
<script>
    alert('新增成功');
    location.href = 'admin.html';
</script>