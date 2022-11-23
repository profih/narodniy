$(document).ready(
    function () {
        $(".order__items").on('click',
            function (event) {
                if (event.target.classList.contains('order__quan-inc')) {
                    let parentDom = event.target.parentNode.parentNode;
                    basket.addItem(
                        parentDom.dataset.catalogId,
                        parentDom.querySelector('.order__item-name').innerText,
                        parseInt(parentDom.querySelector('.order__item-p').innerText.replace(/\D/g, '')),
                        parseInt(parentDom.querySelector('.order__item-bp').innerText.replace(/\D+/g, '')),
                        1,
                        event.target.parentNode.parentNode.classList.contains('additional')
                    )
                } else if (event.target.classList.contains('order__quan-dec')) {
                    let parentDom = event.target.parentNode.parentNode;
                    basket.removeItem(
                        parentDom.dataset.catalogId,
                        event.target.parentNode.parentNode.classList.contains('additional')
                    )
                }
            })
        $(".order__items").on("change", ".order__quan-num",
            function (event) {
                let parentDom = event.target.parentNode.parentNode;
                basket.setItem(
                    parentDom.dataset.catalogId,
                    parentDom.querySelector('.order__item-name').innerText,
                    parseInt(parentDom.querySelector('.order__item-p').innerText.replace(/\D+/g, '')),
                    parseInt(parentDom.querySelector('.order__item-bp').innerText.replace(/\D+/g, '')),
                    event.target.value,
                    event.target.parentNode.parentNode.classList.contains('additional')
                )
            })

        $('.order__action').on(
            'click', function (e) {
                let popup_window = $(".order__popup")
                popup_window.css('display', 'block')
                popup_window.center()
                setTimeout(function () {
                    $(document).on('click', hide)
                }, 500)
            }
        )

        $('#order-post').on('submit', function (event) {
            event.preventDefault()
            if (!checkPhone($('#phone').val())) {
                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg( $('#phone'), error_msg)
                return
            }
            let data = {cart: [],
                phone: $('#phone').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                sum: basket.getSum()}
            Object.values(basket.items).forEach(item =>
                data.cart.push({
                    'PRODUCT_NAME': item['name'],
                    'PRICE': item['price'],
                    'QUANTITY': item['quantity']
                })
            )
            data = JSON.stringify(data)
            sendMail('order', {data})
        })

        let parentDom = $(".order__item[data-catalog-id='1']")[0];
        basket.setItem(
            parentDom.dataset.catalogId,
            parentDom.querySelector('.order__item-name').innerText,
            parseInt(parentDom.querySelector('.order__item-p').innerText.replace(/\D+/g, '')),
            parseInt(parentDom.querySelector('.order__item-bp').innerText.replace(/\D+/g, '')),
            1,
            false
        )

    }
)


