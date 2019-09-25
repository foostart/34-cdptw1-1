<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="slide">
       <ul>
        <li class="img-slide pic1" stt="0">
            <div class="bg"></div>
        </li>
        <div class="mini-title text0 text-sub">THE ULTIMATE GOAL</div>
        <div class="text-slide text0 text-sub">We are manufacturing products with world class quality.</div>
        <div class="read-more text0 text-sub">READ MORE</div>

        <li class="img-slide pic2" stt="1"><div class="bg"></div></li>
        <div class="mini-title text1 text-sub">THE ULTIMATE GOAL</div>
        <div class="text-slide text1 text-sub">Supplying the world with high quality chemical products.</div>
        <div class="read-more text1 text-sub">READ MORE</div>
    </ul>
    <div class="btn-slide">
        <i class="fa fa-angle-left"></i>
        <i class="fa fa-angle-right"></i>
    </div>
    <div class="time-banner"></div>
</div>
<!----------------------KET THUC SLIDE SHOW------------------------------>  


<!--Phan "Show off Your Creativity" -->
<div class="wpb-collum">
    <div class="container">
        <div class="show-text col-md-8">
            <h2>Show off Your Creativity</h2>
            <hr>    
            <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h4>
        </div>
    </div>
</div>
<!--/Ket thuc "Show off Your Creativity"-->

<!-- Phan video -->
<div class="vc-row">
    <div class="container">
        <div class="video-box col-md-6">
            <iframe src="https://player.vimeo.com/video/59035269" width="625" height="352" frameborder="0" title="Factory Visit to NITTO" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-6">
            <div class="box-icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="#"></a><h3 class="box-title">Ethical Management</h3>
            <p>Business ethics has normative and descriptive dimensions. As a corporate practice and a career specialization, the field is primarily normative. Academics attempting to understand business behavior employ descriptive methods. The range and quantity of business ethical issues reflects the interaction of profit-maximizing behavior with non-economic concerns.</p>
            <p>Interest in business ethics accelerated dramatically during the 1980s and 1990s, both within major corporations and within academia. For example, most major corporations today promote their commitment to non-economic values under headings. </p>
        </div>
    </div>
</div>
<!--/Ket thuc phan "video"-->

<!--Phan  gioi thieu mo hinh-->
<div class="wd-row">
    <div class="container">
        <div class="col-md-4 col-sm-6  pic-wd">
            <img src="images/agriculture.jpg">
            <h4>Agricultural Engineering</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>
        </div>
        <div class="col-md-4 col-sm-6 pic-wd">

            <img src="images/pipeline.jpg">
            <h4>Heavy Industry</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.    </p>

        </div>
        <div class="col-md-4 col-sm-6">
            <div class="style">
                <a class="pic-wd" href="#">
                    <img src="images/services-2-100x70.jpg">
                </a>
                <div class="text-wd">
                    <h6>Mechanical & Piping Construction</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="style">
                <a class="pic-wd" href="#">
                    <img src="images/Automotive-100x70.png">
                </a>
                <div class="text-wd">
                    <h6>Automotive Industry</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="style">
                <a class="pic-wd" href="#">
                    <img src="images/glass-building-100x70.jpg">
                </a>
                <div class="text-wd">
                    <h6>Gas & Oil</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
            <div class="style">
                <a class="pic-wd" href="#">
                    <img src="images/services-2-100x70.jpg">
                </a>
                <div class="text-wd">
                    <h6>Glass & aluminum</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Ket thuc phan "Gioi thieu mo hinh"-->

