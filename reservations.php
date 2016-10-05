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
    <div class="cover-reservations">
      <div class="container flex-center">
        <div class="cover-content text-xs-center">
          <h1 class="display-3">RESERVATIONS</h1>
          <p class="lead">We accept a limited number of reservations up to one month in advance for parties of up to ten guests.</p>
        </div>
      </div> 
    </div>

    <section class="reservations">
      <div class="flex-center">
        <div class="container text-xs-center">
          <h3>MAKE A RESERVATION</h3>
          <h6>POWERED BY OPENTABLE</h6>
          <a href="" class="btn"> FIND A TABLE </a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h4>BY PHONE</h4>
          <p>Prefer to make your reservation via phone? You can make a reservations by calling (347) 989-2823 between 10am and noon.</p>
        </div>
        <div class="col-md-6">
          <h4>SPECIAL EVENTS & PRIVATE PARTIES</h4>
          <p>Catering and Events are opportunities for us to work more closely with our guests, occasions for us to share our dedication to celebration in exciting new ways.</p>
        </div>
        <div class="col-md-12">
          <img src="assets/img/reservations_main.jpg">
        </div>
        <div class="col-md-6">
          <h4>THE BIG ROOM</h4>
          <h6>Seats up to 60</h6>
          <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper.

          Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue.  Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
        <div class="col-md-6">
          <h4>THE SMALL ROOM</h4>
          <h6>Seats up to 15</h6>
          <p>Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui.

          Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes. </p>
        </div>
          <p class="text-xs-center">Call (347) 989-2823 to reserve either room for your reception or party.</p>
      </div>
    </section>


    <?php include($prefix."static/footer.php"); ?>
    
    <?php include($prefix."static/script.php"); ?>

  </body>
</html>
