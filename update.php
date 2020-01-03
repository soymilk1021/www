<?php
include_once('link.php');
$update = $db -> prepare("update userid set username=:username,password=:pwd,name=:name,rank=:rk where id = :id");
$update -> bindvalue(':username',$_POST['username']);
$update -> bindvalue(':pwd',$_POST['pwd']);
$update -> bindvalue(':name',$_POST['name']);
$update -> bindvalue(':rk',$_POST['rank']);
$update -> bindvalue(':id',$_POST['id']);
$update -> execute();
?>
<script>
    alert('修改成功！');
    location.href = 'admin.html';
</script>