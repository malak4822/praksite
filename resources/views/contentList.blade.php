<div class="bg-zinc-500 w-4/5 mx-auto">
    <div class="flex justify-center auto w-9/10 mx-auto">

        <div class="tile">
            <?php
            $user = DB::table('thumbnailcontent')->find(2);
            
            echo "<img src=$user->thumbnailURL></img>";
            
            // WYŚWIETLANIE KOLUMNY KOLUMNY KOLUMNY
            //  foreach ($kolumnas as $kolumna) {
            //      echo $kolumna;
            //  }
            
            // WYŚWIETLANIE WIERSZY WIERSZY WIERSZY
            echo $user->author;
            
            ?>



        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat2"></img>
            </div>
            <?php
            $user = DB::table('thumbnailcontent')->find(2);
            echo $user->author;
            ?>
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat3"></img>
            </div>
            <?php
            $user = DB::table('thumbnailcontent')->find(3);
            echo $user->author;
            ?>
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat4"></img>
            </div>
            <?php
            $user = DB::table('thumbnailcontent')->find(4);
            echo $user->author;
            ?>
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat5"></img>
            </div>
            Kitty num 5
        </div>
    </div>
</div>
