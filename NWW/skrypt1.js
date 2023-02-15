function oblicz(){
    let a=parseInt(document.getElementById("liczbaA").value);
    let b=parseInt(document.getElementById("liczbaB").value);
    let x=a*b;
    while(b != 0){
        let c= a % b;
        a=b;
        b=c;
    }
    let NWD=a;
    let NWW=x/NWD;
    document.getElementById("wynik").value=NWW;
}