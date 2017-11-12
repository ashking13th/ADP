<!doctype html>
<html lang="en">
  <head>
    <title>Search Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "ItemDisplay.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-bootsnipp animate" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <div class="animbrand">
            <a class="navbar-brand animate" href="CustomerHomePage.php" style="margin-top: 20px; color: #FFFFFF;">Advanced Shopping Assistant</a>
          </div>
        </div>

      <form class = "nav navbar-form navbar-left">
        <div id="custom-search-input">
          <div class="input-group col-md-12">
            <input type="text" class="  search-query form-control" placeholder="Search for Item" />
            <span class="input-group-btn">
              <button type="button" class="btn btn-danger">
                <span class=" glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
        </div>
      </form>

        <div id = "Links">
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	          <ul class="nav navbar-nav navbar-right">
	          <li><a href="CustomerHomePage.php" style ="background-color: transparent !important;color: #FFFFFF;"><h4><span class="glyphicon glyphicon-home"></span> Home</h4></a></li>
	          <li><a href="#" style ="background-color: transparent !important;color: #FFFFFF;"><h4><span class="glyphicon glyphicon-map-marker"></span> Find Shop</h4></a></li>
	          <li><a href="ShoppingCart.php" style ="background-color: transparent !important;color: #FFFFFF;"><h4><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h4></a></li>
	          </ul>
	        </div>
        </div>
      </div>
    </nav>

    <div id= "bod">

    <div class = "container">  
      <div class = "row">
      	<div id = "row2">
        	<h3><small><i>Search Results:</i></small></h3>
        </div>
      </div>
    </div>  

    <div class = "container">

    <!-- This marks each display unit which needs to be replicated-->
      <div class = "row">
        <div id = "custom_item_display_unit">

          <div class="panel panel-default">
            <div class="panel-body">

              <div class = "col-md-2">
                <img class="img-responsive" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" width = "100%" height = "100%">
              </div>

              <div class = "col-md-4">
                <div class = "row">
                  <div class ="col-md-12">
                    <div  id = "product-details">
                      <h2 class="product-name"><strong>Product name</strong></h2>
                      <h3><small>Shop Details</small></h3>
                    </div>  
                  </div>
                </div>  
              </div>

              <div class = "col-md-4">
                <div class ="row">
                  <div class ="col-md-12">
                    <h1><span id ="mapmarker" class="glyphicon glyphicon-map-marker"></span></h1>
                  </div>
                </div>
                <div class ="row">
                  <div class ="col-md-12">
                    <h3 id = "shopdist"><small>Shop distance</small></h3>
                  </div>
                </div>  
              </div>   

              <div class = "col-md-2">
                <div class = "row">
                  <div class = "col-md-12">
                    <h3><small>Quantity:    <input type="number" name = "quantity" min="1" max="10" id = "Quantity"></small></h3>
                  </div>  
                </div>
                <div class = "row">
                  <div class = "col-md-12">
                    <button type="button" class="btn btn-info btn-sm" id = "addtocart">
                      <h5><span class="glyphicon glyphicon-shopping-cart"></span> ADD TO CART </h5>  
                    </button>
                  </div>
                </div>  
              </div>
            </div>
          </div>  
          <!---->
        </div>
      </div>

    </div>

    <div class = "container">  
      <div class = "row">
        <h3 align="center"><small><i>No more results to display!</i></small></h3>
      </div>
    </div>  

    </div>

  <footer class = "foot">
    <div class="container">
      Applied Database Practicum
    </div>  
  </footer>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  </body>

</html>