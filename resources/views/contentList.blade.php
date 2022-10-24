<div class="w-4/5 gridi mx-auto bg-neutral-700 rounded-t-3xl p-5">

    <?php
    $all = DB::table('thumbnailContent')->get();
    $five = $all->take(5);
    $rest = $all->skip(5);
    ?>

    {{-- 5 FIRST GUYS --}}
    @foreach ($five as $guy_infive)
        <div class="text-center bg-white text-neutral-800 p-1 rounded-3xl">
            <img class='rounded-3xl' src={{ $guy_infive->thumbnailURL }}></img>
            {{ $guy_infive->submitted_by }} {{ $guy_infive->author }}
        </div>
    @endforeach
    {{-- REST OF GUYS --}}
    @foreach ($rest as $rest_guy)
        <div id="visir" class="text-center bg-white text-neutral-800 p-1 rounded-3xl">
            <img class='rounded-3xl' src={{ $rest_guy->thumbnailURL }}></img>
            {{ $rest_guy->submitted_by }} {{ $rest_guy->author }}
        </div>
    @endforeach

    <div class="nextfivelements"> </div>
</div>

<div class="rounded-b-3xl  bg-neutral-700 w-4/5 text-end mx-auto">
    <button onclick="hideContent()" class="bg-white text-neutral-800 m-5 hover:text-white">See more</button>
</div>
