<script>
    function showSearchBar() {
        var x = document.getElementById("searchBar");
        if (x.style.display == "none") {
            x.style.display = "block"
        } else {
            x.style.display = "none";
        }
    }
</script>

<header class="bg-stone-700 text-white grid">


    <div>
        <img src="logotype.png" alt="logo"></img>
    </div>

    <button onclick="showSearchBar()">Search</button>

    <button>Ranking</button>

    <div class="text-center">
        Common Header
    </div>

    <button>Submit</button>

    <button>Notification</button>

    <button>My Page</button>



</header>
