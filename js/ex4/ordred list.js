const lis=document.querySelectorAll("ol li")
console.log(lis)
for(let i=0;i<lis.length;i++)
{
    lis[i].addEventListener(
        "click",
        ()=>{
            let x=Math.floor(Math.random()*255)
            let y=Math.floor(Math.random()*255)
            let z=Math.floor(Math.random()*255)
            lis[i].style["color"]="rgb("+x+","+y+","+z+")"
            console.log("haha")
        }
    )
}

