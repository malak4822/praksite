import './bootstrap';
window.showSearchBar = showSearchBar;

function showSearchBar() {
    var x = document.getElementById("searchBar");
    if (x.style.display == "none") {
        x.style.display = "inline-block"
    } else {
        x.style.display = "none";
    }
}