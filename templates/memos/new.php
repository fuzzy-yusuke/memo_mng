<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ管理</title>
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