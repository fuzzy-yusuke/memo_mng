<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>メモ管理</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>メモ管理</h1>
        <form method="POST" action="/memos">
            <div class="content">
                <textarea name="memo" cols="50" rows="10" placeholder="メモを入力して下さい。"></textarea><br>
                <button type="submit">登録する</button>
        </form>
            </div>
    </div>
</body>
</html>