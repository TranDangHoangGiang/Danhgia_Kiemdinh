//  const imgItem = document.querySelectorAll(".aspect-ratio-169 img")
//  const imgItemContainer = document.querySelector(".aspect-ratio-169")
//  const dotItem = document.querySelectorAll(".dot")
//  let index = 0;
//  let imgLeng = imgItem.length
//  imgItem.forEach(function(image,index){
//      image.style.left = index*100 + "%"
//      dotItem[index].addEventListener("click",function(){
//      slideRun (index)
//      })
//  })
//  function slider (){
//      index++;
//      if(index >= imgLeng){index=0}
   
//      slideRun (index)
//  }
//  function slideRun (index) {
//      imgItemContainer.style.left = "-" + index*100 + "%"
//      const dotActive = document.querySelector(".active")
//      dotActive.classList.remove("active")
//      dotItem[index].classList.add("active");
//  }
 
//  setInterval (slider,5000)




// const toP = document.querySelector(".top")
// window.addEventListener("scroll",function(){
//     const X = this.pageYOffset;
//   if(X>1){toP.classList.add("active")}
//   else {
//       toP.classList.remove("active")
//   }
// }) 
const adressbtn = document.querySelector('#adress_form')
const adressclose = document.querySelector('#adress_close')
// console.log(rightbtn)
adressbtn.addEventListener("click", function(){
    document.querySelector('.adress_form').style.display = "flex"
})
adressclose.addEventListener("click", function(){
    document.querySelector('.adress_form').style.display = "none"
})
// slider1
const rightbtn = document.querySelector('.fa-angle-right')
const leftbtn = document.querySelector('.fa-angle-left')
const imgNuber = document.querySelectorAll('.slider_content_left_top img')
let index = 0
rightbtn.addEventListener("click", function(){
    index = index +1;
    if(index > imgNuber.length-1){
        index = 0
    }
    removeactive ()
    document.querySelector(".slider_content_left_top").style.right = index *100+"%"
    imgNuberLi[index].classList.add("active")
})
leftbtn.addEventListener("click", function(){
    index = index -1
    if(index<0){
        index = imgNuber.length-1
    }
    removeactive ()
    document.querySelector(".slider_content_left_top").style.right = index *100+"%"
    imgNuberLi[index].classList.add("active")
})
// slider1
const imgNuberLi = document.querySelectorAll('.slider_content_left_bottom li')
// console.log(imgNuberLi)
imgNuberLi.forEach(function(image, index){
    image.addEventListener("click", function(){
        removeactive ()
        document.querySelector(".slider_content_left_top").style.right = index *100+"%"
        image.classList.add("active")
    })
})
function removeactive(){
    let imgactive = document.querySelector('.active')
    imgactive.classList.remove("active")
}
function imgAuto(){
    index = index+1
    imgNuberLi.forEach(function(image, index1){
        image.addEventListener("click", function(){
           index = index1
        })
    })
    if(index > imgNuber.length-1){
        index = 0
    }
    
    console.log(index)
    removeactive ()
    document.querySelector(".slider_content_left_top").style.right = index *100+"%"
    imgNuberLi[index].classList.add("active")

}
setInterval(imgAuto, 5000)

