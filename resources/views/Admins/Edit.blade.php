@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>تعديل الادمن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة ادمن  </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>إضافة ادمن </h6>
                        </div>
                        <div class="content">
                            <form method="post" action="{{ route('admin.edit.update',$admin->id) }}">
                                <!-- Add Form Details Here -->
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الادمن :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{$admin->name}}" type="text" class="form-control" name="name" placeholder="ادخل اسم الادمن">

                                                @error('name')
                                                    <div class="text-danger"> ادخل اسم</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">البريد الالكتروني :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{$admin->email}}" type="email" class="form-control" name="email" placeholder="ادخل الايميل">

                                                @error('email')
                                                    <div class="text-danger">البريد الالكتروني مستخدم!</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">كلمه السر :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="password" class="form-control" name="password" placeholder="ادخل كلمه السر">

                                                @error('password')
                                                    <div class="text-danger">كلمه السر يجب ان تتكون من 6 احرف ع الاقل</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الهاتف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{$admin->phone_number}}" type="text" class="form-control" name="phone_number" placeholder="ادخل رقم الهاتف">

                                                @error('phone_number')
                                                    <div class="text-danger">يجب ان يتكون رقم الهاتف من 9 ارقام فقط</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">عنوان الادمن :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{$admin->address}}" type="text" class="form-control" name="address" placeholder="ادخل عنوان الادمن">

                                                @error('address')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">صوره شخصيه :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="file" name="profile_photo_path" placeholder="الصوره"  />

                                                @error('profile_photo_path')
                                                    <div class="text-danger">اضف صوره شخصيه مناسبه</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Validation Errors -->
                                {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}

                                <div class="submit-btn">
                                    <button type="submit" class="btn"><i class="fa fa-plus"></i>اضف الادمن</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            <!--End Page Content-->
        </div>
        <!--End Content Wrapper-->
    </div>
    <!--End Wrapper-->

