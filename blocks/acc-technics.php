<div class="account__technics page-of-account page-of-account" style="display:block">
  <div class="container container_active">
    <div class="accountpage__contentblock accountpage__technics">
      <!-- head -->
      <div class="accountpage__contenthead accountpage__contenthead_technics">
        <div class="accountpage__desktopleftcol">
          <a data-change-account="technics-info" class="button button_green button_big"><span class="button__border-top"></span>Добавить технику<span class="button__border-bottom"></span></a>
        </div>

        <div class="accountpage__desktoprightcol">
          <form class="accountpage__searchfilter" action="index.html" method="post">
            <input type="search" name="search" placeholder="VIN">
            <button type="submit"><img src="img/index/search.svg"></button>
          </form>

          <div class="selectbox selectbox_account">
              <select name="type">
                  <option value="type0">Тип техники</option>
                  <option value="type1">Тип техники 1</option>
                  <option value="type2">Тип техники 2</option>
              </select>
              <ul class="selectbox__selectlist"></ul>
          </div>
        </div>
      </div>
      <!-- // head -->

      <!-- content -->
      <div class="accountpage__blockcontent">
        <div class="accountpage__desktopleftcol">
          <div class="accountpage__desktopheading">
            <p class="accountpage__desktopheading-text">Техника</p>
          </div>
          <div class="accountpage__technics-cards">
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscard.php"; ?>
            <?php include "blocks/account-technicscardchecked.php"; ?>
          </div>
        </div>
        <div class="accountpage__desktoprightcol accountpage__diagramcol">
          <?php include "blocks/account-diagram-live.php"; ?>
        </div>
      </div>
      <!-- // content -->
    </div>
  </div>
</div>
