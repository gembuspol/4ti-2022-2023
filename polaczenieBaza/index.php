<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
    <?php 
        $polaczenie=mysqli_connect('localhost','root','','4ti');
        if($polaczenie){
            echo "Połączyliśmy się z bazą";
            $zapytanie="SELECT * FROM dane";
            $wynik=mysqli_query($polaczenie,$zapytanie);
            while($wiersz=mysqli_fetch_array($wynik)){
                echo $wiersz['imie']." ".$wiersz['nazwisko']." - wiek: ".$wiersz['wiek']."<br>";
            }
        }else{
            echo "błąd połączenia z bazą";
        }
    ?>
    
</body>
</html>