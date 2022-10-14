<div class="bg-zinc-500 w-4/5 mx-auto">
    <div class="flex justify-center auto w-9/10 mx-auto">

        <div class="tile">
            <div class="tileinside">
                <img src="{{ $wiersze->thumbnailURL }}" alt="cat1"></img>
            </div>


            <?php
            
            // WYŚWIETLANIE KOLUMNY KOLUMNY KOLUMNY
            //  foreach ($kolumnas as $kolumna) {
            //      echo $kolumna;
            //  }
            $idNum = 2;
            echo $wiersze->author;
            // WYŚWIETLANIE WIERSZY WIERSZY WIERSZY
            ?>



        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat2"></img>
            </div>
            <?php
            $idNum = 3;
            echo $wiersze->author;
            ?>
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat3"></img>
            </div>
            Kitty num 3
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat4"></img>
            </div>
            Kitty num 4
        </div>

        <div class="tile">
            <div class="tileinside">
                <img src="cathumb.jpg" alt="cat5"></img>
            </div>
            Kitty num 5
        </div>
    </div>
</div>
