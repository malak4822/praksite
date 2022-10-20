import './bootstrap';
window.showSearchBar = showSearchBar;
window.hideContent = hideContent;
window.navSlide = navSlide;

function showSearchBar() {
    var x = document.getElementById("searchBar");
    if (x.style.display == "none") {
        x.style.display = "flex"
    } else {
        x.style.display = "none";
    }
}

function hideContent() {
    var x = document.getElementById("visir");
    if (x.style.display == "none") {
        x.style.display = "grid"
    } else {
        x.style.display = "none";
    }
}
