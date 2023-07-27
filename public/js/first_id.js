var cancel=document.getElementById("close");
var open=document.getElementsByClassName("btn");
var model=document.getElementById("text");
var video=document.getElementById("video");

for(var i=0 ; i<=open.length ; i++){

    open[i].addEventListener("click", myFunction);
    function myFunction(){
         model.style.display="block";
        // When the user clicks on <span> (x), close the modal
        cancel.onclick = function() {
            model.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == model) {
                model.style.display = "none";
            }
        }
    }
}


  

//start the video
// var close=document.getElementById("close2");
// var run=document.getElementsByClassName("btn2");
// var video=document.getElementById("video");
// for(var x=0 ; x<=run.length ; x++){
//     run[x].addEventListener("click", myfun);
//     function myfun(){
      
//     }
// }



