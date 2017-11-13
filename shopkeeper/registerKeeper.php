<html lang="en">
  <head>
    <title >Advanced Shopping Assistant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "shopkeeper.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
    <nav style="color: 000;" class="navbar navbar-fixed-top" role="navigation" style="z-index: 9999999">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="animbrand">
                <a style="color: white;" class="navbar-brand animate" href="index.html">Advanced Shopping Assistant</a>
              </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href = "ShopkeeperLogin.php" style = "background-color: transparent !important;color: #FFF"><b>Login</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

  <body style="background-color: #f6f7f2;">
  <div id = "bod">      
        <div class="container" align = "center">

       
            <div class="row" align = "center">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">

                        <div style="background-color: transparent;" class="panel panel-info">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Register</h3>
                              </div>
                            <div class="panel-body">
                      
                                <form accept-charset="UTF-8" role="form" class="form-signin"  action="ShopkeeperLogin.php" method = "POST">
                                <fieldset>
                                    <label class="panel-login" >
                                        <div class="login_result"></div>
                                    </label>

                                    <input style="background-color: transparent;" class="form-control" placeholder="Username" id="username" type="text" name = "username">
                                     <input style="background-color: transparent;" class="form-control" placeholder="User Id" id="user_id" type="text" name = "User Id">
                                      <input style="background-color: transparent;" class="form-control" placeholder="Phone Number" id="username" type="text" name = "Phone Number">
                                    <input style="background-color: transparent;" class="form-control" placeholder="Password" id="password" type="password" name="pass">
                                    <br></br>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" id="Register" value="Register »"><h3></h3>
                                    <li><a href = "Shopkeeperlogin.php" style = "background-color: transparent !important;color: #002699"><b>Login</b></a></li>
                                    
                                </fieldset>
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
                <center><p class="footertext" style="color: black;"">Copyright CS207</p></center></p>
                <p><center style="color: #FFF;">Akai Amru Boris Ani</center>
            </div>
        </div>
    </div>  
  </footer>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  </body>
  </html>
