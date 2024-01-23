@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>تعديل الحفله</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة حفله جديده </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>إضافة حفله جديد</h6>
                        </div>
                        <div class="content">
                            <form method="" action=""><!--Add Form Details Here-->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الحفله :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل اسم الحفله">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الهاتف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل رقم الهاتف">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الايميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="email" class="form-control" name="" placeholder="ادخل الايميل">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">عنوان العميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل عنوان العميل">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الجوال :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل رقم الجوال">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">ملاحظات :</label>
                                            <div class="col-sm-12">
                                                <textarea name="" class="form-control" rows="5" placeholder="ادخل ملاحظات للعميل"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit" class="btn"><i class="fa fa-plus"></i>حفظ</button>
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

