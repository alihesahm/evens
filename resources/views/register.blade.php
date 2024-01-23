<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

    <title>تسجيل </title>

    <link rel="stylesheet" href="registercss/app.css">
    {{-- <link rel="stylesheet" href="registercss/app.css">

    <link rel="stylesheet" href="registercss/bootstrap-grid.css">

    <link rel="stylesheet" href="registercss/bootstrap-grid.css.map">
    <link rel="stylesheet" href="registercss/bootstrap-grid.min.css">
    <link rel="stylesheet" href="registercss/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="registercss/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="registercss/bootstrap-grid.rtl.css.map">
    <link rel="stylesheet" href="registercss/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" href="registercss/icons.css">

    <link rel="stylesheet" href="registercss/bootstrap.min.css"> --}}

    <link rel="stylesheet" href=
    "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    </head>


    <style>
        body{
            background-color: #ccc;
        }
        a{
            text-decoration: none;
            color: orange;
        }
        .image{
            margin-bottom: 20px;
        }
        .city{
            margin-bottom: 20px;

        }
        .neighborhood{
            margin-bottom: 20px;

        }

        a{
            text-decoration: none;
        }
        .image{
            width: 100%;

        }
        select, option {
    width: 100%;
    height: 35px;
             }

              option {


    text-align: center;
              }
              .input_field {
  margin-bottom: 20px;
  position: relative;
}
.input_field input {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.input_field .error-message {
  position: absolute;
  bottom: -20px;
  left: 0;
  font-size: 12px;
  color: #f44336;
}
.input_field.error input {
  border-color: #f44336;
}
.input_field.error .error-message {
  display: block;
}
.label-margin {
  margin-bottom: 10px;
  padding-bottom: 111111px;
}
.input_field{
    margin-bottom: 20px;
}
.icons {
    position: absolute;
    top: 10px;
    left: 10px;
    cursor: pointer;
  }


    </style>
</head>

<body>
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>صفحه التسجيل</h2>
            </div>
            <div class="row clearfix">
                <div class="">

                    <!-- <input type=""> -->
                    <form method="POST" action="{{route('Register')}}" enctype="multipart/form-data">
                        @csrf
                        {{-- @method("delete"); --}}
                        <div>
                            <label class="label-margin" for="name">الاسم</label>

                            <div  class="input_field"> <span><i  aria-hidden="false" class="bi-person myicon"></i></span>


                                <input    type="text" name="name" placeholder="Name" required />
                            </div>
                            @error('name')
                            @if($message != 'The name has already been taken.')
                            <span style="color: #f44336; font-size: 10px;" class="">This name already taken </span>
                          @else
                            <span class="t">This name has already been registered.</span>
                          @endif
                            @enderror




                        </div>

                        @error('email')
                        @if($message != 'The email has already been taken.')
                          <span style="color: #f44336; font-size: 10px;" class="">هذا الايميل غير صالح  </span>
                        @else
                          <span class="text-red-500">هذا الايميل مستخدم.</span>
                        @endif
                      @enderror
                        <div  >
                            <div class="input_field"> <span><i  aria-hidden="false" class="bi bi-envelope myicon"></i></span>
                              <input   type="email" id="email" name="email" placeholder="الايميل" required >

                            </div>

                          </div>
                          @error('password')
                          @if($message != 'The email has already been taken.')
                            <span style="color: #f44336; font-size: 10px;" class="">كلمه السر يجب ان تحتوي على 6ارقام  </span>
                          @else
                            <span class="text-red-500">كلمه السر صحيحه </span>
                          @endif
                          @enderror

                          <div class="input_field" ><span><i aria-hidden="true" class="bi-lock-fill myicon"></i></span>


                            <input type="password" id="password" name="password" placeholder="كلمه السر" required>
                            <div class="icons">
                                <span onclick="togglePassword()">
                                    <i class="bi bi-eye"></i>
                                  </span>
                            </div>
                            {{-- <input type="password" id="password" name="confirmpassword" placeholder="confirmpassword" required> --}}

                            {{-- @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        {{-- <div class="input_field"> <span><i aria-hidden="true" class="bi-lock-fill"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Re-type Password" required />
                            @error('password_confirmation')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div  >
                            @error('phone_number')
                            @if($message != 'wrong number.')
                              <span style="color: #f44336; font-size: 10px;" class="">ادخل رقم جوال يبدا ب 77 او 71 او 73 او73 </span>
                            @else
                              <span class="t">هذا الرقم جيد.</span>
                            @endif
                          @enderror
                            <div class="input_field"> <span><i  aria-hidden="false" class="bi-phone myicon"></i></span>
                              <input   type="text" id="phone_number" name="phone_number" placeholder="رقم الجوال"  pattern="(77|73|78|71|70)\d{7}" required
                              title="Please enter a valid phone number starting with 77, 73, 78, 71, or 70 followed by 9 digits">

                            </div>

                          </div>


                         {{-- <div class="input_field"> <span><i aria-hidden="true" class="bi-phone"></i></span>
                            <input type="text" name="phone_number" placeholder="Phone Number" required />
                            @error('phone_number')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        {{-- <div class="input_field"> <span><i aria-hidden="true" class="bi-shop"></i></span>
                            <input type="text" name="phone_number" placeholder="Shop Name" required />
                            @error('shop_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="input_field"> <span><i aria-hidden="true" class="bi-house myicon"></i></span>
                            <input type="text" name="address" placeholder="العنوان" required />
                            @error('address')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        @error('image')
                        <span class="">{{ $message }}</span>
                        @enderror
                        <div class="image"> <span><i aria-hidden="true" class="bi-addres myicon"></i></span>
                            <input type="file" name="profile_photo_path" placeholder="الصوره" required   />

                        </div>
                        <div class="city">
                            <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <select name="country_id" id="city">
                                <option hidden value="">اختر دولتك</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                       <div class="neighborhood">   <span><i aria-hidden="true" class="fa fa-lock myicon"></i></span>
                            <select name="city_id" id="neighborhoods">
                                {{-- <option id="" value="">اختر حي</option> --}}
                                 {{-- @foreach($cities as $city)
                                    <option  @required(true) value="{{$city->id}}" >{{$city->name}}</option>
                                @endforeach --}}
                            </select>

                        </div>
                        <input class="button" type="submit" />
                    </form>
                    <a style="color: black" href="{{route('login')}}"> هل لديك حساب؟</a>
                </div>
            </div>
        </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script>

    function togglePassword() {
      var passwordInput = document.getElementById("password");
      var icon = document.querySelector(".input_field  .icons i");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
      } else {
        passwordInput.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
      }
    }





  </script>


    <script type="text/javascript">

    // var check=document.getElementById('neighborhoods');
    // check.display=true;



$(document).ready(function () {
            $('#city').change(function(){
        //         $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        //         }
        //    });
            let id = $(this).val();
            // alert(id);
            $.ajax({
                dataType: 'json',
                url: "/add/"+id,
                type: "GET",
                success: function (data) {

                    console.log(data);
                    console.log('found');
                    // foreach($data as $dats){

                    // }
                    // $option=document.createelement('options')
                    $("#neighborhoods").empty().append(data.original);
                    // $('#neighborhoods').html(data);

//                     $x=each(data, function(key, value){
//     $('#neighborhoods').append('<option value="'+ value.id +'">'+ value.name +'</option>');
// });

                    // $.each(data, function(key,value){

                    //     $('select[name="neighborhood_id"]').append('<option value="'+ value.id +'">'+ value.name +'</option>');

                    // });


                },
                error: function(error) {
                console.log('not found');
                    console.log(error);
               }
            });
            });
        });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
