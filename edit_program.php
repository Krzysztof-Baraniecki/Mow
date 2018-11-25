<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edProgram'>
            <h1>Edycja Programu24</h1>
            {dodaj nową kfalifikacje pkt} <br />
            lista obcencyh kfalifikacji:<br />
            lp. | Opis skrócony | ilość punktów | {dodatkowe funkcjie jak obniżenie oceny do nagannej} [ po kliknieciu pojawia sie popup z edycją lub usunięciem w tym znajduje się nazwa opis ilość punktów funkcjie] <br />
            <br />
            {(?)dodaj ocene tygodniową}<br />
            Lista ocen tygodniowych: <br />
            lp. Nazwa | Przedział punktów [ po kliknieciu popup - nazwa | przedział punktów | przywileje | ostatnia osoba edytująca  {usuń}] <br/>
            <br />
            {(?)dodaj ocene miesięczną}<br />
            Lista ocen miesięcznych: <br />
            lp. Nazwa | Przedział punktów [ po kliknieciu popup - nazwa | przedział punktów | przywileje | ostatnia osoba edytująca  {usuń}] <br/>

        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>