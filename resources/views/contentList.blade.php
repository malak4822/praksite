<div>
    <div class="w-4/5 grid mx-auto aea bg-neutral-700 rounded-t-3xl p-5">
        <?php
        $user = DB::table('thumbnailContent')->find(1);
        echo '<div class="tile">' . "<img alt=cat1 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(2);
        echo '<div class="tile">' . "<img alt=cat2 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(3);
        echo '<div class="tile">' . "<img alt=cat3 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(4);
        echo '<div class="tile">' . "<img alt=cat4 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        
        $user = DB::table('thumbnailContent')->find(5);
        echo '<div class="tile">' . "<img alt=cat5 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
        ?>



        </div>
        <div id=visir class="w-4/5 grid mx-auto aea bg-neutral-700 p-5">

            <?php
            $user = DB::table('thumbnailContent')->find(6);
            echo '<div class="tile">' . "<img alt=cat6 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            
            $user = DB::table('thumbnailContent')->find(7);
            echo '<div class="tile">' . "<img alt=cat7 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            
            $user = DB::table('thumbnailContent')->find(8);
            echo '<div class="tile">' . "<img alt=cat8 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            
            $user = DB::table('thumbnailContent')->find(9);
            echo '<div class="tile">' . "<img alt=cat9 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            
            $user = DB::table('thumbnailContent')->find(10);
            echo '<div class="tile">' . "<img alt=cat10 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            
            $user = DB::table('thumbnailContent')->find(11);
            echo '<div class="tile">' . "<img alt=cat11 class=tileinside src=$user->thumbnailURL ></img>" . $user->submitted_by . '<br>' . $user->author . '</div>';
            ?>

        </div>
    </div>



    <div class="rounded-b-3xl  bg-neutral-700 w-4/5 text-end mx-auto">
        <button onclick="hideContent()" class="bg-white text-black hover:text-white">See more</button>
    </div>

</div>
