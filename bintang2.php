<html>


    <head>


        <title> Bintang 2 </title>


    </head>


<body>



    <h1> Formasi Bintang </h1>



    <form method="post" action="">


    Masukkan Angka<input type="text" name="angka"><br>


    <input type="submit" name="Submit" value="submit">


    <input type="reset" name="Reset" value="reset"><br>


    <?php


     /*a itu baris vertikal


    b itu kolom horizontal*/


    $ang=$_POST[angka];


    $a=1;


    while ($a<=$ang)


    {



        $b=$ang;


        while ($b>=$a)


        {


            


            echo "*";


            $b--;


            


        }


        echo "<br>";


        $a++;


    }


    ?>


</body>


</html>
