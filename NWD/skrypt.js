function oblicz(){
    let liczbaA=parseInt(document.getElementById("liczbaA").value);
    let liczbaB=parseInt(document.getElementById("liczbaB").value);
    while (liczbaA !== liczbaB){
        if(liczbaA > liczbaB){
            liczbaA=liczbaA-liczbaB;
        }else{
            liczbaB=liczbaB-liczbaA;
        }
    }
    document.getElementById("wynik").value=liczbaA;
}