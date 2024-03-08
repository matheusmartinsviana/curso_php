<?php
include "backend.php";
?>

    <h1> Bem vindo ao Curso de PHP </h1>
    <h3> Confira nossos produtos </h3>
    <p><?=$nome;?>, oque você deseja comprar hoje?</p>
    
    <h4>Confira nossos produtos:</h4>
    <?php foreach($produtos as $produto): ?>
        <li><?=$produto;?></li>
    <?php endforeach; ?>