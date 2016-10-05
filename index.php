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

    <div class="cover-middle">
      <div class="container flex-center">
        <div class="cover-content text-xs-center">
          <h1 class="display-3">INSPIRED THAI CUISINE</h1>
          <p class="lead">Voted New York's Best Thai Restaurant.</p>
        </div>
        <a href="#" class="scroll-hint animated fadeInDown delayp8">
          <img src="<?php echo $prefix;?>assets/img/arrow_down.png" alt="Arrow down hint"/>
        </a>
      </div> 
    </div>

    <section class="a-destination flex-center">
      <div class="container text-xs-center">
        <h3>A DESTINATION</h3>
        <br>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
    </section><!--. end of a-destination -->

    <section class="eat-together flex-center">
      <div class="container text-xs-center">
        <h2>EAT TOGETHER</h2>
        <p>Every plate achieves that elusive, cuisine-defining balance of sweet, salty, and sour — even dessert.</p>
        <a href="" class="btn btn-primary">Make a Reservation</a>
      </div>
    </section><!--. end of eat-together -->

    <section class="view-menus">
      <div class="row">
        <div class="col-md-4">
          <img src="assets/img/view-menus_1.jpg" class="img-responsive">
        </div>
        <div class="col-md-4">
          <img src="assets/img/view-menus_2.jpg" class="img-responsive">
        </div>
        <div class="col-md-4">
          <img src="assets/img/view-menus_3.jpg" class="img-responsive">
        </div>
        <div class="col-md-6">
          <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam.

          Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl   consectetur et. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div clss="col-md-6">
          <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum.

          Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        </div>
        <a href="" class="btn btn-primary"> VIEW MENUS </a>
      </div>
    </section><!--. end of view-menus -->

    <section class="the-kitchen flex-center">
      <h1 class="text-xs-center">THE KITCHEN</h1>
    </section><!--. end of the-kitchen -->

    <section class="menu-examples">
      <div class="row">
        <div class="col-md-4">
          <h2>LIZ GRISAITIS</h2>
          <h4>EXECUTIVE CHEF</h4>

          <p>Nullam quis risus eget urna mollis ornare vel eu leo. Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-md-4">
          <h2>MATTEO CAPON</h2>
          <h4>CHEF DE CUISINE</h4>

          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque.</p>
        </div>
        <div class="col-md-4">
          <h2>ANGIE WALSH</h2>
          <h4>PASTRY CHEF</h4>

          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis.</p>
        </div>
        <div class="col-md-6">
          <img src="assets/img/menu-examples_1.jpg" class="img-responsive">
        </div>
        <div class="col-md-6">
          <img src="assets/img/menu-examples_2.jpg" class="img-responsive">
        </div>
      </div>
    </section>




    <?php include($prefix."static/footer.php"); ?>
    
    <?php include($prefix."static/script.php"); ?>

  </body>
</html>
