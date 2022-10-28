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



function showContent() {
    var timesClicked = 0;
    var h = 0;
    var entireRest = document.getElementsByClassName("gridi")[0].getElementsByClassName("nextfivelements");
    var changingText = document.getElementsByClassName("chText")[0].getElementsByClassName("changingText")[0];

    ++timesClicked;

    var showMore = changingText.getElementsByClassName("showMore")[0];
    var showLess = changingText.getElementsByClassName("showLess")[0];

    if (entireRest.length / (timesClicked * 5) < 1) {

        var amountOfRestTiles = entireRest.length - ((5 * timesClicked) - 5);
        var lastTileNumber = ((5 * timesClicked) - 5);

        showMore.classList.add("disnone")
        showLess.classList.add("disblock")

        if (timesClicked * 5 + amountOfRestTiles == entireRest.length) {
            console.log("tak");
        }
        else {
            console.log("nie");
            for (var i = 0; amountOfRestTiles > i; ++i) {
                entireRest[lastTileNumber].classList.add("disblock");
                ++lastTileNumber;
            }
        }
    }
    else {
        for (var hend = h + 5; h < hend; ++h) {
            entireRest[h].classList.add("disblock");
        }
    }
}