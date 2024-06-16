

var modal = document.getElementById("myModal");
var btn = document.querySelector(".submit");
var span = document.getElementsByClassName("close")[0];
var closeBtn = document.querySelector(".close-btn");

// Näytä modal kun lähetä nappia painetaan
btn.onclick = function(event) {
    event.preventDefault(); // Estä lomakkeen lähetys
    //modal.style.display = "block";

    var inputs = document.querySelectorAll('#contactForm input[required');

    var allFilled = true;
    inputs.forEach(function(input) {
        if (!input.value) {
            allFilled = false;
        }
    });
    if (allFilled) {
        modal.style.display = "block";
    } else {
        alert("Täytä kaikki kentät!");
    }
}




// Sulje modal kun X painetaan
span.onclick = function() {
    modal.style.display = "none";
}

// Sulje modal kun Sulje nappia painetaan
closeBtn.onclick = function() {
    modal.style.display = "none";
}

// Sulje modal jos käyttäjä klikkaa ikkunan ulkopuolelle
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
     }
}




















