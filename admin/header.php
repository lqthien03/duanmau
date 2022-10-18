<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }
    .admin{

    }
    .admin h2{
        font-size: 50px;
        text-align: center;
        line-height: 100px;
    }
    #navbar_admin{
        background-color: #e3e6f3   ;   
        width: 100%;
        height: 50px;
        text-align: center;
        
    }
    #navbar_admin li{
        list-style: none;
        padding: 15px 20px;
        display: inline-block;

    }
    #navbar_admin li a{
        text-decoration: none;
        color: black;
        font-size: 18px;
        font-weight: 600;
    }
</style>
<body>
    <div class="admin">
        <h2>ADMIN</h2>
    </div>
    <ul id="navbar_admin">
        <li><a href="./index.php?act=ql_sanpham">Quản lí sản phẩm</a></li>
        <li><a href="./index.php?act=ql_danhmuc">Quản lí danh mục</a></li>
        <li><a href="./index.php?act=ql_user">Quản lí tài khoản</a></li>
        <li><a href="./index.php?act=ql_binhluan">Quản lí bình luận</a></li>
        <li><a href="../index.php?act=login">Đăng xuất</a></li>
    </ul>
</body>
</html>