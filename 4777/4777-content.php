<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    
        
            
<!--Include the above in your HEAD tag-->

<div class="type-4777">
    <div class="container">
        <div class="row">
                    <div class="col-md-6 how-img">
                        <a href="#"><img src="../4777/images/1.png" alt=""/></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <h4>Find rewarding projects</h4>
                        </a>
                        <a href="#">
                            <h4 class="subheading">GetLance is a great place to find more clients, and to run and grow your own freelance business.</h4>
                        </a>
                                    
                    <p class="text-muted">Freedom to work on ideal projects. On GetLance, you run your own business and choose your own clients and projects. Just complete your profile and we’ll highlight ideal jobs. Also search projects, and respond to client invitations.
                                        Wide variety and high pay. Clients are now posting jobs in hundreds of skill categories, paying top price for great work.
                                        More and more success. The greater the success you have on projects, the more likely you are to get hired by clients that use GetLance.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <h4>Get hired quickly</h4>
                        </a>
                        <a href="#">
                            <h4 class="subheading">GetLance makes it easy to connect with clients and begin doing great work.</h4>
                        </a>
                                    
                                    <p class="text-muted">Streamlined hiring. GetLance’s sophisticated algorithms highlight projects you’re a great fit for.
                                        Top Rated and Rising Talent programs. Enjoy higher visibility with the added status of prestigious programs.
                                        Do substantial work with top clients. GetLance pricing encourages freelancers to use GetLance for repeat relationships with their clients.</p>
                    </div>
                    <div class="col-md-6 how-img">
                        <a href="#"><img src="../4777/images/2.png"  alt=""/></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 how-img">
                        <a href="#"><img src="../4777/images/3.png" alt=""/></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <h4>Work efficiently, effectively.</h4>
                        </a>
                        <a href="#">
                            <h4 class="subheading">With GetLance, you have the freedom and flexibility to control when, where, and how you work. Each project includes an online workspace shared by you and your client, allowing you to:</h4>
                        </a>
                        
                                    
                                    <p class="text-muted">Send and receive files. Deliver digital assets in a secure environment.
                                        Share feedback in real time. Use GetLance Messages to communicate via text, chat, or video.
                                        Use our mobile app. Many features can be accessed on your mobile phone when on the go.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">
                            <h4>Get paid on time</h4>
                        </a>
                        <a href="#">
                            <h4 class="subheading">All projects include GetLance Payment Protection — helping ensure that you get paid for all work successfully completed through the freelancing website.</h4>
                        </a>
                        
                                    
                                    <p class="text-muted">All invoices and payments happen through GetLance. Count on a simple and streamlined process.
                                        Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price jobs, set milestones and funds are released via GetLance escrow features.
                                        Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal to wire transfer and more.</p>
                    </div>
                    <div class="col-md-6 how-img">
                        <a href="#"><img src="../4777/images/4.png"  alt=""/></a>
                    </div>
                </div>
            </div>
        <!--/END RIGHT CONTENTS HOME-->
    </div>
                
       
    
</div>
