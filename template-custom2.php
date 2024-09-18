<?php
/*
Template Name: Landing Page Template
*/
get_header();
?>

<main class="landing-page">
    <section class="landing-hero">
        <h1><?php the_title(); ?></h1>
        <p>Exklusives Angebot für Hochzeitsvideografie. Buchen Sie jetzt und erhalten Sie 20% Rabatt!</p>
        <a href="/kontakt" class="btn">Jetzt Kontakt aufnehmen</a>
    </section>

    <section class="landing-content">
        <h2>Warum Sie uns wählen sollten</h2>
        <ul>
            <li>Erfahrene Hochzeitsvideografen</li>
            <li>Cinematic-Stil</li>
            <li>Modernste Ausrüstung</li>
            <li>Persönliche Betreuung</li>
        </ul>

        <div class="landing-testimonials">
            <h2>Kundenstimmen</h2>
            <blockquote>
                <p>„Die beste Entscheidung, die wir für unsere Hochzeit getroffen haben! Die Videos sind einfach atemberaubend.“</p>
                <cite>- Julia & Martin</cite>
            </blockquote>
        </div>
    </section>
</main>

<?php get_footer(); ?>
