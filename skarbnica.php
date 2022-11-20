<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista Kotów</title>
</head>
<body>
    <div class="baner">
        Baza danych Kotów   
        
        </div>
    
    <div class="obramka">
        <div class="panel-lewy">
            <h2>Koty</h2>
                <?php
                $conn=mysqli_connect('localhost','root','','kot');
                if(!$conn)
                {
                exit("Błąd połączenia z serwerem");
                }
                else{
                $pyt=mysqli_query($conn,'select Imie, Wiek, Gatunek from kot;');
                 $il_wierszy=mysqli_num_rows($pyt);
                 echo"<table><tr><th>Imie</th><th>Wiek</th><th>Gatunek</th>";
         
                
                 for($i=0;$i<$il_wierszy;$i++){
                    $result=mysqli_fetch_array($pyt);

                    echo"<tr><td>".$result['Imie']."</td><td>".$result['Wiek']."</td><td>".$result['Gatunek']."</td></tr>";
                 }
                 echo"</table>";
                }mysqli_close($conn);
                ?>
            
    
    
        </div>
    
        <div class="panel-prawy">
            <h3>Rasy</h3>
        <ol>
            <li>Brytyjski</li>
            <li>Perski</li>
            <li>Syberyjski</li>
            <li>Szkocki</li>
            <li>Maine Coon</li>
            <li>Turecki</li>
            <li>Bengalski</li>
            <li>Nie zidentyfikowane</li>
        </ol>
        <br>
        
        </div>
    </div>
        <div class="stopka">
        
            <br>
        <a href="../index.html">Powrót do strony głównej</a></br>
        <a href="../dodanie/dodanie.html">Dodaj Kotka</a>
    
        </div>
    
</body>
</html>