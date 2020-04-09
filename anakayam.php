<html>


    <head>


        <title> soal 2 </title>


    </head>


<body>



    <h1> Lirik anak ayam </h1>



    <form method="post" action="">


    Masukkan jumlah ayam <input type="text" name="ayam" /><br />


    <input type="submit" name="submit" value="submit" />


    <input type="reset" name="reset" value="reset" />


    </form>


<?php


echo "Anak ayam turun ".$_POST[ayam]."<br>";


$a=$_POST[ayam];


$b=$a-1;


while ($a!=-1 && $b!=-1)


{


    


    if($a!=1)


    {


    echo "Anak ayam turun ".$a.", mati satu tinggal ".$b."<br>";


    }


    else


    {echo "Anak ayam turun ".$a.", mati satu tinggal induk ayam <br>";}


    $a--;


    $b--;


}


?>


</body>


</html>