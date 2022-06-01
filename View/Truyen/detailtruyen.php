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
        <form method="POST" action="">
        <input value="Theo dõi" name= "theodoi" type="submit"/>
        <a href="index.php?controller=chuong&action=doc_truyen&idchuong=1"><button>Đọc từ đầu</button></a>
        <a href="index.php?controller=chuong&action=doc_truyen&idchuong=<?= sizeof($danhsachchuong)?>"><button>Đọc mới nhất</button></a>
        </form>
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