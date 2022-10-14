<div class="bg-zinc-800 w-4/5 mx-auto rounded-lg">
    <div class="flex justify-center auto w-9/10 mx-auto">

        <div class="tile">
            <?php
            // WYŚWIETLANIE WIERSZY WIERSZY WIERSZY
            $user = DB::table('thumbnailContent')->find(1);
            
            echo "<img alt=cat1 class=tileinside src=$user->thumbnailURL ></img>";
            echo $user->submitted_by . '<br>' . $user->author;
            ?>
        </div>

        <div class="tile">
            <?php
            $user = DB::table('thumbnailContent')->find(2);
            
            echo "<img alt=cat2 class=tileinside src=$user->thumbnailURL></img>";
            echo $user->submitted_by . '<br>' . $user->author;
            ?>
        </div>

        <div class="tile">
            <?php
            $user = DB::table('thumbnailContent')->find(3);
            
            echo "<img alt=cat3 class=tileinside src=$user->thumbnailURL></img>";
            echo $user->submitted_by . '<br>' . $user->author;
            ?>
        </div>

        <div class="tile">
            <?php
            $user = DB::table('thumbnailContent')->find(4);
            
            echo "<img alt=cat4 class=tileinside src=$user->thumbnailURL></img>";
            echo $user->submitted_by . '<br>' . $user->author;
            ?>
        </div>

        <div class="tile">
            <?php
            $user = DB::table('thumbnailContent')->find(5);
            
            echo "<img alt=cat5 class=tileinside src=$user->thumbnailURL></img>";
            echo $user->submitted_by . '<br>' . $user->author;
            ?>
        </div>
    </div>
</div>
