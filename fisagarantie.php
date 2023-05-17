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
$angajat = $_SESSION['angajat'];

if($status==1)
{

if(isset($_POST['save'])){
 
          $sql = "INSERT INTO fisa_garantie(angajat,produs,imei,magazin,nume,prenume,telefon,perioada) VALUES('".$angajat."','".$_POST['produs']."','".$_POST['imei']."','".$_POST['magazin']."','".$_POST['nume']."','".$_POST['prenume']."', '".$_POST['telefon']."', '".$_POST['perioada']."') " ;
  $_SESSION['imeig']=$_POST['imei'];
        
        if ($conn->query($sql) === TRUE) 
        {
           header('Location:garantieprint.php'); 
        } 
        else 
        {
            echo "Eroare: " . $sql . "<br>" . $conn->error;
        }
    
    
    }
   
}
else{
    	$message = "Nu esti autentificat!";
echo "<script type='text/javascript'>alert('$message');</script>";
header('Location:loginservice.php'); 

}

     $conn->close();
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

    <style>

        
body {
	
/* background-image: url("gray.png");
	background-repeat: no-repeat;*/
  height: 100%;
	background-size: cover;
	margin:0;
	

}

.save{
    height: 40px;
    width: 15%;
		position: absolute;
  top: 65%;
		left:55%;
	font: 900;
			font-size: 28;
   background-color:black;
    color:white;
     border-radius:5px;
}
.save:hover{
background-color: #666;
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


.modelT1{
    width:15%;
    height:40px;
    left:25%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:20%;
}
.modelT2{
    width:15%;
    height:40px;
    left:25%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:35%;
}
.modelT3{
    width:15%;
    height:40px;
    left:25%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:50%;
}
.modelT4{
    width:15%;
    height:40px;
    left:55%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:20%;
}
.modelT5{
    width:15%;
    height:40px;
    left:25%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:65%;
}

.modelT7{
    width:15%;
    height:40px;
    left:55%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:35%;
}
.modelT8{
    width:15%;
    height:40px;
    left:55%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:50%;
}


.model1{
   font-weight:bold;
    left:15%;
   top:20%;
   position:absolute;
}
.model2{
   font-weight:bold;
    left:15%;
   top:35%;
   position:absolute;
}
.model3{
   font-weight:bold;
   left:15%;
   top:50%;
   position:absolute;
}
.model4{
   font-weight:bold;
    left:45%;
   top:20%;
   position:absolute;
}
.model5{
   font-weight:bold;
   left:15%;
   top:65%;
   position:absolute;
}

.model7{
   font-weight:bold;
    left:45%;
   top:35%;
   position:absolute;
}
.model8{
   font-weight:bold;
   left:45%;
   top:50%;
   position:absolute;
}

.logo{
    position:absolute;
    left:760px;
    top:50px;
    height:600px;
    width:700px;
}

.signup{
    left:1100px;
   position:absolute;
}

.sign{
    left:1000px;
   position:absolute;
}

.logo_bar{
     left:1250px;
     height:50px;
    position:absolute;
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

  <li><a  href="https://grandsmartphone.ro/fisaintrare.php">Intrare</a></li>
  <li><a  href="https://grandsmartphone.ro/fisaiesire.php">Iesire</a></li>
  <li><a  href="https://grandsmartphone.ro/cautafisa.php">Cauta</a></li>
  <li><a class="signup" href="https://grandsmartphone.ro/loginservice.php">Log out</a></li>

 
 <a href="https://grandsmartphone.ro/meniuservice.php">
  <img src="gnegru.png" alt="my picture" class="logo_bar"/>
</a>
    
</ul>

<form action="" method="post">
<p class="model1">Produs</p> <input class="modelT1" type="text" name="produs"><br>
<p class="model2">IMEI/Serie</p> <input class="modelT2" type="text" name="imei"><br>
<p class="model3">Magazin</p>  <select class="modelT3" name="magazin">
      <option value="Grand Bucovinei">Grand Bucovinei</option>
</select><br>
<p class="model4">Nume</p> <input class="modelT4" type="text" name="nume"><br>
<p class="model7">Prenume</p> <input class="modelT7" type="text" name="prenume"><br>

<p class="model8">Telefon</p> <input class="modelT8" type="text" name="telefon"><br>

<p class="model5">Perioada</p> <select class="modelT5" name="perioada">
      <option value="1">o luna</option>
  <option value="3">3 luni</option>
  <option value="6">6 luni</option>
    <option value="12">12 luni</option>
  <option value="24">24 luni</option>
</select><br>

<input type="submit" class="save" name="save" value="Save">


</form>

</body>
</html> 