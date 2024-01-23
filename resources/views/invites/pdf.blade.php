<!DOCTYPE html>
<html lang="en">>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <title></title>
    <style>
        body {


            /* background-color: #f7f7f7; */
            font-family: 'Cairo', sans-serif;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            /* background-color: #ffffff; */
            padding: 20px;
            text-align: center;
            color:white;
           background-image: url('img/rm121-ning-04.jpg');
           /* background-image-resize: 6; */
           background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
           position: absolute; left:0; right: 0; top: 0; bottom: 0; width: 22.7cm; height: 28.9cm;
            /* background-image: url('img/rm121-ning-04.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat; */
             /* height: 35.9cm;
            width:50cm; */
            /* height: 500px; */
            border-radius: 5px;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        }

        .header {
            text-align: center;
            color: white
            /* margin-bottom: 20px; */
        }

        .header h1 {
            /* color: #007bff; */
        }

        .content h2 {
            /* color: #333333; */
            font-size: 24px;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .concerence{
            max-width: 400px;
            margin: 0 auto;
            direction: rtl;
            /* background-color: #ffffff; */
            padding: 20px;
            background-image: url('img/v915-techi-020.jpg');
           /* background-image-resize: 6; */
           background-position: center;
            background-size: cover;
            /* width:500px;


            height: 500px; */
            text-align: center;
            width: 30cm;
            background-repeat: no-repeat;
           position: absolute; left:0; right: 0; top: 0; bottom: 0;
           white-space:wrap;
        }
        .marryclass{
            margin-top: 50px;
        }
        img{
            /* width: 24cm;
            height: 27cm; */
            /* text-align:  */
            height: 150px;width:150px; margin-right:150px;margin-bottom:0px;
        }
        .logo{
            z-index:1;text-align:right;
        }
        .title{
            color: black;text-align:right;margin-right:340px;font-size:20px;font-weight:bold
        }
        .partyname{
            color: rgb(209, 189, 75);text-align:center;font-size:50px
        }
        .contentconference{
            text-align: right;
            margin-top: 70px;margin-right:380px;font-size:20px

        }
        .contentconference > p{
            color: black;text-align:right

        }
         #qrcode{
            /* background: red; */
            /* text-align: right; */
            margin-left: 200px;margin-top:70px;
            /* width: 500px; */
        }
    </style>
</head>

<body>


    @if ($invite->party->category->name == 'حفلات زواج')

    <div  class="card" style="opacity: 0.4">


        {{-- <img src="img/rm121-ning-04.jpg"
             style="width: 21cm; " /> --}}


             <div class="marryclass">
                <div class="header">
                    {{-- <i>{{$invite->name}}</i> --}}
                    {{-- <h1>{{$invite->party->category->name}}</h1> --}}

                    <H3>دعوه</H3>
                    <bdi> الحفله :{{$invite->party->name }} </bdi>
                </div>
                <div class="content">
                    <bdi>  المدعوا :{{$invite->name}}</bdi>
                    <br>

                    {{-- <img src="img/42341.jpg" alt=""> --}}
                    <bdi> مؤسس الحفله : {{$invite->party->user->name}}</bdi>
                    <br>
                    <bdi>  نتشرف بدعوه الاخ :{{$invite->name}} لحضورالحفل</bdi>

                    <p>ندعوك لحضور حفل تخرجي</p>
                    <bdi>تاريخ الحضور  : {{$invite->party->startdate}}</bdi>
                    <br>
                    {{-- <p>Time: 5:00 PM</p> --}}
                    <bdi>الموقع :{{$invite->party->location}} </bdi>
                    <p>حضورك ومشاركتك فرحتي يسعدني</p>
                </div>

                <br>
                <div style="margin-left: 160px">
                        @php
                echo "  ". str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\"?>", '', $qrCodeSvg);

                @endphp
                </div>

             </div>




</div>
@else
<div  class="card" style="opacity: 0.4">


    {{-- <img src="img/rm121-ning-04.jpg"
         style="width: 21cm; " /> --}}


         <div class="marryclass">
            <div class="header">
                {{-- <i>{{$invite->name}}</i> --}}
                {{-- <h1>{{$invite->party->category->name}}</h1> --}}

                <H3>دعوه</H3>
                <bdi> :الحفله {{$invite->party->name }} </bdi>
            </div>
            <div class="content">
                <bdi>{{$invite->name}}  المدعوا :</bdi>
                {{-- <img src="img/42341.jpg" alt=""> --}}
                <br>
                <bdi>{{$invite->party->user->name}}مؤسس الحفله :</bdi>
                <p>ندعوك لحضور حفل تخرجي</p>
                <bdi>{{$invite->party->startdate}}تاريخ الحضور :</bdi>
                {{-- <p>Time: 5:00 PM</p> --}}
                <p>{{$invite->party->location}}الموقع</p>
                <p>حضورك ومشاركتك فرحتي يسعدني</p>
            </div>
            @php
            echo str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\"?>", '', $qrCodeSvg);

        @endphp
         </div>




</div>
    @endif
    @php
        $qr=str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\"?>", '', $qrCodeSvg);

    @endphp

    @if ($invite->party->category->name == 'مؤتمرات')

    {{-- <img style="height: auto; width: 150px; margin-left:400px" src="img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png" /> --}}

    {{-- <img style="width:50px;height:50px"  src="img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png" alt=""> --}}

<div class="concerence">
    <div class="logo">
        {{-- stora('img/skdak/$user->img') --}}
        <img   src="img/WhatsApp_Image_2024-01-08_at_1.23.44_PM-removebg.png" />
         {{-- <p style="background: cadetblue">ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p> --}}
            </div>
    <div style="">
          <h2 style="text-align: center;color:black">دعوه</h2>
<h3 class="title" >  يتشرف  {{$invite->party->user->name}} بدعوتكم
     لحضور المؤتمر الذي بعنوان  </h3>
<h3 class="partyname" >{{$invite->party->name}} </h3>

<div class="contentconference">
    <p > {{$invite->party->startdate}}   الذي يقام في {{$invite->party->location}} وذلك حسب التاريخ</p>
{{-- <p style="color: black;text-align:right;">وذلك حسب التاريخ 2024</p> --}}
<p id="qrcode" name='qrcode' style="">{!!$qr!!}</p>
{{-- <p></p> --}}

</div>

</div>

</div>
@endif


    {{-- <h3>Not حفلات زواج</h3> --}}


</body>

</html>
</body>

</html>
