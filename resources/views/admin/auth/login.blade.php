
<!DOCTYPE HTML>
<html>
<head>
    <title>Đăng nhập </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="../admin_theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="../admin_theme/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="../admin_theme/js/jquery-2.1.1.min.js"></script>
    <!--icons-css-->
    <link href="../admin_theme/css/font-awesome.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <form method="post" action="{{route('admin.attempt-login')}}">
                @csrf
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                <input type="submit" name="Sign In" value="Login">
                <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
                <h2>or login with</h2>
                <div class="login-icons">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </form>
            <h5><a href="index.html">Go Back to Home</a></h5>
        </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->

<!--scrolling js-->
<script src="/admin_theme/js/jquery.nicescroll.js"></script>
<script src="/admin_theme/js/scripts.js"></script>
<!--//scrolling js-->
<script src="/admin_theme/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>




