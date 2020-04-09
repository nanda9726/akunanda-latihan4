<html>


    <head>


        <title> Bintang </title>


    </head>


<body>



    <h1> Formasi Bintang </h1>



    <form method="post" action="">


    Masukkan Angka<input type="text" name="angka"><br>


    <input type="submit" name="Submit" value="submit">


    <input type="reset" name="Reset" value="reset"><br>


    <?php


    $a=1;


    while ($a<=$_POST[angka])


    {


        $b=1;


        while ($b<=$a)


        {


            echo "*";


            $b++;


        }


        echo "<br>";


    $a++;


    }


    ?>


</body>


</html>
