<!--
 * The main template file
 *
 * @since Grid312 1.0
-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>

<?php $this->load->view('header/headerGeneral'); ?>
<?php $this->load->view('header/headerInclude'); ?>
 
</head>
<body class="home">
  <div id="loader"><div id="loader-wrapper"><span class="loader-inner"></span></div></div>    
    <div class="main">
      
      <div class="main-wrapper clearfix">
      <!-- Site Header  -->
        <header id="main-header" class="site-header clearfix">
      
       <div id="header" class="box-animate">  
         <!-- Site Menu  -->
      <div id="main-menu">
      <button class="header-icon menu"></button> 
         <nav class="navbar navbar-main">
            <ul class="nav">
                <li><a href="index.html">home</a></li> 
                <li class="dropdown">
                    <a href="#">pages</a>
                    <ul class="submenu">
                        <li><a href="post.html">standard</a></li>
                        <li class="dropdown">
                          <a href="#">gallery</a>
                          <ul class="submenu">
                            <li><a href="post-gallery-light.html">light top</a></li>
                            <li><a href="post-gallery-dark.html">dark top</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#">media</a>
                          <ul class="submenu">
                            <li><a href="post-media-light.html">light top</a></li>
                            <li><a href="post-media-dark.html">dark top</a></li>
                          </ul>
                        </li>
                        <li><a href="post-quote.html">quote</a></li>
                        <li><a href="author.html">author&rsquo;s page</a></li>
                        <li><a href="archive.html">archive</a></li>
                        <li><a href="sitemap.html">site map</a></li>
                        <li><a href="404.html">404 page</a></li>
                    </ul>
                 </li>             
                <li class="dropdown">
                  <a href="page.html">about us</a>
                  <ul class="submenu">
                    <li><a href="page.html#company">company</a></li> 
                    <li><a href="page.html#philosophy">philosophy &amp; mission</a></li> 
                    <li><a href="page.html#team">team</a></li> 
                    <li><a href="page.html#contact">contact us</a></li> 
                  </ul>
                </li>                  
             </ul>
           </nav>
        </div><!-- // .main-menu-->
                      
        <h1 class="site-title site-name">TheKochi</h1>
		<p class="site-description">The City With No Limits</p>

       <button class="header-icon" id="btn-search"><i class="fa fa-search"></i></button>
	   
	   <button class="header-button box-cat hidden-xs" id="registerBtn">REGISTER</button>
	   <button class="header-button box-cat" id="signinBtn" data-toggle="modal" data-target="#myModal">SIGN IN</button>
       
       </div><!-- //#header -->
       
        <!-- Site Search  -->
          <div id="site-search" class="box-animate">
             <div class="box-animate">                     
              <form action="#" method="post" class="clearfix">
                <input type="search" placeholder="What Are You Looking For?" />                
              </form>
              <button type="button" class="close"><i class="fa fa-times"></i></button>
             </div>   
          </div><!-- //.site-search  -->
       
      
          
        </header>    
   <!-- Content -->
   <div class="site-content metro">
   
    <div class="main-grid clearfix">       
                <div class="grids clearfix">
                
                    <article class="grid triple double-vertical">                      
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/001.jpg" alt="DINOSAURS ARE STILL ALIVE" />
                      <div class="entry-content">
                        <span class="box-cat">Sports</span>
                        <span class="type-post"><i class="fa fa-picture-o"></i></span>
                        <div class="bottom-box">
                         <time datetime="2015-06-05">5 Jun</time>
                         <h3>FIFA U-17 World Cup 2017</h3>
                         <span class="nickname">FP Sports</span>
                         <p class="hidden_el">Kochi to host heavyweights Brazil and Spain, will also witness a Germany match. </p>
                        </div>
                       </div>
                      </a>
                    </article> 
                                   
                    <article class="grid single" data-type="catalog">                     
                      <a href="archive.html" class="box">
                      <img src="<?= $images ?>/categories/cat1.jpg" alt="super cars" />
                        <span class="num-cat">30</span>
                        <h5 class="name-cat">people</h5>
                        <span class="see-all">see all <i class="fa fa-caret-right"></i></span>
                      </a>
                      </article>
                    
                    
                   <article class="grid double-vertical">                     
                       <a href="post.html" class="box">
                       <img src="<?= $images ?>/posts/002.jpg" alt="pizza" />
                       <div class="entry-content">
                          <span class="box-cat">food</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-05-10">10 May</time>
                           <h5>the most delicious pizza</h5>
                           <span class="nickname">mee buban</span>
                           <p class="hidden_el">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>                       
                          </div>
                         </div>
                        </a>
                    </article>
                    
                    <article class="grid double-vertical">
                       <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/003.jpg" alt="people of borough market" />
                        <div class="entry-content">
                          <span class="box-cat">people</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-05-05">5 May</time>
                           <h5>people of borough market</h5>
                           <span class="nickname">elizbeth redus</span> 
                           <p class="hidden_el">Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?</p>                     
                          </div>
                         </div>
                        </a>
                    </article>
                    
                    <article class="grid double">
                      <a href="post-gallery-dark.html" class="box">
                      <img src="<?= $images ?>/posts/004.jpg" alt="mclaren p1" />
                      <div class="entry-content">
                          <span class="box-cat">supercars</span>
                          <span class="type-post"><i class="fa fa-th-large"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-05-02">2 May</time>
                           <h5>a 3.8-litre twin-turbocharged v8 mclaren p1</h5>
                           <span class="nickname">martina henthorn</span>
                           <p class="hidden_el">Duis vel suscipit leo. Vivamus dignissim aliquam dolor sed molestie. Suspendisse at volutpat velit, a laoreet ante. Aliquam erat volutpat.</p>                     
                          </div>
                        </div>
                        </a>
                    </article>

                                       
                    <article class="grid single" data-type="ads">
                      <a href="#" class="box">
                      <img src="<?= $images ?>/ads/ads_03.jpg" alt="carding" class="grayscale" />
                      <div class="content-ads">
                        <div class="wrapper">
                          <div class="name-comp">carding</div>
                          <h5 class="title-ads">MAKE THE MOST OF YOUR AUGUST BANK HOLIDAY</h5>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias</p>
                        </div>
                        <span class="see-all">GO<i class="fa fa-caret-right"></i></span>
                      </div>
                      </a>
                    </article>
                    
                   <article class="grid double">
                     <a href="post-media-dark.html" class="box">
                    <img src="<?= $images ?>/posts/005.jpg" alt="Dubai" />
                    <div class="entry-content">
                          <span class="box-cat">skylines</span>
                          <span class="type-post"><i class="fa fa-video-camera"></i></span>
                          <div class="bottom-box">
                            <time datetime="2015-04-24">24 Apr</time>
                            <h5>view from burj khalifa, dubai</h5>
                            <span class="nickname">jaye sheperd</span>
                            <p class="hidden_el">Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat</p>                      
                          </div>
                      </div>
                        </a>
                    </article>
                    
                </div><!-- //.grids -->

                    
                    <div class="grids clearfix">
                
                    <article class="grid double">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/006.jpg" alt="vibrant hot air balloons" />
                      <div class="entry-content">
                          <span class="box-cat">holidays</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-04-21">21 Apr</time>
                           <h5>vibrant hot air balloons</h5>
                           <span class="nickname">marquitta dacus</span>
                           <p class="hidden_el">Donec est enim, bibendum hendrerit erat at, auctor congue purus. Aliquam velit eros, volutpat ut scelerisque nec, congue sit amet urna. Sed neque ex, tincidunt vel mi et, aliquet vulputate libero.</p>                       
                          </div>
                        </div>
                        </a>
                    </article>

                    
                    <article class="grid double triple-vertical">
                       <a href="post-media-light.html" class="box">
                       <img src="<?= $images ?>/posts/007.jpg" alt="just a big kitty" />
                       <div class="entry-content">
                          <span class="box-cat">animals</span>
                          <span class="type-post"><i class="fa fa-video-camera"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-04-17">17 Apr</time>
                           <h3>just a big kitty</h3>
                           <span class="nickname">Julian Schrick</span>
                           <p class="hidden_el">Donec est enim, bibendum hendrerit erat at, auctor congue purus. Aliquam velit eros, volutpat ut scelerisque nec, congue sit amet urna. Sed neque ex, tincidunt vel mi et, aliquet vulputate libero. Integer molestie, felis at porttitor egestas, risus velit consequat ligula, rutrum scelerisque metus tellus eget dui. Vivamus rutrum et lorem ut vestibulum.</p>
                          </div>
                        </div>
                        </a>
                    </article>
                                    
                    <article class="grid single" data-type="catalog">
                      <a href="archive.html" class="box">
                    <img src="<?= $images ?>/categories/cat2.jpg" alt="skylines" />
                        <span class="num-cat">33</span>
                        <h5 class="name-cat">drinks</h5>
                        <span class="see-all">see all<i class="fa fa-caret-right"></i></span>
                      </a>
                    </article>
                    
                   <article class="grid double-vertical">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/008.jpg" alt="heading out" />
                      <div class="entry-content">
                          <span class="box-cat">nature</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-04-15">15 Apr</time>
                           <h5>"heading out" - la perouse sunset</h5>
                           <span class="nickname">mack pilla</span>
                           <p class="hidden_el">Phasellus cursus neque ultricies, pulvinar lectus fermentum, eleifend neque. Vestibulum nec nibh eu eros tempor elementum.</p>                      
                          </div>
                        </div>
                        </a>
                    </article>
                    
                    <article class="grid double-vertical">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/009.jpg" alt="cyclist" />
                      <div class="entry-content">
                          <span class="box-cat">sports</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-04-08">8 Apr</time>
                           <h5>cyclist</h5>
                           <span class="nickname">selina summerlin</span>
                           <p class="hidden_el">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>                       
                          </div>
                         </div>
                        </a>
                    </article>
                    
                    <article class="grid double">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/010.jpg" alt="fresh cherry" />
                      <div class="entry-content">
                          <span class="box-cat">food</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-04-02">2 Apr</time>
                           <h5>fresh cherry</h5>
                           <span class="nickname">charmain saraiva</span>
                           <p class="hidden_el">Phasellus cursus neque ultricies, pulvinar lectus fermentum, eleifend neque. Vestibulum nec nibh eu eros tempor elementum. Fusce volutpat id nisl non sollicitudin.</p>                       
                          </div>
                        </div>
                        </a>
                    </article>

                                      
                    <article class="grid single" data-type="ads">
                       <a href="#" class="box">
                       <img src="<?= $images ?>/ads/ads_02.jpg" alt="adozero creative" class="grayscale" />
                       <div class="content-ads">
                         <div class="wrapper">
                            <div class="name-comp">adozero creative</div>
                            <h5 class="title-ads">LAST CHANCE TO SAVE 40%</h5>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit</p>
                          </div>
                        <span class="see-all">see all plans<i class="fa fa-caret-right"></i></span>
                       </div>
                      </a>
                    </article>
                </div><!-- //.grids -->
                
                 <div class="grids clearfix">
                 
                    <article class="grid single" data-type="catalog">
                      <a href="archive.html" class="box">
                     <img src="<?= $images ?>/categories/cat3.jpg" alt="plants" />
                        <span class="num-cat">29</span>
                        <h5 class="name-cat">nature</h5>
                        <span class="see-all">see all<i class="fa fa-caret-right"></i></span>
                      </a>
                    </article>
                    
                    <article class="grid triple double-vertical">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/011.jpg" alt="SHANGHAI CHINA" />
                      <div class="entry-content">
                          <span class="box-cat">skylines</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-03-29">29 Mar</time>
                           <h3>474 M Above Sea Level. Shanghai, China.</h3>
                           <span class="nickname">Celinda Bolanos</span>
                           <p class="hidden_el">Morbi malesuada vel urna id pellentesque. Integer imperdiet tempus dolor eu viverra. Nam pretium nisl a faucibus porta. Praesent bibendum auctor neque vel fermentum.</p>                      
                          </div>
                        </div>
                        </a>
                    </article>
                    
                    <article class="grid double-vertical">
                      <a href="post-quote.html" class="box">
                      <img src="<?= $images ?>/posts/012.jpg" alt="Dalai Lama" class="grayscale" />
                      <div class="entry-content">
                          <span class="box-cat">wisdom</span>
                          <span class="type-post"><i class="fa fa-quote-right"></i></span>
                          <div class="bottom-box">
                          <time datetime="2015-03-16">16 Mar</time>
                          <h5>HUMAN&rsquo;S NECESSITIES</h5>                         
                           <span class="nickname">mitsuko churchwell</span>
                           <blockquote  class="hidden_el">
                             <p>Whether one believes in a religion or not, and whether one believes in rebirth or not, there isn't anyone who doesn't appreciate kindness and compassion.</p>
                             <span class="signature">
                                Dalai Lama
                             </span>                        
                             </blockquote>                                                
                          </div>
                       </div>
                        </a>
                    </article>
                    
                    <article class="grid double">
                      <a href="post-media-dark.html" class="box">
                      <img src="<?= $images ?>/posts/013.jpg" alt="without you" />
                      <div class="entry-content">
                          <span class="box-cat">love</span>
                          <span class="type-post"><i class="fa fa-volume-up"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-03-10">10 Mar</time>
                           <h5>Lady Adelson - without you</h5>
                           <span class="nickname">jaye sheperd</span>
                           <p class="hidden_el">Praesent bibendum auctor neque vel fermentum. Suspendisse laoreet fermentum dolor, eget consectetur sapien dapibus quis.</p>                                               
                          </div>
                        </div>
                        </a>
                    </article>
                    
                    <article class="grid double-vertical">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/014.jpg" alt="legends football league australia" />
                      <div class="entry-content">
                          <span class="box-cat">sports</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-03-05">5 Mar</time>
                           <h5>legends football league australia - (victoria maidens vs nsw surge)</h5>
                           <span class="nickname">basilia scalise</span>
                           <p class="hidden_el">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>                                                
                          </div>
                       </div>
                        </a>
                    </article>

                    
                    <article class="grid double">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/015.jpg" alt="Hawaii" />
                      <div class="entry-content">
                          <span class="box-cat">holidays</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-03-02">2 Mar</time>
                           <h5>liquid avalanche. sandy beach. oahu, hawaii</h5>
                           <span class="nickname">Jacquelin Thorton</span>
                           <p class="hidden_el">Donec eu feugiat orci. Phasellus ex eros, tincidunt sit amet neque a, eleifend aliquet nulla. Integer laoreet lacinia nunc eu ultricies. Vestibulum maximus id enim ac vestibulum. Etiam cursus eget erat a venenatis.</p>                                                
                          </div>
                       </div>
                        </a>
                    </article>  
                                     
                    <article class="grid single" data-type="ads">
                       <a href="#" class="box">
                       <img src="<?= $images ?>/ads/ads_00.jpg" alt="z-max.com" class="grayscale" />
                       <div class="content-ads">
                         <div class="wrapper">
                            <div class="name-comp">z-max.com</div>
                            <h5 class="title-ads">TRADE LIKE A PRO WITH Z-MAX</h5>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit</p>
                          </div>
                        <span class="see-all">try it now<i class="fa fa-caret-right"></i></span>
                       </div>
                      </a>
                    </article>
                </div><!-- //.grids -->
                
                 <div class="grids clearfix">
                 
                    <article class="grid single" data-type="catalog">
                     <a href="archive.html" class="box">
                      <img src="<?= $images ?>/categories/cat4.jpg" alt="wild animals" />
                        <span class="num-cat">13</span>
                        <h5 class="name-cat">gardening</h5>
                        <span class="see-all">see all<i class="fa fa-caret-right"></i></span>
                      </a>
                     </article>
                    
                    <article class="grid double">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/016.jpg" alt="Reflections of Sydney" />
                        <div class="entry-content">
                          <span class="box-cat">cities</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-02-28">28 Feb</time>
                           <h5>Reflections of Sydney</h5>
                           <span class="nickname">Kera Gannaway</span>
                           <p class="hidden_el">Praesent vel lectus mauris. Ut malesuada, augue et bibendum mollis, diam risus interdum quam, sit amet dapibus ligula lectus vel urna. Morbi a maximus enim. Nunc et sodales ipsum. Mauris convallis convallis leo.</p>                                                
                          </div>
                         </div>
                        </a>
                    </article>
                    
                    <article class="grid double-vertical">
                      <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/017.jpg" alt="lemur" />
                      <div class="entry-content">
                          <span class="box-cat">animals</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-02-23">23 Feb</time>
                           <h5>ring tailed lemur</h5>
                           <span class="nickname">Veronica Villano</span>
                           <p class="hidden_el">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit</p>                                                
                          </div>
                        </div>
                        </a>
                    </article>
                    
                    <article class="grid double triple-vertical">
                       <a href="post.html" class="box">
                       <img src="<?= $images ?>/posts/018.jpg" alt="PURPLE CROCUSES" />
                       <div class="entry-content">
                          <span class="box-cat">plants</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-02-21">21 Feb</time>
                           <h3>Purple Crocuses</h3>
                           <span class="nickname">Keitha Gamber</span>
                           <p class="hidden_el">Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus</p>    
                          </div>
                        </div>
                        </a>
                    </article>
                              
                    <article class="grid double-vertical">
                      <a href="post-gallery-light.html" class="box">
                      <img src="<?= $images ?>/posts/019.jpg" alt="FRESH FRUIT MIX" />
                      <div class="entry-content">
                          <span class="box-cat">food</span>
                          <span class="type-post"><i class="fa fa-th-large"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-02-13">13 Feb</time>
                           <h5>Fresh Fruit Mix</h5>
                           <span class="nickname">Gena Stallone</span>
                           <p class="hidden_el">Praesent purus risus, tincidunt vel magna ac, ornare posuere massa. Maecenas non molestie nisi. Aliquam tellus neque, lobortis a ligula rutrum, venenatis porta sem.</p>     
                          </div>
                       </div>
                        </a>
                    </article>
                    
                    <article class="grid single" data-type="ads">
                     <a href="#" class="box">
                       <img src="<?= $images ?>/ads/ads_01.jpg" alt="webexpert.pro" class="grayscale" />
                       <div class="content-ads">
                         <div class="wrapper">
                            <div class="name-comp">webexpert.pro</div>
                            <h5 class="title-ads">BUILD A WEBSITE. FAST. COOL. PRO. INNOVATIVE.</h5>
                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit</p>
                          </div>
                        <span class="see-all">watch<i class="fa fa-caret-right"></i></span>
                       </div>
                      </a>
                    </article>
                    
                    <article class="grid double">
                     <a href="post.html" class="box">
                      <img src="<?= $images ?>/posts/020.jpg" alt="AUDI R" />
                      <div class="entry-content">
                          <span class="box-cat">supercars</span>
                          <span class="type-post"><i class="fa fa-picture-o"></i></span>
                          <div class="bottom-box">
                           <time datetime="2015-02-13">13 Feb</time>
                           <h5>Audi R8 2015</h5>
                           <span class="nickname">Larraine Estill</span>
                           <p class="hidden_el">Donec eu feugiat orci. Phasellus ex eros, tincidunt sit amet neque a, eleifend aliquet nulla. Integer laoreet lacinia nunc eu ultricies. Vestibulum maximus id enim ac vestibulum.</p>     
                          </div>
                       </div>
                        </a>
                    </article> 
                                           
                </div><!-- //.grids -->
         </div><!-- //.main-grid --> 
            
             <!-- Paging Navigation -->    
          <nav class="pag">
            <ul class="pagination">
              <li class="disabled">
                <a href="#" aria-label="Previous">
                  <span data-hidden_el="true"><i class="fa fa-caret-left"></i>Previous</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li class="disabled"><a href="#">...</a></li>
              <li><a href="#">16</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span data-hidden_el="true">next<i class="fa fa-caret-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
          
      </div> <!-- main-content -->
      
     <!-- Sidebar -->     
     <div class="sidebar">

