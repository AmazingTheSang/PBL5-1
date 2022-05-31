<head>
    <link rel="stylesheet" type="text/css" href="CSS/List_user.css">
</head>
<div class="listuser">
    <h1>DANH SACH CAC USER</h1>
    <table border="1px">

        <thead>
            <tr>
                <th>STT</th>
                <th>Ma user</th>
                <th>Ten user</th>
                <th>Ngay sinh</th>
                <th>Dia chi</th>
                <th>Email</th>
                <th>Mat khau</th>
                <th>Gioi tinh</th>
                <th>Ma quyen</th>
                <th>Hanh dong</th>
            </tr>
        </thead>
        <tbody>
            <?php
           // $stt=1;
            for($i=1;$i<=sizeof($users);$i++){ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $users[$i]->Id_User; ?></td>
                <td><?php echo $users[$i]->Ten; ?></td>
                <td><?php echo $users[$i]->Ngaysinh; ?></td>
                <td><?php echo $users[$i]->Diachi; ?></td>
                <td><?php echo $users[$i]->Email; ?></td>
                <td><?php echo $users[$i]->Matkhau; ?></td>
                <td><?php echo $users[$i]->Gioitinh; ?></td>
                <td><?php echo $users[$i]->Id_Quyen; ?></td>
                <td>
                    <a href="index.php?controller=user&action=edit&id=<?php echo $users[$i]->Id_User;?>">Edit</a>
                    <a href="index.php?controller=user&action=delete&id=<?php echo $users[$i]->Id_User;?>">Delete</a>
                </td>

            </tr>
            <?php
         //   $stt++;
            }
        ?>




            <!-- <?php
            print_r($data);
        ?> -->
        </tbody>
    </table>
</div>