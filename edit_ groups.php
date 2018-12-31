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
            <br />
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGroup">
            + Dodaj nową grupę
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="GroupModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="GroupModal">Dodawanie Nowej Grupy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="controler/add_group.php">
                        <div class="modal-body">
                            <label>Nazwa*:<input type="text" name="name"></label>
                            <p class="e-value"></p>
                            <label>Maksymalna ilość*:<input type="number" name="max" min="1" max="99" value="12"></label>
                            <p class="e-value"></p>
                            <!-- <ul>
                                <li>Nazwa</li>
                                <li>Maksymalna ilośc przypisanych pdopiecznych</li>
                            </ul> -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Dodaj nową grupę</button>
                            
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Wyjdź</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>