var close=document.getElementById("close2");
var run=document.getElementsByClassName("btn2");
var video=document.getElementById("video");

for(var i=0 ; i<=run.length ; i++){

    run[i].addEventListener("click", myFunction);
    function myFunction(){
         video.style.display="block";
        // When the user clicks on <span> (x), close the modal
        close.onclick = function() {
            video.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == model) {
                model.style.display = "none";
            }
        }
    }
}