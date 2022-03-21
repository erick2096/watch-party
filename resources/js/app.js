const { default: axios } = require('axios');
const { message } = require('laravel-mix/src/Log');

require('./bootstrap');

const username_input = document.getElementById("username");
const messages_el = document.getElementById("messages");
const message_input = document.getElementById("message-input");
const message_form = document.getElementById("message-form");

message_form.addEventListener('submit', function(e) {
    e.preventDefault();

    let has_errors = false;

    if (username_input.value == "") {
        alert("Please enter a username");
        has_errors = true;
    }

    if (message_input.value == "") {
        alert("Please enter a message");
        has_errors = true;
    }

    if (has_errors) {
        return;
    }

    const options = {
        method: 'post',
        url: 'http://localhost/watch-party/public/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options)
        .then(function (){
            message_input.value = "";
        });
});

window.Echo.channel('chat')
    .listen('.message', (e) => {
        messages_el.innerHTML += '<div class="message" data-user="' + e.username + '"><strong>' + e.username + ':</strong>&nbsp;' + e.message + '</div>';
    });
