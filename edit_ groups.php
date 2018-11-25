<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edGroups'>
            <h1>Grup</h1>
            <p>Nowa strona</p>
            +id +(jaki_osrodek) +nazwa_grupy +?maksymalna_ilość +kto_dodał<br />
            {dodaj nową grupe - pupup}<br />
            lista grup dodanych:<br />
            -Nazwa Grupy | ile osób ON na wszystkich {edit[popup - edycja nazwy informacja kto dodał - możliwość usunięcia grupy]} [po kliknieciu na grupy reozwija się lista podopiecznych należąycych do tej grupy(l.p imie nazwisko płęć status)]
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>