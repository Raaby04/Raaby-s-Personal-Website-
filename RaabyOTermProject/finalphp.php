<?php  

$host = "fdb1028.awardspace.net";
$user = "4259217_customerdata";
$password = "Roosevelt#11";
$name = "4259217_customerdata";
$port = "3306";

$dbconn = mysqli_connect($host, $user, $password, $name, $port);

if (!$dbconn) {
	die('Connection Failed'.mysql_error());
}

$firstn = $_POST['firstname'];
$lastn = $_POST['lastname'];
$email = $_POST['emailaddress'];
$service = $_POST['service'];

$myQuery = "INSERT INTO serviceinterest (firstname, lastname, email, service) VALUES ('$firstn', '$lastn', '$email', '$service')";
$insert = mysqli_query($dbconn, $myQuery);


echo "<!Doctype HTML>";

echo "<head>";
echo "<title> Services </title>";
echo "<link rel=\"stylesheet\" href=\"finalwebsite.css\">";
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\">";



echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">";
echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>";
echo "<link href=\"https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Big+Shoulders+Display&display=swap\" rel=\"stylesheet\">";


echo "<nav class=\"navbar navbar-expand-sm navbar-li\" id=\"nav\">";
echo "<div class=\"container-fluid\">";
echo "<div class=\"navbar-header\">";
echo "<a class=\"navbar-brand\" href=\"finalwebsite.html\">Raaby</a>";
echo "</div>";
echo "<ul class=\"nav navbar-nav\">";
echo  "<li class=\"nav-item\"><a class=\"nav-link\" href=\"finalwebsite.html\">Home</a></li>";
echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"finalservices.html\">Services</a></li>";
echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"finalshop.html\">Shop</a></li>";
echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"FinalGallery.html\">Gallery</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";
echo "<head>";

echo "<body>";


echo "<div class=\"welcome\">";
echo "<h1 class=\"titles\" style=\"font-size: 110px;\"> Web Design Services </h1>";
echo "</div>";

echo "<div class=\"row\">";
echo "<div class=\"col-6\" style=\"float: left\">";
echo "<iframe src=\"https://giphy.com/embed/QVUL20w0FwLKnQuX4D\" width=\"480\" height=\"379\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p></p>";
echo "</div>";

echo "<div class=\"col-6\" style=\"float: right; padding-top: 20px; margin-right: 0px;\">";

echo "<p class=\"description\"> Are you looking to create a website for your business or personal use, or need to update the aesthetics of your current website? I offer an array of different web design services ranging from website creation to website maintainance</p>";

echo "<div class=\"row\">";
echo "<form method=\"get\" action=\"#services\" class=\"col-3\">";
echo "<button class=\"buttons\"> Services </button>";
echo "</form>";

echo "<form method=\"get\" action=\"#form\" class=\"form-group\" class=\"col-3\">";
echo "<button class=\"buttons\"> Interest Form </button>";
echo "</form>";
echo "</div>";
echo "</div>";

echo "</div>";
echo "<br>";
echo "<br>";


echo "<div class=\"row\" id=\"services\" >";
echo "<div class=\"col\">";

echo "<div class=\"col actual\">";
echo "<div>";
echo "<img style=\"height: 350px; width: 350px;\" src=\"https://thumbs.dreamstime.com/b/business-startup-icon-start-new-business-beautiful-design-fully-editable-business-startup-icon-start-new-business-154368972.jpg\">";
echo "</div>";
echo "<h1 class=\"titles\" style=\"color: black; font-size: 40px\"> Business </h1>";
echo "<p class=\"description\" style=\"background-color: black; color: white;\"> Create a website for your business that is designed to your needs!</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"col\">";

echo "<div class=\"col actual\">";
echo "<div>";
echo "<img style=\"height:350px; width: 350px\" src=\"https://static.vecteezy.com/system/resources/thumbnails/014/194/222/small_2x/avatar-icon-human-a-person-s-badge-social-media-profile-symbol-the-symbol-of-a-person-vector.jpg\">";
echo "</div>";
echo "<h1 class=\"titles\" style=\"color: black; font-size: 40\"> Personal </h1>";
echo "<p class=\"description\" style=\"background-color: black; color: white;\"> Create your personal portfolio with a website! </p>";
echo "</div>";
echo "</div>";

echo "<div class=\"col\">";

echo "<div class=\"col actual\">";
echo "<div>";
echo "<img style=\"height:310px; width: 310px; margin-bottom: 40px; margin: 20px\" src=\"https://www.freeiconspng.com/uploads/maintenance-icon-14.png\"\>";
echo "</div>";
echo "<h1  class=\"titles\" style=\"color: black; font-size: 40px\"> Maintainance </h1>";
echo "<p class=\"description\" style=\"background-color: black; color: white;\"> Receive help with updating certain feautures of your website!</p>";
echo "</div>";
echo "</div>";
echo "</div>";




echo "<div id=\"interest\" style=\"height: 600px\">";
echo "<h1 class=\"titles\" style=\"color: black; font-size: 50px; text-align: left; margin-left: 200px; margin-top: 50px\"> Service Interest Form </h1>";

echo "<form id=\"form\" action=\"finalphp.php\" method=\"POST\">";
echo "<div class=\"form-group\">";
echo "<div>";
echo "<label> First Name </label>";
echo "</div>";
echo "<input type=\"text\" name=\"firstname\" class=\"form-control\">";
echo "</div>";

echo "<div class=\"form-group\">";
echo "<div>";
echo "<label> Last Name </label>";
echo "</div>";
echo "<input type=\"text\" name=\"lastname\" class=\"form-control\">";
echo "</div>";

echo "<div class=\"form-group\">";
echo "<div>";
echo "<label> Email Address </label>";
echo "</div>";
echo "<input type=\"text\" name=\"emailaddress\" class=\"form-control\">";
echo "</div>";

echo "<label> Service </label>";
echo "<div class=\"form-group\">";
echo "<select name=\"service\" class=\"form-control\">";
echo "<option value=\"business\"> Business Website </option>";
echo "<option value=\"personal\"> Personal Website </option>";
echo "<option value=\"maintain\"> Website Maintenance </option>";
echo "</select>";
echo "</div>";





echo "<input type=\"submit\" style=\"border: none; background-color: white; border-radius: 5px\"/>";
if ($insert) {
	echo "<div style=\"color:green; font-size: 40; margin-left: 20px\"> Interest Form Received! </div>" ;
}


echo "</form>";

echo "</div>";

echo "<footer id=\"footer\" class=\"row\">";
echo "<p style=\"text-align: center; margin-top: 5px\" class=\"col-5\"> ® Raaby Omar 2023, All Rights Reserved </p>";
echo "<div class=\"col-1\"> <img src=\"instaimg2.png\" href=\"https://www.instagram.com/\" class=\"socials\"> </div>";
echo "<div class=\"col-1\"> <img src=\"twitter3.jpeg\" href=\"https://twitter.com/?lang=en\" class=\"socials\"> </div>";
echo "<div class=\"col-1\"> <a href=\"https://www.linkedin.com\" style=\"color: white\"> <img src=\"linkedicon.png\" class=\"socials\"> </a> </div>"
echo "</footer>";




echo "</body>";

?>