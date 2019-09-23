<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<header>
    <div class="row">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/heade-css.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/heade-js.js"></script>
        <div class="container">
            <div class="header-left col-md-5">
                <ul>
                    <li class="flickr">
                        <a href="#"><i class="fa fa-flickr"></i></a>
                    </li>
                    <li class="facebook">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="vimeo">
                        <a href="#"><i class="fa fa-vimeo-square"></i></a>
                    </li>
                </ul>
            </div>
            <div class="header-right col-md-7">
                <div class="langset">
                    <ul>
                        <li>
                            <a href="#"><img src="images/en.png">
                                <span>English</span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="list-lang">
                                <li>
                                    <a href="#"><img src="images/fr.png">
                                        <span>Francais</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/es.png">
                                        <span>Francais</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="contact-info">
                    <i class="fa fa-envelope"></i><span> 154 Av the good, New York </span>
                    <i class="fa fa-phone"></i> <span>Phone: +124 548 698 254</span>
                </div>

            </div>
        </div>
    </div>
    <div class="header-navigator">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="images/logo_42-1.png"></a>
            </div>
            <div class="menu-icon">
                <a><p>MENU <i class="fa fa-navicon"></i></p></a>
            </div>
            <a class="button right primary home-cta" href="#">Request a Quote <i class="fa fa-long-arrow-right"></i></a>

            <ul class="menu-nav">
                <li><a href="#">Home</a>
                    <ul class="dropdown ">
                        <li>
                            <a href="#">Home One</a>
                        </li>
                        <li>
                            <a href="#">Home Two</a>
                        </li>
                        <li>
                            <a href="#">Home Three</a>
                        </li>
                        <li>
                            <a href="#">Home Four</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a>
                    <ul class="dropdown ">
                        <li>
                            <a href="#">Glass &amp aluminum</a>
                        </li>
                        <li>
                            <a href="#">Automotive Industry</a>
                        </li>
                        <li>
                            <a href="#">Heavy Industry &amp Mining</a>
                        </li>
                        <li>
                            <a href="#">Agricultural Engineering</a>
                        </li>
                        <li>
                            <a href="#">Chemical Industry</a>
                        </li>
                        <li>
                            <a href="#">Assembly Of Steel</a>
                        </li>
                        <li>
                            <a href="#">Process Engineering</a>
                        </li>
                    </ul>

                </li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
