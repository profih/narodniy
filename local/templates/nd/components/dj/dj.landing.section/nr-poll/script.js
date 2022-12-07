var poll = {
    state: null,
    answers: {},
    active_question: "poll-present",
    next_question: null,
    finished: false,
    addAnswer: function (question, answer) {
        poll.answers[question] = answer
    },
    nextQuestion(id) {
        if (poll.finished){
            return
        }
        if (id === 'poll-finale') {
            showPollPopup()
        } else {
            $("#" + poll.active_question).fadeOut(function () {
                poll.showQuestion(id)
            })
            poll.active_question = id;
            poll.next_question = null;
            $('.poll__next-button').addClass('poll__next-button--transparent')
        }
    },

    showQuestion(id) {
        $("#" + id).fadeIn()
    },

    chooseAnswer(answer_dom) {
        poll.next_question = answer_dom.dataset.nextQuestion
        $(".poll__question-answer").removeClass('poll__question-answer--chosen');
        answer_dom.classList.add('poll__question-answer--chosen')
    }
}

$(document).ready(function () {
    $('.poll__next-button').on('click', function () {
        if (poll.next_question !== null) {
            let questionDOM = document.getElementById(poll.active_question)
            let question = questionDOM.querySelector('.poll__question-title').innerText
            let answer = questionDOM.querySelector('.poll__question-answer--chosen .poll__question-answer-text').innerText
            poll.addAnswer(question, answer)
            poll.nextQuestion(poll.next_question)
        }
    })

    $('.poll__question-answer').on('click', function (event) {
        poll.chooseAnswer(event.target.closest(".poll__question-answer"))
        $('.poll__next-button').removeClass('poll__next-button--transparent')
    })

    $('#poll-post').on('submit', function (event) {
        event.preventDefault()
        if (!checkPhone($('#poll-phone').val())) {
            let error_msg = 'Введите телефон в верном формате'
            showErrorMsg( $('#poll-phone'), error_msg)
            return
        }
        let data = {
            phone: $('#poll-phone').val(),
            name: $('#poll-name').val(),
            email: $('#poll-email').val(),
            poll: poll.answers
        }
        data = JSON.stringify(data)
        poll.finished = true
        $('.poll__next-button').addClass('poll__next-button--transparent')
        sendMail('poll', {data})
    })
})

function showPollPopup() {
    hide('all')
    let popup_window = $("#poll-popup")
    popup_window.fadeIn()
    popup_window.center()
    popup_window.putCross()
    setTimeout(function () {
        $(document).on('click', hide)
    }, 500)
}