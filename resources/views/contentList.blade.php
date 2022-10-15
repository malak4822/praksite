<div class="m-8 mx-auto rounded-lg">
    <div class="flex justify-center auto w-9/10 mx-auto">
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
</div>
