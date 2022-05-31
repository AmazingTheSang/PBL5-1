<!DOCTYPE html>
<html>

<head>
    <title>Web</title>
    <meta charset="UTF-8">
    <link rel="icon" href="685681.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="PBL5/Trangchu.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="CSS/Trangchu.css">

<body>
    <style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    html {
        background-color: #06121e;
        font-size: 16px;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        min-width: 300px;
        overflow-x: hidden;
        overflow-y: scroll;
        text-rendering: optimizeLegibility;
        text-size-adjust: 100%;
    }


    #nav {
        background-color: #06121e;
    }

    #nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: left;
        box-shadow: 0 0 10px gray;
        margin: 0;
    }



    #nav ul .navbar-end {
        justify-content: flex-end;
        margin-left: auto;
        align-items: stretch;
        display: flex;
        justify-content: right;
        padding: 10px;
    }

    #nav ul li {
        padding: 7px;
    }

    #nav ul li a {
        text-decoration: none;
        color: black;
    }

    #nav ul li a:hover {
        color: blue;
    }

    #nav1 .bang {
        padding: 50px;
    }

    #nav1 .bang .form-control {
        border: 3px solid transparent;
    }

    #nav2 {
        display: flex;
        justify-content: center;
    }


    .truyen {
        width: 16%;
        float: left;
        border: black thin solid;
        margin-left: 3%;
        margin-top: 20px;
        border-radius: 5px;
        height: 450px;
        text-align: center;

    }

    .truyen .img img {
        width: 100%;
    }
    </style>
    <section id="nav">
        <div>

            <ul>
                <li><a class="navbar-item" href="/">
                        <img width="50" height="50"
                            src="https://drive.google.com/uc?export=view&id=1z1geOoZYriQ-wjqYLDLPPeNmUJCgN9Ku"
                            alt="Doctruyen logo" class="layout_logo__319hZ">
                </li>
                <li><a href="#search">Tìm kiếm</a></li>
                <li><a href="#truyenhot">Truyện hot</a></li>
                <li><a href="#truyenle">Truyện lẻ</a></li>
                <li><a href="#truyenbo">Truyện bộ</a></li>
                <li><a href="#truyenmoi">Truyện mới</a></li>
                <div class="navbar-end">
                    <a class="dki" href="index.php?controller=user&action=add">Đăng kí</a>
                    <a>/</a>
                    <a class="dnhap" href="index.php?controller=user&action=login">Đăng
                        nhập</a>
                </div>
            </ul>

        </div>
    </section>
    <section id="nav1">
        <center>
            <div class="timkiem">
                <table class="bang">
                    <tr>
                        <th>Thể loại:</th>
                        <th>Năm:</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="orderby" class="form-control" id="vnkings_cat">
                                <option class="theloai">--Tất cả--</option>
                                <?php foreach($danhsachtruyen as $item):?>
                                <option class="name"><?=$item['TenLoai']?></option>
                                <?php endforeach;?>
                            </select>
                        </td>

                        <td>
                            <select name="orderby" class="form-control" id="vnkings_cat">
                                <option class="theloai">--Tất cả--</option>
                                <option class="theloai" value="2018">Năm 2018 trở về trước</option>
                                <option class="theloai" value="2019">Năm 2019</option>
                                <option class="theloai" value="2020">Năm 2020</option>
                                <option class="theloai" value="2021">Năm 2021</option>
                                <option class="theloai" value="2022">Năm 2022</option>
                            </select>
                        </td>

                    </tr>
                </table>
            </div>
            <center>
    </section>
    <section class="truyens">
        <?php foreach($danhsachtruyen as $item):
                $ten=$item['Tentruyen'];?>
        <section class="truyen">
            <section class="img"><img src="<?=$item['Hinhdaidien']?>"></section>
            <section class="name"><a
                    href="index.php?controller=truyen&action=detail&idtruyen=<?php echo $item['Id_Truyen'];?>"><?=$item['Tentruyen']?>
                </a>
            </section>
            <a href="">
                <? echo $ten?>
            </a>
        </section>
        <?php endforeach;?>
    </section>
    <section id="nav3">
    </section>
</body>
</head>

</html>