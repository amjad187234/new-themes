<?php
/*
Template Name: Contact Template
*/
get_header();
?>

<main>
    <section class="contact">
        <h1>Lassen Sie uns über Ihr Projekt sprechen</h1>
        <p>Wir freuen uns, von Ihnen zu hören! Kontaktieren Sie uns für eine unverbindliche Beratung und ein individuelles Angebot.</p>
        
        <?php
        // Kontaktformular anzeigen
        if (function_exists('ninja_forms_display_form')) {
            ninja_forms_display_form(1); // oder den richtigen Formular-ID einfügen
        }
        ?>
    </section>
</main>

<?php get_footer(); ?>
