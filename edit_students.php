<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edStudent'>
            <h1>Edytucja podopiecznych</h1>
            <p>{lista podopiecznych}</p>
            <br />
            -Sortowanie[start-alfabetycznie] <br />
            -Filtrowanie[-start-gr-usera] <br />
            -Szukanie podopiecznego <br />
            |<br />
            ----lp. avatar Imie Nazwisko Płęć status {edit student[Edycja otwiera sie w popup ]} {del student[del otwiera sie w popup w celu potwierdzenia-zostaje zarchiwizowany]}<br />
            -----[po kliknienciu na danego ucznia otwiera się jego indywidaly profil gdzie sa dane i historia ocen z mozliwością edycji]
            <br>-----lub
            <br>-----[po kliknieciu na ucznia rozwija sie lista Ocen Miesiecznych Ocen tygodniowych oraz Ocen cząstkowych przy każdej z pozycji jest {edycja oceny}]<br />

            tablica czy div ?

        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>