function oblicz(){
    let liczbaA=parseInt(document.getElementById("liczbaA").value);
    let liczbaB=parseInt(document.getElementById("liczbaB").value);
    let x=liczbaA*liczbaB;
    while (liczbaB!==0){
        let c=liczbaA % liczbaB;
        liczbaA=liczbaB;
        liczbaB=c;
    }
    let NWD=liczbaA;
    let NWW=x/NWD;
    document.getElementById("wynik").value=NWW;
}