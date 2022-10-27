import './bootstrap';
window.hideSearchBar = hideSearchBar;
window.hideMenu = hideMenu;
window.showContent = showContent;

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

var timesClicked = 0;
var i = 0;
var h = 0;

var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");
var changingText = document.getElementsByClassName("chText")[0].getElementsByClassName("changingText")[0];

function showContent() {
    ++timesClicked;

    var showMore = changingText.getElementsByClassName("showMore");
    var showLess = changingText.getElementsByClassName("showLess");

    if (amountOfRestTiles + entireRest.length / (timesClicked * 5) == entireRest.length) {
        console.log("dzuiala");
    }

    else if (entireRest.length / (timesClicked * 5) < 1) {
        var amountOfRestTiles = entireRest.length - ((5 * timesClicked) - 5);
        var lastTileNumber = entireRest.length - amountOfRestTiles;

        while (amountOfRestTiles > i) {
            entireRest[lastTileNumber].classList.add("disnone");
            ++lastTileNumber;
            ++i;
        }
        console.log("wszystkie elementy : " + entireRest.length);
        console.log("ilość zostałych kafelków : " + amountOfRestTiles);
        console.log("numer ostatniego kafla : " + lastTileNumber);
    }
    else {
        for (var hend = h + 5; h < hend; ++h) {
            entireRest[h].classList.add("disnone");
        }
    }
}