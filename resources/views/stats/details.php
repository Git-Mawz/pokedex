<?php include __DIR__.'/../layout/header.php'; ?>

<?php

$pokemonNumber = $currentPokemon->number;
$pokemonName = $currentPokemon->name;
$pokemonHp = $currentPokemon->hp;
$pokemonAttack = $currentPokemon->attack;
$pokemonDefense = $currentPokemon->defense;
$pokemonAttackSpe = $currentPokemon->attack_spe;
$pokemonDefenseSpe = $currentPokemon->defense_spe;
$pokemonSpeed = $currentPokemon->speed;

// Code necessaire à la navigation Précédent Suivant en bas de page
$previousPokemon = route('stats-item', ['pokemonNumber' => $pokemonNumber-1]);
$nextPokemon = route('stats-item', ['pokemonNumber' => $pokemonNumber+1]);

?>


<h1>Détails de <?=$pokemonName?></h1>
<div class="detail-container">

    <img src="<?=$baseURI?>/img/<?=$pokemonNumber?>.png" alt="<?=$pokemonName?>">
    <div class="detail">
        <h2>#<?=$pokemonNumber?> <?=$pokemonName?></h2>

        <?php

            foreach ($currentPokemonTypes as $type) {
                echo '<a href="'. route('type-match', ['typeId' => $type->id]) .'"><span class="type" style="background-color: #' . $type->color . '">' . $type->name . '</span></a>';
            }

        ?>

        <h3>Statistiques</h3>
        <div class="stats">

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">PV</span>
                    <span class="nombre"><?=$pokemonHp?></span>
                    <div class="jauge" >
                        <div class="fill" style="width:<?=$pokemonHp?>px"></div>
                    </div>
                </div>

            </div>

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">Attaque</span>
                        <span class="nombre"><?=$pokemonAttack?></span>
                        <div class="jauge" >
                            <div class="fill" style="width:<?=$pokemonAttack?>px"></div>
                        </div>
                </div>
            </div>

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">Défense</span>
                        <span class="nombre"><?=$pokemonDefense?></span>
                        <div class="jauge" >
                            <div class="fill" style="width:<?=$pokemonDefense?>px"></div>
                        </div>
                </div>
            </div>

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">Attaque Spé</span>
                        <span class="nombre"><?=$pokemonAttackSpe?></span>
                        <div class="jauge" >
                            <div class="fill" style="width:<?=$pokemonAttackSpe?>px"></div>
                        </div>
                </div>
            </div>

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">Défense Spé</span>
                        <span class="nombre"><?=$pokemonDefenseSpe?></span>
                        <div class="jauge" >
                            <div class="fill" style="width:<?=$pokemonDefenseSpe?>px"></div>
                        </div>
                </div>
            </div>

            <div class="display">
                <div class="display-wrapper">
                    <span class="stat">Vitesse</span>
                        <span class="nombre"><?=$pokemonSpeed?></span>
                        <div class="jauge" >
                            <div class="fill" style="width:<?=$pokemonSpeed?>px"></div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

<div class="button-wrapper">
    <?php if($pokemonNumber>1) : ?>
    <a href="<?=$previousPokemon?>">Pokémon Précédent</a>
    <?php endif;?>

    <?php if($pokemonNumber<$totalPokemonsNumber) : ?>
    <a href="<?=$nextPokemon?>">Pokémon Suivant</a>
    <?php endif;?>
</div>


<?php include __DIR__.'/../layout/footer.php'; ?>
