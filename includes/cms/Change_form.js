document.getElementById("fname").onchange = function() {myFunction()};

function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}