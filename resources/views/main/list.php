<?php include __DIR__.'/../layout/header.php'; ?>


<h1>Pokédex</h1>

<div class="cadre-wrapper">
    <?php
    foreach ($pokemons as $pokemon) {
        require __DIR__ . '/allPokemonForHomePage.php';
    }
    ?>
</div>


<?php include __DIR__.'/../layout/footer.php'; ?>
