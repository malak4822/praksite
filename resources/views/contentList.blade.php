<div class="w-4/5 gridi mx-auto bg-neutral-700 rounded-t-3xl p-5">

    <?php

    $five = $all->take(5);
    $rest = $all->skip(5);
    ?>

    {{-- 5 FIRST GUYS --}}
    @foreach ($five as $guy_infive)
        <div class="text-center bg-white text-neutral-800 p-1 rounded-3xl">
            <a href="/event/{{ $guy_infive->id }}"><img class='rounded-3xl' src={{ $guy_infive->thumbnailURL }}></img>
            </a>
            {{ $guy_infive->submitted_by }} {{ $guy_infive->author }}
        </div>
    @endforeach
    {{-- REST OF GUYS --}}
    @foreach ($all as $rest_guy)
        <div class="hidden nextfivelements text-center bg-white text-neutral-800 p-1 rounded-3xl">
            <a href="/event/{{ $guy_infive->id }}"> <img class="aaa rounded-3xl" src={{ $rest_guy->thumbnailURL }}></img>
            </a>
            <p class="aaa"> {{ $rest_guy->submitted_by }} {{ $rest_guy->author }} </p>
        </div>
    @endforeach
</div>

<div class="rounded-b-3xl  bg-neutral-700 w-4/5 text-end mx-auto">
    <button onclick="hideContent()" class="bg-white text-neutral-800 m-5 hover:text-white">
        <p class="change">See 5 more</p>
    </button>
</div>

<script>
    var data = <?php echo json_encode('42', JSON_HEX_TAG); ?>;
</script>
