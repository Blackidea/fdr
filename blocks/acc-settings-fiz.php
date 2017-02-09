<div class="account__settings account__settings_fiz page-of-account">
  <div class="container">
    <form action="" class="account__settings-form">
      <div class="account__settings-infoblock">
        <div class="account__settings-infofield">
          <p class="fieldname">ФИО</p>
          <input type="text">
        </div>
        <div class="account__settings-infofield">
          <p class="fieldname">Дата рождения</p>
          <input type="text">
        </div>
        <div class="account__settings-infofield account__settings-infofield_passport">
          <p class="fieldname">Паспорт</p>
          <input type="text" placeholder="Серия" name="series">
          <input type="text" placeholder="Номер" name="number">
          <input type="text" placeholder="Кем выдан" name="issuedby">
          <input type="text" placeholder="Код подразделения" name="departmentcode">
          <input type="text" placeholder="Дата выдачи" name="dateofissue">
        </div>
        <div class="account__settings-infofield">
          <p class="fieldname">Адрес регистрации</p>
          <input type="text">
        </div>
        <div class="account__settings-infofield">
          <p class="fieldname">Номер телефона</p>
          <input type="text">
        </div>
        <div class="account__settings-infofield">
          <p class="fieldname">Email</p>
          <input type="text">
        </div>
        <div class="account__settings-infofield account__settings-infofield_file">
          <p class="fieldname">Добавить файл</p>
          <p class="account__settings-file">Выберите файл<a href="#"></a></p>
          <p class="small">Добавить сканкопию паспорта</p>
        </div>
      </div>
      <div class="account__settings-checkdivblock">
        <div class="checkdiv">
          <input type="checkbox" id="fizcheck1" value="Да">
          <label for="fizcheck1"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
          <p>Получать уведомления по смс</p>
        </div>
        <div class="checkdiv">
          <input type="checkbox" id="fizcheck2" value="Да">
          <label for="fizcheck2"><img src="img/icon_check_2.svg" alt="@@" width="14"></label>
          <p>Получать уведомления по email</p>
        </div>
      </div>
      <div class="account__settings-buttonblock">
        <button class="button button_green"><span class="button__border-top"></span>Сохранить изменения<span class="button__border-bottom"></span></button>
      </div>
    </form>
  </div>
</div>
