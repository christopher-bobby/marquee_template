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
    <div class="cover-locations flex-center">
      <div class="container">
        <div class="cover-content text-xs-center">
          <h1 class="display-3">LOCATIONS & CONTACT INFO</h1>
          <p class="lead">All locations open Mon – Thu, 8am – 11pm & Fri – Sun, 11am – 11pm
        </div>
      </div> 
    </div>

    <section class="locations">
      <div class="row m-b-3">
        <div class="col-md-4">
          <h2><strong>BROOKLYN</strong></h2>

          376 Van Brunt St<br>
          Brooklyn, NY — 11231<br>
          718 326-1999
        </div>
        <div class="col-md-4">
          <h2><strong>QUEENS</strong></h2>

          47-33 5th St<br>
          Long Island City, NY — 11101<br>
          718 326-9009
        </div>
        <div class="col-md-4">
          <h2><strong>FOOD TRUCK</strong></h2>

          25 Union Square West<br>
          New York, NY — 10003<br> 
          212 326-8734
        </div>
      </div>
      
      <div class="row m-t-3">
        <div class="col-md-4">
          <h2><strong>MEDIA INQUIRIES</strong></h2>

          718 345-6789
          media@restaurant.com
          <br><br>
          <h2><strong>PUBLIC RELATIONS</strong></h2>

          718 987-6543
          pr@restaurant.com

          — 
          All other questions, please use the form on the right
        </div>
        <div class="col-md-8">
          <form>
            <div class="form-group">
              <label for="e-mail">E-mail Address*</label>
              <input type="email" class="form-control" id="e-mail">
            </div>
            <div class="form-group">
              <label for="subject">Subject*</label>
              <input type="text" class="form-control" id="subject">
            </div>
            <div class="form-group">
              <label for="exampleTextarea">Message*</label>
              <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send invitation</button>
          </form>
        </div>
      </div>
    </section>


    <?php include($prefix."static/footer.php"); ?>
    
    <?php include($prefix."static/script.php"); ?>

  </body>
</html>
