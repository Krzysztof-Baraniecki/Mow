<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='newUser'>
            <h1>Dodajemy nową urzytkownika</h1>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                            <label>Imię*:<input type="text" name="name"></label>
                            <p class="e-value"></p>
                            <label>Nazwisko*: <input type="text" name="lname"></label>
                            <p class="e-value"></p>
                            <label>E-mail*: <input type="Email" name="email"></label>
                            <p class="e-value"></p>
                            <label>Powtórz E-mail: <input type="Email" name="remail"></label>
                            <p class="e-value"></p>
                            <label>Nr telefonu: <input type="tel" name="phone"></label>
                            <p class="e-value"></p>
                            <label>Grupa: 
                                <select name="group">
                                    <option value="Gr 1">Gr 1</option>
                                    <option value="Gr 2">Gr 2</option>
                                    <option value="Gr 3">Gr 3</option>
                                </select>
                            </label>
                            <p class="e-value"></p>
                            <p>* - Obowiązkowe</p>
                    </div>
                    <div class="col-lg-6">
                        <div style="width: 300px; height: 300px; background: darkblue; margin: auto; border-radius: 50%;"></div>
                        <p class="text-center">Dodaj zdjęcie / usuń zdjęcie</p>
                        <p class="e-value"></p>
                    </div>
                    <div class="col-lg-12 text-center my-4">
                        <button type="submit" class="btn btn-outline-primary">Dodaj nowego urzytkownika</button>
                    </div>
                </div>
            </form>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>