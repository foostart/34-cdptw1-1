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
            
                
    
            
        </div>
        </div>
    </div>
    <div class="mySlides-custom">
        <div id="myModal" class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/hinh1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh9.jpg)"></div>
      
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
  <div id="myModal" class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./images/hinh1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./images/hinh9.jpg)"></div>
      
    </div>
  </div>
    </div>
</div>


  


