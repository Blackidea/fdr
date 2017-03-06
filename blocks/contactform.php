<form action="send.php" method="post" class="bottom-contact-form required-form" id="contactform">
	<div class="container">
		<p class="bottom-contact-form__heading">Обратная связь</p>
		<div class="bottom-contact-form__fields">
			<div class="bottom-contact-form__field">
				<p>Имя</p>
				<input type="text" name="name" data-required>
			</div>
			<div class="bottom-contact-form__field">
				<p>Телефон</p>
				<input type="tel" name="telephone" data-required>
			</div>
			<div class="bottom-contact-form__field">
				<p>Email</p>
				<input type="email" name="email" data-required>
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_file">
				<p>Вложения</p>
				<label for="file1"><p class="bottom-contact-form__file"><span>Выберите файл</span><a href="#"></a></p></label>
				<p class="small">Разрешенные расширения: .jpg, .png, .jpeg, .gif</p>
				<input id="file1" type="file" name="file">
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_message">
				<p>Сообщение</p>
				<textarea name="message" data-required></textarea>
			</div>
		</div>
		<button class="button bottom-contact-form__button"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
	</div>
</form>