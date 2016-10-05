<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."static/head.php"); ?>
    <?php //include($prefix."static/analytics.php"); ?>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <?php include($prefix."static/navbar.php"); ?>

    <!-- <div class="cover">
      <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="m-y-2">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
    </div> -->
    <div class="cover-read-me flex-center">
      <div class="container">
        <div class="cover-content text-xs-center">
          <h1 class="display-3">READ ME</h1>
          <p class="lead">Marquee helps tell your story in a dynamic, engaging, and fun way. Amplify the narrative of your website and give your visitors a memorable viewing experience through stunning, full-screen imagery.</p>
        </div>
      </div> 
    </div>

    <section class="read-me">
      <div class="row">
        <div class="col-md-12 m-b-3">
          <h3>PARALLAX SCROLLING</h3>
          <p>Marquee utilizes an effect known as "parallax scrolling" (different elements on the page scroll at different speeds) on the header images to present your content in a dynamic and interactive way.</p>
        </div>

        <div class="col-md-12 m-b-3">
          <h3>THE INDEX COLLECTION</h3>
          <p>Build your presentation-style layout by adding pages to the Index Collection. The Thumbnail Image for each page will be its "header" image. The Thumbnail Image, Page Title, and Description are set in Page Settings.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <img src="assets/img/index-collection-read-me-1.jpg">
        </div>
        <div class="col-md-6 m-b-3">
          <img src="assets/img/index-collection-read-me-2.jpg">
        </div>
      
        <div class="col-xs-12 pul-xs-left m-b-3">
          <h3 class="m-b-3 pull-xs-left">OTHER NOTABLE FEATURES</h3>
        </div>
        
        <div class="col-md-6 m-b-3">
          <h4>Turn off parallax scrolling</h4>
          <p>You can turn off the parallax scrolling effect if you just want a simple single-page layout.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <h4>Index Image Height</h4>
          <p>You can set the height of all the index images to be full-screen, two-thirds or half.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <h4>First Index Image Fullscreen</h4>
          <p>You can choose to have the first image in the Index collection be fullscreen or match the height of the other images.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <h4>Title & Description Position</h4>
          <p>You can choose to place the Title & Description on top of or under the main image.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <h4>Hide Page Title</h4>
          <p>You can choose to hide the page/collection titles.</p>
        </div>

        <div class="col-md-6 m-b-3">
          <h4>Footer Background Color</h4>
          <p>Set the footer background color. The color of the text in the footer will be automatically set to white or black depending on the lightness of the color you chose to ensure it is legible.</p>
        </div>
        <div class="col-md-6 m-b-3">
          <h4>Hide Parallax Nav</h4>
          <p>You can hide the index nav.</p>
        </div>
      </div>
    </section>


    <?php include($prefix."static/footer.php"); ?>
    
    <?php include($prefix."static/script.php"); ?>

  </body>
</html>
