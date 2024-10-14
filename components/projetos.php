<?php
$projetos = [
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJXX4bk4CgJIlWsf3RuIhWGuJTnkUekI6MEA&s",
        "titulo" => "Meu portfolio", 
        "finalizado" => true, 
        "ano" => 2025, 
        "descricao" => "Meu primeiro projeto em php",
        "stack" => ["PHP", "HTML", "CSS", "JS"]
    ],
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJXX4bk4CgJIlWsf3RuIhWGuJTnkUekI6MEA&s",
       "titulo" => "Sinalização contaundente", 
        "finalizado" => false, 
        "ano" => 2025, 
        "descricao" => "Meu primeiro projeto em php feito com finais de séries lógicas com conteúdo.",
        "stack" => ["GOLANG", "HTML", "JAVA", "JS"]
    ],
    [
        "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJXX4bk4CgJIlWsf3RuIhWGuJTnkUekI6MEA&s",
        "titulo" => "Meu Projeto Robo", 
        "finalizado" => false, 
        "ano" => 2025, 
        "descricao" => "Meu primeiro projeto em php feito com robótica sensacional.",
        "stack" => ["C#", "JAVA", "JS"]
    ],
];

?>



<section class="space-y-3 py-6 mt-5" id="projetos">
    <h2 class="text-2xl font-bold">Meus Projetos</h2>

<?php foreach($projetos as $projeto): ?>


    <div class="bg-slate-800 rounded-lg p-3 flex  items-center">

        <div class="w-1/5 ">
            <img
           
            src="<?= $projeto['src']; ?>" alt="<?= $projeto['titulo']; ?>" class="h-28 rounded-md shadow-xl shadow-slate-900 ">
        </div>

            <div class="w-4/5 space-y-3">

            
                <div class="flex gap-3 justify-between">
                        <h3 class="font-semibold text-xl"> 
                        <?php if($projeto['finalizado'] == true):   ?> 
                       🟢 <?= $projeto['titulo']; ?> 
                        <span class="text-xs text-gray-400 opacity-50 italic"> ( Finalizado em <?= $projeto['ano']; ?>) </span>
                        <?php else: ?>
                            🔴 <?= $projeto['titulo']; ?> 
                            <span class="text-xs text-gray-400 opacity-50 italic"> ( Em desenvolvimento ) </span>
                         <?php endif; ?>       
                            
                             </h3>
               
                    <div>

<?php 
$colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];



foreach($projeto['stack'] as $posicao => $language): ?>



    <span class="bg-<?= $colors[$posicao]; ?>-600 text-<?= $colors[$posicao]; ?>-900 rounded-md font-semibold px-2 py-1 mx-1 text-xs ">
         <?= $language; ?>
    </span>
  
                    
<?php endforeach; ?>        
            
            </div>
                </div>
                <p class="leading-6">
                    <?= $projeto['descricao']; ?>
                </p>
    
            </div>

        </div>

   <?php endforeach; ?>

    </div>

</section>