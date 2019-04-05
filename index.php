<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
.page-header {
    background-color: #C21807;
    text-align: center;
} 
.page-footer {
    background-color: #C21807;
    text-align: center;
} 
</style>
    <title>Ethio-djibouti railwayline online booking</title>
  </head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>ETHIOPIA</b> Djibouti SGR</a>
    </div>
    <!-- collapsable navigation bar-->
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-inverse p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="font-size:16px;"><a href="index.php"> Home </a> <span class="sr-only">(current)</span></a></li>
        <li style="font-size:16px;"><a href="about/about.php">About Us</a></li>
        <li style="font-size:16px;"><a href="contact/index.php">Contact Us</a></li>
        <li style="font-size:16px;"><a href="form/registration.php">Book Now!</a></li>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size:16px;"><a href ="admin/login.php">Admin</a></li>
      </ul>
      <!--style="color:blue;margin-left:30px;"> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
          <!--header-->
  <div class="page-header">
      <br>
      <h1 style="font-size:30px; color: black;"> <b>Welcome to Ethio Djibouti train ticket booking.</b></h1>
    </div>

    <body>
    <!--carousel(sliding images)-->
      <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item carousel-item active">
            <img src="images/crew.jpg" alt="">
            <div class="carousel-caption">
              <p>Fast Bookings.</p>
              <div class="carousel-action">
              </div>
            </div>
          </div>  
          <div class="item carousel-item">
            <img src="images/train.jpeg" alt="">
            <div class="carousel-caption">            
              <p>Amazing Experience.</p>
              <div class="carousel-action">
              </div>
            </div>
          </div>
          <div class="item carousel-item">
            <img src="images/pass.jpg" alt="">
            <div class="carousel-caption">
              <p> Best Class.</p>
              <div class="carousel-action">
              </div>
            </div>
          </div>  
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>
          <!--Train schedule Table-->
           <div class="container">            
        <div class="12u">
          <div id="strapline">            
            <h2>Please review the train Daily schedule before Booking.</h2>
            <h3>Railway Advancement.</h3>
            <p> 
            <table>
            <th bgcolor="red">Year(s)</th>
            <th bgcolor="red">Distance</th>
            <tr>
              <td>1902</td>
              <td>311 Km Djibouti-Dire Dawa</td>
            </tr>
            <tr>
              <td>1917-2004</td>
              <td>784 km (Djibouti-Addis Ababa) plus approx. 25 km of station and service lines</td>
            </tr>
            <tr>
              <td>2004-2014</td>
              <td> 311 km (Djibouti-Dire Dawa)</td>
            </tr>
            <tr>
              <td>since 2014</td>
              <td>213 km (Guelile-Dire Dawa)</td>
            </tr>
            </table>
            <h3>Daily Train Schedule.</h3>
            <?php
            require_once 'admin/database.php';
             $db=new database();


            ?>
            <table>
          <tr>
          <th bgcolor="red">STATIONS<br>(Sebata Ethiopia to Port of Doraleh Djibouti)</th>
            <th bgcolor="red">Depature Time</th>
            <th bgcolor="red">Arrival Time</th>
            <th bgcolor="red">Ticket Price</th>
          </tr>
          tr>
                         <tr>
          <td>Sebata Station(Sebata to Adama)</td>

                <?php
                $getrows=$db->getrows("SELECT * FROM sebata");
                foreach ($getrows as $sebata) {?>
                <td><?=$sebata['depature']?></td>

                <td><?=$sebata['arrival']?></td>
                <td><?=$sebata['ticket']?></td>
              <?php }  ?>
             </tr>
              <tr>

                <td>Mieso Station (Adama to Debre Zebit)</td>

                <?php
                $getrows=$db->getrows("SELECT * FROM mieso");
                foreach ($getrows as $mieso) {?>
                  <td><?=$mieso['depature']?></td>

                  <td><?=$mieso['arrival']?></td>
                  <td><?=$mieso['ticket']?></td>
                <?php }  ?>

              </tr>
              <tr>

                <td>Awash Station(Hosaena to Port of Doraleh)</td>

                <?php
                $getrows=$db->getrows("SELECT * FROM awash");
                foreach ($getrows as $awash) {?>
                  <td><?=$awash['depature']?></td>

                  <td><?=$awash['arrival']?></td>
                  <td><?=$awash['ticket']?></td>
                <?php }  ?>
              </tr>
            </table>
            
          </div>
        </div>            
      </div>  

      <div class="container">     
      
        <!-- Features -->     
        <div class="row">                 
          
          <section class="4u">
            <div id="sidebar">
              <section class="12u">


               </section>
              <section class="12u">
                
                
              </section>
            </div>
          </section>



        </div>
        
      </div>

          <!--footer-->
        <div class="page-footer">
      <br>
      <p><a href="twitter.com"> <img src="images/twitter.png" alt="twitter" />&nbsp;<a href="facebook.com"><img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
          <p><a href="index.php">Home</a> | <a href="form/registration.php">Bookings</a> | <a href="About/About.php">About Us</a> || <a href="contact/index.php">Contact Us</a></p>
          <p>Copyright &copy; Charlie Migwi 2018 | <a href="#">Jkuat School Project.</a> 
    </div>

    <!--jquery file-->
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <!-- Javascriptfile-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery code to control functionalities of the slider for carousel-->
    <script>
      $(function(){
        $('.carousel').carousel({
          interval:1000,
          pause: false,
          wrap: false,
          keyboard: true
        });
      )};
    </script>
    </body>
    </html>


    <!-- carousel csss-->
   <style type="text/css">
