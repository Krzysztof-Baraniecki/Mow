<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edAccount'>
            <h1>Edycja Konta</h1>
            <p>edytujemy konto</p>
            <form>
                <div class="row">
                    <div class="col-6">
                        <label>Imię:<input type="text" name="name" value="Adam"></label>
                        <p class="e-value"></p>
                        <label>Nazwisko:<input type="text" name="last-name" value="Kowalski"></label>
                        <p class="e-value"></p>
                        <label>E-mail:<input type="Email" name="email" value="aKowalski@domena.pl"></label>
                        <p class="e-value"></p>
                        <label>Przepisana grupa: 
                            <select name="group">
                                <option value="Gr 1">Gr 1</option>
                                <option value="Gr 2">Gr 2</option>
                                <option value="Gr 3">Gr 3</option>
                            </select>
                        </label>
                        <p class="e-value"></p>
                        <a class="btn btn-outline-primary">Zmień hasło</a>
                        <h2>Podopieczni przepisani do tego konta:</h2>
                        <ol>
                            <li>Adam Kowalski {płeć} Gr 3 {status}</li>
                            <li>Daniel Pasibus {płeć} Gr 3 {status}</li>
                            <li>Krzysztof Szczerba {płeć} Gr 3 {status}</li>
                        </ol>
                    </div>
                    <div class="col-6">
                    <div style="width: 300px; height: 300px; background: darkblue; margin: auto; border-radius: 50%;"></div>
                        <p class="text-center">Dodaj zdjęcie / usuń zdjęcie</p>
                        <p class="e-value"></p>
                    </div>
                </div>
            </form>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>