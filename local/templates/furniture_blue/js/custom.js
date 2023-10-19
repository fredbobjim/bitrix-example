$(function () {
    //Добавление товаров в корзину
    $('.button-cart').click(function (event) {
        event.preventDefault();

        var $this = $(this);
        var prodId = parseInt($this.data('ids'));
        var cartAddUrl = $this.data('url');
        var cnt = $this.data('count');

        var ajaxDataSend = {
            OFFER_ID: prodId,
            QUANTITY: cnt,
            AJAX_ADD_TO_BASKET_WITH_DOP: 'Y',

        };

        $.ajax({
            url: cartAddUrl,
            type: 'POST',
            data: ajaxDataSend,

        }).done(function (data) {
                var data = $.parseJSON(data);

                if (data.RESPONSE == 'OK') {
                    BX.onCustomEvent('OnBasketChange'); // Обновляем корзину

                    //здесь уже Ваше модальное окно с уведомлением об успешном добавлении
                    //alert("Товар успешно добавлен в корзину");
                    ///   modal.style.display = "block";
                    $('.popup-fade').show()
                }
            }).fail(function () {
                //console.log("error");
            }).always(function () {
                //console.log("complete");
            });
    });

    $('.popup-close').click(function() {
        $(this).parents('.popup-fade').fadeOut();
        return false;
    });

    // Закрытие по клавише Esc.
    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
    });

    // Клик по фону, но не по окну.
    $('.popup-fade').click(function(e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();
        }
    });

    $('.team-item__helper').click(function () {
        let item_id = $(this).closest('.team-item').attr('data-id');

        $.post('/local/ajax/get_team_item.php',{ item_id: item_id } )
            .done(function (data) {
                let item = jQuery.parseJSON(data)

                let popup = $('#team')
                if (!item.img) item.img = '/local/templates/furniture_blue/images/user1.jpg'
                $(popup).find('.mir-modal__img img').attr('src', item.img)
                $(popup).find('h3').html(item.name)
                $(popup).find('.mir-modal__p').html(item.post)
                $(popup).find('.team-modal__p').html(item.description)
                $(popup).find('.mir-quote').html(item.quote)
            })

    })

    $('input[name=PAY_SYSTEM_ID]').val($('.checkout__pay_active').attr('data-paysytem-id'))

    $('.checkout__pay_item').click(function () {
        $('input[name=PAY_SYSTEM_ID]').val($(this).attr('data-paysytem-id'))
    })

    $('#bx-soa-total-mobile, #bx-soa-basket, #bx-soa-orderSave, #bx-soa-total').hide()

    //Отправка форм "Заказать звонок" "Хочу другой курс"
    $('#another-course form, #callBack form').submit(function (e) {
        e.preventDefault()
        let form = $(this)

        $.ajax({
            type: 'post',
            url: '/local/ajax/send_form.php',
            data: form.serialize()
        }).done(function(response) {
            if (response == 'done') {
                form.next('.form-success').show()
                form[0].reset()
                form.find('.form-error').text('')
                setTimeout(function () {
                    form.parent().prev().click()
                }, 3000)
                setTimeout(function () {
                    form.next('.form-success').hide()
                }, 3500)
            } else {
                form.next('.form-success').hide()
                form.find('.form-error').text(response)
            }
        })
    })

    //Отправка формы "Заявка на поступление"
    $('#enroll form').submit(function (e) {
        e.preventDefault()

        $.ajax({
            type: 'post',
            url: '/local/ajax/send_form.php',
            data: $(this).serialize()
        }).done(function(response) {

            if (response == 'done') {
                $('form#enroll-form')[0].reset()
                $('#form-enrol-error').text('')
                setTimeout(function () {
                    $('#enroll .uk-modal-close-default').click()
                }, 3000)
                setTimeout(function () {
                    $('.form-success').hide()
                }, 3500)
            } else {
                $('.form-success').hide()
                $('#form-enrol-error').text(response)
            }
        })
    })

    //Отправка форм Записаться в добрознайку, начальную школу, среднюю школу
    $('#entry-form').submit(function (e) {
        e.preventDefault()

        let error = ''
        $('#entry-form input[type="text"]').each(function () {
            if ($(this).val().length == 0) error = 'Заполните все поля!'
        })

        if (!error) {
            $.ajax({
                type: 'post',
                url: '/local/ajax/send_form.php',
                data: $(this).serialize()
            }).done(function(response) {
                if (response == 'done') {
                    $('.form-success').show()
                    $('#entry-form')[0].reset()
                    $('#entry-form-error').text('')
                    setTimeout(function () {
                        $('.form-success').hide()
                    }, 3000)
                } else {
                    $('#entry-form-error').text(response)
                }
            })
        } else {
            $('#entry-form-error').text(error)
        }
    })

    //Количество товаров в корзине из выпадающего списка на детальной
    $('select.js-choice').change(function () {
        $('a.button-cart').attr('data-count', $(this).val())
    })

    //Всплывающее окно с летней программой
    $('.get-summer-program').click(function () {
        $.post('/local/ajax/get_summer_program.php',{summer_program_id: $(this).attr('data-summer-id') })
            .done(function(response) {
                let data = $.parseJSON(response)

                $('#programm h3').html(data.name)
                $('#programm .mir-modal__p').html(`Даты программы: ${data.dates}`)
                $('#programm .team-modal__p').html(`${data.text}<br>`)
                $('#programm .mir-modal__img img').attr('src', data.img)
                let list = $('#programm .list')
                list.html('')
                $(data.whatDoing).each(function (k, v) {
                    let mark = ';'
                    if (k == data.whatDoing.length - 1) mark = '.'
                    list.append(`<li>${v}${mark}</li>`)
                })
            })
    })

    //Отправка формы "Записаться на летнюю программу"
    $('#enroll-programm form').submit(function (e) {
        e.preventDefault()

        $.ajax({
            type: 'post',
            url: '/local/ajax/send_form.php',
            data: $(this).serialize()
        }).done(function(response) {
            if (response === 'done') {
                $('#enroll-programm form')[0].reset()
                $('#form-program-errorr').text('')
                setTimeout(function () {
                    $('#enroll-programm .uk-modal-close-default').click()
                }, 3000)
                setTimeout(function () {
                    $('.form-success').hide()
                }, 3500)
            } else {
                $('.form-success').hide()
                $('#form-program-errorr').text(response)
            }
        })
    })
})
