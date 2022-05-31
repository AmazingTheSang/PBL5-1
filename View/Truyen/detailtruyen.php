<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/danh_sach_chuong.css">
    <title></title>
</head>

<body>
    <div class="truyen">
        <h2><?= $truyen->Tentruyen ?></h2>
        <p>Tác giả <?= $truyen->Tacgia ?></p>
        <p>Thể loại <?= $theloai ?></p>
        <input value="Theo dõi" name= "theodoi"/>
        <button>Đọc từ đầu</button>
        <button>Đọc mới nhất</button>
    </div>
    <div class="danhsachchuong">
        <h3>Danh sách chương</h3>
        <table border="1px">
            <thead>
                <tr>
                    <th>Chương số</th>
                    <th>Tên</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($danhsachchuong) || is_object($danhsachchuong))
                    {
                        foreach ($danhsachchuong as $value){ ?>
                <tr>
                    <td><a href="index.php?controller=chuong&action=doc_truyen&idchuong=<?= $value->Id_Chuong?>">Chapter
                            <?=$value->Chuongso ?></a></td>
                    <td><?=$value->Chuongten ?></td>
                </tr>
                <?php
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>