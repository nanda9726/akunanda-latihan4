<html> 


    <head> 


        <title>soal 2</title> 


    </head> 


    


    <body> <h2>GAJI KARYAWAN </h2> 


    <form method="post" action=""> 


    JAM KERJA <input type="text" name="bil" /><br />


    <input type="submit" name="submit" value="Submit" /> 


    </form> 


<?php


$JAM = $_POST['bil'];


$TOTAL=$JAM*2000;


$TOTAL1=96000+(($JAM-48)*3000);


if ($JAM<49)


{


    echo "GAJI YANG DIDAPAT SAAT BEKERJA $JAM JAM= Rp. $TOTAL"; 


}


else 


{


    echo "GAJI YANG DIDAPAT SAAT BEKERJA $JAM JAM= Rp. $TOTAL1"; 


}


?>


</body> 


</html> 
