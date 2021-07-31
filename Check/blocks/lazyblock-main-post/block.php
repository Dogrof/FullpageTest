<?php
/**
 * Main Post Block.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="my-test-block">
    <?php echo esc_html( $attributes['select'] ); ?>
</div>