<!-- Phan co 8 cai hinh -->
<div class="wpb-row">
    <div class="container">
        <div class="col-md-4">
            <h2>Here is Our Gallery</h2>
            <hr>
            <h4>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</h4>
        </div>
        <div class="col-md-8 pic-wpbrow">
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/chemical-b-1024x640.jpg" alt="abc">
            </a>
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/agriculture-b-1024x640.jpg" alt="abc">
            </a>
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">

                <img src="images/Agricultural-1024x682.jpg" alt="abc">
            </a>
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/glass-b-1024x640.jpg" alt="abc">

            </a>

            <div class="clearfix"></div>

            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/engine.jpg" alt="abc">
            </a>
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/4.jpg" alt="abc">
            </a>

            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/5.jpg" alt="abc">
            </a>
            <a href="#" class="col-md-3 col-sm-6 pic-wpbrowmin">
                <img src="images/8.jpg" alt="abc">
            </a>
        </div>
    </div>
</div>
<!-- /Ket thuc phan "8 cai hinh" -->

<div class="fluid">
    <div class="container">
        <div class="fluid-question col-md-6">
            <ul>
                <li class="active-li fluid-question-li-1">What do we do?</li>
                <div class="text-li text-li1">
                    <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                    <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                </div>
                <li class="fluid-question-li-2">Why do we do it?</li>
                <div class="text-li text-li2">
                    <p>We are serious about our values. And in the context of those values we can tackle your whole project in a comprehensive customer focused way or a portion thereof.</p>
                    <p>We believe in building to positively impact communities, infrastructure, the economy, opportunity and employment. We take great pride in being proactive with our approach to projects, while ensuring that the best interests of the stakeholders are represented at every stage.</p>
                </div>
            </ul>


        </div>
        <div class="fluid-titles col-md-6">
            <div class="fluid-titles-panel">
                <h4 class="active-titles-panel"><i class="fa fa-life-ring"></i>SAFETY<i class="fa fa-minus"></i></h4>
                <p class="active-titles-panel-p">A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
            </div>
            <div class="fluid-titles-panel">
                <h4><i class="fa fa-life-ring"></i>QUALITY<i class="fa fa-plus"></i></h4>
                <p>A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
            </div>
            <div class="fluid-titles-panel">
                <h4><i class="fa fa-balance-scale"></i>INTEGRITY<i class="fa fa-plus"></i></h4>
                <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
        </div>
    </div>
</div>

<!-- Phan "Comany News -->
<div class="wf-row">
    <div class="container">
        <h2>Comany News</h2>
        <div class="col-md-4 col-sm-4 wfrowmin">
            <img src="images/post-4-650x350.jpg" alt="abc">
            <div class="text-wfrowmin">
                <a href="#">Secure strong revenue growth</a>
                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante�</p>
                <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 wfrowmin">
            <img src="images/3-650x350.jpg" alt="abc">
            <div class="text-wfrowmin">
                <a href="#">Secure strong revenue growth</a>
                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante�</p>
                <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 wfrowmin">
            <img src="images/post-3-650x350.jpg" alt="abc">
            <div class="text-wfrowmin">
                <a href="#">Secure strong revenue growth</a>
                <p>Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante�</p>
                <a href="#" class="button">READ MORE    <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--/Phan "Comany News -->

<div class="people-slide">
    <div class="container">
        <div class="people-slide-text">
            <div class="people-text active-slide">  
                <i class="fa fa-quote-left"></i>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Ventage or dorent eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident rum.
                <h6>MICHAEL STROMBACH</h6>
                <i class="fa fa-quote-right"></i>
            </div>
            <div class="people-text">  
                <i class="fa fa-quote-left"></i>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                <h6>STROMBACH MICHAEL</h6>
                <i class="fa fa-quote-right"></i>
            </div>
        </div>
        <div class="flex-btn">
            <i class="fa fa-circle active-flex-btn"></i>
            <i class="fa fa-circle"></i>
        </div>
        <div class="people-pic">
            <i class="fa fa-chevron-left"></i>
            <ul>
                <li><img src="images/team-10-70x70.jpg" alt="abc"></li>
                <li><img src="images/team-9-70x70.jpg" alt="avc"></li>
            </ul>
            <i class="fa fa-chevron-right"></i>
        </div>
    </div>
</div>
