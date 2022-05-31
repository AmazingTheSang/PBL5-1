<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/them_chuong.css">
    <title>Thêm chương</title>
</head>

<body>
    <div class="content">
        <div class="them_chuong">
            <a href="index.php?controller=admin&action=danh_sach_chuong" class="list">Danh sach</a>
            <h3>Them noi dung chuong</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Ten truyen/ID truyen</td>
                        <td><input type="text" name="Id_Truyen" placeholder="Ten truyen"></td>
                    </tr>
                    <tr>
                        <td>Ten chuong:</td>
                        <td><input type="text" name="Chuongten" placeholder="Ten chuong"></td>
                    </tr>
                    <tr>
                        <td>So chuong:</td>
                        <td><input type="text" name="Chuongso" placeholder="So chuong"></td>
                    </tr>
                    <tr>
                        <td>Noi dung:</td>
                        <td><input type="text" name="Noidung" placeholder="noi dung"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="them_chuong" value="Them moi"></td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($thanhcong) && in_array('add_success',$thanhcong)){
                    echo "<p style='color:green;text-align:center'> Them thanh cong</p>";
                }
            ?>
        </div>
    </div>
</body>

</html>