.carousel{
  margin: 30px 0;
    background: #ccc;
    position: relative;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.carousel:after {
  content: "";
    position: absolute;
    z-index: -1;
    box-shadow: 0 0 20px rgba(0,0,0,0.8);
    height: 60px;
    bottom: 0px;
    left: 10px;
    right: 10px;
    border-radius: 100px / 20px;
}
.carousel .item {
    text-align: center;
  overflow: hidden;
    height: 475px;
}
.carousel .item img {
  max-width: 100%;
    margin: 0 auto; /* Align slide image horizontally center in Bootstrap v3 */
}
.carousel .carousel-control {
  width: 50px;
    height: 50px;
    background: #000;
    margin: auto 0;
  opacity: 0.8;
}
.carousel .carousel-control:hover {
  opacity: 0.9;
}
.carousel .carousel-control i {
    font-size: 41px;
}
.carousel-caption h3, .carousel-caption p {
  color: #fff;
  display: inline-block;
  font-family: 'Oswald', sans-serif;
  text-shadow: none;
  margin-bottom: 20px;
}
.carousel-caption h3 {
  background: rgba(0,0,0,0.9);
  padding: 12px 24px;
  font-size: 40px;  
  text-transform: uppercase;
}
.carousel-caption p {
  background: #8fc93c;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 300;
}
.carousel-action {
  padding: 10px 0 30px;
}
.carousel-action .btn {
  min-height: 34px;
  border-radius: 0;
  margin: 3px;
  min-width: 150px;
  text-transform: uppercase;
  font-family: 'Oswald', sans-serif;
}
.carousel-action .btn-primary {
  border-color: #000;
  background: none;
  color: #000;
}
.carousel-action .btn-primary:hover {
  background: #000;
  color: #fff;
}
.carousel-action .btn-success {
  background: #8fc93c;
  border: none;
}
.carousel-action .btn-success:hover {
  background: #87bd35;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 11px;
  height: 11px;
  border-radius: 50%;
  margin: 1px 6px;
}
.carousel-indicators li {
  background: transparent;
  border: 1px solid #fff;
}
.carousel-indicators li.active {
  background: #8fc93c;
  border-color: #8fc93c;
}
</style>