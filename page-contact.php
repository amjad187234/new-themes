<?php
/*
Template Name: Kontaktformular
*/

get_header(); ?>

<?php
// Formularverarbeitung
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
    // Eingaben bereinigen
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validierung
    $errors = array();

    if (empty($name)) {
        $errors[] = "Bitte geben Sie Ihren Namen ein.";
    }

    if (empty($email) || !is_email($email)) {
        $errors[] = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
    }

    if (empty($message)) {
        $errors[] = "Bitte geben Sie eine Nachricht ein.";
    }

    if (empty($errors)) {
        // E-Mail senden
        $to      = get_option('admin_email');
        $subject = "Neue Nachricht von $name";
        $headers = array('Content-Type: text/html; charset=UTF-8', "From: $name <$email>");

        $body = "<p><strong>Name:</strong> $name</p>";
        $body .= "<p><strong>Email:</strong> $email</p>";
        $body .= "<p><strong>Nachricht:</strong><br>" . nl2br($message) . "</p>";

        if (wp_mail($to, $subject, $body, $headers)) {
            echo '<p class="success-message">Vielen Dank für Ihre Nachricht. Wir werden uns in Kürze bei Ihnen melden.</p>';
        } else {
            echo '<p class="error-message">Es gab ein Problem beim Senden der Nachricht. Bitte versuchen Sie es erneut.</p>';
        }
    } else {
        // Fehler anzeigen
        echo '<div class="error-messages"><ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul></div>';
    }
}
?>

<div class="contact-container">
    <h2>Kontaktieren Sie uns</h2>
    <form class="contact-form" action="" method="POST">
        <?php wp_nonce_field('submit_contact_form', 'contact_form_nonce'); ?>
        <div class="form-group">
            <label for="name">Ihr Name:</label>
            <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? esc_attr($_POST['name']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="email">Ihre E-Mail:</label>
            <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? esc_attr($_POST['email']) : ''; ?>">
        </div>
        <div class="form-group">
            <label for="message">Ihre Nachricht:</label>
            <textarea id="message" name="message" rows="6" required><?php echo isset($_POST['message']) ? esc_textarea($_POST['message']) : ''; ?></textarea>
        </div>
        <button type="submit" class="btn">Nachricht senden</button>
    </form>
</div>

<?php get_footer(); ?>
