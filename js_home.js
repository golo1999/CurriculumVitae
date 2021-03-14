aflareVarsta('1999-02-27');

function aflareVarsta(data)
{
    let astazi=new Date();
    let dataNastere=new Date(data);
    let varsta=astazi.getFullYear()-dataNastere.getFullYear();
    let numarLuni=astazi.getMonth()-dataNastere.getMonth();

    if(numarLuni<0 || (numarLuni==0 && astazi.getDate()<dataNastere.getDate()))
        varsta--;
    
    document.getElementById("varsta").innerHTML=varsta;
}