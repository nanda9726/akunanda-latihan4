<form method="post" action="">


Saldo Awal <input type="text" name="sal"><br />


Lama menabung <input type="text" name="bul"><br />


<input type="submit" name="Submit" value="submit">


<input type="reset" name="Reset" value="reset">



<?php


$saldo=$_POST[sal];


$bulan=$_POST[bul];


$b=1;


while ($b<=$bulan)


{


    if($saldo>=1100000)


        {$saldo=(0.04*$saldo)+$saldo-9000;}


    else


       { $saldo=(0.03*$saldo)+$saldo-9000;}


        $b++;


}


echo "<br> Saldo akhir yang diterima adalah = ".$saldo."<br/>";


?>
