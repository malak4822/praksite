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

function hideContent() {
    var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");

    for (var i = 0; i < 5; ++i) {
        entireRest[i].classList.add("disnone");
    }

    
    // IF DISSAPEARING IS TRUE GO FALSE AND OTHER WAY
    // if (entireRest.classList.contains("disnone") == true) {
    //     entireRest.classList.remove("disnone");
    // }
    // else {
    //     entireRest.classList.add("disnone");
    // }

    //             SHOWING EVERY RECORD
    // [].forEach.call(entireRest, function (entireRest) {
    // })
}