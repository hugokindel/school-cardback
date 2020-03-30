<?php
require_once 'component/textbox.php';
require_once 'component/form.php';
require_once 'component/footer.php';

changeTitle("Se connecter");
?>

<!-- Contenu principal de la page -->
<main>
    <?php
    echo makeForm('Récupération de mot de passe', 'Récupérer', '
        <form>
            '.makeTextboxWithAccessory("email-textbox", "email", "email", "E-mail", "􀍕", "form-textbox").'
        </form>');
    ?>
</main>

<!-- Pied de page -->
<?php
echo makeFooter();
?>