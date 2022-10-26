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

var h = 0;
var timesClicked = 1;
function hideContent() {
    var d = 0;
    var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");


    if (entireRest.length < 5 * timesClicked) {

        var a = entireRest.length - ((5 * timesClicked) - 5)

        console.log("reszta to " + a);
        console.log(d);

        while (a >= d) {
            console.log("esa");
            ++d;
            entireRest[a].classList.add("disnone");
        }

    }
    else {

        for (var hend = h + 5; h < hend; ++h) {
            entireRest[h].classList.add("disnone");
        }

    }

    ++timesClicked;
}