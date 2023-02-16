function oblicz(){
    let n=parseInt(document.getElementById("liczba").value);
    let Fn=0;
    if(n<=2){
        Fn=1;
    }else{
        let i=3;
        let F1=1;
        let F2=2;
        while (i<=n){
            Fn=F1+F2;
            F1=F2;
            F2=Fn;
            i++;
        }
    }
    document.getElementById("wynik").value=Fn;
}