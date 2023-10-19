<section id="enroll" class="post-enroll">
  <div class="o-limit-x">
    <div class="mir-modal__content">
        <div class="mir-modal__img mir-modal__img-mob">
            <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.jpg" alt="">
        </div>
      <h3>Заявка на поступление</h3>
      <p class="mir-modal__p">все поля обязательны для заполнения</p>
      <span id="form-enrol-error" style="color: red"></span>
      <form action="" id="enroll-form" class="validation">
          <input type="hidden" name="form_name" value="enroll-form">
        <div class="mir-input__wrap">
          <input type="text" id="parent" name="parent" class="mir-input letters-only" required>
          <span class="mir-input__label">ФИО родителя</span>
        </div>
        <div class="mir-input__wrap">
          <input type="text" id="child" name="name" class="mir-input letters-only" required>
          <span class="mir-input__label">ФИО ребенка</span>
        </div>
        <div class="mir-input__wrap">
          <input type="text"  id="class" name="class" class="mir-input numbers-only" required>
          <span class="mir-input__label">Класс, в который поступает ребенок в 2023/2024 учебном году </span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
          <div class="mir-input__wrap mir-input__mr-2">
            <input type="text" id="email" name="email" class="mir-input" required>
            <span class="mir-input__label">Email</span>
          </div>
          <div class="mir-input__wrap">
            <input type="text" id="phone" name="phone" class="mir-input phone-mask" required>
            <span class="mir-input__label">Телефон</span>
          </div>
        </div>
        <button type="submit" class="btn-border" disabled>Отправить заявку</button>
      </form>
      <div class="form-success uk-animation-slide-left-medium">
        <div class="flex justify-center flex-col h-full">
            <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.svg" alt="">
            <h3>Ваша заявка отправлена</h3>
          <div class="w-full">
            <p>В ближайшее время наш менеджер рассмотрит заявку и свяжется с вами.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mir-modal__img">
    <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.jpg" alt="">
  </div>
</section>