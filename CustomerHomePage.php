<!doctype html>
<html lang="en">
  <head>
    <title>Advanced Shopping Assistant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "HomePage.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>


    <nav class="navbar navbar-fixed-top navbar-bootsnipp animate" role="navigation" style="z-index: 9999999">
      <div class="container">
        <div class="navbar-header">
          <div class="animbrand">
            <a class="navbar-brand animate" href="HomePage.php">Advanced Shopping Assistant</a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            <li><h4 style = "color: #33a8ff;"><i>Customer Home Page</i></h4></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hp-header">
      <div class="container">
        <h1><b>Advanced Shopping Assistant</b></h1>
        <p><h4>Find and buy groceries at shops near you</h4></p>
      </div>
    </div>

    <div id = "bod">      
      <div class="container" align = "center">

        <div class="row" align = "center">
            <div id="custom-search-input">
              <div class="input-group col-md-12">
                <input type="text" class="  search-query form-control" placeholder="Search for an Item" />
                <span class="input-group-btn">
                  <button type="button" class="btn btn-danger">
                    <span class=" glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>
            </div>
        </div>

        <div class = "row" align = "center">
          <div class = "col-md-12">
          	<div id = "find_button">
              <a class="btn btn-primary btn-lg" href="#" role="button"> Find Shops Near You <span class=" glyphicon glyphicon-map-marker"></span></a>
            </div>
        	</div>
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