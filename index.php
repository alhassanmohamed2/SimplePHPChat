<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/jpg" href="https://icons-for-free.com/iconfiles/png/512/chat+icon-1320184411998302345.png" />
    <title>Chat APP</title>
</head>

<body>
    <div class="container chat"  style="border:1px solid black; border-radius:10px;margin:50px;padding:20px;">

    </div>
    <form method="POST" style="margin:50px;">
        <div class="form-group" style="margin-bottom:10px;">
            <label for="exampleFormControlTextarea1">Enter Message</label>
            <textarea class="form-control msg" id="exampleFormControlTextarea1" rows="3" name="msg" required></textarea>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
    </form>
</body>
<script>
    setInterval(function() {
        chat();
    }, 1000);

    $(document).on('click', '.btn-primary', function() {
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
</script>

</html>
