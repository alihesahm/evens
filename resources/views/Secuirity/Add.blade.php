@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الامن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة امن جديد</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>إضافة أمن جديد</h6>
                        </div>
                        <div class="content">
                            <form method="post" action="{{ route('secuirity.create.store') }}">
                                <!-- Add Form Details Here -->
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الامن :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="name" placeholder="ادخل اسم الامن">
                                                @error('name')
                                                <div class="text-danger"> ادخل اسم</div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الايميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="email" class="form-control" name="email" placeholder="ادخل الايميل">
                                                @error('email')
                                                <div class="text-danger">البريد الالكتروني مستخدم!</div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">كلمه السر :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input required min="6" type="password" class="form-control" name="password"
                                                    placeholder="ادخل كلمه السر">
                                                    @error('password')
                                                    <div class="text-danger">كلمه السر يجب ان تتكون من 6 احرف ع الاقل</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">عنوان الأمن :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input required type="text" class="form-control" name="address" placeholder="ادخل عنوان الامن">
                                                @error('address')
                                                <div class="text-danger">ادخل عنوان</div>
                                            @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الجوال :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input required title="ادخل رقم جوال مكون من 9 ارقام" type="text" class="form-control"
                                                    name="phone_number" placeholder="ادخل رقم الجوال">
                                                    @error('phone_number')
                                                    <div class="text-danger">يجب ان يتكون رقم الهاتف من 9 ارقام فقط</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Display Validation Errors -->
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <div class="submit-btn">
                                    <button type="submit" class="btn"><i class="fa fa-plus"></i>اضف أمن</button>
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

