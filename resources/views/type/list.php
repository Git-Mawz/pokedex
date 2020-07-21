<?php include __DIR__.'/../layout/header.php'; ?>


    <h1>Liste des Types</h1>


        <div class="type-container">

            <?php

                foreach ($allTypes as $type) {
                    echo '<a href="'. route('type-match', ['typeId' => $type->id]) .'"><span class="type" style="background-color: #' . $type->color . '">' . $type->name . '</span></a>';
                }

            ?>

        </div>

<?php include __DIR__.'/../layout/footer.php'; ?>