<!-- Widget Poular Posts-->
<aside id="popular-posts" class="widget clearfix">
   <ul>
      <li class="recent-post">
        <a href="post.html">
          <div class="wcat">plants</div>
          <div class="title_resent_posts">PURPLE CROCUSES</div>
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea</p>
          <div class="meta">
            <i class="fa fa-eye"></i> 2345
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
     <li class="recent-post">
         <a href="post.html">
          <div class="wcat">supercars</div>
          <div class="title_resent_posts">AUDI R8 2015</div>
          <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?</p>
          <div class="meta">
            <i class="fa fa-eye"></i> 1538
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
      <li class="recent-post">
         <a href="post.html">
         <div class="wcat">food</div>
          <div class="title_resent_posts">FRESH FRUIT MIX</div>
          <p>Voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? Ut enim ad minima veniam.</p>
          <div class="meta">
            <i class="fa fa-eye"></i> 1346
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
      <li class="recent-post">
         <a href="post.html">
         <div class="wcat">animals</div>
          <div class="title_resent_posts">RING TAILED LEMUR</div>
          <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat</p>
          <div class="meta">
            <i class="fa fa-eye"></i> 957
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
      
   </ul>
 </aside><!-- //#popular-posts -->
 
 <!-- Widget Hot Posts-->
