<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>チャット</title>
</head>
<body>

<div class="container"><?=$view?></div>

    <form action="index.php">
        <legend>書いてください</legend>
        <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
        <label>名前：<input type="text" name="name"></label><br>
        <label><textArea name="message" rows="4" cols="40"></textArea></label><br>
        <label><input type="file" name="image" size="30"></label><br>
        <input type="submit" value="送信" name="submit"> 
    </form>



</body>
</html>