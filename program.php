<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='program'>
            <h1>Program24</h1>

<div class="row text-center statistics">
    <div class="col-12 text-left font-weight-bold"><h2>Dane:</h2></div>
    <div class="col-4"><p>Dzieci w ośrodku: <span class="font-weight-bold">86</span></p></div>
    <div class="col-4"><p>Dzieci obecnych: <span class="font-weight-bold">80</span></p></div>
    <div class="col-4"><p>Dzieci nie obecnych: <span class="font-weight-bold">6</span></p></div>
</div>

            <br /><br />
            {lista dodawanych wszystkich punktów oraz ocen z okresu 3 tygodni}:<br />
            -Imie nazwisko(podopiecznego) | płęć | gr | ilość punktów/ocena tygodniowa lub ocena mieścieczna | krótyki opis kączący się "..." | kto wystawił | data wystawienia <br /> 
            
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>