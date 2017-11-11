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

<!--    <nav class="navbar navbar-default navbar-fixed-top">
    	<div class = "container-fluid">
	    	
  	     	<div id = "title">
  	    		<div class = "col-md-3">
  	    			<h3><b>Shopping Assistant</b></h3>
  	    		</div>
  	    	</div>

          
          <div class = "col-md-4">
            <div id = "Links">   
              <ul class="nav nav-pills">
                <li role="presentation">
                  <a href="HomePage.php"><h4><span class="glyphicon glyphicon-home"></span> Home</h4></a>
                </li>

                <li><h2></h2></li>
                
                <li role="presentation">
                  <a href="ShoppingCart.php"><h4><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h4></a>
                </li>
              </ul>
            </div>  
          </div>  

          <div id="custom-search-input">
            <div class="input-group col-md-5">
              <input type="text" class="  search-query form-control" placeholder="Search for Item" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-danger">
                  <span class=" glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </div>

      </div>    
    </nav>
-->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>        
        </div>

        <div class="collapse navbar-collapse">
          <ul class = "nav navbar-nav navbar-left">
          <a id = "title" class="navbar-brand" href="HomePage.php"><h3><strong>Advanced Shopping Assistant</strong></h3></a>  
          </ul> 

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
            <ul class="nav navbar-nav navbar-right">
              <li><a href="HomePage.php" style =" color: #33a8ff;"><h4><span class="glyphicon glyphicon-home"></span> Home</h4></a></li>
              <li><a href="ShoppingCart.php" style =" color: #33a8ff;"><h4><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h4></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>      

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
                <img class="img-responsive" src="http://placehold.it/200x250" width = "100%" height = "100%">
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
        </div>
      </div>

    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  </body>
</html>