<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Riding for the Brand Photography</title>
<link href="css/bootstrap-3.4.0.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
background-image: url(Images/Pages%20Background/lighter%20leather.jpg);
background-repeat: repeat;
}
	


.topnav {
  overflow: hidden;
	background-color: #A78C6F;
	width: 100%;
	box-shadow: 3px 3px #000;
 
}
	.navbar {
		background-color: #A78C6F;
	}
.topnav a {
  float: left;
  display: block;
  color: #fffff9;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #c4aa91;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #c4aa92;
  
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #fffff9;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #fffff9;
  color: #c4aa92;
}

.dropdown-content a:hover {
  background-color: #fffff9;
  color: #c4aa92;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 1084px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1084px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
	#header {
background-color: #75593E;

min-height: 55px;
width: 100%;
box-shadow: 2px 2px #000;
}
	h1 {
		color: #C4AA92;
	}
	#h1nav {
		padding-left: 1%;
		padding-bottom: 1%;
		color: #c4a91;
		text-shadow: 2px 2px #000;
		opacity: .7;
	}
	#h3nav {
		color: #75593E;
		font-size: 12px;
	}
	#footer {
		background-color: #c4aa91;
		width: 100%;
	}
	#logofooter {
		-webkit-filter: drop-shadow(2px 2px 2px #222);
		filter: drop-shadow(2px 2px 2px #222);
		opacity: .4;
	}
	#content {
		min-height: 350px;
		margin-left: 20px;
		margin-right: 20px;
		min-height: 1800px;
	}

	

	@media all and (max-width: 736px) {
    		h2 { font-size: 1em;
			width: 100%;
			color: rgba(37,62,104,1.00);  
			border-bottom:  3px solid rgb(3,16,53,1.00);
			border-right: 3px solid rgb(3,16,53,1.00);
			text-align: center;
			box-shadow: 3px 4px 5px 3px #888888
			}
				h3 {
		color: #75593E;
		font-size: 6px;
	}
	}	
	@media (min-width: 735px) and (max-width: 1899px){
		h2 {
			font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", "Arial Black", "sans-serif";
			font-size: 2em;
			color: rgba(37,62,104,1.00); 
			border-bottom:  3px solid rgb(3,16,53,1.00);
			border-right: 3px solid rgb(3,16,53,1.00);
			width: 90%;
			text-align: center;
			box-shadow: 3px 4px 5px 3px #888888
			}
				h3 {
		color: #75593E;
		font-size: 12px;
	}
	}
	@media all and (min-width: 1900px) {
    		h2 { font-size: 4em;
			width: 30%;
			color:  rgba(37,62,104,1.00);
			border-bottom:  3px solid rgb(3,16,53,1.00);
			border-right: 3px solid rgba(3,16,53,1.00);
			text-align: center;
			box-shadow: 3px 4px 5px 3px #888888
	}
		h6 {
		color: #75593E;
		font-size: 16px;
	}
	}
			
						
<!--SLIDESHOW AND THUMBNAILS-->
* {
  box-sizing: border-box;
}

#photos {
  vertical-align: middle;

}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  padding: 1%;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 60%;
  padding: 30px;
  margin-top: -50px;
  color: #031035;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  color: #031035;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #293F82;
  font-size: 12px;
  padding: 28px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */


.row:after {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
    }
/* Six columns side by side */
.column {
  float: right;
  width: 16.66%;
  padding-right: 3%;
  padding-bottom: 2%;


    -ms-flex: 25%; /* IE10 */
    flex: 25%;

	}
/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


#photos {
	vertical-align: middle;
   	padding:1px;
   	border:1px solid #75593E;
   	background-color:#C4AA91;
}

