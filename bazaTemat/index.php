<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie tematów lekcji</title>
    <style>
        body{
            padding:15px;
        }
    </style>
</head>
<body>
    <?php
            $connect=mysqli_connect('localhost','root','','4ti');
            if($connect){
                echo "Połączyliśmy się z bazą"; 
                $zapytanie="SELECT * from nauczyciel";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $idosoba[]=$wiersz['id'];
                }
                $zapytanie="SELECT * from przedmiot";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmiot[]=$wiersz['nazwaPrzedmiot'];
                    $idprzedmiot[]=$wiersz['id'];
                }
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $przedmiotID=$_POST["przedmiot"];
                    $osoba=$_POST["osoba"];
                    $data=$_POST["data"];
                    $lekcja=$_POST["lekcja"];
                    $temat=$_POST["temat"];
                    $insert="INSERT INTO lekcja VALUES(null,$przedmiotID,'$osoba','$data','$lekcja','$temat')";
                    if(mysqli_query($connect,$insert)){
                        echo "Dodano dane do bazy";
                    }else{
                        echo "Bład dodawania do bazy";
                    }
                }
            }else{
                echo "Brak połączenia z bazą";
            }
            mysqli_close($connect);
        ?>
    <header>
        <h1>Wprowadzanie tematów lekcji</h1>
    </header>
    <main>
        <form method="post">
            <label for="osoba">Wybierz nauczyciela</label>
            <select name="osoba" id="osoba">
                <?php
                    for($i=0;$i<count($imie);$i++){
                        echo "<option value=$idosoba[$i]> $imie[$i] $nazwisko[$i]</option>";
                    }
                ?>
    
            </select>
            <br>
            <label for="przedmiot">Wybierz przedmiot</label>
            <select name="przedmiot" id="przedmiot">
            <?php
                for($i=0;$i<count($przedmiot);$i++){
                    echo "<option value=$idprzedmiot[$i]> $przedmiot[$i]</option>";
                }
            ?>

        </select>
        <br>
        <label for="data">Podaj datę</label>
        <input type="date" name="data" id="data">
        <br>
        <select name="lekcja" id="lekcja">
            <?php
            for($i=0;$i<=13;$i++){
                echo "<option value=$i>$i</option>";
            }
            ?>
            
        </select>
        <br>
        <label for="temat">Podaj temat lekcji</label>
        
        <input type="text" name="temat" id="temat">
        <br>
        <input type="submit" value="Zapisz dane">
        </form>
    </main>
    <footer>
        Stronę wykonał Przemek
    </footer>
    
</body>
</html>