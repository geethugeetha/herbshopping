<?php
include_once 'data.php';
SESSION_start(); //database connection page
if(isset($_POST["submit"]))
{
	echo "Invalid username or password";
	$username=$_POST["username"];   //username value from the form
	$password=$_POST["password"];	//password value from the form
	//echo $username;
	$sql="select* from login where username='$username' and password='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function

	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch[status]==0) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["username"]=$username;	// setting username as session variable
			header("location:add.php");	//home page or the dashboard page to be redirected
		}
		else if($fetch[status]==1) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["username"]=$username;	// setting username as session variable
			header("location:userhome.php");

		}

	}


}
?>

<html>
<head>
<style>

header h1
{
    font-family: 'BallparkWeiner', serif;
    font-size: 2.5em;
    font-weight: normal;
}
nav{
  width:100%;
}
#logo, header h1
{
    display: inline-block;
    margin-bottom: 0px;
}

header h2
{
    font-family: Dayrom, serif;
    font-size: 1.1em;
    margin-top: 0px;
    font-weight: normal;
}
nav
{
    display: inline-block;
    width: 740px;
    text-align: right;
}

nav ul
{
    list-style-type: none;
}

nav li
{
    display: inline-block;
    margin-right: 15px;
}

nav a
{
    font-size: 1.1em;
    color: red;
    padding-bottom: 3px;
    text-decoration: none;
background color:red;
}

nav a:hover
{
    color: #760001;
    border-bottom: 3px solid #760001;
}
body{
background-image:url(back.jpg);
	background-size:cover;
}

div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}
div.sis {
   background-color: lightgrey;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 20px;
    margin-left: 20px;
    width: 100%;


}
div.absolute {
  background-color: black;
  text-align: right;
    position: absolute;
    top: 150px;
    right: 50;
    width: 50%;
    height: 50px;
}
div.sis1 {
  background-color: white;
    position: absolute;
    top: 400px;
    right: 10px;
    width: 100%;
    height: 500px;
}
div.sis2 {
  background: transparent ;
    position: absolute;
    top: 180px;
    right: 0;
 margin-left:50px;
    margin-right:50px;
    width: 100%;
    height: 10px;

}
div.aa
{
	position:absolute;
    	width:400;
	height:330px;
	top:220px;
	left:250px;
	background-color:transparent;
	margin: 0 auto;
	margin-top:100px;
        padding-top:10px;
	padding-left:50px;
	border-radius:15px;
	-webkit-border-radius:20px;
	-o-border-radius:30px;
	-moz-border-radius:15px;
	color:white;
	font-weight:bolder;
}
.aa input[type="text"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="password"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="submit"]
{
	width:100px;
	height:35px;
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:skyblue;
	font-weight:bolder;
	box-shadow:inset -4px -4px rgb(0,0,0,0.5)
	font-size;18px;
}
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 450px;
    right: 0;
    width: 20%;
    height: 150px;

}
img.i
{
float:right;
 top: 150px;
    right: 70px;
}
</style>


  <!--  <script  language="javascript">
        function val() {
                var x = document.myforms.username.value;
                if (x == null || x == "") {
                    alert("user Name must be filled out");
                    return false;
                }
                var y = document.myform.password.value;
                if (y == null || y == "") {
                    alert("password must be filled out");
                    return false;
                };
    </script>-->


<title>Herb affair</title>
 <link rel="stylesheet" href="stjohn1.css" type="text/css">


</head>

   
<body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="https://cdn2.bigcommerce.com/server3500/38w10/product_images/transparent_small_logo_1473273834__47290.png" border="0" id="LogoImage" alt="Herb Affair">
                    
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp




      &nbsp&nbsp&nbsp&nbsp          <nav>
<br>
<li><a href="index.php"><b>HOME</b></a></li>
                      <li class="dropdown">
                       <a href="#" class="dropbtn"> <b>PRODUCTS</b></a>
                       <div class="dropdown-content">
                         <a href="#">HERBS</a>
                         <a href="#">FRUITS</a>
                   </div>
                      </li>
                      <li><a href="#"><b>ABOUT US</b></a></li>
                        

</li>
</ul>

                </nav>
<br>
            </header>

 <br>
  <br>
  <br>
  <br>
  <br>
  <br><center>
<div class="bb">

<div class="aa">
<h2>Login</h2>
<form name="myform"  method="post">


<INPUT TYPE="TEXT" name="username" placeholder="please enter a username"><br>
<BR> <INPUT TYPE="PASSWORD" name="password" placeholder="please enter a password">
<br><br><input type="submit" value="Login" name="submit">&nbsp&nbsp&nbsp
</form>
</div>
</div>
<div style="background-color:black;width:100%;height:50px;top:780px;position:absolute;left:0px">  <b>CONTACT US</b></li>
  </div>
<div style="background-color:black;width=150%;height:150px;top:800px;position:absolute;right:0px;left:0px;">
  <font style="color:white;font-family:Arial;font-size:100%;"><br>
  <b>MAIL ID: clicktofashion@gmail.com</b><br>

  <br><b>PHONE : 04822 264323</b>
 <br> <br><b>LOCATION : KOTTAYAM

 <br>
   </div>

 </body>
</html>
