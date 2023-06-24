<?php

/**
 * Title: Contact Form
 * Slug: greenurban/contact-form
 * Categories: form
 * Keywords: contact-form
 * Block Types: core/template-part/form
 */
?>

<form id="contactForm" method="POST">
	<p class="success-message">
		Tu mensaje ha sido enviado correctamente. En breves nos pondremos en contacto contigo.<br>
		<strong>Muchas gracias.</strong>
	</p>
	<p class="error-message">
		Estamos teniendo problemas para enviar tu formulario.
		Puedes volver a intentarlo en unos minutos, o ponerte en contacto con nosotras
		enviándonos un correo electrónico a
		<a href="mailto:info@greenurbanbcn.com">info@greenurbanbcn.com</a>.<br>
		<strong>Disculpa las molestias.</strong>
	</p>
	<label for="name">Tu nombre</label>
	<input type="text" name="name" autocomplete="name" required />
	<label for="email">Correo electrònico</label>
	<input type="email" name="email" autocomplete="email" required pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$" />
	<label for="message">Mensaje</label>
	<textarea name="message" minlength="10" required></textarea>
	<input type="submit" value="Enviar">
</form>
