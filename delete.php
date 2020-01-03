<?php
include_once('link.php');
$result = $db -> prepare('delete from userid where id=:id');
$result -> bindvalue(':id',$_POST['id']);
if ($_POST['id'] == '1') {
    echo ('無法刪除');
    exit;
}else {
    $result -> execute();
}
?>
<script>
    alert('刪除成功！');
    location.href = 'admin.html';
</script>