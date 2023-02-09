function oblicz(){
    let liczba=parseInt(document.getElementById("liczba").value);
    let wynik1="";
    let wynik2="";
    let wynik3="";
    if(liczba%4==0){
        wynik1="Liczba jest podzielna przez 4";
    }else{
        wynik1="Liczba NIE JEST podzielna przez 4";
    }
    if(liczba%5==0){
        wynik2="Liczba jest podzielna przez 5";
    }else{
        wynik2="Liczba NIE JEST podzielna przez 5";
    }
    if(liczba%9==0){
        wynik3="Liczba jest podzielna przez 9";
    }else{
        wynik3="Liczba NIE JEST podzielna przez 9";
    }
    document.getElementById("wynik1").value=wynik1;
    document.getElementById("wynik2").value=wynik2;
    document.getElementById("wynik3").value=wynik3;
}