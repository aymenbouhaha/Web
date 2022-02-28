const x=Math.floor(Math.random()*10)
console.log(x)
let nmb=3;
let test=false ;
while(nmb>0 && test==false )
{
    let y=prompt("donner votre essai")
    y=parseInt(y)
    if(y==x)
    {
    test=true        
    }
    else {
        nmb--;
    }
}
if (test==true){
    alert("Vous avez gagnez");
}
else {
    alert("Vous avez perdu");
}
choice=confirm("voulez vous rejouer")
if(choice==true)
{
    document.location.reload()
}







