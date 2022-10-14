<div class="bg-zinc-800 w-4/5 mx-auto rounded-lg">
    <div class="flex justify-center auto w-9/10 mx-auto">
        <?php
        $idk = 1;
        $user = DB::table('thumbnailContent')->find($idk);
        echo '<div class=tile>' . "<img alt=cat1 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        $idk = 2;
        echo '<div class=tile>' . "<img alt=cat2 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        $idk = 3;
        echo '<div class=tile>' . "<img alt=cat3 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        $idk = 4;
        echo '<div class=tile>' . "<img alt=cat4 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        $idk = 5;
        echo '<div class=tile>' . "<img alt=cat5 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        ?>


    </div>
</div>
