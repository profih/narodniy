$(document).ready(function () {
    $(".additions__wrapper").owlCarousel(
        {
            nav: false,
            loop: false,
            touchDrag  : true,
            mouseDrag  : false,
            responsive: {
                0: {
                    items: 2,
                },
                1080: {
                    items: 4,
                }
            }
        }
    );

    $(".additions__quan-inc").click(function () {
        let parentDom = this.parentNode.parentNode;
        basket.addItem(
            parentDom.dataset.catalogId,
            parentDom.querySelector('.additions__item-title').innerText,
            parentDom.querySelector('.additions__item-p b').innerText,
            parentDom.querySelector('.additions__item-bp').innerText,
            1,
            true
        )
    })

    $(".additions__quan-dec").click(function () {
        let parentDom = this.parentNode.parentNode;
        basket.removeItem(
            parentDom.dataset.catalogId,
            true
        )
    })

    $(".additions__item-cart").click(function (event) {
        let parentDom = event.target.parentNode;
        basket.addItem(
            parentDom.dataset.catalogId,
            parentDom.querySelector('.additions__item-title').innerText,
            parentDom.querySelector('.additions__item-p b').innerText.replace(/\D/g, ''),
            parentDom.querySelector('.additions__item-bp').innerText.replace(/\D/g, ''),
            1,
            true
        )
    })

    $(".additions__quan-number").change(function (event) {
        let parentDom = event.target.parentNode.parentNode;
        basket.setItem(
            parentDom.dataset.catalogId,
            parentDom.querySelector('.additions__item-title').innerText,
            parentDom.querySelector('.additions__item-p b').innerText.replace(/\D/g, ''),
            parentDom.querySelector('.additions__item-bp').innerText.replace(/\D/g, ''),
            event.target.value,
            true
        )
    })
})