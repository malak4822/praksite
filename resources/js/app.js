import './bootstrap';
window.hideSearchBar = hideSearchBar;
window.hideMenu = hideMenu;

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
// secmenu musi byc none kiedy