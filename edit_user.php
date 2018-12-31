<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='edUsers'>
            <h1>Edytuj urzytykowników</h1>
            {lista uzytnowników} - [po kliknieciu pojawia się pupup z informacjami o urzytnowniku] <br />
            przycisk do przeniesienia karty usera gdzie jest pełna edycja | usuń urzytykownika(archiwizowanie)]

            <div class="table-responsive">
                <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imie</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Gr</th>
                    </tr>
                </thead>
                <tbody>

        <?php 
        require_once 'connection/database.php';

        $Query = $db->prepare('SELECT * FROM user');
        $Query->execute();
        $users = $Query->fetchAll();
        $user = $Query->fetch();
        $numberUser = $Query->rowCount();
        $i = 1;

        foreach ($users as $item) { 
            echo '
            <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$item['first_name'].'</td>
                <td>'.$item['last_name'].'</td>
                <td>'.$item['group'].'</td>
            </tr>
        ';
            $i++;
        }
        ?>

                </tbody> 
                </table>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>