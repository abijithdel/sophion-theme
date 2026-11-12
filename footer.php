<?php
/**
 * footer.php — Root footer template
 * Loads the footer template part and closes the HTML document.
 * wp_footer() MUST be called here — it outputs all enqueued JS scripts.
 *
 * @package Sophion
 */

get_template_part( 'template-parts/footer' );

wp_footer(); // ← prints all wp_enqueue_script() JS files
?>
</body>
</html>

