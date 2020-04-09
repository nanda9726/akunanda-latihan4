<html>


    <head>


        <title> Bintang 3 </title>


    </head>


<body>


    <h1> Formasi Bintang </h1>


    <form method="get" action="">


    Masukkan Angka<input type="text" name="bintang"><br>


    <input type="submit" name="Submit" value="submit">


    <input type="reset" name="Reset" value="reset"><br>


<?php


$bin=$_GET["bintang"];


$a=1;


while($a<=$bin)


{


    $b=1;


    while($b<=$a)


    {


        echo "*";


        $b++;


    }


    echo "<br>";


    $a++;


}


while($a<=$bin)


{


    $b=$bin;


    while($b>=$a)


    {


        echo "*";


        $b--;


    }


    echo "<br>";


    $a++;


}