const nme=document.querySelector("#name");
const content =document.querySelector("#content");
const result=document.querySelector(".result")
const but=document.querySelector("button");
let nbClick=0
function myfun(){
   nbClick++
   const newElement=document.createElement("div")
   let clsName="line"+nbClick
   newElement.classList.add("lign",clsName)
   const par=document.createElement("p")
   par.textContent=nme.value+":"+content.value
   const btn=document.createElement("button")
   const i=document.createElement("i")
   i.classList.add("fa-solid","fa-trash-can")
   btn.appendChild(i)
   btn.classList.add("supp",nbClick)
   newElement.appendChild(par)
   newElement.appendChild(btn)
   result.appendChild(newElement)
   btn.addEventListener(
      "click",
      ()=>{
         supp(btn.classList[1])
      }
   )
}

function supp(t){
   let clsName="line"+t
   const d=document.querySelector(".lign."+clsName)
   result.removeChild(d)
}



