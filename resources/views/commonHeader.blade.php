<header class="bg-white flex justify-around">

    <div class="flex">
        <button class="logo bg-inherit text-neutral-800 font-bold text-4xl">
            <img src="#" alt="L O G O"></img>
        </button>
        <button class="links" onclick="hideSearchBar()"><a href="#">Search</a></button>
        <button class="links"><a href="#">Ranking</a></button>
    </div>

    <div class="flex links">
        <button><a href="#">Submit</a></button>
        <button><a href="#">Notification</a></button>
        <button><a href="#">My Page</a></button>
    </div>

    <div onclick="hideMenu()" class="burger hidden my-auto cursor-pointer">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

</header>

<div class="text-center font" id="secmenu">
    <div class="secmenuitem" onclick="hideSearchBar()"><a href="#">Search</a></div>
    <div class="secmenuitem"><a href="#">Ranking</a></div>
    <div class="secmenuitem"><a href="#">Submit</a></div>
    <div class="secmenuitem"><a href="#">Notification</a></div>
    <div class="secmenuitem"><a href="#">My Page</a></div>
</div>
