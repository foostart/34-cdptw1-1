<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="gallery">
            <div class="container">
                <div class="row">
                    <div class="img">
                        <div class=" col-md-4 pace">
                            <img src="images/hinh1.jpg"  onclick="openModal();
                                    currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh2.jpg"  onclick="openModal();
                                    currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh3.jpg"  onclick="openModal();
                                    currentSlide(3)" class="hover-shadow cursor">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="img">
                        <div class=" col-md-4 pace">
                            <img src="images/hinh4.jpg"  onclick="openModal();currentSlide(4)" class="hover-shadow cursor">

                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh5.jpg"  onclick="openModal();
                                    currentSlide(5)" class="hover-shadow cursor">
                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh6.jpg"  onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="img">
                        <div class=" col-md-4 pace">
                            <img src="images/hinh7.jpg"  onclick="openModal();
                                    currentSlide(7)" class="hover-shadow cursor">
                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh8.jpg"  onclick="openModal();
                                    currentSlide(8)" class="hover-shadow cursor">
                        </div>
                        <div class=" col-md-4 pace">
                            <img src="images/hinh9.jpg"  onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <div class="mySlides">
                        <div class="numbertext">1 / 9</div>
                        <img src="images/hinh1.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">2 / 9</div>
                        <img src="images/hinh2.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">3 / 9</div>
                        <img src="images/hinh3.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">4 / 9</div>
                        <img src="images/hinh4.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">5 / 9</div>
                        <img src="images/hinh5.jpg" >
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 9</div>
                        <img src="images/hinh6.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">7 / 9</div>
                        <img src="images/hinh7.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">8 / 9</div>
                        <img src="images/hinh8.jpg" >
                    </div>
                    <div class="mySlides">
                        <div class="numbertext">9 / 9</div>
                        <img src="images/hinh9.jpg" >
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh1.jpg"  onclick="currentSlide(1)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh2.jpg"  onclick="currentSlide(2)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh3.jpg"  onclick="currentSlide(3)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh4.jpg"  onclick="currentSlide(4)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh5.jpg"  onclick="currentSlide(5)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh6.jpg"  onclick="currentSlide(6)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh7.jpg"  onclick="currentSlide(7)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh8.jpg"  onclick="currentSlide(8)" >
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/hinh9.jpg"  onclick="currentSlide(9)" >
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
