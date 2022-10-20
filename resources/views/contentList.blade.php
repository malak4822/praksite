    <div class="w-4/5 grid mx-auto bg-neutral-700 rounded-t-3xl p-5">

        <?php
        $firstfiveuser = DB::table('thumbnailContent')
            ->whereIn('id', [1, 2, 3, 4, 5])
            ->get();
        
        $users = DB::table('thumbnailContent')->get();
        ?>

        @foreach ($firstfiveuser as $firi)
            <div class="text-center bg-neutral-500 p-1 rounded-3xl">
                <img class='rounded-3xl' src={{ $firi->thumbnailURL }}></img>
                {{ $firi->author }}
                {{ $firi->submitted_by }}
            </div>
        @endforeach
    </div>

    <div class="rounded-b-3xl  bg-neutral-700 w-4/5 text-end mx-auto">
        <button onclick="hideContent()" class="bg-white text-black m-5 hover:text-white">See more</button>
    </div>
