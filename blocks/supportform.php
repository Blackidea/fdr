<form action="send.php" method="post" class="bottom-contact-form bottom-contact-form_support required-form" id="supportform">
	<div class="container">
		<p class="bottom-contact-form__heading bottom-contact-form__heading_investors">Хотите поддержать проект?</p>
		<p class="bottom-contact-form__heading bottom-contact-form__heading_partners">Стать партнером</p>
		<div class="bottom-contact-form__fields">
			<div class="bottom-contact-form__field">
				<p>Название компании</p>
				<input type="text" name="companyname">
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Контактный телефон</p>
				<input type="tel" name="telephone" data-required>
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>E-mail</p>
				<input type="email" name="email" data-required>
			</div>
			<div class="bottom-contact-form__field">
				<p><span>*</span>Имя контактного лица</p>
				<input type="text" name="name" data-required>
			</div>
			<div class="bottom-contact-form__field bottom-contact-form__field_message">
				<p>Сообщение</p>
				<textarea name="message"></textarea>
			</div>
			<p class="small"><span>*</span>- поля обязательные для заполнения</p>
		</div>
		<button class="button bottom-contact-form__button"><span class="button__border-top"></span>отправить<span class="button__border-bottom"></span></button>
	</div>
</form>