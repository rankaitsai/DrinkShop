<?php
/**
 * Created by PhpStorm.
 * User: rankaitsai
 * Date: 2016/12/25
 * Time: 下午 10:44
 */
?>

<!doctype html>
<body lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('DrinkShop/public/css/carouselSlide.css')}}">
    @include('layouts.partials.linkCDN')
    <title>Document</title>
</head>
<body>
    <div class="carousel slide" id="carousel-76245">
        <ol class="carousel-indicators">
            <li data-slide-to="0" data-target="#carousel-76245">
            </li>
            <li data-slide-to="1" data-target="#carousel-76245">
            </li>
            <li data-slide-to="2" data-target="#carousel-76245" class="active">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img alt="Carousel Bootstrap First" src="http://lorempixel.com/output/sports-q-c-1600-500-1.jpg">
                <div class="carousel-caption">
                    <h4>
                        First Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="item">
                <img alt="Carousel Bootstrap Second" src="http://lorempixel.com/output/sports-q-c-1600-500-2.jpg">
                <div class="carousel-caption">
                    <h4>
                        Second Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
            <div class="item active">
                <img alt="Carousel Bootstrap Third" src="http://lorempixel.com/output/sports-q-c-1600-500-3.jpg">
                <div class="carousel-caption">
                    <h4>
                        Third Thumbnail label
                    </h4>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-76245" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-76245" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</body>
</html>
