document.getElementById("ad-pop").addEventListener("click", function(event){
    event.preventDefault();
    document.querySelector(".c-popup").style.display ="block";
})

document.querySelector(".c-popup .click").addEventListener("click", function(){
    document.querySelector(".c-popup").style.display ="none";
})