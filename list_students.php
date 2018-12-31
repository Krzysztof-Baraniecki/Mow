<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='listStudents'>

        <!-- new list -->            
        <h1>Lista podopiecznych</h1>
            <div class="table-responsive">
                <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Płęć</th>
                        <th scope="col">Gr</th>
                        <th scope="col">Ocena<br /> Tygodniowa</th>
                        <th scope="col">Ocena<br /> Miesięczna</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

        <?php 
        require_once 'connection/database.php';

        $Query = $db->prepare('SELECT * FROM pupils');
        $Query->execute();
        $pupils = $Query->fetchAll();
        $pupil = $Query->fetch();
        $numberPupils = $Query->rowCount();
        $i = 1;

        foreach ($pupils as $item) { 
            echo '
            <tr data-toggle="modal" data-target="#nazwa">
                <th scope="row">'.$i.'</th>
                <td>'.$item['first_name'].'</td>
                <td>'.$item['last_name'].'</td>
                <td>'.$item['sex'].'</td>
                <td>'.$item['group'].'</td>
                <td>'.$item['month'].'</td>
                <td>'.$item['week'].'</td>
                <td>'.$item['status'].'</td>
            </tr>
        ';
        $i++;
        }
        ?>

                </tbody> 
                </table>

        <hr /><!-- old list -->
            <h1>Lista podopiecznych</h1>

            <div class="table-responsive">
                <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Płęć</th>
                        <th scope="col">Gr</th>
                        <th scope="col">Ocena<br /> Tygodniowa</th>
                        <th scope="col">Ocena<br /> Miesięczna</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-toggle="modal" data-target="#nazwa">
                        <th scope="row">1</th>
                        <td>Krzysiek</td>
                        <td>Baraniecki</td>
                        <td>{M}</td>
                        <td>Gr1</td>
                        <td>B.Dobra</td>
                        <td>B.Dobra</td>
                        <td>{ON}</td>
                    </tr>
                    <!-- popup -->
                    <div class="modal fade vh-100" id="nazwa" tabindex="-1" role="dialog" aria-labelledby="nazwa-modelu" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold" id="nazwa-modelu">Imie nazwisko [icon link]</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="collapse popup__addPkt" id="nazwa-dodwanie-pkt">
                                <h3>Dodawanie Punktów</h3>
                                <form>
                                    <label>Rodzaj*: 
                                        <select name="?">
                                            <option value="1">Opsi 1</option>
                                            <option value="2">Opsi 2</option>
                                            <option value="3">Opsi 3</option>
                                        </select>
                                    </label>
                                    <p class="e-value"></p>
                                    <label>Opis :
                                        <textarea name="?" cols="30" rows="5"></textarea>
                                    </label>
                                    <p class="e-value"></p>
                                    <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Dodaj</button>
                                </form>
                            </div>

                            <div class="modal-body">
                                <p class="popup__data">12.02.2018</p>
                                <p><span class="popup__pkt">-5</span>
                                Lorem ipsum dolor sit amet, te novum referrentur usu, no nam tempor audiam, te enim periculis qui.
                                </p>
                                <p class="text-right font-italic popup_author">Adam Kowalski</p>
                                <hr>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#nazwa-dodwanie-pkt" aria-expanded="false" aria-controls="collapseExample">Dodaj Punkty</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- end popup -->
                    <tr>
                        <th scope="row">2</th>
                        <td>Katarzyna</td>
                        <td>Makaowska</td>
                        <td>{K}</td>
                        <td>Gr1</td>
                        <td>B.Dobra</td>
                        <td>B.Dobra</td>
                        <td>{ON}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Natalia</td>
                        <td>Baraniecka</td>
                        <td>{K}</td>
                        <td>Gr2</td>
                        <td>B.Dobra</td>
                        <td>B.Dobra</td>
                        <td>{OFF}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>