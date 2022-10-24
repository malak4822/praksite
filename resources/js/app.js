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
    var y = document.getElementsByClassName("nextfivelements")[0];
    y.classList.add("bordi");
}

// secmenu musi byc none kiedy