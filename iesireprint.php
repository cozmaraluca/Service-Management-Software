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
$nr = $_SESSION['nr'];

if($status==1)
{
       $query1=mysqli_query($conn,"SELECT nume from fisa_ieisre where nr='".$nr."' ");
     $row1= mysqli_fetch_array($query1);
    $nume_bd = $row1['nume'];

     $query=mysqli_query($conn,"SELECT prenume from fisa_ieisre where nr='".$nr."' ");
     $row= mysqli_fetch_array($query);
    $prenume_bd = $row['prenume'];
    
    
     $query8=mysqli_query($conn,"SELECT model from fisa_ieisre where nr='".$nr."' ");
     $row8= mysqli_fetch_array($query8);
    $model_bd = $row8['model'];
    
     $query9=mysqli_query($conn,"SELECT data_intrare from fisa_ieisre where nr='".$nr."' ");
     $row9= mysqli_fetch_array($query9);
    $data_intrare = $row9['data_intrare'];
    
     $query10=mysqli_query($conn,"SELECT data_iesire from fisa_ieisre where nr='".$nr."' ");
     $row10= mysqli_fetch_array($query10);
    $data_iesire = $row10['data_iesire'];

    
     $query14=mysqli_query($conn,"SELECT defecte_r from fisa_ieisre where nr='".$nr."' ");
     $row14= mysqli_fetch_array($query14);
    $defecte_r = $row14['defecte_r'];
    
    
     $query11=mysqli_query($conn,"SELECT componente from fisa_ieisre where nr='".$nr."' ");
     $row11= mysqli_fetch_array($query11);
    $componente_bd = $row11['componente'];

     $query12=mysqli_query($conn,"SELECT remediate from fisa_ieisre where nr='".$nr."' ");
     $row12= mysqli_fetch_array($query12);
    $remediate_bd = $row12['remediate'];
    $query13=mysqli_query($conn,"SELECT functionare from fisa_ieisre where nr='".$nr."' ");
     $row13= mysqli_fetch_array($query13);
    $functionare_bd = $row13['functionare'];
    

$query2=mysqli_query($conn,"select  nr,nume,prenume,model,data_intrare,data_iesire,componente,remediate,functionare,defecte_r from fisa_ieisre ");
$nr_inreg=mysqli_num_rows($query2);
echo $imputernicit;

echo "<div class=layer>";
 //daca exista inregistrari
if ($nr_inreg>0){
 echo "<b> Fisa nr. </b>"; echo "<b>";echo  $nr ; echo "</b>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',40);
echo "<b> <font size=6> Fisa de externare a telefonului la </font></b>";
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
<font size=5> Pacient:</font>";echo str_repeat('&nbsp;',5);echo "<b> <font size=5>"; echo  $model_bd ; echo "</b> </font>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5> Data internarii:</font>";echo str_repeat('&nbsp;',5);echo "<b> <font size=5>";echo  $data_intrare ;echo "</b> </font>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);
echo"
<font size=5> Data externarii:</font>";echo str_repeat('&nbsp;',5);echo "<b> <font size=5>";echo  $data_iesire ;echo "</b> </font>";
echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);
echo"
<font size=5> Afectiuni:</font>";echo str_repeat('&nbsp;',5);echo "<b> <font size=5>";echo  $defecte_r ;echo "</b> </font>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo str_repeat('&nbsp;',5);

echo"
<font size=5>Subsemnatul/a </font>"; echo str_repeat('&nbsp;',5); echo "<b> <font size=5>";

    echo  $nume_bd ; echo "</b> </font>";echo str_repeat('&nbsp;',2); echo "<b> <font size=5>";echo  $prenume_bd ;echo "</b> </font>";

 echo"
<font size=5>*****TEXT******</font>"; echo str_repeat('&nbsp;',5);
echo"
Nume proprietar:"; echo str_repeat('&nbsp;',5);echo "<b> <font size=3>"; echo $nume_bd; echo "</b> </font>";echo str_repeat('&nbsp;',3);echo "<b> <font size=3>"; echo $prenume_bd;echo "</b> </font>";
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

