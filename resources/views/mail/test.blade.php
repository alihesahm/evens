<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body>

    <h3 >
       دعوه حضور يسعدنا تواجدك
    </h3>
    {{-- Message: {{ $name }} <br><br> --}}



    {{-- <p>{{ $name }}</p> --}}




<img src="{{asset('img/42341.jpg')}}" alt="">
<img src="{{$message->embed($name['attachment'])}}" alt="">

    {{-- تحت هذي الرساله تاق SVg
    فقط بدون : --}}
    {{-- <p></p> --}}


    {{-- {{$message->embed($name)}} --}}
    {{-- {{ $message->embed($data['attachment']) }} --}}

    {{-- <img src="{{$name}}" alt=""> --}}
    {{-- <img src="{{ $message->embed($name) }}" alt="image"> --}}

    <br>
    {{-- <img src="{{$message->embed(asset($name))}}" alt=""> --}}
    {{-- <img src="img\42341.jpg" alt=""> --}}

    {{-- <img src="{{$$link}}" alt=""> --}}

</body>

</html>
