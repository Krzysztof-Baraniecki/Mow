<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edStudent'>
            <h1>Edytucja podopiecznych</h1>
            <p>{lista podopiecznych}</p>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>