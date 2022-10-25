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
function hideContent() {

    var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");

    if (i == 10) {
        while (i < 13) {
            ++i;
            entireRest[i].classList.add("disnone");
        }
    }
    else if (i == 5) {
        while (i < 10) {
            ++i;
            entireRest[i].classList.add("disnone");
        }
    }
    else if (i == 0) {
        while (i < 5) {
            ++i;
            entireRest[i].classList.add("disnone");
        }
    }

    // IF DISSAPEARING IS TRUE GO FALSE AND OTHER WAY


    //             SHOWING EVERY RECORD
    // [].forEach.call(entireRest, function (entireRest) {
    // })
}