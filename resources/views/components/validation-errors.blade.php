@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('اوووبس شي ما خطأ') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>البريد الالكتروني او كلمه السر غير صحيحه</li>
            @endforeach
        </ul>
    </div>
@endif
