<head>
    <link rel="stylesheet" type="text/css" href="CSS/Edit_user.css">
</head>

<form action="" method="POST">
    <div class="container">
        <h1>FORM EDIT USER</h1>
        <p>Xin hãy nhập biểu mẫu bên dưới để chỉnh sửa.</p>
        <hr>
        <label for="Username"><b>Username</b></label>
        <input type="text" name="Username" value="<?php echo $dataedit['Ten']; ?>" required><br>
        <label for="Ngaysinh"><b>Ngay sinh</b></label>
        <input type="date" name="Ngaysinh" value="<?php echo $dataedit['Ngaysinh']; ?>" required><br><br>
        <label for="Diachi"><b>Dia chi</b></label>
        <input type="text" name="Diachi" value="<?php echo $dataedit['Diachi']; ?>" required>
        <label for="Email"><b>Email</b></label>
        <input type="text" name="Email" value="<?php echo $dataedit['Email']; ?>" required>


        <label for="psw"><b>Mật Khẩu</b></label>
        <input type="password" name="psw" value="<?php echo $dataedit['Matkhau']; ?>" required>
        <!-- <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
        <input type="password" name="psw-repeat" required> -->
        <label for="Gioitinh"><b>Gioi tinh</b></label>
        <select name="Gioitinh">
            <option <?php if($dataedit['Gioitinh'] == '0'){echo("selected");}?> value="0">Nam</option>
            <option <?php if($dataedit['Gioitinh'] == '1'){echo("selected");}?> value="1">Nu</option>

        </select>


        <label for="Quyen"><b>Quyen</b></label>
        <select name="Quyen">
            <option <?php if($dataedit['Id_Quyen'] == '1'){echo("selected");}?> value="1">Doc gia</option>
            <option <?php if($dataedit['Id_Quyen'] == '2'){echo("selected");}?> value="2">Tac gia</option>
            <option <?php if($dataedit['Id_Quyen'] == '3'){echo("selected");}?> value="3">QTV</option>
        </select><br><br>

        <!-- <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
        </label> -->
        <div class="clearfix">
            <button type="submit" class="edituser" name="edituser" value="edit">Edit User</button>
        </div>
    </div>
</form>