<html>
<head>
<title>3BSCS-1 Activity 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Activity 5</h1>

<div class="container">

    <div class="carousel slide" data-ride="carousel" id="mycarousel" style="width:1000px;">

        <ol class="carousel-indicators">
            <li data-trarget="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-trarget="#mycarousel" data-slide-to="1"></li>
            <li data-trarget="#mycarousel" data-slide-to="2"></li>
            <li data-trarget="#mycarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="pics/pic1.jpg" width="1000px">
                <div class="carousel-caption">
                    <h3>Palawan Beach</h3>
                    <p>This is Palawan </p>
                </div>
            </div>
            <div class="item">
                <img src="pics/pic2.jpg" width="1000px">
                <div class="carousel-caption">
                    <h3>Rockwell Makati</h3>
                    <p>This is Makati </p>
                </div>
            </div>
            <div class="item">
                <img src="pics/pic3.jpg" width="1000px">
                <div class="carousel-caption">
                    <h3>Pangasinan Fields</h3>
                    <p>This is Pangasinan </p>
                </div>
            </div>

            <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a href="#mycarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

        </div>
    </div>

</div>

<hr/>
<br/>
<br/>
<div class = "container">

    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
    <div class="modal fade" id="myModal">
    <div class ="modal-dialog">

        <div class ="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times</button>
                <h4>This is my modal header</h4>
            </div>
            <div class="modal-body">
                <p>This is my Modal content</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
    </div>

</div>

</body>
</html>