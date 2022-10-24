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

    for (var a = 1; a <= 5; ++a) {
        console.log("a d");
    }

    [].forEach.call(entireRest, function (entireRest) {
        if (entireRest.classList.contains("disnone") == true) {
            entireRest.classList.remove("disnone");
        }
        else {
            entireRest.classList.add("disnone");
        }
    })
}