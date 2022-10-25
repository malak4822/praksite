import './bootstrap';
window.hideSearchBar = hideSearchBar;
window.hideMenu = hideMenu;
window.hideContent = hideContent;


function hideSearchBar() {
    var x = document.getElementById("searchBar");

    document.getElementsByClassName("gridi")[0].getElementsByClassName("dw");

    if (x.style.display == "none") {
        x.style.display = "flex"
    } else {
        x.style.display = "none";
    }
}

function hideMenu() {
    var x = document.getElementById("secmenu");
    if (x.style.display == "none") {
        x.style.display = "block"
    } else {
        x.style.display = "none";
    }
}

var i = 0;
var timesClicked = 1;
function hideContent() {

    var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");


    if (entireRest.length / (5 * timesClicked) < 1) {

        var a = entireRest.length - ((5 * timesClicked) - 5)

        console.log("reszta to " + a);

        if (a == 4) {
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
        } else if (a == 3) {
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
        }
        else if (a == 2) {
            entireRest[i].classList.add("disnone");
            entireRest[i].classList.add("disnone");
        }
        else {
            entireRest[i].classList.add("disnone");
        }

    }
    else {
        entireRest[i].classList.add("disnone");
        ++i;
        entireRest[i].classList.add("disnone");
        ++i;
        entireRest[i].classList.add("disnone");
        ++i;
        entireRest[i].classList.add("disnone");
        ++i;
        entireRest[i].classList.add("disnone");
        ++i;
    }

    ++timesClicked;
}