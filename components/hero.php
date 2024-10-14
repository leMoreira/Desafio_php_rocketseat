<?php
$itens = [
['href' => '', 'src' => './assets/youtube.png', 'alt' => 'Youtube'],
['href' => '', 'src' => './assets/facebook.png', 'alt' => 'Facebook'],
['href' => '', 'src' => './assets/linkedin.png', 'alt' => 'Linkedin'],
['href' => '', 'src' => './assets/twitter.png', 'alt' => 'Twitter'],
];

?>


<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Leandro Moreira</h1>
        <p class="text-xl leading-6 mt-6">
         Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
Especializado em PHP e HTML, mas também nas linguagens GOLANG.
        </p>
       
        <ul class="flex gap-x-3 mt-5">

        <?php foreach($itens as $item): ?>

            <li ><a href="<?= $item['href']; ?>" target="_blank">
                <img
                class="w-12" 
                src="<?= $item['src']; ?>" alt="<?= $item['alt']; ?>">
            </a></li>
           <?php endforeach; ?>
           
        </ul>



    </div>

    <div class="w-1/3  flex items-center justify-center">
        <div class="text-gray-400">
            <img
            class="rounded-full" 
            src="https://media.licdn.com/dms/image/v2/C4E03AQHZEuPFeaSNEA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1598269820212?e=2147483647&v=beta&t=QTakLVRnd8PdGcE4Fgt9HP0Xu-1pbsJX3nOUlECuYQ8" alt="">
        </div>
    </div>
</section>