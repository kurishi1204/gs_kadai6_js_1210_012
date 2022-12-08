<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<style>
    textarea{
        margin:5px 0px 5px 0px;
    }
</style>

<body>
    <h1>自己紹介アプリ</h1>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        出身: <input type="text" name="birthPlace"><br>
        <textarea name="memo" id="" cols="80" rows="20"  placeholder="自己紹介を記入ください"></textarea><br>
        <input type="submit" value="送信">
    </form>
</body>

</html>
