<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1105">
    <div class="container">
        <div class="row">
            <div class="img">
                <div class=" col-md-4 pace">
                    <img alt="ss" src="images/hinh1.jpg" onclick="openModal();
                            currentSlide(1)" class="hover-shadow cursor">
                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh2.jpg" alt="hinh2" onclick="openModal();
                            currentSlide(2)" class="hover-shadow cursor">
                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh3.jpg" alt="hinh3" onclick="openModal();
                            currentSlide(3)" class="hover-shadow cursor">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="img">
                <div class=" col-md-4 pace">
                    <img src="images/hinh4.jpg" alt="hinh4" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">

                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh5.jpg" alt="hinh5" onclick="openModal();
                            currentSlide(5)" class="hover-shadow cursor">
                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh6.jpg" alt="hinh6" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="img">
                <div class=" col-md-4 pace">
                    <img src="images/hinh7.jpg" alt="hinh7" onclick="openModal();
                            currentSlide(7)" class="hover-shadow cursor">
                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh8.jpg" alt="hinh8" onclick="openModal();
                            currentSlide(8)" class="hover-shadow cursor">
                </div>
                <div class=" col-md-4 pace">
                    <img src="images/hinh9.jpg" alt="hinh9" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                </div>
            </div>
       
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <div class="mySlides">
                    <div class="numbertext">1 / 9</div>
                    <img src="images/hinh1.jpg" alt="hinh1">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 9</div>
                    <img src="images/hinh2.jpg" alt="hinh2">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 9</div>
                    <img src="images/hinh3.jpg" alt="hinh3">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 9</div>
                    <img src="images/hinh4.jpg" alt="hinh4">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 9</div>
                    <img src="images/hinh5.jpg" alt="hinh5">
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 9</div>
                    <img src="images/hinh6.jpg" alt="hinh6">
                </div>
                <div class="mySlides">
                    <div class="numbertext">7 / 9</div>
                    <img src="images/hinh7.jpg" alt="hinh7">
                </div>
                <div class="mySlides">
                    <div class="numbertext">8 / 9</div>
                    <img src="images/hinh8.jpg" alt="hinh8">
                </div>
                <div class="mySlides">
                    <div class="numbertext">9 / 9</div>
                    <img src="images/hinh9.jpg" alt="hinh9">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div class="column">
                    <img class="demo cursor" src="images/hinh1.jpg" alt="hinh1" onclick="currentSlide(1)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh2.jpg" alt="hinh2" onclick="currentSlide(2)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh3.jpg" alt="hinh3" onclick="currentSlide(3)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh4.jpg" alt="hinh4" onclick="currentSlide(4)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh5.jpg" alt="hinh5" onclick="currentSlide(5)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh6.jpg" alt="hinh6" onclick="currentSlide(6)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh7.jpg" alt="hinh7" onclick="currentSlide(7)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh8.jpg" alt="hinh8" onclick="currentSlide(8)" >
                </div>
                <div class="column">
                    <img class="demo cursor" src="images/hinh9.jpg" alt="hinh9" onclick="currentSlide(9)" >
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


