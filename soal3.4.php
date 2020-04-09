<html> 


    <head> 


        <title>soal 4</title> 


    </head> 


    


    <body> <h2>KATEGORI USIA</h2> 


    <form method="post" action=""> 


    USIA ANDA <input type="text" name="usia" /><br />


    <input type="submit" name="submit" value="Submit" /> 


    </form> 


<?php


if(isset($_POST['submit'])){ 


$usia=$_POST['usia'];


if ($usia<6)


{


    echo "$usia TAHUN ,USIA ANDA TERGOLONG BALITA "; 


}


else if($usia<17)


{


    echo "$usia TAHUN ,USIA ANDA TERGOLONG ANAK-ANAK"; 


}


else if($usia<51)


{


    echo "$usia TAHUN ,USIA ANDA TERGOLONG DEWASA"; 


}


else 


{


    echo "$usia TAHUN ,USIA ANDA TERGOLONG TUA"; 


}


}


?>


</body> 


</html> 
