<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        .container{
            width: 70%;
            margin: auto;
        }
        .header{
            background-image: linear-gradient(to right, #ff93ce, #fff, #ff93ce);
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            color: rgb(158, 158, 158);
        }
        .menu{
            background-color: #efeef0;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .menu ul{
            list-style: none;
            margin-left: -35px;
        }
        .menu ul li{
            display: inline;
            margin-right: 25px;
            padding: 10px;
        }
        .menu ul li a{
            color: #706d70;
            text-decoration: no;
        }
        .menu ul li.hover{
            background-color: #000000;
        }
        .row{
            width: 100%;
            padding-left: 10px;
            
        }
        .banner{
            /*border: solid 1px #ff93ce;*/
            height: 200px;
            width: 500;
            margin-top: 10px;
            margin-left: 1px;
        }
        .img-banner{
            width: 650px;
            height: 200px;
        }
        .container{
            padding: 5px;
        }
        .best-seller{
            color: #706d70;
            padding-left: 10px;
            margin-top: 10px;
        }
        .img-product:hover{
            transform: scale(1.1);
            transition: 0.3s;
        }
        .product-item{
            width: 30%;
            height: 200px;
            border: solid 1px rgb(255, 172, 192);
            border-radius: 10px;
        }
        .product{
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }
        .img-product{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Toko online</h1>
    </div>
    <div class="menu">
        <div class="container">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">product</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">troli</a></li>
        </ul>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <img class="img-banner" src="image/banner.png">
                </div>
            </div>
            <div class="row">
                <div class="best-seller">
                <h2>Best seller</h2>
                <div class="product">
                    <?php
                    include "koneksi.php";
                    $sql = "SELECT * FROM produk";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) 
                        
                    
                    
                    ?> 
                    
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>