<head>
    <link rel="stylesheet" type="text/css" href="CSS/Edit_user.css">
</head>
<?php


?>

<form action="" method="POST">
    <div class="container">
        <h1>FORM EDIT USER</h1>
        <p>Xin hãy nhập biểu mẫu bên dưới để chỉnh sửa.</p>
        <hr>
        <label for="Id_Chuong"><b>Id Chuong</b></label>
        <input type="text" name="Id_Chuonng" value="<?php echo $dataeditchuong['Id_Chuong']; ?>" required readonly><br>
        <label for="Id_Truyen"><b>Id Truyen</b></label>
        <input type="text" name="Id_Truyen" value="<?php echo $dataeditchuong['Id_Truyen']; ?>" required><br><br>
        <label for="Chuongso"><b>Chuong so</b></label>
        <input type="text" name="Chuongso" value="<?php echo $dataeditchuong['Chuongso']; ?>" required>
        <label for="Chuongten"><b>Chuong ten</b></label>
        <input type="text" name="Chuongten" value="<?php echo $dataeditchuong['Chuongten']; ?>" required>


        <!-- <label for="Noidung"><b>Noi dung</b></label>
        <input type="text" name="Noidung" value="<?php echo $dataeditchuong['Noidung']; ?>" required> -->
        <textarea name="Noidung" rows="5" cols="100" class="auto_height" oninput="auto_height(this)" require>
            <?php echo $dataeditchuong['Noidung']; ?>
        </textarea>




        <br><br>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
        </label> -->
        <div class="clearfix">
            <button type="submit" class="edituser" name="editchuong" value="edit">Edit User</button>
        </div>
    </div>
</form>