<div class="w-4/5 gridi mx-auto bg-neutral-700 rounded-t-3xl p-5">
    <script>
        var p1 = "sucdddddddddcess";
    </script>
    <?php
    $firstfive = DB::table('thumbnailContent')->get();
    $rest = DB::table('thumbnailContent')
        ->where('id', '>', 5)
        ->get();
    ?>
    {{-- 5 FIRST GUYS --}}
    @foreach ($firstfive as $guy_five)
        @if ($guy_five->id == 6)
        @break
    @endif

    <div class="text-center bg-white text-neutral-800 p-1 rounded-3xl">
        <img class='rounded-3xl' src={{ $guy_five->thumbnailURL }}></img>
        {{ $guy_five->submitted_by }} {{ $guy_five->author }}
    </div>
@endforeach

{{-- REST OF GUYS --}}
    @foreach ($rest as $rest_guy)
        <div class="text-center bg-white text-neutral-800 p-1 rounded-3xl">
            <img class='rounded-3xl' src={{ $rest_guy->thumbnailURL }}></img>
            {{ $rest_guy->submitted_by }} {{ $rest_guy->author }}
        </div>
    @endforeach
</div>

<div class="rounded-b-3xl  bg-neutral-700 w-4/5 text-end mx-auto">
<button onclick="hideContent()" class="bg-white text-neutral-800 m-5 hover:text-white">See more</button>
</div>
