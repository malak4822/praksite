<div class="">
    <div class="w-4/5 flex mx-auto mt-3 aea bg-neutral-700 rounded-t-3xl px-5 pt-10">
        <?php
        $user = DB::table('thumbnailContent')->find(1);
        echo '<div class=tile>' . "<img alt=cat1 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(2);
        echo '<div class=tile>' . "<img alt=cat2 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(3);
        echo '<div class=tile>' . "<img alt=cat3 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(4);
        echo '<div class=tile>' . "<img alt=cat4 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(5);
        echo '<div class=tile>' . "<img alt=cat5 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        ?>
    </div>

    <div class="rounded-b-3xl bg-neutral-700 w-4/5 text-end mx-auto mt-auto">
        <button>See more</button>
    </div>

</div>
