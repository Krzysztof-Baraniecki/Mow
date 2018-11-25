<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='listStudents'>
            <h1>Lista podopiecznych</h1>
            {lista}
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>