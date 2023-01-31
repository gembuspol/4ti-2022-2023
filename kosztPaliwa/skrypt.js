function oblicz(){
    let ilosc=parseInt(document.getElementById("ilosc").value);
    let rodzaj=document.getElementById("rodzaj").value;
    let koszt=0;
    if(rodzaj=="benzyna95"){
        koszt=ilosc*6.72;
    }
    document.getElementById("wynik").value=koszt;
}