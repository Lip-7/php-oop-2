<?php

?>
<!-- <?php ?> -->

<html>
<main>
    <div class="container mx-auto">
        <div class="cards">
            <h1 class=" text-3xl font-black my-3 text-center text-slate-900">Hundreds products for your pets</h1>
            <ul class="flex gap-3">
                <!-- <?php foreach ($newMovies as $movie) { ?>
                    <li class="rounded-md overflow-hidden">
                        <div class=" w-[280px] pb-3">
                            <img class="block w-full" src="<?php echo $movie->image ?>" alt="<?php echo $movie->title ?>">
                            <h4 class=" pl-2 text-2xl font-bold mb-2 text-center"><?php echo $movie->title ?></h4>
                            <h6 class=" pl-2 text-lg font-bold">Info:</h6>
                            <span class=" pl-2"></span><?php echo "nationality: $movie->nationality" ?></span>
                            <span class=" pl-2"><?php echo "vote: $movie->vote" ?></span>
                            <span class="block pl-2"><?php if ($movie->genre && is_array($movie->genre)) { ?>
                                Genres: <?php foreach ($movie->genre as $singleGen) echo $singleGen . ' '?>
                            <?php }else {
                                echo "Genre: $movie->genre";
                                }?></span>
                        </div>
                    </li>
                <?php } ?> -->
            </ul>
        </div>
        
</main>

</html>