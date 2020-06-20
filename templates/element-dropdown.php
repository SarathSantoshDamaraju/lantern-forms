<?php
/**
 * Template: element-dropdown.php
 *
 * Available data: $id, $container_id, $label, $sort, $type, $value, $input_attrs, $label_required, $label_attrs, $wrap_attrs, $description, $description_attrs, $errors, $errors_attrs, $before, $after, $choices, $placeholder
 *
 * @package LanternForms
 * @since 1.0.0
 */

?>
<div<?php echo lantern()->template()->attrs( $wrap_attrs ); ?>>
	<?php if ( ! empty( $before ) ) : ?>
		<?php echo $before; ?>
	<?php endif; ?>

	<label<?php echo lantern()->template()->attrs( $label_attrs ); ?>>
		<?php echo lantern()->template()->esc_kses_basic( $label ); ?>
		<?php echo lantern()->template()->esc_kses_basic( $label_required ); ?>
	</label>

	<div>
		<?php if ( ! empty( $description ) ) : ?>
			<div<?php echo lantern()->template()->attrs( $description_attrs ); ?>>
				<?php echo lantern()->template()->esc_kses_basic( $description ); ?>
			</div>
		<?php endif; ?>

		<select<?php echo lantern()->template()->attrs( $input_attrs ); ?>>
			<?php if ( ! empty( $placeholder ) ) : ?>
				<option value="">
					<?php echo lantern()->template()->esc_html( $placeholder ); ?>
				</option>
			<?php endif; ?>

			<?php foreach ( $choices as $choice ) : ?>
				<option value="<?php echo lantern()->template()->esc_attr( $choice ); ?>"<?php echo $value === $choice ? ' selected' : ''; ?>>
					<?php echo lantern()->template()->esc_html( $choice ); ?>
				</option>
			<?php endforeach; ?>
		</select>

		<?php if ( ! empty( $errors ) ) : ?>
			<ul<?php echo lantern()->template()->attrs( $errors_attrs ); ?> role="alert">
				<?php foreach ( $errors as $error_code => $error_message ) : ?>
					<li><?php echo lantern()->template()->esc_kses_basic( $error_message ); ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>

	<?php if ( ! empty( $after ) ) : ?>
		<?php echo $after; ?>
	<?php endif; ?>
</div>
