<?php 
$nume_server = "localhost";

$nume_bd = "r64511gran_service";

$nume_utilizator = "r64511gran_admin";

$parola = "***";


 $conn = new mysqli($nume_server, $nume_utilizator, $parola, $nume_bd);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Eroare conexiune: " . $conn->connect_error);
        } 
        
        session_start();
$status = $_SESSION['status'];

if($status==1)
{
if(isset($_POST['intrare'])){
     header('Location:fisaintrare.php'); 
   
}
if(isset($_POST['iesire'])){
     header('Location:fisaiesire.php'); 
   
}
if(isset($_POST['garantie'])){
     header('Location:fisagarantie.php'); 
     
}}
else{
    	$message = "Nu esti autentificat!";
echo "<script type='text/javascript'>alert('$message');</script>";
 header('Location:loginservice.php'); 

}
     $conn->close();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0 "/>

    <style>

        
body {
	
/* background-image: url("gray.png");
	background-repeat: no-repeat;*/
  height: 100%;
	background-size: cover;
	margin:0;
	

}


ul {
  list-style-type: none;
  margin: 0 px;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: black;
   position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
 
}

li {
  float: left;
}

li a {
  display: block;
  color:white;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:  #666;
}

li a.active {
  color: white;
  background-color: #4CAF50;
}  

.intrare{
    left:35%;
    position:absolute;
    top:30%;
    width:30%;
    height:60px;
     border-radius:5px;
    background-color: black;
    color:white;
    	font: 900;
			font-size: 20;
}
.iesire{
    left:35%;
    position:absolute;
    top:50%;
     width:30%;
    height:60px;
     border-radius:5px;
    background-color: black;
    color:white;
    	font: 900;
			font-size: 20;
}
.garantie{
    left:35%;
    position:absolute;
    top:70%;
     width:30%;
    height:60px;
     border-radius:5px;
    background-color: black;
    color:white;
    	font: 900;
			font-size: 20;
}

.signup{
    left:1300px;
   position:absolute;
}


.sign{
    left:1100px;
   position:absolute;
}
.logo{
    position:absolute;
    left:620px;
    top:50px;
    height:600px;
    width:780px;
}
.signup:hover{
background-color: #666;
}
.intrare:hover{
background-color: #666;
}
.iesire:hover{
background-color: #666;
}
.garantie:hover{
background-color: #666;
}
.caut:hover{
background-color: #666;
}

</style>
</head>
<body>
<div style = " background-color: rgba(0,0,0,0);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index:-1">
      </div>
	<ul>

  <li><a name="caut" class="caut" href="https://grandsmartphone.ro/cautafisa.php">Cauta</a></li>
  <li><a class="signup" href="https://grandsmartphone.ro/loginservice.php">Log out</a></li>

    
</ul>

<form action="" method="post">

<input type="submit" class="intrare" name="intrare" value="Fisa intrare"><br>
<input type="submit" class="iesire" name="iesire" value="Fisa iesire"><br>
<input type="submit" class="garantie" name="garantie" value="Garantie"><br>
</form>



</body>
</html> 