<html> 


    <head>


         <title>


         Belajar php bersama Nanda
		


         </title>


    </head> 


    <body>


        <h1>Pemrograman PHP Tugas 1</h1>


        <?php


        $jumlahUang = 1575250; 


        $sisaa=$jumlahUang%100000;


        $sisab=$sisaa%50000;


        $sisac=$sisab%20000;


        $sisad=$sisac%5000;


        $sisae=$sisad%100;


        $sisaf=$sisae%50;




        $a=($jumlahUang-$sisaa)/100000;


        $b=($sisaa-$sisab)/50000;


        $c=($sisab-$sisac)/20000;


        $d=($sisac-$sisad)/5000;


        $e=($sisad-$sisae)/100;


        $f=($sisae-$sisaf)/50;




        echo "Jumlah Rp. 100.000 : ".$a. "<br />"; 


        echo "Jumlah Rp. 50.000 : ".$b. "<br />"; 


        echo "Jumlah Rp. 20.000 : ".$c. "<br />"; 


        echo "Jumlah Rp. 5.000 : ".$d. "<br />"; 


        echo "Jumlah Rp. 100 : ".$e. "<br />"; 


        echo "Jumlah Rp. 50 : ".$f. "<br />"; 


        ?> 


    </body>


</html> 