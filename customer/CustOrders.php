<?php
    include('config.php');
    session_start();   
?>



<html lang="en">
  <head>
    <title>Your Orders</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "CustomerOrders.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-bootsnipp animate" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <div class="animbrand">
            <a class="navbar-brand animate" href="index.html" style="margin-top: 20px; color: #FFFFFF;">Advanced Shopping Assistant</a>
          </div>
        </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
	          <li><a href="index.html" style ="background-color: transparent !important;color: #FFFFFF;"><h3><span class="glyphicon glyphicon-home"></span> Home</h3></a></li>
          </div>
      </div>
    </nav>




    <div id = "bod">


    <div id = "Orders">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class = "panel panel-default" style="background-color: white">
                <div class ="panel-body"  align="center">
                    <form action="processOrder.php" method="post" style="margin-left:40px;">
                        <div class="input-group"> 
                            <span class="input-group-addon" id="sizing-addon1" >+91</span>
                            <input required="" name="phno" type="text" class="form-control" placeholder="Enter your 10-digit mobile number" aria-describedby="sizing-addon1" maxlength ="10" style="width:75%;">
                            <span>
                        <button type="submit" class="btn btn-success" >
                           	View Orders <span class="glyphicon glyphicon-play"></span>
                       	</button>                    
                        </span>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>



      <div class = "container">  
        <div class = "row">
          <div id = "row2">
            <div class="col-md-offset-1">
              <h3><strong><i>Your Orders:</i></strong></h3>
            </div>
          </div>
        </div>
      </div>  

      <div id = "Orders">
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class = "panel panel-default" style="background-color: white">
                <div class ="panel-body"  align="center">
                    <form action="processOrder.php" method="post" style="margin-left:40px;">
                        <div class="input-group"> 
                            <span class="input-group-addon" id="sizing-addon1" >+91</span>
                            <input required="" name="phno" type="text" class="form-control" placeholder="Enter your 10-digit mobile number" aria-describedby="sizing-addon1" maxlength ="10" style="width:75%;">
                            <span>
                        <button type="submit" class="btn btn-success" >
                           	View Orders <span class="glyphicon glyphicon-play"></span>
                       	</button>                    
                        </span>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>


    <footer class = "foot">
      <div class="container">
          <div class="row">
              <h3 class="footertext"></h3>
              <br>
                <div class="col-md-4">
                  <center>
                    <img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/cart-remove-icon.png" class="img-circle" alt="..." width="100px" height="100px">
                    <br>
                    <h4 class="footertext" style="color:#FFF"><b>Shop</b></h4>
                    <p class="footertext" style="color:#FFF">Search for items at nearby shops<br>
                  </center>
                </div>
                <div class="col-md-4">
                  <center>
                    <img src="https://cdn1.iconfinder.com/data/icons/flat-world-currency-1/432/Flat_Currency_Rupee-128.png" class="img-circle" alt="..." width="100px" height="100px">
                    <br>
                    <h4 class="footertext" style="color:#FFF"><b>Pay</b></h4>
                    <p class="footertext" style="color:#FFF">Pay online<br>
                  </center>
                </div>
                <div class="col-md-4">
                  <center>
                    <img src="http://downloadicons.net/sites/default/files/shopping-bag-icon-67528.png" class="img-circle" alt="..." width="100px" height="100px">
                    <br>
                    <h4 class="footertext" style="color:#FFF"><b>Collect</b></h4>
                    <p class="footertext" style="color:#FFF">Collect your order when it's ready<br>
                  </center>
                </div>
              </div>
              <div class="row">
                <center><p class="footertext" style="color: black;">Copyright CS207</p></center></p>
                  <p><center style="color: #FFF;">Akai Amru Boris Ani</center>
              </div>
          </div>
      </div>  
    </footer>
  
  </body>
</html>


<!--    <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
              <div class = "panel panel-success" style="background-color: white">
                <div class="panel-heading" style="text-align: center; background-color: <">
                </div>
                <div class ="panel-body">
                    <form action="processOrder.php" method="post">
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon1" >+91</span>
                            <input required="" name="phno" type="text" class="form-control" placeholder="Enter your 10-digit mobile number" aria-describedby="sizing-addon1" maxlength ="10" style="width:75%;">
                        </div>
                        <button type="submit" class="btn btn-success" >
                           	View Orders <span class="glyphicon glyphicon-play"></span>
                       	</button>                    
                    </form>
                </div>
              </div>
            </div>
          </div>
-->