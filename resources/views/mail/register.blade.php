<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Template</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            color: #333333;
            padding: 20px;
        }

        h3 {
            color: #007bff;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Hey {{$name}}</h3>
        <p>{{$body}}</p>
    </div>
</body>
</html>
