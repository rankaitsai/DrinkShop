<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DrinkShop</title>

    <link rel="stylesheet" href="DrinkShop/public/home.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</head>

<body data-target = "#navbar-spy" data-spy = "scroll">
    <nav class="nav navbar-default navbar-fixed-top" id = "navbar-spy">    <!-- navbar-fixed-bottom為固定在網頁上不會因為滾動而消失 -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="https://www.facebook.com">DrinkShop</a>
            </div>
            <div class = "collapse navbar-collapse" id = "myNavbar">    <!-- 底下放要縮放的內容 -->
                <ul class="nav navbar-nav">
                    <li><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#menu1">Page 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active"> <!-- in active 表示一開始顯示Home畫面-->
            <h3>HOME</h3>
            <p>Some content.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>
    </div>
</body>
</html>