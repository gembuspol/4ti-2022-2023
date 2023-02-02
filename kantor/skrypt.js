function oblicz(){
    let ilosc=parseInt(document.getElementById("ilosc").value);
    let opcja=document.getElementById("waluta").value;
    let wynik;
    if(opcja=="eur"){
        wynik=ilosc+" zł to "+ilosc*0.19+" GBP";
    }else if(opcja=="usd"){
        wynik=ilosc+" zł to "+ilosc*0.23+" USD";
    }else{
        wynik=ilosc+" zł to "+ilosc*0.21+" EUR";
    }
    document.getElementById("wynik").value=wynik;
}