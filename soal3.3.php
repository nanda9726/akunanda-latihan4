<html> 


    <head> 


        <title>soal 3</title> 


    </head> 


    


    <body> <h2>BERAT BADAN IDEAL</h2> 


    <form method="post" action=""> 


    TINGGI BADAN (CM) <input type="text" name="tinggi" /><br />


    BERAT BADAN (KG)<input type="text" name="berat" /><br />


    <input type="submit" name="submit" value="Submit" /> 


    </form> 


<?php


if(isset($_POST['submit'])){


$tinggi=$_POST['tinggi'];


$berat=$_POST['berat'];


$hit1=$tinggi-100;


$ideal=$hit1-($hit1/10);


echo "TINGGI BADAN ANDA :$tinggi cm,";


echo "BERAT BADAN ANDA  :$berat kg, ";


if ($berat>=2+$ideal||$berat==$ideal||$berat>=$ideal-2)


{


    echo "BERAT BADAN ANDA IDEAL"; 


}


else 


{


    echo "BERAT BADAN ANDA TIDAK IDEAL"; 


}


}


?>


</body> 


</html> 
