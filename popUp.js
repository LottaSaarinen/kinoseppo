

var modal = document.getElementById("myModal");
var btn = document.querySelector(".submit");
var span = document.getElementsByClassName("close")[0];
var closeBtn = document.querySelector(".close-btn");


btn.onclick = function(event) {
    event.preventDefault(); 

    var inputs = document.querySelectorAll('#contactForm input[required]');

    var allFilled = true;
    inputs.forEach(function(alkio) {
        if (!alkio.value) {
            allFilled = false;
        }
    });
    if (allFilled) {
        modal.style.display = "block";
    } else {
        alert("Täytä kaikki kentät!");
    }
}


span.onclick = function() {
    modal.style.display = "none";
}

closeBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
     }
}




















