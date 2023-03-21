<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Przesłano dane za pomocą POST";
        $lowisko=$_POST['lowisko'];
        $data=$_POST['data'];
        $sedzia=$_POST['sedzia'];
        $hotdog=mysqli_connect('localhost','root','','wedkarstwo');
        if($hotdog){
            echo "Połączyliśmy się z bazą";
            $zapytanie="INSERT INTO zawody_wedkarskie VALUES(null, 0,$lowisko, '$data','$sedzia')";
            if(mysqli_query($hotdog,$zapytanie)){
                echo "Dodano do bazy";
            }else{
                echo "Nie dodano do bazy";
            }
        }else{
            echo "Brak połączenia";
        }
    }else{
        echo "Nie przesłano danych";
    }
?>