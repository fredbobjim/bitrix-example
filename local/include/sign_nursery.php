<div class="double-form__rs">
    <form id="entry-form" action="" class="double-form__form">
        <input type="hidden" name="form_name" value="entry-nursery">
        <h3>Записаться в детский сад</h3>
        <input type="text" name="name" placeholder="Имя" class="letters-only">
        <div class="flex flex-col md:flex-row">
            <input type="text" name="email" placeholder="Email">
            <input class="phone-mask" id="phone" type="text" name="phone" placeholder="Телефон ">
        </div>
        <span id="entry-form-error" style="color: red;font-size: 20px"></span>
        <button type="submit" class="btn-border btn-border__white">Записаться</button>
        <p>
            отправляя заявку вы соглашаетесь с политикой конфиденциальности данных
        </p>
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
