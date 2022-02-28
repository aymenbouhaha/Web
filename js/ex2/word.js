const color=document.querySelector(".color")
const taille=document.querySelector(".taille")
const police=document.querySelector(".police")
const text=document.querySelector(".text p")

color.addEventListener(
    "change",
    ()=>{
        text.style["color"]=color.value
    }
)

taille.addEventListener(
    "change",
    ()=>{
        text.style["font-size"]=taille.value+"px"
    }
)

police.addEventListener(
    "change",
    ()=>{
        text.style["font-family"]=police.value
    }
)