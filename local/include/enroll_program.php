<div id="enroll-programm" class="uk-flex-top mir-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical flex">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="mir-modal__content">
                <div class="mir-modal__img mir-modal__img-mob">
                    <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.jpg" alt="">
                </div>
                <h3>Записаться на программу</h3>
                <p class="mir-modal__p">все поля обязательны для заполнения</p>
                <span id="form-program-error" style="color: red"></span>
                <form action="" id="enroll-form" class="validation">
                    <input type="hidden" name="form_name" value="enroll-program">
                    <div class="mir-input__wrap">
                        <input type="text" id="parent-name" name="parent-name" class="mir-input letters-only" required>
                        <span class="mir-input__label">Имя родителя</span>
                    </div>
                    <div class="mir-input__wrap">
                        <input type="text" id="parent-last-name" name="name" class="mir-input letters-only" required>
                        <span class="mir-input__label">Фамилия Родителя</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="mir-input__wrap mir-input__mr-2">
                            <input type="text" id="email" name="email" class="mir-input" required>
                            <span class="mir-input__label">Email</span>
                        </div>
                        <div class="mir-input__wrap">
                            <input type="text" id="phone" name="phone" class="mir-input phone-mask"  required>
                            <span class="mir-input__label">Телефон</span>
                        </div>
                    </div>
                    <div class="mir-input__wrap">
                        <input type="text" id="child-name" name="child-name" class="mir-input letters-only" required>
                        <span class="mir-input__label">Имя ребёнка</span>
                    </div>
                    <div class="mir-input__wrap">
                        <input type="text"  id="child-age" name="child-age" class="mir-input numbers-only" required>
                        <span class="mir-input__label">Возраст ребёнка</span>
                    </div>
                    <h4>Летняя программа</h4>
                    <div class="uk-margin uk-grid-small uk-child-width-auto flex flex-col gap-3">
                        <?php
                        $res = CIBlockElement::GetList(
                            [],
                            ['IDLOCK_ID' => '2', 'ACTIVE' => 'Y', 'SECTION_CODE' => 'letnie-programmy'],
                            false,
                            false,
                            ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_DATES_SUMMER']

                        );
                        while ($program = $res->GetNext()) {?>
                            <label><input class="uk-checkbox mr-1" type="checkbox" name="summer-program-<?= $program['ID']?>" value="<?= $program['NAME']?>"> <?= $program['NAME']?> (<?= $program['PROPERTY_DATES_SUMMER_VALUE']?>) </label>
                        <?}?>
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
            <div class="mir-modal__img">
                <img src="<?= SITE_TEMPLATE_PATH?>/images/modal-img.jpg" alt="">
            </div>
        </div>
    </div>
