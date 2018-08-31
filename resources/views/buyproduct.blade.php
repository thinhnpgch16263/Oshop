<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        /*header + navbar*/
        html, body{
            margin: 0;
            padding: 0;
            width: 100%;
        }
        header{
            width: 100%;
            height: 600px;
            background: url('https://images.pexels.com/photos/1266445/pexels-photo-1266445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') repeat 40% 40%;
            background-size: cover;
        }
        .logo{
            z-index: 10;
            position: fixed;
            float: left;
            color: #fff;
            font-family: cursive;
            font-weight: bold;
            font-size: 35px;
        }
        .menu ul li a{
            font-size: 25px;
        }
        nav{
            z-index: 10;
            position: fixed;
            width: 100%;


        }
        nav ul{
            list-style: none;
            background: rgba(0, 0, 0, 0);
            overflow: hidden;
            color: #fff;
            padding: 0;
            text-align: center;
            margin: 0;
            transition: 1s;
        }

        nav.black ul{
            background: #000;
        }
        nav ul li{
            display: inline-block;
            padding: 25px;
        }
        nav ul li a{
            text-decoration: none;
            color: #fff;
            font-size: 20px;
        }
        nav a:hover{
            color: #adb5bd;
            text-decoration: none;
        }
        .menu-icon{
            width: 100%;
            background: #000;
            text-align: right;
            box-sizing: border-box;
            padding: 15px 24px;
            cursor: pointer;
            color: #fff;
            display: none;
        }

        @media(max-width: 580px){
            .logo{
                position: fixed;
                top: 0;
                margin-top: 16px;
            }
            nav ul{
                max-height: 0px;
                background: black;
            }
            nav.black ul{
                background: #000;
            }
            .showing{
                max-height: 20em;
            }
            nav ul li{
                box-sizing: border-box;
                width: 100%;
                padding: 24px 0;
                text-align: center;
            }
            .menu-icon{
                display: block;
            }
        }


    </style>

    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        #footer {
            background: #545b62 !important;
        }
        #footer h5{
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color:#ffffff;
        }
        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        #footer ul.social li{
            padding: 3px 0;
        }
        #footer ul.social li a i {
            margin-right: 5px;
            font-size:25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.social li:hover a i {
            font-size:30px;
            margin-top:-10px;
        }
        #footer ul.social li a,
        #footer ul.quick-links li a{
            color:#ffffff;
        }
        #footer ul.social li a:hover{
            color:#eeeeee;
        }
        #footer ul.quick-links li{
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.quick-links li:hover{
            padding: 3px 0;
            margin-left:5px;
            font-weight:700;
        }
        #footer ul.quick-links li a i{
            margin-right: 5px;
        }
        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px){
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }}
    </style>
</head>

<header>
    <div class="wrapper">
        <nav>
            <div class="menu-icon">
                <span class="glyphicon glyphicon-align-justify"></span>
            </div>
            <div class="logo">
                <p style="margin-top: 20px;
                            margin-left: 20px;
                            color: #fff;
                            font-family: cursive;
                            font-weight: bold;
                            font-size: 30px;">OSHOP</p>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ADD PRODUCT</a></li>
                    <li><a href="#">CATEGORY MANAGE</a></li>
                    <li><a href="#">ORDER MANAGE</a></li>
                    <li><a href="#">LOGOUT</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header><!-- /header -->

<body>

<div class="container-fluid" style="width: 100%; padding-top: 2%">
    <div class="row">
        <div style="width: 20%">
            <p style="font-size: 30px; background-color: #adb5bd">Category</p>
            @foreach($cate as $item)
                <a href="{{route('getbuycatebuy', $item->cateid)}}"style="font-size: 15px;
                 ;margin-left: 2%; text-decoration: none; color: #545b62;">
                    {{$item->catename}}
                </a>
                <hr>

            @endforeach
        </div>
        <div style="width: 78%;">
            <div style="width: 100%">
                <div class="container">
                    <div class="row">
                        @foreach($product as $pro)
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    @if($daylacate == 1 )
                                        <img src="../uploads/{{$pro->img}}" max-width="250" ma-height="250">
                                    @else
                                        <img src="uploads/{{$pro->img}}" max-width="250" ma-height="250">
                                    @endif
                                    <div class="caption">
                                        <center>
                                            <h3>{{$pro->proname}}</h3>
                                            <p style="font-size: 15px">{{$pro->price}} $</p>
                                        </center>
                                        <a href="#" class="btn btn-success" style="width: 100%;
                                     height:30px; font-size: 15px ">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    //menu toggle-button
    $(document).ready(function() {
        $(".menu-icon").on("click",function() {
            $("nav ul").toggleClass("showing");
        })
    })
    //scrolling effect
    $(window).on("scroll",function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        }else{
            $('nav').removeClass('black');
        }
    })
</script>

</body>

<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left" style="margin-left:15%">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a ><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>Videos</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>Videos</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a ><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>About</a></li>
                    <li><a><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a ><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                    <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a ><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a ><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a ><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
            </div>
            </hr>
        </div>
    </div>
</section>
</html>