<?php
    $title = "Test";

    ob_start();

    ?>

        <section class="container">
        
            <h1>Squalala!</h1>
            <p>Nous somme partis !</p>


        </section>

<?php

$content = ob_get_clean();

require('base.php');
?>
