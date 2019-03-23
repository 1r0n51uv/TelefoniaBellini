<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="row justify-content-center">

    <div class="col-md-12">
        <form action="{{ route('postEmail') }}" method="post">

            {{ csrf_field() }}

            <label>email</label>
            <input type="text" name="email">

            <label>Soggetto</label>
            <input type="text" name="subject">

            <label>Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>

            <input type="submit" name="btn" value="SEND">


        </form>
    </div>

</div>

</body>
</html>











