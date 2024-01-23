<x-guest-layout >
    <x-authentication-card>
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}
        
           <div>
            <img style="width:100px;height:100px;border-radius:50px;text-align:center;box-shadow:0px 0px 3px black;margin-left:156px" src="{{asset('img/WhatsApp_Image_2024-01-16_at_1.55.45_PM-removebg-preview.png')}}" alt="">

        </div>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div style="text-align: center">
            <a style="text-decoration: none" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('registerform') }}">
                {{ __('انشاء حساب   ') }}
            </a>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label style="direction: rtl;" for="البريد الالكتروني" value="{{ __('البريد الالكتروني') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" dir="rtl" />
            </div>

            <div class="mt-4">
                <x-label style="direction: rtl;" for="password" value="{{ __('كلمه السر') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"  dir="rtl"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center" style="direction: rtl;">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600" >{{ __('تذكرني') }}</span>
                </label>
            </div>


            <div class="flex items-center justify-end mt-4">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('هل نسيت كلمة المرور؟') }}
                    </a>
                @endif


                <x-button class="ms-4" >
                    {{ __('تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
