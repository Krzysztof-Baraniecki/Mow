<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='program'>
            <h1>Program24</h1>
            Strona z myślą o dyrekcji <br />
            {lista dodawanych wszystkich punktów oraz ocen}:<br />
            -Imie nazwisko(podopiecznego) | płęć | gr | ilość punktów/ocena tygodniowa lub ocena mieścieczna | krótyki opis kączący się "..." | kto wystawił | data wystawienia <br /> 
            
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>