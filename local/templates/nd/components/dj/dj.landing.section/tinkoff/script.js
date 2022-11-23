$(document).ready(function () {
    $('.send-tinkoff').click(
        function (event) {
            event.preventDefault();
            let phone = $('#' + this.dataset.phoneInput);
            let name = $('#' + this.dataset.nameInput);
            if (!checkPhone(phone.val())) {
                let error_msg = 'Введите телефон в верном формате'
                showErrorMsg(phone, error_msg)
            } else {
                sendMail('tinkoff', {'phone': phone.val(), 'name': name.val()})

            }
        }
    )
})