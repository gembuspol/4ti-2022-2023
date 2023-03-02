<!DOCTYPE html>
<html lang="pl=PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie ocen</title>
</head>
<body>
    <header>
        <h1>Dodawanie ocen</h1>
    </header>
    <main>
        <?php
            $connect=mysqli_connect('localhost','root','','4ti');
            if($connect){
                echo "Połączyliśmy się z bazą";
                $zapytanie="SELECT * from przedmiot";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmiot[]=$wiersz['nazwaPrzedmiot'];
                    $idprzedmiot[]=$wiersz['id'];
                }
                $zapytanie="SELECT * from dane";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $idosoba[]=$wiersz['id'];
                }
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $przedmiotID=$_POST["przedmiot"];
                    $osoba=$_POST["osoba"];
                    $ocena=$_POST["ocena"];
                    $insert="INSERT INTO oceny VALUES(null,'$osoba','$przedmiotID','$ocena')";
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
    <form method="POST">
        <label for="przedmiot">Wybierz przedmiot</label>
        <select name="przedmiot" id="przedmiot">
            <?php
                for($i=0;$i<count($przedmiot);$i++){
                    echo "<option value=$idprzedmiot[$i]> $przedmiot[$i]</option>";
                }
            ?>

        </select>
        <br>
        <label for="osoba">Wybierz osobę (ucznia)</label>
        <select name="osoba" id="osoba">
            <?php
                for($i=0;$i<count($imie);$i++){
                    echo "<option value=$idosoba[$i]> $imie[$i] $nazwisko[$i]</option>";
                }
            ?>

        </select>
        <br>
        <label for="ocena">Podaj ocenę</label>
        <input type="number" name="ocena" id="ocena">
        <br>
        <input type="submit" value="Zapisz do bazy">
    </form>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
    
</body>
</html>