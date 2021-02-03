<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action action="/">
        @csrf
        <input type="text" name="name">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submite">Submite</submite>
        </form>
    </body>
</html>
