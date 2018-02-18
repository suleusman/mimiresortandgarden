<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Mimi Resort and Garden</title>
<meta charset="UTF-8">
<meta name="description" content="Hotel Accommodation and Recreational Environment for Travellers">
<meta name="keywords" content="Hotel,Accommodation,ACO Hotel,Mimi Resort and Garden Ltd, Mimiresortandgarden,Hotels in Abuja,Hotels in Niger State,Zuma Rock, Gurara Water falls, Accommodation in Niger state,Mimi Hotel Nigeria, Mimi resort and garden hotel abuja,FCT Hotels">
<meta name="author" content="Sulaiman Usman G.">  
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    #navbar {
      margin-bottom: 4px;
      border-radius: 0;
	 min-height:70px;
	 text-transform:uppercase;
	 font-weight:bold;
	 background-color:#003;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 2px;
}

#navbar li a, #navbar navbar-brand {
    color:#fff; !important;
	padding-top:25px;
}

#navbar-nav li a:hover, #navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #603 !important;
	 min-height:70px;

}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
     	 margin-bottom: 0;
	  	 background-color:#603;
		 min-height:20px !important;
    }
   
	.container{padding:0px; margin-bottom:5px; margin-top:5px;}
	
	
.carousel-inner img {
    -webkit-filter: grayscale(90%);
  /*  filter: grayscale(90%);  make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
	max-height:500px;
}

.carousel-caption h3 {
    color: #fff !important;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
}  
  </style>
  

</head>
<body>
<?php  
include("includes/header.php");
?>

<div class="container" style="max-width:100%; width:auto; background-color:#f2f2f2;">    
<div class="container" style="max-width:1100px; width:auto; line-height:2.1; padding-left:10px; padding-right:10px;">    
      <h3 style="color:#888; text-align:center; ">Contact Us</h3><br>
 <div class="container-fluid ">
  <div class="row">
    <div class="col-sm-5">
      <p style="font-size:14px; left:1px; color:#888;"><strong>Contact us and we'll get back to you within few hours.</strong></p>
      <p><span class="glyphicon glyphicon-map-marker"></span><strong>Office Address:</strong><br> No. 4, ACO Furniture Cresent, Madalla, Niger State.</p>
      <p><span class="glyphicon glyphicon-phone"></span> +2349054540001, +2349054540002, +2348084899993</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@mimiresortandgarden.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
  
  </div>
</div>
</div></div></div>


<?php 
include("includes/footer.php");
?>
</body>
</html>