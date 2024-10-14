<?php
$items = [
['href' => '#projetos', 'texto' => 'Projetos'],
['href' => '', 'texto' => 'Github'],
['href' => '', 'texto' => 'Linkedin'],
['href' => '', 'texto' => 'Instagram'],
];

?>

<header class=" text-white-700  
                mx-auto 
                max-w-screen-lg 
                px-3 py-6 
                flex
                items-center
                justify-between
                ">
   <!-- Logo -->
    <div class=" font-bold text-xl text-cyan-600">
        🐻 Meu Portfolio ...
    </div>

    <div class="">

        <ul class=" flex
                    gap-x-3 
                    font-medium 
                    text-gray-200">

<?php foreach ($items as $item):?>

            <li>
                <a href="<?= $item['href']; ?>" class="hover:underline">
                <?= $item['texto']; ?>
                </a>
            </li>

<?php endforeach; ?>


        </ul>

    </div>
</header>
