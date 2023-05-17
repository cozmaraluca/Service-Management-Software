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
    
if(isset($_POST['save'])){
   
    if($_POST['nume']==NULL && $_POST['telefon']==NULL && $_POST['model']!=NULL){
    $query3=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where model='".$_POST['model']."' order by data desc");
$nr_inreg1=mysqli_num_rows($query3);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg1>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row3=mysqli_fetch_assoc($query3)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row3 as $value3){
		 	echo "<td>$value3</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";
}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}
        $_SESSION['nr']=$_POST['nr'];
        
        
    }
 else if($_POST['nume']==NULL && $_POST['model']==NULL && $_POST['telefon']!=NULL){
    $query4=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where telefon='".$_POST['telefon']."' order by data desc");
$nr_inreg2=mysqli_num_rows($query4);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg2>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row4=mysqli_fetch_assoc($query4)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row4 as $value4){
		 	echo "<td>$value4</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";

}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}}

else if($_POST['telefon']==NULL && $_POST['model']==NULL && $_POST['nume']!=NULL){
    $query5=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where nume='".$_POST['nume']."' order by data desc");
$nr_inreg3=mysqli_num_rows($query5);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg3>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row5=mysqli_fetch_assoc($query5)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row5 as $value5){
		 	echo "<td>$value5</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";
}
else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}

}
        
  else if($_POST['nume']==NULL && $_POST['model']!=NULL && $_POST['telefon']!=NULL){
    $query6=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where telefon='".$_POST['telefon']."' and model='".$_POST['model']."' order by data desc");
$nr_inreg4=mysqli_num_rows($query6);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg4>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row6=mysqli_fetch_assoc($query6)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row6 as $value6){
		 	echo "<td>$value6</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";

}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}}

 else if($_POST['model']==NULL && $_POST['nume']!=NULL && $_POST['telefon']!=NULL){
    $query7=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where telefon='".$_POST['telefon']."' and nume='".$_POST['nume']."' order by data desc");
$nr_inreg5=mysqli_num_rows($query7);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg5>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row7=mysqli_fetch_assoc($query7)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row7 as $value7){
		 	echo "<td>$value7</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";

}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}}

 else if($_POST['telefon']==NULL && $_POST['nume']!=NULL && $_POST['model']!=NULL){
    $query8=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where model='".$_POST['model']."' and nume='".$_POST['nume']."' order by data desc");
$nr_inreg6=mysqli_num_rows($query8);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg6>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row8=mysqli_fetch_assoc($query8)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row8 as $value8){
		 	echo "<td>$value8</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";

}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}}

 else if($_POST['model']!=NULL && $_POST['nume']!=NULL && $_POST['telefon']!=NULL){
    $query9=mysqli_query($conn,"select  angajat,nr,model,baterie,imei, data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare where telefon='".$_POST['telefon']."' and nume='".$_POST['nume']."' and model='".$_POST['model']."' order by data desc");
$nr_inreg7=mysqli_num_rows($query9);

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg7>0){


 echo "<table class='tab'>";

echo"<tr bgcolor='green'>";
 
 echo "<th>Angajat</th>";
echo "<th>Nr</th>";
 echo "<th>Model</th>";
 echo "<th>Baterie</th>";
   echo "<th>IMEI</th>";
    echo "<th>Data</th>";
      echo "<th>Aspect</th>";
     echo "<th>Defecte mentionate</th>";
      echo "<th>Defecte de remediat</th>";
      echo "<th>Functionalitate</th>";
echo "<th>Auxiliare</th>";
 echo "<th>Interventii anterioare</th>";
 echo "<th>Companie</th>";
   echo "<th>Predare</th>";
    echo "<th>Nume</th>";
      echo "<th>Prenume</th>";
     echo "<th>Telefon</th>";
    
 //}
 echo"</tr>";
 
 while($row9=mysqli_fetch_assoc($query9)){

     echo"<tr bgcolor='white'>"; 
	 foreach ($row9 as $value9){
		 	echo "<td>$value9</td>";}
		 

 echo"</tr>";
 }
 
 echo"</table>";

}
 else{ 
 $message = "Nu exista inregistrari ";
echo "<script type='text/javascript'>alert('$message');</script>";
}}

 else{
 
 $message = "Completeaza cu datele clientului! ";
echo "<script type='text/javascript'>alert('$message');</script>";
}

       $_SESSION['nr']=$_POST['nr'];    
        
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
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

    <style>

        
body {
	
/* background-image: url("gray.png");
	background-repeat: no-repeat;*/
  height: 100%;
	background-size: cover;
	margin:0;
	

}
.parola{
    color:red;
    top:300px;
    left:250px;
    font-size:15px;
    position:absolute;
}
.save{
    height: 40px;
    width: 15%;
		position: absolute;
  top: 450px;
		left:50px;
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

	table{

		border:2;
		font:900;
		font-size:26;
		top:55px;
		position:absolute;
		margin:0px;
		left:400px;
		width:70%;
		}
		th{
			background-color:black;
			margin:0px;
  color: white;
		}
		td{
		    text-align:center;
		}
		   h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}


.modelT{
    width:15%;
    height:40px;
    left:50px;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
}
.modelT1{
    width:15%;
    height:40px;
    left:50px;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:150px;
}
.modelT2{
    width:15%;
    height:40px;
    left:50px;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:250px;
}

.modelT3{
    width:15%;
    height:40px;
    left:50px;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:350px;
}

.model{
   font-weight:bold;
   left:100px;
}
.model1{
  
    left:50px;
   top:100px;
   position:absolute;
}
.model2{

    left:50px;
   top:200px;
   position:absolute;
}
.model3{

   left:50px;
   top:300px;
   position:absolute;
}


.cantitate{
   top:350px;
   font-weight:bold;
   position:absolute;
   left:500px;
}
.cantitateT{
       top:400px;
   position:absolute;
       width:18%;
    height:40px;
    background-color:black;
    color:white;
    left:500px;
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
  <li><a  href="https://grandsmartphone.ro/fisagarantie.php">Garantie</a></li>
  <li><a class="signup" href="https://grandsmartphone.ro/loginservice.php">Log out</a></li>

 
 <a href="https://grandsmartphone.ro/meniuservice.php">
  <img src="gnegru.png" alt="my picture" class="logo_bar"/>
</a>
    
</ul>

<form action="" method="post">
<p class="model1" name="numeT">Nume</p> <input class="modelT1" type="text" name="nume"><br>
<p class="model2" name="modelT">Produs</p> <input class="modelT2" type="text" name="model"><br>
<p class="model3" name="telefonT">Telefon</p> <input class="modelT3" type="text" name="telefon"><br>

<input type="submit" id="save"  class="save" name="save" value="Save">


</form>

</body>
</html> 