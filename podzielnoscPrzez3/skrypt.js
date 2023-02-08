function obliczModulo(){
    let liczba=parseInt(document.getElementById("liczba").value);
    if(liczba%3==0){
        document.getElementById("wynikModulo").value="Liczba jest podzielna przez 3";
    }else{
        document.getElementById("wynikModulo").value="Liczba NIE JEST podzielna przez 3";
    }
}