<aside id="hot-posts" class="widget clearfix">
   <ul>
      <li class="recent-post">
        <a href="post.html">
          <div class="wcat">cities</div>
          <div class="title_resent_posts">REFLECTIONS OF SYDNEY</div>
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea</p>
          <div class="meta">
           <i class="fa fa-comments-o"></i> 157
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
     <li class="recent-post">
         <a href="post.html">
          <div class="wcat">holidays</div>
          <div class="title_resent_posts">LIQUID AVALANCHE. SANDY BEACH. OAHU, HAWAII</div>
          <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui</p>
          <div class="meta">
            <i class="fa fa-comments-o"></i> 25
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
      <li class="recent-post">
         <a href="post.html">
         <div class="wcat">sports</div>
          <div class="title_resent_posts">LEGENDS FOOTBALL LEAGUE AUSTRALIA - (VICTORIA MAIDENS VS NSW SURGE)</div>
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi</p>
          <div class="meta">
            <i class="fa fa-comments-o"></i> 7
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
      <li class="recent-post">
         <a href="post.html">
         <div class="wcat">love</div>
          <div class="title_resent_posts">LADY ADELSON - WITHOUT YOU</div>
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea</p>
          <div class="meta">
            <i class="fa fa-comments-o"></i> 7
          </div>
          <div class="read_more">Read more <i class="fa fa-caret-right"></i></div> 
        </a>
      </li>
   </ul>
 </aside><!-- //#hot-posts -->
 
 <!-- Widget Comments-->
