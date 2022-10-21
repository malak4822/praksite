import './bootstrap';
window.hideSearchBar = hideSearchBar;
window.hideMenu = hideMenu;
window.hideContent = hideContent;


function hideSearchBar() {
    var x = document.getElementById("searchBar");
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
    var x = document.getElementById("visir");
    if (x.style.display == "none") {
        x.style.display = "block"
    } else {
        x.style.display = "none";
    }
}
// secmenu musi byc none kiedy