<title>TUGAS 6</title> 


</head> 


<body> 


<h2>MENGHITUNG LUAS</h2> 


    <form method="post" action="">


    PILIH MENU :<br /> 


    <input type="radio" name="luas" value="p" />LUAS BUJUR SANGKAR<br /> 


    <input type="radio" name="luas" value="q"/>LUAS PERSEGI PANJANG<br /> 


    <input type="radio" name="luas" value="r"/>LUAS LINGKARAN <br /> 


    <input type="radio" name="luas" value="s"/>LUAS SEGITIGA<br /><br/>


    


    <input type="submit" name="submit" value="Submit" /> <br/>


    </form> 


<?php


if(isset($_POST['submit'])){ 


    


    $luas=$_POST['luas'];


    $p=$_POST['p'];


    $q=$_POST['q'];


    $r=$_POST['r'];


    $s=$_POST['s'];




    switch($luas)


    


    {


        case $luas=="p": echo "<P><a href=bujur.php>klik di sini untuk luas bujursangkar</a> ";


        break;


        case $luas=="q":echo "<P><a href=pp.php>klik di sini untuk luas persegi panjang </a> ";


        break;        


        case $luas=="r":echo "<P><a href=ling.php>klik di sini untuk luas ligkaran</a>";


        break;


        case $luas=="s": echo "<P><a href=stiga.php>klik di sini untuk luas segi tiga</a>";


        break;    


    }


}


    ?>


</body> 


</html>