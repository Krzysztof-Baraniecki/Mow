<?php
	
	session_start();
    if (!isset($_SESSION['online'])) {
	header('Location: login.php');
	exit();
    }

?>
<?php
require_once 'structure/template.php';
?>
<?php echo $template_start; ?>
    <main>
        <?php echo $template_nav; ?>
        <section id='homepage'>
            <h1>Powstaje Program dla ośrodka wychowawczego</h1>
            <p>autor: Krzysztof Baraniecki kbaraniecki@wp.pl</p>
            <h2>Lista Zadań</h2>
            <ul>
                <li>zadanie 1</li>
                <li>zadanie 2</li>
                <li>zadanie 3</li>
                <li>zadanie 4</li>
                <li>zadanie 5</li>
            </ul>
    <br />
            <?php echo "Hello " . $_SESSION['last_name'] . " " . $_SESSION['first_name']; ?>
        </section>
        <?php echo $template_footer; ?>
    </main>
<?php echo $template_end; ?>