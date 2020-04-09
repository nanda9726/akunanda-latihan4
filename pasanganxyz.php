<html>


    <head>


        <title> PasanganXYZ </title>


    </head>


<body>


    <?php


    $X=1;


    while ($X<=23)


    {


        $Y=1;


        while ($Y<=23)


        {


            $Z=23; 


            while ($Z>=1)


            {


                $a=$X+$Y+$Z;


                if ($a==25)


                    echo "X=$X Y=$Y Z=$Z <br>";


                else


                echo"";


                $Z--;


            }


            $Y++;


        }


        $X++;


    }


    echo "Jumlah Penyelesaian = $a";


    ?>


</body>



</html>