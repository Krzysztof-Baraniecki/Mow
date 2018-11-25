<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edUsers'>
            <h1>Edytuj urzytykowników</h1>
            {lista uzytnowników} - [po kliknieciu pojawia się pupup - z edycją Imienia Nazwiska emaila telefonu zdjęcia {tabela uprawnień} | usuń urzytykownika(archiwizowanie)]
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>