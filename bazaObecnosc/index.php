<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie obecności</title>
</head>
<body>
    <?php
        $connect=mysqli_connect('localhost','root','','4ti');
        if($connect){
            echo "połączyliśmy się z bazą";
            $zapytanie="SELECT * from dane";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $idosoba[]=$wiersz['id'];
                }
        }else{
            echo "błąd połączenia";
        }

        mysqli_close($connect);
    ?>
    <header>
        <h1>Dodawanie obecności</h1>
    </header>
    <main>
        <form method="post">
        <table>
            <thead>
                <tr>
                    <th>Lp.</th>
                    <th>Imię i nazwisko</th>
                    <th>Czy jest obecny?</th>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i=0;$i<count($imie);$i++){
                    echo "<tr>";
                    echo "<th>$idosoba[$i]</th>";
                    echo "<td>$imie[$i] $nazwisko[$i]</td>";
                    echo "<td><input type='checkbox' name='obecny$idosoba[$i]' id='obecny$idosoba[$i]'></td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <input type="submit" value="Zapisz obecność" width=100px>
        </form>
        
                    
                

    </main>
    <footer>
        Stronę wykonał Przemek
    </footer>
    
</body>
</html>