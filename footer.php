<footer>
    <nav>
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
    </nav>
    <p>&copy; <?php echo date('Y'); ?> Deine Website</p>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
