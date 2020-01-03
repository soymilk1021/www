<center>
    <br>
    <h1>會員資料</h1>
<table border="1">
    <thead>
        <tr>
            <th>使用者編號</th>
            <th>ID</th>
            <th>帳號</th>
            <th>密碼</th>
            <th>姓名</th>
            <th>權限</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once('link.php');
            $pp = $db -> prepare('select * from userid');
            $pp -> execute();
            while ($row = $pp -> fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?php echo str_pad($row['id'],5,"u000",STR_PAD_LEFT);?></td>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['rank'];?></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>
<br>
<a href="admin.html">返回</a>
</center>