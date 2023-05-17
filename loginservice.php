
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
        

if(isset($_POST['submit'])){
    
    $status=0;
    
    $nume = $_POST['nume']; 
    $parola = $_POST['parola'];
     $cod = $_POST['cod'];
     

     $query=mysqli_query($conn,"SELECT parola from admin where cod='".$cod."'");
     $row= mysqli_fetch_array($query);
    $parola_bd = $row['parola'];
     
     
    $query2=mysqli_query($conn,"SELECT nume from admin where cod='".$cod."' ");
     $row2= mysqli_fetch_array($query2);
    $nume_bd = $row2['nume'];
    
     $query3=mysqli_query($conn,"SELECT cod from admin where  nume='".$nume."'");
     $row3= mysqli_fetch_array($query3);
    $cod_bd = $row3['cod'];
    
if(strcmp($parola_bd,md5($_POST['parola']))==0 ){
  if(strcmp($nume_bd,$_POST['nume'])==0) { 
       if(strcmp($cod_bd,$_POST['cod'])==0) {
          header('Location:meniuservice.php'); 
          $status=1;
    
    }
    else echo "<p class='parola'>Cod incorect!</p>";
}
    else echo "<p class='parola'>Angajatul nu exista!</p>";
}
 else echo "<p class='parola'>Parola incorecta!</p>";

 session_start();
$_SESSION['status'] = $status;
$_SESSION['angajat'] = $nume_bd;
}

     $conn->close();
?>

<html>
    <head>
        <meta  name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

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
    top:55%;
    left:40%;
    font-size:15px;
    position:absolute;
}
.submit{
    height: 40px;
    width: 15%;
		position: absolute;
  top: 80%;
		left:40%;
	font: 900;
			font-size: 28;
   background-color:black;
    color:white;
    border-radius:5px;
}
.submit:hover{
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


.signup{
    left:1200px;
    position:absolute;
    
}
.logo{
    position:absolute;
    left:80%;
    top:70%;
    height:250px;
    width:310px;
}

.modelT1{
    width:15%;
    height:40px;
    left:40%;
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
    left:40%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:40%;
}

.modelT3{
    width:15%;
    height:40px;
    left:40%;
    background-color:whitesmoke;
    color:black;
    border:0;
    border-radius:5px;
    position:absolute;
    top:60%;
}


.model1{

    left:35%;
   top:20%;
   position:absolute;
}
.model2{

    left:35%;
   top:40%;
   position:absolute;
}
.model3{

   left:35%;
   top:60%;
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



    
</ul>

<form action="" method="post">

<p class="model1">Nume</p> <input class="modelT1" type="text" name="nume"><br>
<p class="model2">Cod</p> <input class="modelT2" type="text" name="cod"><br>
<p class="model3">Parola</p> <input class="modelT3" type="password" name="parola"><br>
<input type="submit" class="submit" name="submit" value="Log in">
</form>

<img src="g.PNG" class="logo">

</body>
</html> 