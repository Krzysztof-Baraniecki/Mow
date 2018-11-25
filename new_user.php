<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='newUser'>
            <h1>Dodajemy nową urzytkownika</h1>
            {formularz}
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>