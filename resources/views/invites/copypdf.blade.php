<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>

<body>
    <h3>مرحبا {{ $invite->name }}</h3>

    <p>تاريخ الحضور{{ $invite->party->startdate }}</p>

    <p>{{ $invite->party->user->name }}مؤسس الحفله </p>
    {{-- <h3>hello pdf</h3> --}}
    {{-- <span style="background-color: red;width:100px;height:200px" class="col-md-3 col-sm-12 col-form-label">{!! QrCode::size(50)->generate($invite->id) !!}</span> --}}
    {{-- <img src="{!! QrCode::size(50)->generate($invite->id) !!}"> --}}


    @php
    echo str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\"@endphp", '', $qrCodeSvg);

@endphp
    {{-- {{$qrCodeSvg}} --}}
    {{-- {{$qrCodeSvg}} --}}

</body>

</html>
