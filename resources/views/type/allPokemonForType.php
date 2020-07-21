

    <div class="cadre">

            <img src="<?=$baseURI?>/img/<?=$pokemon->number?>.png" alt="<?=$pokemon->name?>">
            <a href="<?=route('stats-item', ['pokemonNumber' => $pokemon->number])?>">#<?=$pokemon->number?> <?= $pokemon->name?></a>
    </div>
