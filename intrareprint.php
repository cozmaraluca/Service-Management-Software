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
$imei = $_SESSION['imei'];


if($status==1)
{
    $query1=mysqli_query($conn,"SELECT data from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row1= mysqli_fetch_array($query1);
    $data_bd = $row1['data'];

     $query=mysqli_query($conn,"SELECT nr from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row= mysqli_fetch_array($query);
    $nr_bd = $row['nr'];
    
 $query3=mysqli_query($conn,"SELECT model from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row3= mysqli_fetch_array($query3);
    $model_bd = $row3['model'];
    
 $query4=mysqli_query($conn,"SELECT baterie from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row4= mysqli_fetch_array($query4);
    $baterie_bd = $row4['baterie'];
    
     $query5=mysqli_query($conn,"SELECT aspect from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row5= mysqli_fetch_array($query5);
    $aspect_bd = $row5['aspect'];

     $query6=mysqli_query($conn,"SELECT defecte_m from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row6= mysqli_fetch_array($query6);
    $defecte_m = $row6['defecte_m'];
    
     $query7=mysqli_query($conn,"SELECT defecte_r from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row7= mysqli_fetch_array($query7);
    $defecte_r = $row7['defecte_r'];

     $query8=mysqli_query($conn,"SELECT functionare from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row8= mysqli_fetch_array($query8);
    $functionare_bd = $row8['functionare'];
    
     $query9=mysqli_query($conn,"SELECT auxiliare from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row9= mysqli_fetch_array($query9);
    $auxiliare_bd = $row9['auxiliare'];

     $query10=mysqli_query($conn,"SELECT interventii_ant from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row10= mysqli_fetch_array($query10);
    $interventii_ant = $row10['interventii_ant'];
    
     $query11=mysqli_query($conn,"SELECT companie from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row11= mysqli_fetch_array($query11);
    $companie_bd = $row11['companie'];

     $query12=mysqli_query($conn,"SELECT predare from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP)and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row12= mysqli_fetch_array($query12);
    $predare_bd = $row12['predare'];
    
         $query13=mysqli_query($conn,"SELECT nume from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row13= mysqli_fetch_array($query13);
    $nume_bd = $row13['nume'];

     $query14=mysqli_query($conn,"SELECT prenume from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row14= mysqli_fetch_array($query14);
    $prenume_bd = $row14['prenume'];
    
    $query15=mysqli_query($conn,"SELECT telefon from fisa_intrare where imei='".$imei."' and month(data)=month(CURRENT_DATE) and year(data)=year(CURRENT_DATE) and day(data)=day(CURRENT_DATE) and hour(data)=hour(CURRENT_TIMESTAMP) and minute(data)=minute(CURRENT_TIMESTAMP)");
     $row15= mysqli_fetch_array($query15);
    $telefon_bd = $row15['telefon'];

$query2=mysqli_query($conn,"select  nr,model, baterie, imei,data, aspect, defecte_m, defecte_r,functionare,auxiliare,interventii_ant, companie,predare,nume,prenume,telefon from fisa_intrare ");
$nr_inreg=mysqli_num_rows($query2);


echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg>0){
    echo "<b> Fisa nr. </b>"; echo" <b>"; echo  $nr_bd ; echo "</b>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',40);
echo "<b> <font size=6> Fisa de internare a telefonului la </font></b>";
echo "<br>";
echo str_repeat('&nbsp;',45);
echo "<b> <font size=6> Grand Smartphone Store </font></b>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);
echo"
<b><font size=5> Datele pacientului:</font></b>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Pacient:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>"; echo  $model_bd ; echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Data internarii:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $data_bd ;echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Aspectul pacientului:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $aspect_bd ; echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Starea pacientului:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $functionare_bd ; echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Afectiune:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $defecte_r ;  echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Alte afectiuni:</font>";echo str_repeat('&nbsp;',5);  echo "<font size=5><b>";echo $defecte_m ; echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> IMEI:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $imei ;echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Auxiliare predate la internare:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $auxiliare_bd ; echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Internari anterioare:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $interventii_ant ;echo "</font></b>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Dispozitiv primit la schimb:</font>";echo str_repeat('&nbsp;',5); echo "<font size=5><b>";echo  $companie_bd ; echo "</font></b>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);
echo "<br>";
echo"
Specificatii juridice: ";
echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
****TEXT***** "<br>";echo str_repeat('&nbsp;',5);


echo "<br>";echo str_repeat('&nbsp;',5);
echo"
Nume proprietar:"; echo str_repeat('&nbsp;',5); echo "<font=5><b>";echo $nume_bd;echo "</font></b>"; echo str_repeat('&nbsp;',5); echo "<font=5><b>";echo $prenume_bd;echo "</font></b>";
echo "<br>";echo str_repeat('&nbsp;',5);
echo"
Nr. telefon:"; echo str_repeat('&nbsp;',5);  echo "<font=5><b>";echo $telefon_bd;echo "</font></b>";
echo "<br>";echo str_repeat('&nbsp;',5);
echo"
Cod ecran:"; 
echo "<br>";echo str_repeat('&nbsp;',5);


echo "<br>";echo "<br>";echo str_repeat('&nbsp;',5);


echo "Semnatura proprietar";

echo "<br>";echo "<br>";echo "<br>";echo str_repeat('&nbsp;',5);echo "<br>";echo "<br>";

echo"
Grand Smartphone Store  ";
echo "<br>";echo str_repeat('&nbsp;',150);
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

