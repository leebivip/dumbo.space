<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DUMBO Roof Deck | Contact Us!</title>
    <?php
    include ("_header.html")
    ?>
  </head>


  <body>
<!-- Google Analytics code -->
<?php include_once("analyticstracking.php") ?>

    <!-- Facebook SDK code -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">DUMBO Roof Deck</a>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php"><!-- <span class="glyphicon glyphicon-home"></span> --> Home</a></li>
                <li><a href="photos.php"><!-- <span class="glyphicon glyphicon-camera"></span> --> Photos</a></li>
                <li><a href="https://www.facebook.com/dumbospace" target="_blank">Like Us</a></li>
                <li class="active"><a href="contactform.php"><!-- <span class="glyphicon glyphicon-envelope"></span> --> Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <div class="fb-share-button" style="padding-top:15px" data-href="http://dumbo.space/" data-layout="button_count"></div>
                </li>
              </ul>              
            </div><!--/.nav-collapse -->

          </div> <!-- End container -->

        </div>  <!-- End Nav Bar -->
        <div class="clear"></div>


        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
        </br>
        </br>
        </br>
          <div class="jumbotron">
            <h1 class="contactUsText">Contact Us!</h1>
            <p>For pricing information, availability and further details, please reach out to us below.</p>
          </div>

          <div class="row">
            <section class="col-md-6">
              
              <form name="contactform" method="post" action="send_form_email.php">
               
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="full_name" class="form-control" placeholder="Please enter your full name">
                    </div> 
                  
                    </br>
                                   
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="text" name="email" class="form-control" placeholder="you@yourdomain.com">
                    </div>
                  
                    </br>
                
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                      <input type="text" name="telephone" class="form-control" placeholder="Please enter your phone number">
                    </div>
                  
                    </br>
                                    
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                      <textarea class="input-xxlarge col-md-6 form-control" name="comments" placeholder="Please provide us with the anticipated date for the rental and basic information regarding the event (e.g. film shoot, wedding, etc.)"></textarea>
                    </div>
                  
                    </br>

                   <input type="submit" value="Send" id="submit-button" class="btn btn-lg btn-success"><a href="http://20JayStreet.charliegigante.com/send_form_email.php"></a>
                 </br>
                                     
              </form>

            </section>



            <section class="col-md-6">
              <div class="well">
                <section id="canvas1" class="map">
                  <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12098.459104290821!2d-73.98995099999999!3d40.704480999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316f3eb0fb%3A0xceb1d92c1cafc9c3!2sDumbo%2C+Brooklyn%2C+NY!5e0!3m2!1sen!2sus!4v1407014358025" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                </section>  
              </div>

            </section>
          </div>




          <!-- FOOTER -->
          <?php
          include ("_footer.html")
          ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- The following script prevents Google Maps iframe from capturing the mouse's scrolling wheel behavior  -->
<script>
  $(document).ready(function () {
      // you want to enable the pointer events only on click;
      $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
      $('#canvas1').on('click', function () {
          $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
      });

      // you want to disable pointer events when the mouse leave the canvas area;

      $("#map_canvas1").mouseleave(function () {
          $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
      });
  });
</script>

    
        </div> <!-- End main container "marketing" div -->

  </body>

</html>