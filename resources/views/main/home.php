<?php include __DIR__.'/../layout/header.php'; ?>

        <h1>Hello, <?= $name ?></h1>

        <p>
            Bienvenue sur la page par défaut de ton exercice <strong>Pokédex</strong>.<br>
            Tu as bien réussi à installer les dépendances de <em>Composer</em>, maintenant, tu dois créer routes, Controllers, Models et Views &lt;3
        </p>

        <small>PS : tu peux personnaliser le nom dans le h1, en changeant la donnée envoyée depuis le Controller ;)</small>

<?php include __DIR__.'/../layout/footer.php'; ?>