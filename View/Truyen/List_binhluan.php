<head>
    <link rel="stylesheet" type="text/css" href="CSS/List_user.css">
</head>
<div class="listuser">
    <h1>DANH SACH CAC USER</h1>
    <form method="post">
        <input type="search" name="search" value="0">

    </form>
    <table border="1px">

        <thead>
            <tr>
                <th>STT</th>
                <th>Id_Comment</th>
                <th>Id_User</th>
                <th>Id_Truyen</th>
                <th>Noi dung</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $stt=1;
             for($i=1;$i<=sizeof($cmts);$i++){ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cmts[$i]->Id_Comment; ?></td>
                <td><?php echo $cmts[$i]->Id_User; ?></td>
                <td><?php echo $cmts[$i]->Id_Truyen; ?></td>
                <td><?php echo $cmts[$i]->Noidung; ?></td>

                <td>
                    <!-- <a href="index.php?controller=user&action=edit&id=<?php echo $value['Id_User'];?>">Edit</a>
                    <a href="index.php?controller=user&action=delete&id=<?php echo $value['Id_User'];?>">Delete</a> -->
                </td>

            </tr>
            <?php
            $stt++;
            }
        ?>




            <!-- <?php
            print_r($data);
        ?> -->
        </tbody>
    </table>
</div>