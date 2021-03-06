<h1>Ukassa</h1>


<!--Подключение библиотеки-->
<script src="https://yookassa.ru/checkout-widget/v1/checkout-widget.js"></script>

<!--HTML-элемент, в котором будет отображаться платежная форма-->
<div id="payment-form"></div>
<script>
    //Инициализация виджета. Все параметры обязательные.
    const checkout = new window.YooMoneyCheckoutWidget({
        confirmation_token: 'confirmation-token', //Токен, который перед проведением оплаты нужно получить от ЮKassa
        return_url: 'https://merchant.site', //Ссылка на страницу завершения оплаты
        error_callback: function(error) {
            //Обработка ошибок инициализации
        }
    });

    //Отображение платежной формы в контейнере
    checkout.render('payment-form')
        //После отображения платежной формы метод render возвращает Promise (можно не использовать).
        .then(() => {
            //Код, который нужно выполнить после отображения платежной формы.
        });
</script>