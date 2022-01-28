<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test</title>
</head>
<body>
  <h2>トップページ</h2>
  <form action="/" method="POST">
    @csrf
    <p>名前</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="email">
    <input type="submit" value="送信する">
</body>
</html>