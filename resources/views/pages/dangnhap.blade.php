<!DOCTYPE html>
<html>
<head>
<title>TLU CONFESSION</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<h1 class="w3ls">LOGIN</h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1" style="padding:130px 0 15px"  >
            
        </style>TLU CONFESSION</h2>
        <p class="agileits2">Nơi bạn đóng góp ý kiến, chia sẻ suy nghĩ của bạn về trường</p>
    </div>
    <div class="content-agile2">
         @if(count($errors)>0) 
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div> 
                        @endif
                        @if(session('thongbao'))
                           {{session('thongbao')}}
               
                        @endif
        <form role="form" action="dangnhap" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-control w3layouts">
                <input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a valid email" required="">
            </div>

            <div class="form-control agileinfo">
                <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>

            <input type="submit" class="register" value="Login">
        </form>
        
        <p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
        <ul class="social-agileinfo wthree2">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<p class="copyright w3l">© 2020 Official . All Rights Reserved | Design by Hoàng Sơn </p>
</body>
</html>
