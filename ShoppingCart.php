<!doctype html>
<html lang="en">
  <head>
    <title>Shopping Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "ShoppingCart.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

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
            </ul>
          </div>
        </div>
      </div>
    </nav>      


    <div class = "container">  
      <div class = "row">
      	<div id = "row2">
      		<div class="col-md-offset-1">
        		<h4><strong><i>Shopping Cart:</i></strong></h4>
        	</div>
        </div>
      </div>
    </div>  

    <div id = "ProductDisplay">
		<div class="container">
		    <div class="row">
		        <div class="col-sm-12 col-md-10 col-md-offset-1">

		    	<div class = "panel panel-default">
		    	<div class ="panel-body">
		            <table class="table table-hover">
		                
		                <thead>
		                    <tr>
		                        <th>Product</th>
		                        <th>Quantity</th>
		                        <th class="text-center">Price</th>
		                        <th class="text-center">Total</th>
		                        <th> </th>
		                    </tr>
		                </thead>

		                <tbody>

		                	<!--Replicate this row for more products-->
		                    <tr>
		                        <td class="col-sm-8 col-md-6">
			                        <div class="media">
			                            <div class="media-left">
			                            	<img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;">
			                            </div>	
			                            <div class="media-body">
			                                <h4 class="media-heading">Product name</h4>
			                                <h5 class="media-heading">Shop Name</h5>
			                            </div>
			                        </div>
		                        </td>

		                        <td class="col-sm-1 col-md-1" style="text-align: center">
		                        	<strong>Quantity</strong>
		                        </td>

		                        <td class="col-sm-1 col-md-1 text-center"><strong>Per unit cost</strong></td>
		                        <td class="col-sm-1 col-md-1 text-center"><strong>Total cost</strong></td>
		                        <td class="col-sm-1 col-md-1">
			                        <button type="button" class="btn btn-danger">
			                            <span class="glyphicon glyphicon-remove"></span> Remove
			                        </button>
			                    </td>
		                    </tr>
		                    <!---->


		                    <tr>
		                        <td>   </td>
		                        <td>   </td>
		                        <td>   </td>
		                        <td><h3>Total</h3></td>
		                        <td class="text-right"><h3><strong>Total</strong></h3></td>
		                    </tr>
		                    <tr>
		                        <td>   </td>
		                        <td>   </td>
		                        <td>   </td>
		                        <td>
		                        <button type="button" class="btn btn-info">
		                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
		                        </button></td>
		                        <td>
		                        <button type="button" class="btn btn-success">
		                            Checkout <span class="glyphicon glyphicon-play"></span>
		                        </button></td>
		                    </tr>
		                </tbody>
		            </table>
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