<?php get_header(); ?>
<?php mein_breadcrumb(); ?>



<div class="hero">
    <h1>Willkommen auf meiner Videographie-Seite</h1>
    <p>Professionelle Videos für Ihr Unternehmen, Events und mehr.</p>
</div>

<div class="services">
    <h2>Unsere Dienstleistungen</h2>
    <div class="services-grid">
        <div class="service-item">
            <h3>Event-Videografie</h3>
            <p>Professionelle Videos für Hochzeiten, Konferenzen und mehr.</p>
        </div>
        <div class="service-item">
            <h3>Unternehmensvideos</h3>
            <p>Hochwertige Videos für Unternehmen zur Förderung ihrer Marke.</p>
        </div>
        <div class="service-item">
            <h3>Werbevideos</h3>
            <p>Erstellen Sie ansprechende Werbevideos, die Ihr Publikum begeistern.</p>
        </div>
    </div>
</div>

<div class="gallery">
    <h2>Unsere Videoprojekte</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <a href="https://via.placeholder.com/800x600" target="_blank">
                <img src="https://via.placeholder.com/400x300" alt="Projekt 1">
            </a>
        </div>
        <div class="gallery-item">
            <a href="https://via.placeholder.com/800x600" target="_blank">
                <img src="https://via.placeholder.com/400x300" alt="Projekt 2">
            </a>
        </div>
        <div class="gallery-item">
            <a href="https://via.placeholder.com/800x600" target="_blank">
                <img src="https://via.placeholder.com/400x300" alt="Projekt 3">
            </a>
        </div>
        <div class="gallery-item">
            <a href="https://via.placeholder.com/800x600" target="_blank">
                <img src="https://via.placeholder.com/400x300" alt="Projekt 4">
            </a>
        </div>
    </div>
</div>


<div class="cta">
    <h2>Kontaktieren Sie uns für ein Angebot!</h2>
    <a href="<?php echo site_url('/kontakt'); ?>" class="btn">Jetzt Kontakt aufnehmen</a>


</div>

<?php get_footer(); ?>
