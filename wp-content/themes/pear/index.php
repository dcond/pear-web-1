<div id="fullpage">
    <div class="landing">
      <div class="section" id="section1">
        <div class="landing-hero">
      <div class="content">
         <?php get_template_part( 'templates/header-home' ); ?>
        
         <?php echo do_shortcode( '[PearSubForm]' ); ?>

        </div>
         <div class="announcement-bar">
              <h6>Just launched in London! <span>🇬🇧</span>
          </div>
      </div>
    </div>
    <div class="hero-cover">
      <figure class="hero-cover-1"></figure>
      <figure class="hero-cover-2"></figure>
      <figure class="hero-cover-3"></figure>
    </div>
    <div id="menu-toggle-indicator"> </div>
    </div>
  
    <?php $path = get_template_directory_uri(); ?>

      <!-- <div class="section" id="section2">
        <div id="nav-about-trigger"></div>
        <div class="scroll-container">
          <div class="scroll-text">
            <h1>Create an account</h1>
            <p>Provide the reader with a basic impression of how actual text will appear.</p>
          </div>
          <div class="section-device">
            <figure class="device">
              <div class="device-screen">
                <video class="video" loop muted data-autoplay data-keepplaying>
                  <source src="<?= $path ?>/dist/images/video-1.mp4" type="video/mp4">
                  <source src="<?= $path ?>/dist/images/movie-1.webm" type="video/webm">
                  <source src="<?= $path ?>/dist/images/movie-1.ogv" type="video/ogv">
                </video>
                <figure class="screen-1"></figure>
              </div>
            </figure>
          </div>
        </div>
      </div> -->
      <!--About End-->
       <div class="section" id="section2">
        <div class="scroll-container">
          <div class="scroll-text">
            <h1>Create an account and edit your profile</h1>
            <p>Personalize your profile by adding pics and providing information about yourself.</p>
          </div>
          <div class="section-device">
            <figure class="device">
              <div class="device-screen">
                <video class="video" loop muted data-autoplay data-keepplaying>
                  <source src="<?= $path ?>/dist/images/video-2.mp4" type="video/mp4">
                  <source src="<?= $path ?>/dist/images/movie-2.webm" type="video/webm">
                  <source src="<?= $path ?>/dist/images/movie-2.ogv" type="video/ogv">
                </video>
                <figure class="screen-2"></figure>
              </div>
            </figure>
          </div>
        </div>
      </div>
      <div class="section" id="section3">
        <div class="scroll-container">
          <div class="scroll-text">
            <h1>Start comparing</h1>
            <p>Repeatedly choose your preferred partner among the two that will be displayed to you.</p>
          </div>
          <div class="section-device">
            <figure class="device">
              <div class="device-screen">
                <video class="video" loop muted data-autoplay data-keepplaying>
                  <source src="<?= $path ?>/dist/images/video-3.mp4" type="video/mp4">
                  <source src="<?= $path ?>/dist/images/video-3.webm" type="video/webm">
                  <source src="<?= $path ?>/dist/images/movie-3.ogv" type="video/ogv">
                </video>
                <figure class="screen-3"></figure>
              </div>
            </figure>
          </div>
        </div>
      </div>
      <!-- <div class="section" id="section5">
        <div class="scroll-container">
          <div class="scroll-text">
            <h1>Meet your matchmates and pear up</h1>
            <p>Our Nobel-prize winning algorithm matches you with people you rank high, and also rank you highly.</p>
          </div>
          <div class="section-device">
            <figure class="device">
              <div class="device-screen">
                <video class="video" loop muted data-autoplay data-keepplaying>
                  <source src="<?= $path ?>/dist/images/video-4.mp4" type="video/mp4">
                  <source src="<?= $path ?>/dist/images/video-4.webm" type="video/webm">
                  <source src="<?= $path ?>/dist/images/movie-4.ogv" type="video/ogv">
                </video>
                <figure class="screen-4"></figure>
              </div>
            </figure>
          </div>
        </div>
      </div> -->
      <div class="section" id="section4">
        <div class="scroll-container">
          <div class="scroll-text">
            <h1>Meet your matches and pear up</h1>
            <p>Our Nobel-prize winning algorithm matches you with people you rank high, and also rank you highly.</p>
          </div>
          <div class="section-device">
            <figure class="device">
              <div class="device-screen">
                <video class="video" loop muted data-autoplay data-keepplaying>
                  <source src="<?= $path ?>/dist/images/video-5.mp4" type="video/mp4">
                  <source src="<?= $path ?>/dist/images/video-5.webm" type="video/webm">
                  <source src="<?= $path ?>/dist/images/movie-5.ogv" type="video/ogv">
                </video>
                <figure class="screen-5"></figure>
              </div>
            </figure>
          </div>
        </div>
      </div>
    <div class="section" id="section5">
        <!--Blog-->  
    <div id="nav-blog-trigger"></div>
     <div class="landing-blog section-cover blog">
          <div class="container col-md-9">
            <div class="row collapse">
              <div class="col-xs-12 section-title">
                <h1 class="text-center">From the blog</h1>
                <h3 class="text-center" style="margin: 0 auto;">Matches that matter</h3>
              </div>
            </div>
          </div>
      </div>
    <div class="blog">
     <div class="container col-md-10"> 
     <div class="row">
    <?php
    $args = array( 'posts_per_page' => 2,'orderby' => 'post_date', 'order' => 'ASC');

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post );
    ?>
        <div class="blog-post col-md-6">
          <a href="<?php the_permalink(); ?>">
            <div class="row collapse">
              <div class="col-xs-12 col-sm-8 col-lg-7 post-details">
                <!-- <div class="post-date"><?php echo $post->post_date; ?></div> -->
                <h1><?php the_title(); ?></h1>
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="col-xs-12 col-sm-4 col-lg-5 post-thumb">
                <img src="<?php echo get_the_post_thumbnail_url( $post->ID) ?>">
              </div>
            </div>
          </a>
        </div>


    <?php endforeach; 
    wp_reset_postdata();?>
    </div>
          <div class="row mt32 mb96">
              <a href="/latest-posts/" class="button green medium">View all post</a>
            </div>
    </div>
    </div>
    <!--End of Blog-->
    </div>
    <div class="section" id="section6">
        <!--Support-->
    <div id="nav-support-trigger"></div>
    <div class="section-cover landing-support">
      <div class="container col-md-10">
        <div class="row collapse">
          <div class="col-xs-12 section-title">
            <h1>Support</h1>
            <h3>Frequently Asked Questions</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="landing-support support">
      <div class="container col-md-10">
        <div class="row">
          <div class="item">
            <h5 class="clickable title">Why am I asked to look at two profiles of potential partners at once?</h5>
            <p class="desc">Let’s say you are showed Charlie and Jessie. When you click on the Pear icon in Jessie’s pic, you are telling us that you like Jessie more than Charlie. By asking you to perform more comparisons, we can figure out who you like more from who you like less. The more you compare, the more we learn about you, the more your matches improve. So keep comparing!</p>
          </div>
          <div class="item">
            <h5 class="clickable title">Why do I have a fixed number of matches?</h5>
            <p class="desc">We want to create matches that matter. We don’t match you with just about anyone that likes you and you like back. We pair you with the selected few you like the most, that also like you back.</p>
          </div>
        </div>
        <div class="row mt16 mb96">
          <a href="/support" class="button green medium">View all FAQs</a>
        </div>
      </div>
      </div>
      <footer>
  <div class="container col-md-9">
    <div class="row">
      <div class="col-xs-12 col-lg-10">
        <ul>
          <li><a href="https://www.dropbox.com/sh/rg3hglkzcci00k4/AABvMMudr9Wu8LNOpVNc8-1la?dl=0" target="_blank">Press Kit</a></li>
          <li><a href="/terms">Terms and conditions</a></li>
          <li><a href="https://www.iubenda.com/privacy-policy/7925207" target="_blank">Privacy</a></li>
          <li>
            <a href="mailto:support@pear.me" target="_blank">Contact</a></li>
          <li><a href="http://www.algorithmicmatching.com" target="_blank">Algorithmic Matching</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-lg-2">
        <ul class="footer-social">
          <li>
            <a href="https://www.instagram.com/pearmeapp/" target="_blank">
              <svg width="24" height="25" viewBox="0 0 24 25">
                <g fill="#000000" fill-rule="evenodd" transform="translate(1 1.5)">
                  <path d="M11,1.98484524 C13.9362143,1.98484524 14.2839802,1.99606349 15.4436508,2.04896825 C16.5158016,2.09790079 17.0980159,2.277 17.4855476,2.42759524 C17.9631786,2.60387984 18.3952294,2.88496792 18.7499365,3.25019444 C19.115163,3.60490159 19.3962511,4.03695239 19.5725357,4.51458333 C19.723131,4.90207143 19.9022738,5.48432937 19.9511627,6.55648016 C20.0040675,7.71606349 20.0152857,8.06382937 20.0152857,11.000131 C20.0152857,13.9364325 20.0040675,14.2841111 19.9511627,15.4437817 C19.9022302,16.5159325 19.7230873,17.0981468 19.5725357,17.4856786 C19.20259,18.4447048 18.4445739,19.202721 17.4855476,19.5726667 C17.0980595,19.7232619 16.5158016,19.9024048 15.4436508,19.9512937 C14.2842857,20.0041984 13.9365198,20.0154167 11,20.0154167 C8.06348016,20.0154167 7.71584524,20.0041984 6.55634921,19.9512937 C5.48419841,19.9023611 4.90198413,19.7232183 4.51445238,19.5726667 C4.03682077,19.3963834 3.60476969,19.1152951 3.25006349,18.7500675 C2.88483812,18.3953594 2.60375022,17.9633088 2.42746429,17.4856786 C2.27686905,17.0981905 2.09772619,16.5159325 2.0488373,15.4437817 C1.99593254,14.2842421 1.98471429,13.9364325 1.98471429,11.000131 C1.98471429,8.06382937 1.99593254,7.71615079 2.0488373,6.55648016 C2.09776984,5.48432937 2.27686905,4.90211508 2.42746429,4.51458333 C2.60376856,4.03692859 2.88488726,3.60486166 3.25015079,3.25015079 C3.60485889,2.88492542 4.03690941,2.60383752 4.51453968,2.42755159 C4.90202778,2.27695635 5.48428571,2.09781349 6.55643651,2.0489246 C7.71601984,1.99601984 8.06378571,1.98480159 11.0000873,1.98480159 L11,1.98484524 Z M11.0000873,0.0034484127 C8.0135873,0.0034484127 7.63897619,0.0161071429 6.46625397,0.0696230159 C5.29575794,0.123051587 4.4964246,0.308916667 3.79696429,0.58077381 C3.06322058,0.856892632 2.39853783,1.28974083 1.84926587,1.84913492 C1.28974572,2.39837244 0.856776657,3.06305778 0.580555556,3.79683333 C0.308916667,4.4963373 0.123051587,5.29567063 0.0698412698,6.46616667 C0.0161071429,7.63888889 0.0034484127,8.0135 0.0034484127,11 C0.0034484127,13.9865 0.0161071429,14.3611111 0.0698412698,15.5338333 C0.123269841,16.7043294 0.309134921,17.5036627 0.580992063,18.203123 C0.857112144,18.9368661 1.28996017,19.6015486 1.84935317,20.1508214 C2.39862335,20.7102177 3.06330661,21.1430662 3.79705159,21.4191825 C4.49655556,21.6910397 5.29588889,21.8769048 6.46634127,21.9303333 C7.6392381,21.9838492 8.01371825,21.9965079 11.0001746,21.9965079 C13.986631,21.9965079 14.3612857,21.9838492 15.5340079,21.9303333 C16.704504,21.8769048 17.5038373,21.6910397 18.2032976,21.4191825 C19.6803856,20.8479014 20.848076,19.680211 21.4193571,18.203123 C21.6912143,17.503619 21.8770794,16.7042857 21.9305079,15.5338333 C21.9840238,14.3609365 21.9966825,13.9864563 21.9966825,11 C21.9966825,8.01354365 21.9840238,7.63888889 21.9305079,6.46616667 C21.8770794,5.29567063 21.6912143,4.4963373 21.4193571,3.79687698 C21.1432408,3.063132 20.7103923,2.39844874 20.150996,1.84917857 C19.6017129,1.28967296 18.9369817,0.856732971 18.2031667,0.580555556 C17.5036627,0.308916667 16.7043294,0.123051587 15.5338333,0.0698412698 C14.3611111,0.0161071429 13.9865,0.0034484127 11,0.0034484127 L11,0.0034484127 L11.0000873,0.0034484127 Z" />
                  <path d="M11,5.35311508 C7.88131157,5.35311508 5.35311508,7.88131157 5.35311508,11 C5.35311508,14.1186884 7.88131157,16.6468849 11,16.6468849 C14.1186884,16.6468849 16.6468849,14.1186884 16.6468849,11 C16.6468849,7.88131157 14.1186884,5.35311508 11,5.35311508 L11,5.35311508 Z M11,14.6654881 C8.97561251,14.665464 7.33453948,13.0243584 7.33455556,10.9999709 C7.33457163,8.97558341 8.97567071,7.33450387 11.0000582,7.33451191 C13.0244457,7.33451994 14.6655317,8.97561251 14.6655317,11 C14.6655076,13.0244002 13.0244002,14.6654881 11,14.6654881 Z" />
                  <circle cx="16.87" cy="5.13" r="1.32" />
                </g>
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/pearmeapp/" target="_blank">
              <svg width="24" height="25" viewBox="0 0 24 25">
                <path fill="#000000" fill-rule="evenodd" d="M17.1875,3.82426087 L13.6521141,3.82426087 C13.2349018,3.82426087 12.7682676,4.36685414 12.7682676,5.09333884 L12.7682676,7.61446778 L17.1875,7.61446778 L17.1875,11.2082968 L12.7682676,11.2082968 L12.7682676,22 L8.59499512,22 L8.59499512,11.2082968 L4.8125,11.2082968 L4.8125,7.61446778 L8.59499512,7.61446778 L8.59499512,5.49971622 C8.59499512,2.46664259 10.7270305,0 13.6521141,0 L17.1875,0 L17.1875,3.82426087 Z" transform="translate(1 1.5)" />
              </svg>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/pearmeapp" target="_blank">
              <svg width="24" height="25" viewBox="0 0 24 25">
                <path fill="#000000" fill-rule="evenodd" d="M23.0505559,2.23529492 C22.2029695,2.61140339 21.2925966,2.86566102 20.3354237,2.97994576 C21.3123051,2.39497627 22.060678,1.46800678 22.4140271,0.364759322 C21.5015186,0.906528814 20.4897356,1.30002712 19.4114441,1.51193898 C18.5495797,0.593267797 17.3205763,0.0197084746 15.9608746,0.0197084746 C13.3509966,0.0197084746 11.2343797,2.13547119 11.2343797,4.74687458 C11.2343797,5.11688136 11.2760542,5.47785763 11.3561695,5.8244339 C7.42734915,5.62698305 3.94419661,3.74503729 1.61273898,0.885416949 C1.2056339,1.58381695 0.972610169,2.39583051 0.972610169,3.26221017 C0.972610169,4.90204068 1.80726102,6.34887458 3.07549831,7.1964 C2.30064407,7.17223729 1.57185763,6.9595322 0.933986441,6.60538983 L0.933986441,6.66512542 C0.933986441,8.95570169 2.5632,10.8656542 4.72588475,11.3000339 C4.32860339,11.4088881 3.91167458,11.4657559 3.48034576,11.4657559 C3.17538305,11.4657559 2.87951186,11.4368949 2.59047458,11.3825288 C3.19204068,13.2599593 4.93785763,14.6265559 7.00584407,14.6651797 C5.38797966,15.9334169 3.34940339,16.6894169 1.13528136,16.6894169 C0.753925424,16.6894169 0.377023729,16.6666576 0.00701694915,16.6220542 C2.09934915,17.9636949 4.58365424,18.7469085 7.25332881,18.7469085 C15.948,18.7469085 20.7031729,11.5437356 20.7031729,5.29706441 C20.7031729,5.09198644 20.6986576,4.8884339 20.6887729,4.68561356 C21.6149492,4.01583051 22.417139,3.18349831 23.0505559,2.23529492 Z" transform="translate(.468 3.103)" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
</div>
 





