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
    
 $nr=$_POST['nr'];
 $componente=$_POST['componente'];
 $angajat = $_SESSION['angajat'];

     if(isset($_POST['cauta'])){ 
     header('Location:cautafisa.php'); }
 else{
         $query5 = mysqli_query($conn,"SELECT * FROM fisa_ieisre WHERE nr = '".$nr."'");
$fetch_rows = mysqli_num_rows($query5);
         $query6 = mysqli_query($conn,"SELECT * FROM fisa_intrare WHERE nr = '".$nr."'");
$fetch_rows1 = mysqli_num_rows($query6);

if(isset($_POST['save'])){
   
   if ( $fetch_rows > 0 ){
    	$message1 = "Telefonul a fost ridicat deja!";
echo "<script type='text/javascript'>alert('$message1');</script>";

}
   
if ( $fetch_rows1 == 0 ){
    	$message2 = "Nu exista nici o intrare cu acest numar de inregistrare!";
echo "<script type='text/javascript'>alert('$message2');</script>";

}
   else{
       echo mysqli_num_rows($query5);
    $query1=mysqli_query($conn,"SELECT nume from fisa_intrare where nr='".$nr."' ");
     $row1= mysqli_fetch_array($query1);
    $nume_bd = $row1['nume'];
    
     $query2=mysqli_query($conn,"SELECT model from fisa_intrare where nr='".$nr."' ");
     $row2= mysqli_fetch_array($query2);
    $model_bd = $row2['model'];
    
    $query3=mysqli_query($conn,"SELECT data from fisa_intrare where nr='".$nr."' ");
     $row3= mysqli_fetch_array($query3);
    $data_i = $row3['data'];
    
    
    
    $query4=mysqli_query($conn,"SELECT prenume from fisa_intrare where nr='".$nr."' ");
     $row4= mysqli_fetch_array($query4);
    $prenume_bd = $row4['prenume'];   
    
     $query5=mysqli_query($conn,"SELECT defecte_r from fisa_intrare where nr='".$nr."' ");
     $row5= mysqli_fetch_array($query5);
    $defecte_r = $row5['defecte_r'];
 
          $sql = "INSERT INTO fisa_ieisre(angajat,nr,nume,prenume, model,data_intrare,componente,remediate,functionare,defecte_r) VALUES('".$angajat."','".$_POST['nr']."','".$nume_bd."','".$prenume_bd."', '".$model_bd."','".$data_i."','".$componente."', '".$_POST['remediate']."', '".$_POST['functionare']."','".$defecte_r."')" ;
  
        $_SESSION['nr']=$_POST['nr'];
        
        if ($conn->query($sql) === TRUE) 
        {
          header('Location:iesireprint.php'); 
        } 
        else 
        {
            echo "Eroare: " . $sql . "<br>" . $conn->error;
        }
    
    
    }}
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
    height: 45px;
    width: 16%;
		position: absolute;
  top: 80%;
		left:45%;
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
    left:45%;
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
    left:45%;
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
    left:45%;
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
    left:45%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:65%;
}

.model{
   font-weight:bold;
}
.model1{
   font-weight:bold;
    left:30%;
   top:20%;
   position:absolute;
}
.model2{
   font-weight:bold;
    left:30%;
   top:35%;
   position:absolute;
}
.model3{
   font-weight:bold;
   left:30%;
   top:50%;
   position:absolute;
}
.model4{
   font-weight:bold;
    left:30%;
   top:65%;
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
  <li><a  href="https://grandsmartphone.ro/fisagarantie.php">Garantie</a></li>
  <li><a  href="https://grandsmartphone.ro/cautafisa.php">Cauta</a></li>
  <li><a class="signup" href="https://grandsmartphone.ro/loginservice.php">Log out</a></li>

 
 <a href="https://grandsmartphone.ro/meniuservice.php">
  <img src="gnegru.png" alt="my picture" class="logo_bar"/>
</a>
    
</ul>

<form action="" method="post">
<p class="model1">Fisa de intrare nr.</p> <input class="modelT1" type="text" name="nr"><br>
<p class="model2">Componente inlocuite</p> <input class="modelT2" type="text" name="componente"><br>
<p class="model3">Defectele au fost remediate</p> <select class="modelT3" name="remediate">
  <option value="Da">Da</option>
  <option value="Nu">Nu</option>
</select><br>
<p class="model4">Stare functionare</p> <select class="modelT4" name="functionare">
  <option value="Functional">Functional</option>
  <option value="Nefunctional">Nefunctional</option>
</select><br>

<input type="submit" class="save" name="save" value="Save">


</form>

</body>
</html> 