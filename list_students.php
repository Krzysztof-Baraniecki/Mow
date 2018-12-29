<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='listStudents'>
            <h1>Lista podopiecznych</h1>
            <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imie</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Płęć</th>
                    <th scope="col">Gr</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Krzysiek</td>
                    <td>Baraniecki</td>
                    <td>{M}</td>
                    <td>Gr1</td>
                    <td>{ON}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Katarzyna</td>
                    <td>Makaowska</td>
                    <td>{K}</td>
                    <td>Gr1</td>
                    <td>{ON}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Natalia</td>
                    <td>Baraniecka</td>
                    <td>{K}</td>
                    <td>Gr2</td>
                    <td>{OFF}</td>
                </tr>
            </tbody>
            </table>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>