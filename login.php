<?php
include_once('link.php');
$result = $db -> prepare("select * from userid where username=:user and password=:pwd");
$result -> bindvalue(':user',$_POST['username']);
$result -> bindvalue(':pwd',$_POST['pwd']);
$result -> execute();
$row = $result -> fetch(PDO::FETCH_ASSOC);

if ($row == false) {
    echo ('登入失敗！');
    header('Location:login.html');
    exit;
}elseif ($row == true and $row['rank'] == '') {
    echo ('會員登入成功！');
    header('Location:user.html');
    exit;
}elseif ($row == true and $row['rank'] == '1') {
    echo ('管理員登入成功！');
}
?>
<script>
    alert('管理員登入成功');
    location.href = 'admin.html';
</script>