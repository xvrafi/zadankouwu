<?php
$conn=mysqli_connect('localhost','root','','kot');
            if(!$conn)
            {
            echo("Błąd połączenia z serwerem");
            }
            else{
            $Imie=$_POST['Gatunek'];
            $Wiek=$_POST['Imie'];
            $Gatunek=$_POST['Wiek'];
            $pytanko="insert into kot (Gatunek,Imie,Wiek)values('$Imie','$Wiek','$Gatunek');";
            $pyt=mysqli_query($conn,$pytanko);
                $powrot="../index.html";
                $baza= "../tajemnica/skarbnica.php";
                
                echo '<a href="'.$powrot.'">Powrót do strony głównej</a></br>';
                echo '<a href="'.$baza.'">Baza Kotów</a>';
            }
        
            mysqli_close($conn);
?>