@media all and (max-width: 736px) {
.text { display: none; }
	.column {
  float: right;
  width: 20%;
  padding-right: 2%;
  padding-bottom: 2%;
  padding-left: 5%;
  display: block;


    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

#photos{	vertical-align: middle;
   	padding: 0px;
   	border:1px solid #75593E;
   	background-color:#C4AA91;
}
}
@media (min-width: 735px) and (max-width: 1899px){
.text {
  float: left;
  width: 44%;
  height: 590px;
  padding-right: 2%;
  padding-left: 2%;
  padding-top: 1%;
  background-color: #253E68;
  color: #FFFFEE;
  text-align: justify;
  overflow: scroll;
}
.caption-container {
  text-align: center;
  padding: 3% 4%;
  color: white;
}
}
@media all and (min-width: 1900px) {
.text {
  float: left;
  width: 44%;
  height: 590px;
  padding-right: 2%;
  padding-left: 2%;
  padding-top: 1%;
  background-color: #253E68;
  color: #FFFFEE;
  text-align: justify;
  overflow: scroll;
}
		
	#caption-container {
  text-align: center;
  padding: 3% 4%;
  color: white;
  width: 55%;
}
}
			#content-wrapper{
			display:  flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			max-width: 98%;
			padding-left: 3%;
			padding-right: 5%;
			padding-top: 2%;
		}
		
		.leftcolumn {
			width: 75%;
			padding-left: 10px;
		}
		.rightcolumn {
			width: 20%;
			
		}

		* {
		  box-sizing: border-box;
		}

		img {
		  vertical-align: middle;
		}

		/* Position the image container (needed to position the left and right arrows) */
		.container {
		  position: relative;
		  max-width: 80%;
		}

		/* Hide the images by default */
		.mySlides {
		  display: none;
		}

		/* Add a pointer when hovering over the thumbnail images */
		.cursor {
		  cursor: pointer;
		}

		/* Next & previous buttons */
		.prev,
		.next {
		  cursor: pointer;
		  position: absolute;
		  top: 40%;
		  width: auto;
		  padding: 16px;
		  margin-top: -50px;
		  color: white;
		  font-weight: bold;
		  font-size: 20px;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		  -webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
		  background-color: rgba(0, 0, 0, 0.8);
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* Container for image text */
		.caption-container {
		  text-align: center;
		  background-color: #222;
		  padding: 2px 16px;
		  color: white;
		}

		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Six columns side by side */
		.column {
		  float: left;
		  width: 16.66%;
		 
		  padding: 1%;
		}

		/* Add a transparency effect for thumnbail images */
		.demo {
		  opacity: 0.6;
		}

		.active,
		.demo:hover {
		  opacity: 1;
		}

	body {
    background-image: url(Images/Pages%20Background/lighter%20leather.jpg);
    background-repeat: repeat;
	
	
}
	#content-wrapper {
		padding-right: 10%;
			display:  flex;
			flex-wrap: wrap;
	}

	@media all and (max-width: 600px) {
		#contactme {display: none;}
		.containerform {
			padding-top: .1%;
			margin-left: 2%;
			width: 96%;
			border-radius: 5px;
		}
	}
		@media all and (min-width: 601px) {
		
		.containerform {
			margin-top: -1px;
			padding-top: 0.1%;
			margin-left: 2%;
			width: 65%;
			border-radius: 5px;
		}
	}
	#contactme {
		float: right;
		padding-right: 3%;
		padding-left: 13%;
		align-items: right;
	}
	input[type=name] {
   		max-width: 90%; 
			min-width: 10%;
   		background-color: #FFFFF9;
   		color: #C4AA92;
}
		
	input[type=email] {
   	max-width: 90%; 
		min-width: 10%;
   	background-color: #FFFFF9;
   	color: #C4AA92;
}
	input[type=message] {
  		max-width: 90%; 
		min-width: 10%;
		height: 150px;
   	background-color: #FFFFF9;
   	color: #C4AA92;
}
	input[type=submit] {
   	max-width: 90%;
		min-width: 1o%;
   	background-color: #FFFFF9;
   	color: #C4AA92;
  		border-radius: 5px;
   	border: none;
		margin-bottom: 3%;
}
	h3 {
		color: #75593E;
		
	}
</style>
</head>
<body>
	<div id="wrapper">
    	<h1 id="h1nav">Riding for the Brand Photography&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
			
		<a href="contact.php" style="color: #C4AA92">CONTACT TANYA</a>
  	        
		</h1> 
	 	<div id="header">
			<div class="topnav" id="myTopnav">
				<a class="navbar-brand" href="index.html"><img src="Images/Pages Background/logoills.png" alt="" width="55" height="22" id="logonav"/></a>
  				<div class="dropdown">
    				<button class="dropbtn">MY STORY
      					<i class="fa fa-caret-down"></i>
    				</button>
    				<div class="dropdown-content">
      					<a href="about.html">ABOUT TANYA</a>
      					<a href="artiststatement.html">ARTIST STATEMENT</a>
      					<a href="Resume_CV.pdf" target="_blank">RESUME / CV</a>
    				</div>
  				</div> 
  <div class="dropdown">
    <button class="dropbtn">PORTFOLIO
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
		 <a href="americancowboy.html">AMERICAN COWBOY</a>
    	      <a href="rodeo.html">RODEO</a>
    	         <a href="sports.html">SPORTS</a>
    	           <a href="racing.html">RACING</a>
        <a href="https://spark.adobe.com/page/tZoYpFtndJ0aw/" target="_blank">CHI PORTA I SOLDI A CASA</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">FINE ART PROJECTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
  		 <a href="eyefromthebull.html">EYE FROM THE CONTENTDER</a>
    	 <a href="fencedin.html">FENCED IN</a>
    	 <a href="IntotheWoods.html">WOODS OF OUR SOULS</a>
		 <a href="artofranching.html">Ranching Souls</a>
		 <a href="artofrodeo.html">Rodeo Chaos</a>
    </div>
  </div> 
	<a href="https://tanyahamner.photoshelter.com/gallery-collection/Wyoming-High-School-Rodeo/C00006CSKrUq_IW4">WYOMING HIGH SCHOOL RODEO</a>
