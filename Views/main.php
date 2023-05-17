<?php
include __DIR__ . '/../database/db.php';
?>
<!-- <?php ?> -->

<html>
<main class="">
    <div class="container mx-auto">
        <h1 class=" text-3xl font-black my-3 mb-5 text-center text-slate-800">Hundreds products for your pets</h1>
        <div class="cards">
            <h2 class=" text-2xl font-bold my-3 mb-5 text-slate-700">Food</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <?php foreach ($foods as $food) : ?>
                    <div class="group relative">
                        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="<?= $food->image ?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        <?= $food->name ?>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500"><?= $food->ingredients ?></p>
                                <p class="mt-1 text-sm text-gray-500 capitalize"><?= "$food->type "?></p>
                            </div>
                            <p class="text-sm font-medium text-gray-900"><?= "$food->sellPrice$"?></p>
                        </div>
                        <span class="absolute top-2 right-2 text-slate-500"><?= $food->category->icon ?></span>
                    </div>
                <?php endforeach ?>
            </div>
            <h2 class=" text-2xl font-bold my-5 mt-10 text-slate-700">Toys</h2>
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <?php foreach ($foods as $food) : ?>
                    <div class="group relative">
                        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="<?= $food->image ?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        <?= $food->name ?>
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500"><?= $food->ingredients ?></p>
                                <p class="mt-1 text-sm text-gray-500"><?= "For: {$food->category->categName} "?></p>
                            </div>
                            <p class="text-sm font-medium text-gray-900"><?= "$food->sellPrice$"?></p>
                        </div>
                        <span class="absolute top-2 right-2 text-slate-500"><?= $food->category->icon ?></span>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>

</html>





<!-- <ul class="flex gap-3">
<?php foreach ($newMovies as $movie) { ?>
                    <li class="rounded-md overflow-hidden">
                        <div class=" w-[280px] pb-3">
                            <img class="block w-full" src="<?php echo $movie->image ?>" alt="<?php echo $movie->title ?>">
                            <h4 class=" pl-2 text-2xl font-bold mb-2 text-center"><?php echo $movie->title ?></h4>
                            <h6 class=" pl-2 text-lg font-bold">Info:</h6>
                            <span class=" pl-2"></span><?php echo "nationality: $movie->nationality" ?></span>
                            <span class=" pl-2"><?php echo "vote: $movie->vote" ?></span>
                            <span class="block pl-2"><?php if ($movie->genre && is_array($movie->genre)) { ?>
                                Genres: <?php foreach ($movie->genre as $singleGen) echo $singleGen . ' ' ?>
                            <?php } else {
                                                            echo "Genre: $movie->genre";
                                                        } ?></span>
                        </div>
                    </li>
                <?php } ?>
            </ul> -->