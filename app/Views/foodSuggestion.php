<section class="bg-gray-50 dark:bg-gray-900">
    <h1 class="font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white flex items-center justify-center">Food Suggestion</h1>
    <div class="flex flex-wrap justify-center px-5 py-3 mx-auto lg:py-0 my-[20px]">
        <?php foreach ($foodmart as $foodItem): ?>
            <a href="http://localhost:8080/food" target="_blank">
            <div class="my-[20px] mx-2 flex-none w-64 items-center bg-white border border-gray-300 rounded-lg shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 text-white p-4 text-center">
                <h1 class="text-white"><?= $foodItem->food; ?></h1>
                <p class="text-white"><?= $foodItem->serving; ?></p>
                <p class="text-white"><?= $foodItem->calories; ?>.</p>
                <p class="text-white">Rp. <?= $foodItem->price; ?></p>
            </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>
