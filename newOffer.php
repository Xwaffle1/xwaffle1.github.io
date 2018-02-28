<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TarkovTrade</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <script src="assets/js/listener.js"></script>

    <!-- Custom fonts for this template -->
    <link href="assets/startbootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/startbootstrap/css/clean-blog.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.php">Tarkov Trader</a>
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
                    <a class="nav-link" href="index.php">Home</a>
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


<div class="container">

    <form>
        <input id="searchItem" type="text" placeholder="What do you have?">
        <button class="btn-success" type="button" onclick="addItem()">+ Add Item</button>
        <select id="itemSelect">
            <?php
            include('database.php');

            $db = new Database();

            $categoryResult = $db->pdo->query("SELECT * FROM category");
            $categories = $categoryResult->fetchAll();
            foreach ($categories as $category) {
                $categoryName = $category['category'];
                $categoryID = $category['ID'];

                echo "<optgroup label='$categoryName'>";
                $items = $db->pdo->query("SELECT * FROM items WHERE categoryID=$categoryID");
                foreach ($items as $item) {
                    $itemName = $item['itemName'];
                    $itemID = $item['ID'];
                    echo "<option value='$itemID'>$itemName</option>";
                }
                echo "</optgroup>";

            }

            ?>
        </select>
        <select id="want-have">
            <option>Have</option>
            <option>Want</option>
        </select>
    </form>


    <table id="trade-table-have">
        <th>Items You Have</th>
    </table>
    <br />
    <table id="trade-table-want">
        <th>Items You Want</th>
    </table>

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
<?php
/**
 * Created by PhpStorm.
 * User: chase
 * Date: 11/5/2017
 * Time: 6:32 PM
 */


