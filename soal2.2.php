<html> 


    <head> 


        <title>TUGAS 8.2 </title> 


    </head> 


    


    <h2>GAJI PEGAWAI</h2> 


    <form method="post" action="">


     NAMA = <input type="text" name="nama" /><br /> <br /> 


     GOLONGAN 


     <input type="radio" name="golongan" value="A"/>A


     <input type="radio" name="golongan" value="B"/>B


     <input type="radio" name="golongan" value="C"/>C


     <input type="radio" name="golongan" value="D"/>D<br /><br />  


     JAM KERJA[JAM]= <input type="text" name="bil1" /><br /><br /> 


    <input type="submit" name="submit" value="Submit" /> 


    </form> 


<?php


if(isset($_POST['submit'])){ 


    $nama=$_POST['nama'];


    $gol=$_POST['golongan'];


    $bil1=$_POST['bil1'];


  


    $A= $bil1*4000;


    $B= $bil1*5000;


    $C= $bil1*6000;


    $D= $bil1*7500;


    $tambah=$bil1-48;


    $lembur=$tambah*3000;


    $A1= 48*4000+$lembur;


    $B1= 48*5000+$lembur;


    $C1= 48*6000+$lembur;


    $D1= 48*7500+$lembur;


    


    echo "<P>NAMA KARYAWAN  = $nama ";


    echo "<P>GOLONGAN   = $gol ";


    echo "<P>JAM KERJA =$bil1";


    switch($gol)


    {


        case $bil1<=48&&$gol == A : echo "<P>GAJI = Rp.$A";


        break;


        case $bil1<=48&&$gol == B : echo "<P>GAJI = Rp.$B";


        break;


        case $bil1<=48&&$gol == C : echo "<P>GAJI = Rp.$C";


        break;


        case $bil1<=48&&$gol == D : echo "<P>GAJI = Rp.$D";


        break;


        case $bil1>49&&$gol == A : echo "<P>GAJI = Rp.$A1";


        break;


        case $bil1>49&&$gol == B : echo "<P>GAJI = Rp.$B1";


        break;


        case $bil1>49&&$gol == C : echo "<P>GAJI = Rp.$C1";


        break;


        case $bil1>49&&$gol == D : echo "<P>GAJI = Rp.$D1";


        break;




    }


    }


    ?>


</body> 


</html> 