<aside id="recent-comments" class="widget clearfix">
   <ul>
      <li class="recentcomments">
         <a href="post.html" class="clearfix">      
          <div class="avatar"><img src="<?= $images ?>/comm/comm1.jpg" alt="avatar" /></div>
          <div class="meta">
            <span class="nickname">Lashon Pascarella</span> on 
            <span class="title-post">RING TAILED LEMUR</span>
          </div>
          </a>        
      </li>
     <li class="recentcomments">
         <a href="post.html" class="clearfix">
           <div class="avatar"><img src="<?= $images ?>/comm/comm2.jpg" alt="avatar" /></div>
            <div class="meta">
              <span class="nickname">CLAIR WEHR</span> on 
              <span class="title-post">474 M ABOVE SEA LEVEL. SHANGHAI, CHINA.</span>
            </div>
          </a>
        </li>
      <li class="recentcomments">
         <a href="post.html" class="clearfix">
           <div class="avatar"><img src="<?= $images ?>/comm/comm3.jpg" alt="avatar" /></div>
            <div class="meta">
              <span class="nickname">Tam Wald</span> on
              <span class="title-post">FRESH CHERRY</span>
            </div>
          </a>
         </li>
      <li class="recentcomments">
        <a href="post.html" class="clearfix">
         <div class="avatar"></div>
          <div class="meta">
            <span class="nickname">RANDAL SANCHES</span> on 
            <span class="title-post">CYCLIST</span>
          </div>
        </a>
      </li>
   </ul>
 </aside><!-- //#recent-comments -->
 
 <!-- Widget Flickr Photos-->
