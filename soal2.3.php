<html> 


    <head> 


        <title>TUGAS 2</title> 


    </head> 


    


    <body> <h2>GAJI KARYAWAN </h2> 


    <form method="post" action=""> 


    JAM KERJA <input type="text" name="bil" /><br />


    <input type="submit" name="submit" value="Submit" /> 


    </form> 


<?php


if(isset($_POST['submit'])){


$JAM = $_POST['bil'];


$TOTAL=$JAM*2000;


$TOTAL1=96000+(($JAM-48)*3000);


switch ($jam)


{


case $jam<49 : echo "GAJI YANG DIDAPAT SAAT BEKERJA $JAM JAM= Rp. $TOTAL"; 


break;


case $jam>48 : echo "GAJI YANG DIDAPAT SAAT BEKERJA $JAM JAM= Rp. $TOTAL1"; 


break;


}


}


?>


</body> 


</html>