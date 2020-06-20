<?php
/**
 * Template: element-content.php
 *
 * Available data: $id, $container_id, $label, $sort, $type, $value, $input_attrs, $label_required, $label_attrs, $wrap_attrs, $description, $description_attrs, $errors, $errors_attrs, $before, $after
 *
 * @package LanternForms
 * @since 1.0.0
 */

?>
<div<?php echo lantern()->template()->attrs( $wrap_attrs ); ?>>
	<?php if ( ! empty( $before ) ) : ?>
		<?php echo $before; ?>
	<?php endif; ?>

	<div>
		<div<?php echo lantern()->template()->attrs( $input_attrs ); ?>>
			<?php echo lantern()->template()->esc_kses_post( $label ); ?>
		</div>
	</div>

	<?php if ( ! empty( $after ) ) : ?>
		<?php echo $after; ?>
	<?php endif; ?>
</div>
