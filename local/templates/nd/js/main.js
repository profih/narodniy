var burger_menu = {
    closed: true,
    toggle: function () {
        if (burger_menu.closed) {
            $(".header__burger-menu").slideToggle();
            burger_menu.closed = false;
        } else {
            setTimeout(function () {
                $(".header__burger-menu").slideToggle().promise().done(function () {
                    burger_menu.closed = true;
                })
            }, 100)
        }
    },
    close: function () {
    }
}

$(document).ready(function () {

    $('.tel-mask').mask('+7(000)000-00-00')

    var scrollPoint = window.scrollY
    //Burger menu
    $('.header__burger').on('click', function (e) {
        burger_menu.toggle()
        scrollPoint = window.scrollY
    });

    $(window).scroll(function (event) {
        if (window.scrollY > scrollPoint) {
            if (window.scrollY - scrollPoint > 1000) {
                burger_menu.close()
                scrollPoint = window.scrollY
            }
        } else {
            scrollPoint = window.scrollY
        }
    });
})

const phoneRegexp = /^\+7[(]\d{3}[)]\d{3}-\d{2}-\d{2}$/

function checkPhone(phone) {
    return phone.match(phoneRegexp)
}

function checkMail(mail) {
    return true
}

function sendMail(template, data) {
    let mail_data = {...{'template': template}, ...data}
    console.log(mail_data)
    $.ajax({
        type: "POST",
        url: '/ajax-mail/',
        data: mail_data,
        success: function (data) {
            hide("all")
            ym(91301267,'reachGoal','zakaz')

            showThanksPopup()
        }
    });
}

function formatNumber(int) {
    return int.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

function showErrorMsg(input, text){
    let error_msg = $(`<div class="error-msg">${text}</div>`)
    $(input[0].parentNode).append(error_msg)
    error_msg.onTop(input)
}


$.fn.center = function () {
    this.css("position", "fixed");
    let top = $(window).height() / 2 - this.height() / 2
    if (top > 0) {
        this.css("top", top + 'px');
    } else {
        this.css("top", 0);
    }
    this.css("left", ($(window).width() / 2 - this.outerWidth()/ 2) + "px");

    return this;
}

$.fn.onTop = function (jq) {
    this.css("position", "absolute");
    this.css('box-sizing', 'border-box')
    this.css('width', jq.outerWidth() + 'px')
    let top = jq.offset().top - this.outerHeight()
    let left = jq.offset().left
    this.css("left", left + "px");
    this.css("top", top + "px");
    return this;
}

$.fn.onTop = function (jq) {
    this.css("position", "absolute");
    this.css('box-sizing', 'border-box')
    this.css('width', jq.outerWidth() + 'px')
    let top = jq.offset().top - this.outerHeight()
    let left = jq.offset().left
    this.css("left", left + "px");
    this.css("top", top + "px");
    return this;
}

const basket = {
    items: {},
    sent: false,
    cartDOM: function () {
        return document.querySelector('.order__items')
    },

    updateItem(id, additional) {
        if (this.items[id].quantity < 1) {
            delete this.items[id]
        }
        this.modifyCartBlock(id, additional)
        if (additional) {
            this.editAdditional(id)
        }
    },

    addItem: function (id, name, price, base_price, quantity, additional) {
        if (this.itemExists(id)) {
            this.items[id].quantity += quantity
        } else {
            this.items[id] = {
                'name': name,
                'price': price,
                'base_price': base_price,
                'quantity': quantity,
                'additional': additional
            }
        }
        this.updateItem(id, additional)
    },

    setItem: function (id, name, price, base_price, quantity, additional) {
        if (this.itemExists(id)) {
            this.items[id].quantity = quantity
        } else {
            this.items[id] = {
                'name': name,
                'price': price,
                'base_price': base_price,
                'quantity': quantity,
                'additional': additional
            }
        }
        this.updateItem(id, additional)
    },

    removeItem: function (id, additional) {
        if (this.itemExists(id)) {
            this.items[id].quantity -= 1
        }
        this.updateItem(id, additional)
    },

    modifyCartBlock: function (id, additional) {
        let item_row = this.cartDOM().querySelector(`.order__item[data-catalog-id="${id}"]`)
        if (additional) {
            if (this.itemExists(id)) {
                if (item_row) {
                    item_row.querySelector('.order__quan-num').value = this.items[id].quantity
                } else {
                    this.addRow(id)
                }
            } else {
                item_row.remove()
            }
        } else {
            if (this.itemExists(id)) {
                if (!item_row.classList.contains('chosen')) {
                    item_row.classList.add('chosen')
                }
                item_row.querySelector('.order__quan-num').value = this.items[id].quantity
            } else {
                item_row.classList.remove('chosen')
                item_row.querySelector('.order__quan-num').value = 0
            }
        }
        this.modifyFinalPrice()
    },

    modifyFinalPrice: function () {
        let sum_base, sum
        sum = basket.getSum()
        sum_base = Object.values(this.items).reduce((a, b) => {
            return a + b.base_price * b.quantity
        }, 0)
        $('.order__p').html(`<b>${formatNumber(sum)}</b>&nbsp;р`)
        $('.order__bp').html(`${formatNumber(sum_base)}&nbsp;р`)
    },

    getSum: function (){
        return Object.values(this.items).reduce((a, b) => {
            return a + b.price * b.quantity
        }, 0)
    },

    itemExists: function (id) {
        return id in this.items
    },

    editAdditional: function (id) {
        let additionDom = $(`.additions__item[data-catalog-id='${id}']`)[0]
        additionDom.querySelector(".additions__quan-number").value = this.items[id] ? this.items[id].quantity : 0
        if (this.itemExists(id)) {
            additionDom.classList.add('chosen')
        } else {
            additionDom.classList.remove('chosen')
        }
    },

    addRow: function (id) {
        let item_data = this.items[id]
        let row = $(`<div class="order__item additional chosen" data-catalog-id="${id}">` +
            `                <div class="order__item-quan">` +
            `                    <span class="order__quan-dec">-</span>` +
            `                    <input type="number" class="order__quan-num" value="${item_data.quantity}">` +
            `                    <span class="order__quan-inc">+</span>` +
            '                </div>\n' +
            `                <div class="order__item-name">${item_data.name}</div>` +
            `                <div class="order__item-bp">${item_data.base_price} р</div>` +
            `                <div class="order__item-p">${item_data.price} р</div>` +
            `            </div>`)
        $(this.cartDOM()).append(row)
    },

    sendBasket: function () {
        let items_arr = []
        Object.keys(basket.items).forEach((key) => {
            items_arr.push({"id": key, "quantity": basket.items[key].quantity})
        })
        sendMail('order',
            {
                'order__items': JSON.stringify(items_arr)
            })
    }
}

function showThanksPopup(){
    let popup_window = $(".order__thanks")
    popup_window.css('display', 'block')
    popup_window.center()
    setTimeout(function () {
        $(document).on('click', hide)
    }, 500)
}

function showVideoPopup(){
    hide('all')
    let popup_window = $("#video-popup")
    popup_window.css('display', 'block')
    popup_window.center()
    setTimeout(function () {
        $(document).on('click', hide)
    }, 500)
}

function hide(e) {
    let popup = $(".pop")
    if (e === 'all' || !popup.is(e.target) && popup.has(e.target).length === 0) {
        popup.css('display', 'none');
    }
    $(document).off('click', hide)
}