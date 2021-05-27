<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 3WEBET
 */

get_header();
?>

<main>
    <div class="container nmContainer nmBlog">
        <div class="row no-gutters">
            <div class="col-md-12">
			<div class="">
                <?php if ($nm3webet['nm404']) : ?>
                    <img id="" src="<?php echo $nm3webet['nm404']['url']; ?>">
                <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