<a href="workshops.html">WORKSHOPS</a>
<a href="https://tanyahamner.photoshelter.com/gallery/2022-Calendars/G0000bUwp7_InyHA">CALENDARS</a>
  	        <div class="dropdown">
    <button class="dropbtn">PHOTOGRAPHY STORE
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="https://tanyahamner.photoshelter.com/gallery-collection/Events/C0000jWJUVTP4NfI">EVENTS</a>
					 <a href="https://tanyahamner.photoshelter.com/gallery-collection/Rodeo/C0000w6NrULg5jcw">RODEO</a>
					<a href="https://tanyahamner.photoshelter.com/gallery-collection/Rodeo/C0000w6NrULg5jcw">ARCHIVED RODEO PHOTOS</a>
					<a href="https://tanyahamner.photoshelter.com/gallery-collection/Wyoming-High-School-Rodeo/C00006CSKrUq_IW4">WYOMING HIGH SCHOOL RODEO</a>
    	           <a href="https://tanyahamner.photoshelter.com/gallery-collection/Wildlife/C0000eYTqn6RJnws">WILDLIFE</a>
    	            
    	          <a href="https://tanyahamner.photoshelter.com/gallery/Still-Life/G0000XfnDgbV2z14/C0000c01MHjZ3nEQ">STILL LIFE</a>
    	           <a href="https://tanyahamner.photoshelter.com/gallery/Agriculture/G0000wyTXkkAyKwc/C0000c01MHjZ3nEQ">AGRICULTURE</a>
					<a href="https://tanyahamner.photoshelter.com/gallery-collection/Scenery/C0000PQ.QnFk0t9g">SCENERY</a>
    </div>
  </div> 
            <a href="#">FILM</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
	  </div>
	</div>
    
	
<div id="content">	
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

<div id="main">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>
<br><br>
<img src="Images/Pages Background/Me railroad cropped.jpg" alt="" width="55%" id="contactme"/>
<br><br>
<h3>Interested in showing my work at your Gallery, Museum or Store? Email me at hamnertanya@gmail.com and lets make a deal. <br><br>Are you looking for a specific image of one of the contestants you sponsor, contact me and lets make some arrangements. <br><br> Need a photo for your wall or office? Let me help you make that decision on which print, style, and size. </h3>
	 
<div class="containerform">
  
<center><h3>Contact Tanya<br>hamnertanya@gmail.com</h3></center>
<form action="form_process.php" method="post" class="container-fluid" id="contact_form">&nbsp;&nbsp;
	
<p style="color: #FFFFF9"><strong>Name:</strong><br></p>
<input name="name" type="name" autofocus required="required" class="container-fluid" id="name" style="color: #000000" size="60%" maxlength="80%"/><br>

<br><p style="color: #FFFFF9"><strong>Email:</strong></p>
<input name="email" type="email" autofocus required="required" class="container-fluid" id="email" style="color: #000000" size="60%" maxlength="80%"/><br>


<br><p style="color: #FFFFF9"><strong>Message:</strong></p>
<input name="message" type="message" autofocus required="required" class="container-fluid" id="message" styler="color:#000000" size="60%" maxlength="90%" vertical-align= "text-top"/>



<br><br> <strong><input type="submit" name="submit" id="submit" class="container-fluid" size="70%" maxlength="80%" value="Submit"/></strong>
<br>
	
</form> 
</div>
	
<br>  
</div>


    <!-- Include all compiled plugins (below), or include individual files as needed --> 


		
	

	<div id="footer">
		
		
		<div class="text-center">
			<hr style= "border:2px solid #75593E">
				<hr style="border:1px solid #75593E">
					<table width="100%">
  						<tbody>
   							 <tr>
      					<td height="10px"><center><h3 id="h3nav">© Tanya Hamner <br><br> Riding for the Brand Photography<br><br>Website Developed by Hamner Designs</h3></center></td>
      					<td height="10px"><div class="logo"><div align="center"> <img src="Images/Pages Background/logoills.png" alt="" width="25%"  id="logofooter"/></div></div></td>
      					<td width="25%"> <div align="right"><a href="https://www.facebook.com/rftbphotography/" target="_blank"><img src="Images/Social Media/facebook.png" width="10%" alt=""/></a>&nbsp;<a href="https://www.instagram.com/ridingforthebrand_photography/" target="_blank"><img src="Images/Social Media/instagram icon.png" width="11%" alt=""></a></div></td>
     						</tr>
  						</tbody>
					</table>
		
				<hr style="border:1px solid #75593E">
			<hr style= "border:2px solid #75593E">
		</div>
	</div>

	

<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.js"></script>
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


</script>
</body>
</html>
