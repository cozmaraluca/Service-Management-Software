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
 
          $sql = "INSERT INTO fisa_intrare(angajat,model,baterie,imei,aspect,defecte_m,defecte_r,functionare,auxiliare,interventii_ant,companie,predare,nume,prenume,telefon) VALUES('".$angajat."','".$_POST['model']."','".$_POST['baterie']."','".$_POST['imei']."','".$_POST['aspect']."','".$_POST['defecte_m']."', '".$_POST['defecte_r']."', '".$_POST['functionare']."', '".$_POST['auxiliare']."', '".$_POST['interventii_ant']."', '".$_POST['compania']."', '".$_POST['predare']."', '".$_POST['nume']."', '".$_POST['prenume']."', '".$_POST['telefon']."') " ;
  
        $_SESSION['imei']=$_POST['imei'];
        
        if ($conn->query($sql) === TRUE) 
        {
           header('Location:intrareprint.php'); 
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
  top: 80%;
		left:70%;
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

.modelT{
    width:15%;
    height:40px;
    background-color:black;
    color:white;
}

.modelT1{
    width:15%;
    height:40px;
    left:13%;
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
    left:13%;
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
    left:13%;
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
    left:42%;
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
    left:13%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:65%;
}
.modelT6{
    width:15%;
    height:40px;
    left:13%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:80%;
}
.modelT7{
    width:15%;
    height:40px;
    left:42%;
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
    left:42%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:50%;
}
.modelT9{
    width:15%;
    height:40px;
    left:42%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:65%;
}
.modelT10{
    width:15%;
    height:40px;
    left:42%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:80%;
}
.modelT11{
    width:15%;
    height:40px;
    left:70%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:65%;
}
.modelT12{
    width:15%;
    height:40px;
    left:70%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:20%;
}
.modelT13{
    width:15%;
    height:40px;
    left:70%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:35%;
}
.modelT14{
    width:15%;
    height:40px;
    left:70%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:50%;
}
.model{
   font-weight:bold;
}
.model1{
   font-weight:bold;
    left:1%;
   top:20%;
   position:absolute;
}
.model2{
   font-weight:bold;
    left:1%;
   top:35%;
   position:absolute;
}
.model3{
   font-weight:bold;
   left:1%;
   top:50%;
   position:absolute;
}
.model4{
   font-weight:bold;
    left:30%;
   top:20%;
   position:absolute;
}
.model5{
   font-weight:bold;
    left:1%;
   top:65%;
   position:absolute;
}
.model6{
   font-weight:bold;
    left:1%;
   top:80%;
   position:absolute;
}
.model7{
   font-weight:bold;
    left:30%;
   top:35%;
   position:absolute;
}
.model8{
   font-weight:bold;
   left:30%;
   top:50%;
   position:absolute;
}
.model9{
   font-weight:bold;
    left:30%;
   top:65%;
   position:absolute;
}
.model10{
   font-weight:bold;
   left:30%;
   top:80%;
   position:absolute;
}
.model11{
   font-weight:bold;
    left:60%;
   top:65%;
   position:absolute;
}
.model12{
   font-weight:bold;
   left:60%;
   top:20%;
   position:absolute;
}
.model13{
   font-weight:bold;
   left:60%;
   top:35%;
   position:absolute;
}
.model14{
   font-weight:bold;
   left:60%;
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


  <li><a  href="https://grandsmartphone.ro/fisaiesire.php">Iesire</a></li>
  <li><a  href="https://grandsmartphone.ro/fisagarantie.php">Garantie</a></li>
  <li><a  href="https://grandsmartphone.ro/cautafisa.php">Cauta</a></li>
  <li><a class="signup" href="https://grandsmartphone.ro/loginservice.php">Log out</a></li>

 
 <a href="https://grandsmartphone.ro/meniuservice.php">
  <img src="gnegru.png" alt="my picture" class="logo_bar"/>
</a>
    
</ul>

<form action="" method="post">
<p class="model1">Model telefon</p> <input class="modelT1" type="text" name="model"><br>
<p class="model2">Stare baterie</p> <input class="modelT2" type="text" name="baterie"><br>
<p class="model3">IMEI</p> <input class="modelT3" type="text" name="imei"><br>
<p class="model4">Aspect telefon</p> <input class="modelT4" type="text" name="aspect"><br>
<p class="model5">Defecte mentionate</p> <input class="modelT5" type="text" name="defecte_m"><br>
<p class="model6">Defecte de remediat</p> <input class="modelT6" type="text" name="defecte_r"><br>
<p class="model7">Stare de functionare</p> <select class="modelT7" name="functionare">
  <option value="functional">functional</option>
  <option value="nefunctional">nefunctional</option>
</select><br>
<p class="model8">Auxiliare predate</p> <input class="modelT8" type="text" name="auxiliare"><br>

<p class="model9">Interventii anterioare</p> <select class="modelT9" name="interventii_ant">
    <option value="Nu">Nu</option>
  <option value="Da">Da</option>
</select><br>
<p class="model10">Telefon de schimb</p> <input class="modelT10" type="text" name="compania"><br>
<p class="model11">Predare</p> <select class="modelT11" name="predare">
  <option value="Personala">Personala</option>
  <option value="Curier">Curier</option>
</select><br>
<p class="model12">Nume client</p> <input class="modelT12" type="text" name="nume"><br>
<p class="model13">Prenume client</p> <input class="modelT13" type="text" name="prenume"><br>
<p class="model14">Numar de telefon</p> <input class="modelT14" type="text" name="telefon"><br>

<input type="submit" class="save" name="save" value="Save">


</form>

</body>
</html> 