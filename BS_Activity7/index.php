<html>
<head>
<title>3BSCS-1 E-Commerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<!-- NavBar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href="#">E-Commerce</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal">Contact Us</a></li>

                    <div class="modal fade" id="myModal">
                    <div class ="modal-dialog">

                        <div class ="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times</button>
                            <h4>JB Shawarma</h4>
                        </div>
                        <div class="modal-body">
                            <p>Jonathan D. Bibay</p>
                            <p>3BSCS-1</p>
                            <p>Contact no. 09365183346</p>
                            <p>Email: jonathan.bibay@outlook.com</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                    </div>

                <li><a href="#">Software</a></li>
                <li><a href="#">Music</a></li>
            </ul>
        </div>

    </div>
</nav>

<!-- Aside -->
<aside class="col-md-4">

<!-- Shawarma -->
<div class="col-md-10 col-md-offset-1">
    <div class="list-group">
        <a href="Shawarma.php" class="list-group-item" style="padding: 0; margin: 0;">

            <div class="col-md-3" style="padding:0; margin:0;">
                <img src="pics/food1.jpg" style="width: 80px; height:100px;">
            </div>

            <div class="col-md-9">
                <div class="list-group-item-heading">
                    <h4>Php: 75.00</h4>
                    <h4>Shawarma</h4>
                    <div class="clearfix"></div>
                </div>
                <p class="list-group-item">Shawarma with Pita</p>
            </div>
                <div class="clearfix"></div>
        </a>
    </div>
</div>

<!-- Shawarma Rice -->
<div class="col-md-10 col-md-offset-1">
    <div class="list-group">
        <a href="Shawarma Rice.php" class="list-group-item" style="padding: 0; margin: 0;">

            <div class="col-md-3" style="padding:0; margin:0;">
                <img src="pics/food2.jpg" style="width: 80px; height:100px;">
            </div>

            <div class="col-md-9">
                <div class="list-group-item-heading">
                    <h4>Php: 100.00</h4>
                    <h4>Shawarma Rice</h4>
                    <div class="clearfix"></div>
                </div>
                <p class="list-group-item">Shawarma with Java rice</p>
            </div>
                <div class="clearfix"></div>
        </a>
    </div>
</div>

<!-- Kebab -->
<div class="col-md-10 col-md-offset-1">
    <div class="list-group">
        <a href="Kebab.php" class="list-group-item" style="padding: 0; margin: 0;">

            <div class="col-md-3" style="padding:0; margin:0;">
                <img src="pics/food3.jpg" style="width: 80px; height:100px;">
            </div>

            <div class="col-md-9">
                <div class="list-group-item-heading">
                    <h4>Php: 80.00</h4>
                    <h4>Kebab</h4>
                    <div class="clearfix"></div>
                </div>
                <p class="list-group-item">Kebab with Pita</p>
            </div>
                <div class="clearfix"></div>
        </a>
    </div>
</div>

<!-- Kebab Rice -->
<div class="col-md-10 col-md-offset-1">
    <div class="list-group">
        <a href="Kebab Rice.php" class="list-group-item" style="padding: 0; margin: 0;">

            <div class="col-md-3" style="padding:0; margin:0;">
                <img src="pics/food4.jpg" style="width: 80px; height:100px;">
            </div>

            <div class="col-md-9">
                <div class="list-group-item-heading">
                    <h4>Php: 120.00</h4>
                    <h4>Kebab Rice</h4>
                    <div class="clearfix"></div>
                </div>
                <p class="list-group-item">Kebab with Java rice</p>
            </div>
                <div class="clearfix"></div>
        </a>
    </div>
</div>

<!-- Nachos Shawarma -->
<div class="col-md-10 col-md-offset-1">
    <div class="list-group">
        <a href="Nachos Shawarma.php" class="list-group-item" style="padding: 0; margin: 0;">

            <div class="col-md-3" style="padding:0; margin:0;">
                <img src="pics/food5.jpg" style="width: 80px; height:100px;">
            </div>

            <div class="col-md-9">
                <div class="list-group-item-heading">
                    <h4>Php: 85.00</h4>
                    <h4>Nachos Shawarma</h4>
                    <div class="clearfix"></div>
                </div>
                <p class="list-group-item">Nachos with Shawarma</p>
            </div>
                <div class="clearfix"></div>
        </a>
    </div>
</div>

</aside>

<!-- Carousel -->
<header class="col-md-8">
    <div class="carousel slide" data-ride="carousel" id="cl">

        <ol class="carousel-indicators">
            <li data-target="#cl" data-slide-to="0"></li>
            <li data-target="#cl" data-slide-to="1"></li>
            <li data-target="#cl" data-slide-to="2"></li>
            <li data-target="#cl" data-slide-to="3"></li>
            <li data-target="#cl" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">

            <div class="item active">
                <img src="pics/food1.jpg" style="width: 100%">
                <div class="carousel-caption">
                    <h4>Shawarma</h4>
                    <p>Shawarma with Pita</p>
                </div>
            </div>

            <div class="item">
                <img src="pics/food2.jpg" style="width: 100%">
                <div class="carousel-caption">
                    <h4>Shawarma Rice</h4>
                    <p>Shawarma with Java Rice</p>
                </div>
            </div>

            <div class="item">
                <img src="pics/food3.jpg" style="width: 100%">
                <div class="carousel-caption">
                    <h4>Kebab</h4>
                    <p>Kebab with Pita</p>
                </div>
            </div>

            <div class="item">
                <img src="pics/food4.jpg" style="width: 100%">
                <div class="carousel-caption">
                    <h4>Kebab Rice</h4>
                    <p>Kebab with Java Rice</p>
                </div>
            </div>

            <div class="item">
                <img src="pics/food5.jpg" style="width: 100%">
                <div class="carousel-caption">
                    <h4>Nachos Shawarma</h4>
                    <p>Shawarma with Nachos</p>
                </div>
            </div>

        </div>

        <a href="#cl" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a href="#cl" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

    </div>
</header>

<!-- Thumbnails -->
<div class="container">
<div class="page-header"><h3 class="text-center">All products</h3></div>

<div class="col-md-4">
    <div class="thumbnail">
        <img src="pics/food1.jpg" style="width: 100%">
        <div class="caption">
        <h4 class="pull-right">Php: 75.00</h4>
        <h4><a href="Shawarma.php">Shawarma</a></h4>
        <p>Shawarma with Pita</p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="thumbnail">
        <img src="pics/food2.jpg" style="width: 100%">
        <div class="caption">
        <h4 class="pull-right">Php: 100.00</h4>
        <h4><a href="Shawarma Rice.php">Shawarma with Rice</a></h4>
        <p>Shawarma with Java Rice</p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="thumbnail">
        <img src="pics/food3.jpg" style="width: 100%">
        <div class="caption">
        <h4 class="pull-right">Php: 80.00</h4>
        <h4><a href="Kebab.php">Kebab</a></h4>
        <p>Kebab with Pita</p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="thumbnail">
        <img src="pics/food4.jpg" style="width: 100%">
        <div class="caption">
        <h4 class="pull-right">Php: 120.00</h4>
        <h4><a href="Kebab Rice.php">Kebab with Rice</a></h4>
        <p>kebab with Java Rice</p>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="thumbnail">
        <img src="pics/food5.jpg" style="width: 100%">
        <div class="caption">
        <h4 class="pull-right">Php: 85.00</h4>
        <h4><a href="Nachos Shawarma.php">Nachos Shawarma</a></h4>
        <p>Nachos with Shawarma</p>
        </div>
    </div>
</div>

</div>

</body>
</html>