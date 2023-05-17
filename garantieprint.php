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
$imei = $_SESSION['imeig'];


if($status==1)
{
       $query1=mysqli_query($conn,"SELECT data from fisa_garantie where imei='".$imei."' ");
     $row1= mysqli_fetch_array($query1);
    $data_bd = $row1['data'];

     $query=mysqli_query($conn,"SELECT produs from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row= mysqli_fetch_array($query);
    $produs_bd = $row['produs'];
    
 $query3=mysqli_query($conn,"SELECT cod from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row3= mysqli_fetch_array($query3);
    $cod_bd = $row3['cod'];
    
 $query4=mysqli_query($conn,"SELECT nr from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row4= mysqli_fetch_array($query4);
    $nr_bd = $row4['nr'];
    
     $query5=mysqli_query($conn,"SELECT magazin from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row5= mysqli_fetch_array($query5);
    $magazin_bd = $row5['magazin'];

     $query6=mysqli_query($conn,"SELECT data from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row6= mysqli_fetch_array($query6);
    $data_bd = $row6['data'];
    
     $query7=mysqli_query($conn,"SELECT nume from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row7= mysqli_fetch_array($query7);
    $nume_bd = $row7['nume'];

     $query8=mysqli_query($conn,"SELECT prenume from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row8= mysqli_fetch_array($query8);
    $prenume_bd = $row8['prenume'];
    
     $query9=mysqli_query($conn,"SELECT perioada from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row9= mysqli_fetch_array($query9);
    $perioada_bd = $row9['perioada'];

$query10=mysqli_query($conn,"SELECT telefon from fisa_garantie where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)");
     $row10= mysqli_fetch_array($query10);
    $telefon_bd = $row10['telefon'];
    

$query2=mysqli_query($conn,"select  produs,cod, imei, nr,magazin, data, nume, prenume,telefon,perioada from fisa_garantie ");
$nr_inreg=mysqli_num_rows($query2);


echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg>0){
    echo "<b> Nr. inregistrare </b>"; echo "<b>"; echo  $nr_bd ;echo "</b>";
echo str_repeat('&nbsp;',80);
 echo "<b> Data inregistrare </b>"; echo "<b>";echo  $data_bd ;echo "<b>";
echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',50);
echo "<b class=titlu> CERTIFICAT DE GARANTIE</b>";
echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',50);
echo "<div class=gar>";
echo " Bine ai venit in familia Grand!";
echo "<br>";
echo str_repeat('&nbsp;',5);
echo "Noul tau "; echo $produs_bd; echo " ne leaga acum. Nu pentru totdeauna, doar pentru "; echo $perioada_bd;  echo " luni, incepand de azi ";echo $data_bd;echo ".";
echo "<br>";
echo str_repeat('&nbsp;',5);
 echo "In acest timp te poti baza pe noi pentru ajutor daca codul imei "; echo $imei; echo " corespunde cu cel al telefonului tau. ";
 echo "<br>"; echo "<br>";
echo str_repeat('&nbsp;',5);
    echo"Ajutorul nostru vine insa cu cateva conditii: ";
     echo "<br>"; echo "<br>";
echo str_repeat('&nbsp;',5);
echo :******TEXT******";
echo "<br>";echo "<br>";
 echo "<b> ";echo $nume_bd; echo " "; echo $prenume_bd;echo "</b>";
 echo "<br>";
 echo "Semnatura ";

echo "<br>";echo "<br>";echo "<br>";echo str_repeat('&nbsp;',5);echo "<br>";echo "<br>";

echo"
Grand Smartphone Store  ";
echo "<br>";echo str_repeat('&nbsp;',150);

echo "</div>";

}

else{ 
 echo"<center>";
 echo "Nu s-a gasit nici o inregistrare!!!";
 echo"</center>";
}
}
else{
    	$message = "Nu esti autentificat!";
echo "<script type='text/javascript'>alert('$message');</script>";
 header('Location:loginadmin.php');

}
mysqli_close($conn);
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
.gar{
    font-size:20px;
   
    font-weight:bold;
    display:inline-block;
    float:left;
    text-indent:30px;
}

.titlu{

   font-size:20px;
   
    font-weight:bold;
    display:inline-block;
    float:center;

}
.th{

    font-size:15px;
color:black;
}


</style>
</head>

</html> 
