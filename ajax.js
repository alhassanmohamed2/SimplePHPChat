setInterval(function() {
    chat();
}, 1000);

$(document).on('click', '.send', function() {
    var chat_message = $.trim($('.msg').val());
    $.ajax({
        url: "send.php",
        method: "POST",
        data: {
            msg: chat_message
        },
        success: function(data) {
            chat()
        }
    })

});


$(document).on('click', '.del', function() {
    $.ajax({
        url: "delete_chat.php",
        method: "POST",
        data: {},
        success: function(data) {
            chat()
        }
    })

});

function chat() {
    $.ajax({
        url: "chat.php",
        method: "",
        data: {},
        success: function(data) {
            $('.chat').html(data);
        }
    })
}

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}