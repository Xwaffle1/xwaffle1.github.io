<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TarkovTrade</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/listener.js"></script>
    <!-- Custom fonts for this template -->
    <link href="assets/startbootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/startbootstrap/css/clean-blog.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">Tarkov Trader</a>
        <!--<a href="https://twitter.com/TarkovTrader"><i class="fa fa-twitter"></i></a>-->
        <!--<a href="https://facebook.com/TarkovTrader"><i class="fa fa-facebook"></i></a>-->
        <!--<a href="https://discord.gg/N1GG3R"><i class="fa fa-discord"></i></a>-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/startbootstrap/img/homepage.png')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <!--<h1>Start Trading</h1>-->
                    <!--<span class="subheading">Reputation is key to successful trades!</span>-->
                </div>
            </div>
        </div>
    </div>
</header>




<!-- Main Content -->
<div class="container">
    <div class="form-check-inline">
        <form method="get" class="custom-form">
            <div class="form-group">
                <input class="form-control" type="text" name="itemName" required="" placeholder="Item Name">
            </div>
            <button class="btn btn-default btn-block submit-button" type="submit">Search</button>
        </form>
    </div>

    <form action="newOffer.php">
        <button class="btn-success" type="submit">+ Add Trade Offer</button>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!--<div class="row">-->
    <!--<div class="col-lg-8 col-md-10 mx-auto">-->

    <?php
    include('recent-offers.php');
    ?>
    <!--</div>-->
    <!--</div>-->
</div>


<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://www.twitter.com/TrakovTrader">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item"><a href="https://discord.org/N1GG3R">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-discord fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Tarkov Trader 2017</p>
            </div>
        </div>
    </div>
</footer>
<span class="battlestate">Escape From Tarkov content and materials are trademarks and copyrights of Battlestate Games or its licensors. All rights reserved.</span>

<!--<div class="row login-form">-->
<!--<div class="col-md-4 col-md-offset-4">-->
<!--<h2 class="text-center form-heading">Search for Item</h2>-->
<!--<form method="get" class="custom-form">-->
<!--<div class="form-group">-->
<!--<input class="form-control" type="text" name="itemName" required="" placeholder="Item Name">-->
<!--</div>-->
<!--<div class="form-group"></div>-->
<!--<div class="form-group">-->
<!--<div class="dropdown">-->
<!--<button class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown <span class="caret"></span></button>-->
<!--<ul class="dropdown-menu" role="menu">-->
<!--<li role="presentation"><a href="#">First Item</a></li>-->
<!--<li role="presentation"><a href="#">Second Item</a></li>-->
<!--<li role="presentation"><a href="#">Third Item</a></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--<button class="btn btn-default btn-block submit-button" type="submit">Search </button>-->
<!--</form>-->
<!--</div>-->
<!--</div>-->
<!--<script src="assets/js/jquery.min.js"></script>-->
<!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>-->


<!-- Bootstrap core JavaScript -->
<script src="assets/startbootstrap/vendor/jquery/jquery.min.js"></script>
<script src="assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="assets/startbootstrap/js/clean-blog.min.js"></script>

</body>

</html>