<?php
    $title = "Erreurs";

    ob_start();

    ?>

        <section class="container">
        
            <h1>Erreur</h1>
            <p>La page n'existe plus !!!!!!!!!!!!!!!!</p>


        </section>

<?php

$content = ob_get_clean();

require('base.php');
?>
