<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type">
    
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <aside class="sidebar">
                <section>
                    <ul class="menu">
                        <li class="current-menu-item"><a href="#">Process Engineering</a></li>
                        <li><a href="#"><h5>Assembly Of Steel</h5></a></li>
                        <li><a href="#"><h5>Automotive Industry</h5></a></li>
                        <li><a href="#"><h5>Heavy Industry Mining</h5></a></li>
                        <li><a href="#"><h5>Agricultural Engineering</h5></a></li>
                        <li><a href="#"><h5>Chemical Industry</h5></a></li>
                        <li><a href="# "><h5>Glass aluminum</h5></a></li>
                    </ul>
                </section>
                <section>
                    <a href="#">
                        <h2 class="block-title">Documents</h2>
                    </a>
                    			
                    <div class="textwidget"><div class="widget-documents">
                        <a href="#">
                            <span class="widget-subtitle">Here is some useful documents</span>
                        </a>
                        
                        <ul>
                            <li><i class="fa fa-file-pdf-o"></i><a href="#" title="Finacial Results of 2015">Finacial Results of 2015</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="#" title="Press Release Number 5">Press Release Number 5</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <a href="#">
                    <h2 class="block-title">Certifications</h2>			
                    <div class="textwidget">
                        <img src="images/iso.jpg" alt="iso-9001">
                    </div>
                    <h2 class="block-title">Certifications</h2>			
                    <div class="textwidget">
                        <img src="images/iso.jpg" alt="iso-9001">
                    </div>
                </a>
                
        </section>		
    </aside>

</div>
<div class="col-md-9">

    <div class="row">
        <div class="hinh col-md-12 col-sm-12 col-xs-12 ">
            <img src="images/1-850x500.jpg" alt=""/>    
        </div>
        <div class="chu col-md-12 col-sm-12 col-xs-12">
            <a href="#">
                <h3>Process Engineering Solutions</h3>
            </a>
            
            <p>Yet what we also understand is that our values should express themselves not just through our churches or synagogues, 
                temples or mosques they should express themselves through our government. 
                We would be making the same mistake that Reverend Wright made in his 
                offending sermons about America – to simplify and stereotype and amplify the negative to the point that it distorts reality.</p>

                <p>I’ve made a huge tiny mistake. Whoa whoa whoa whoa. 
                    Wait. Are you telling me you have a multi-stage trick with hidden identities? Can’t a guy call his mother pretty without it seeming strange? Amen.
                    And how about that little piece of tail on her? Cute! I hear the jury’s still out on science.</p>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="hinh1">
                        <img src="images/3-420x270.jpg" alt=""/>
                    </div>

                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="chu1">
                        <p>No, she’s in it. She’s a contestant. It’s sorta like an inner beauty pageant. 
                            Ah, there it is. You stay on top of her, Buddy. Don’t be afraid to ride her. Hard. Second-of-ly,
                            I know you’re the big marriage expert. Oh I’m sorry, I forgot, your wife is dead.</p>

                            <p>Get a dog up ya shag on a rock when it’ll be cream. 
                                Grab us a ridgy-didge no worries trent from punchy sunnies. 
                                Built like a bogged heaps you little ripper vb. 
                                As cunning as a cleanskin when lets get some larrikin.</p>
                            </div>
                        </div>


                    </div>

                    <div class="clearfix"></div>

                    <div class="fluid">

                        <div class="fluid-titles col-md-12">
                            <div class="fluid-titles-panel">
                                <h4 class=" a2">

                                    <span class="a4">How I can contact you?</span>
                                    <i class="fa fa-plus titles-panel-i a"></i>
                                    <i class="fa fa-minus titles-panel-i a1" style="display: none;"></i>
                                </h4>
                                <p class=" ap">Lorem ipsum dolor sit amet, facilisi sententiae delicatissimi et vix, suscipit splendide constituto ex eum. Ullum repudiandae vix no. Pri et ludus animal, voluptua urbanitas persequeris has cu, ut per solum explicari. Ei per placerat persequeris, sit te everti mentitum offendit, nec ei duis gloriatur. Eu explicari hendrerit concludaturque nec.</p>
                            </div>
                            <div class="fluid-titles-panel">
                                <h4 class="b2">

                                    <span class="b4">How I can get the list of your products?</span>
                                    <i class="fa fa-plus titles-panel-i b"></i>
                                    <i class="fa fa-minus titles-panel-i b1" style="display: none;"></i>

                                </h4>
                                <p class="bp">An quo homero tamquam scripserit, usu elaboraret percipitur delicatissimi et, eirmod detracto nam te. Oporteat quaestio no vix, perfecto scriptorem liberavisse et vis, nec dico doming te. Vel ex idque denique complectitur. Modo viderer accommodare eu ius. Numquam percipit apeirian usu ei.</p>
                            </div>
                            <div class="fluid-titles-panel">
                                <h4 class="c2">
                                    <span class="c4">Who are your industrial partners?</span>
                                    <i class="fa fa-plus titles-panel-i c"></i>
                                    <i class="fa fa-minus titles-panel-i c1" style="display: none;"></i>
                                </h4>
                                <p class="cp">No duo nostrud postulant conclusionemque, an graeco fierent omittam cum, eu mei inimicus tractatos. Zril nostrud aliquando est cu. Agam sonet disputando sea cu, consul noster civibus an eum. Pri te iudicabit neglegentur. Te meliore intellegebat qui. Deserunt petentium et sea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>