<aside id="flickr-photos" class="widget clearfix">
  <div class="num-cat">35</div>
  <div class="title-widget">FLICKR <span>PHOTOS</span></div>
   <ul class="clearfix">
      <li class="flickrphotos">       
          <a href="#"><img src="<?= $images ?>/flickr/f1.jpg" alt="flickr" /></a>    
      </li>
      <li class="flickrphotos">       
          <a href="#"><img src="<?= $images ?>/flickr/f2.jpg" alt="flickr" /></a>    
      </li>
      <li class="flickrphotos">       
          <a href="#"><img src="<?= $images ?>/flickr/f3.jpg" alt="flickr" /></a>   
      </li>
      <li class="flickrphotos">       
          <a href="#"><img src="<?= $images ?>/flickr/f4.jpg" alt="flickr" /></a>   
      </li>
    
   </ul>
 </aside><!-- //#flickr-photos -->
 
 <!-- Widget Tag Cloud-->
 <aside id="tag-cloud" class="widget clearfix">
    <div class="tagcloud">
      <a class="tag-link" data-tag="0.7" title="48 topics" href="#"><span>LOREM</span></a>
      <a class="tag-link" data-tag="0.28" title="15 topics" href="#"><span>IPSUM</span></a>
      <a class="tag-link" data-tag="0.15" title="6 topics" href="#"><span>dolor</span></a>
      <a class="tag-link" data-tag="0.56" title="32 topics" href="#"><span>sit</span></a>
      <a class="tag-link" data-tag="0.77" title="50 topics" href="#"><span>amet</span></a>
      <a class="tag-link" data-tag="0.34" title="20 topics" href="#"><span>CONSECTETUR</span></a>
      <a class="tag-link" data-tag="1.00" title="78 topics" href="#"><span>ADIPISICING</span></a>
      <a class="tag-link" data-tag="0.2" title="8 topics" href="#"><span>VENIAM</span></a>
      <a class="tag-link" data-tag="0.85" title="56 topics" href="#"><span>DUIS</span></a>
    </div>
 </aside><!-- //#ftag-cloud -->
 
  <!-- Widget Recent Tweets-->
  <aside id="tweets" class="widget clearfix">
    <ul class="jtwt">
      <li class="jtwt_tweet">
      <div class="tweet-entry"> 
        <a target="_blank" href="#">NOHEMI MITTON</a> on <time datetime="2015-06-13">13 Jun</time>
        </div>
         <p class="jtwt_tweet_text">
        Sed ut perspiciatis, unde omnis iste natus <a href="#">#error</a> sit voluptatem accusantium doloremque laudantium, totam rem aperiam
        </p>
      </li>
      <li class="jtwt_tweet">
       <div class="tweet-entry">      
        <a target="_blank" href="#">LORINA MATSUURA</a> on <time datetime="2015-04-27">27 Apr</time>
        </div>
        <p class="jtwt_tweet_text">
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <a href="#">#deserunt</a> mollit anim id est laborum.
        </p>
      </li>   
    </ul>
  </aside><!-- //#tweets -->

 </div>
      
      
 </div><!-- //.main-wrapper -->
 
	  <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Booking information of <span id="nameHeading"></span></h4>
            </div>
            <div class="modal-body">
				
					<div class="row">
						<div class="col-md-12">
							Login via
							<div class="social-buttons">
								<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
                                or
							<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> keep me logged-in
									</label>
								</div>
							</form>
						</div>
							<div class="bottom text-center">
								New here ? <a href="#"><b>Join Us</b></a>
							</div>
					</div>
				
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger col-md-2 col-md-offset-5" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

 
<!-- Footer -->         
<footer class="site-footer clearfix">
           <div id="footer-sidebar">                  
             <aside class="widget">
             
                 <div id="copy">
                   &copy;2015  
                   <span id="f-site-name" class="site-name">Grid 312</span> 
                   <span id="f-site-desc">Professional Blog HTML Template</span>
                 </div>
                    <nav class="navbar navbar-footer">
                        <ul class="nav navbar-nav">
                            <li><a href="sitemap.html">site map</a></li>
                            <li><a href="#">licenses</a></li>                            
                        </ul>
                    </nav>          
               
               <div id="footer-social">
               <a href="#" class="social facebook"><i class="fa fa-facebook"></i></a>
               <a href="#" class="social twitter"><i class="fa fa-twitter"></i></a>
               <a href="#" class="social google-plus"><i class="fa fa-google-plus"></i></a>
               <a href="#" class="social linkedin"><i class="fa fa-linkedin"></i></a>
               <a href="#" class="social rss"><i class="fa fa-rss"></i></a>
             </div>
             
            </aside>
        
           </div> <!-- //.footer-sidebar -->
        </footer>
</div> <!-- //.main -->

<?php $this->load->view('footer/footerInclude'); ?>
</body>
</html>
