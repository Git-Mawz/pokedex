<?php include __DIR__.'/../layout/header.php'; ?>

<?php


$previousType = route('type-match', ['typeId' => $type->id-1]);
$nextType = route('type-match', ['typeId' => $type->id+1]);


?>

    <h1>Pokémons de Type <?=$type->name?></h1>

    <div class="button-wrapper">
        <?php if($type->id > 1) : ?>
        <a href="<?=$previousType?>">Type Précédent</a>
        <?php endif;?>

        <?php if($type->id < $allTypeCount) : ?>
        <a href="<?=$nextType?>">Type Suivant</a>
        <?php endif;?>
    </div>

    <div class="cadre-wrapper">
        <?php
            if (count($pokemonToDisplay) == 0) {
                echo '<div class="noPokemonWrapper">';
                echo '<h2 class="noPokemon"> Pas de Pokémon de ce Type </h2>';
                echo '</div>';
            }else {
                foreach ($pokemonToDisplay as $pokemon) {
                    require __DIR__ . '/allPokemonForType.php';
                }
            }
        ?>
    </div>



<?php include __DIR__.'/../layout/footer.php'; ?>
