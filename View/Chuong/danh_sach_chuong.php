<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/danh_sach_chuong.css">
    <title>Danh sach chuong</title>
</head>

<body>
    <div class="danhsach">
        <h3>Danh sach chuong</h3>
        <table border="1px">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten truyen</th>
                    <th>Ten chuong</th>
                    <th>Chuong so</th>
                    <th>Noi dung</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                if (is_array($datachuong) || is_object($datachuong))
                    {
                        foreach ($datachuong as $value){ ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $value['Id_Truyen']; ?></td>
                    <td><?php echo $value['Chuongten']; ?></td>
                    <td><?php echo $value['Chuongso']; ?></td>
                    <td><?php echo $value['Noidung']; ?></td>
                    <td>
                        <a
                            href="index.php?controller=admin&action=edit_chuong&idchuong=<?php echo $value['Id_Chuong'];?>">Edit</a>
                        <a
                            href="index.php?controller=admin&action=delete_chuong&idchuong=<?php echo $value['Id_Chuong'];?>">Delete</a>
                    </td>

                </tr>
                <?php
                            $stt++;
                        }
                    }
                    else // If $data was not an array, then this block is executed. 
                    {
                    echo "Unfortunately, an error occured.";
                    }
            ?>


                <!-- <?php
                echo "<pre>";
                print_r($datachuong);
                ?> -->
            </tbody>
        </table>
    </div>
</body>

</html>