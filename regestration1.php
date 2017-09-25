<?php
include 'data.php';
if(isset($_POST['submit']))
{
$a=$_POST["fname"];
$b=$_POST["mname"];
$c=$_POST["lname"];
$d=$_POST["address"];
$e=$_POST["gender"];
$f=$_POST["phone"];
$g=$_POST["email"];
$h=$_POST["password"];
$i=$_POST["username"];
$j=$_POST["city"];
$k=$_POST["pin"];
$sql="INSERT INTO `registration1`( `fname`, `mname`, `lname`, `address`, `gender`, `contact`, `email`, `city`, `pincode`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$j','$k')";
//print_r($sql);
$result=mysqli_query($con,$sql);
$sql1="INSERT INTO `login`(`username`, `password`, `usertype`,`status`) VALUES ('$i','$h','user',1)";
//print_r($sql1);
$result1=mysqli_query($con,$sql1);

//echo "successfully inserted";
}
?>
<html>
    <head>
        <link rel="stylesheet" href="welcomestyle.css" />
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 540px;
    right: 0;
    left:500px;
    width: 50%;
    height: 400px;
}</style>
        <title>regestration...</title>
    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                   <img src="https://cdn2.bigcommerce.com/server3500/38w10/product_images/transparent_small_logo_1473273834__47290.png" border="0" id="LogoImage" alt="Herb Affair">
                   

</div>

                </div>

            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        <nav>
<br>
<li><a href="index.php"><b>HOME</b></a></li>
                      <li class="dropdown">
                       <a href="#" class="dropbtn"><b> PRODUCTS</b></a>
                       <div class="dropdown-content">
                         <a href="#">HERBS</a>
                         <a href="#">FRUITS</a>
                   </div>
                      </li>
                      <li><a href="#"><b>ABOUT US</b></a></li>
                        

</li>
</ul>

                </nav>

            </header>


            <div id="b_image">
         <a href="http://www.w3schools.com">
      <img border="0" alt="image" src="vv.jpg" width="1320" height="350"/ >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp

</br>
<br>
<br>
<br>
<br>

<br>
<br>

<div class="sis3">
<form action="#" name="myForm" id="myForm" onsubmit="return validateForm()" method="post">
<fieldset>
<legend>REGISTRATION FORM</legend>
<table border="0">
<tr><td>FIRST NAME:</TD><TD><INPUT TYPE="TEXT" NAME="fname"></td></tr>
<tr><td>MIDDLE NAME:</TD><TD><INPUT TYPE="TEXT" NAME="mname"></td></tr>
<tr><td>LAST NAME:</TD><TD><INPUT TYPE="TEXT" NAME="lname"></td></tr>
<tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br><br>
  </FIELDSET></td></tr>
  <tr><td>ADDRESS:</td><td><input type="text" name="address"></td></tr>
  <tr><td>CITY:</td><td><input type="text" name="city"></td></tr>
  
  <tr><td>PINCODE:</td><td><input type="number" name="pin"  size="30" min="1" ></td></tr>
<tr><td>CONATACT NUMBER</TD><TD><INPUT TYPE="TEL" NAME="phone" min="1" max="10"></td></tr>
<tr><td>EMAIL:</TD><TD><INPUT TYPE="email" NAME="email"></td></tr>

<tr><td>USER NAME:</TD><TD><INPUT TYPE="text" NAME="username"></td></tr>
<tr><td>PASSWORD</td>
  <td><input type="password" name="password"/> </td></tr>
<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp</td>
<td><input type="submit" name="submit" value="Register" onclick="alert('Insert successfully')"></td>
</tr>
</table></form>
<script>
function validateForm() {
    var fname = document.myForm.fname.value;
    if (fname == null || fname == "") {
        alert("First Name can't be blank");
        return false;
    }
    var lname = document.myForm.lname.value;
    if (lname == null || lname == "") {
        alert("Last Name can't be blank");
        return false;
    }
    var mname = document.myForm.mname.value;
    if (mname == null || mname== "") {
        alert("Middle Name can't be blank");
        return false;
    }
    var address = document.myForm.address.value;
    if (address == null || address == "") {
        alert("Address can't be blank");
        return false;
    }
    var city=document.myForm.city.value;
    if (city==null || city==""){
      alert("ity  can't be blank");
      return false;
    }
var pin=document.myForm.pin.value;
if (pin==null || pin==""){
  alert("Pin Code can't be blank");
  return false;
}
var phone=document.myForm.phone.value;
if (phone==null || phone==""){
  alert("Phone number can't be blank");
  return false;
}
var email=document.myForm.email.value;
if (email==null || email==""){
  alert("Email can't be blank");
  return false;
}

var username=document.myForm.username.value;
if (username==null || username==""){
  alert("User Name  can't be blank");
  return false;
}
var cnt=document.myForm.phone.value;
if(phone.length!=10)
{
  alert("Enter Phone number in currect format");
}
var pin=document.myForm.pin.value;
if(pin.length!=6)
{
  alert("Enter pin code in currect format");
}

var password=document.myForm.password.value;
if (password==null || password==""){
  alert("Password can't be blank");
  return false;
}
}
</script>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
            <footer>
                <div id="ourc">
                    <h1>OUR COMPANY</h1>
                    <ul>
                        <li><a href="about.php">About us</a></li>


                    </ul>
                </div>
                <div id="topctgr">
                    <h1>TOP CATEGORIES</h1>
                 <ul>
                        <li><a href="#">herbs</a></li>
                        <li><a href="#">fruits</a></li>
                       

                    </ul>
                    </div>
<div id="useful">
<h1>USEFUL INFO</h1>
<ul>
                        <li><a href="#">contact us</a></li>
                        <li><a href="#">How to buy</a></li>
                        <li><a href="#">Terms&condetions</a></li>

                    </ul>

 </div>
            </footer>
        </div>
</div>
    </body>
</html>
