@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الأمن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض الأمن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{$secuirity->name}}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>عرض الأمن</h6>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">اسم الأمن :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$secuirity->name}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">رقم التلفون :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$secuirity->phone_number}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الايميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$secuirity->email}}</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">عنوان الأمن :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$secuirity->address}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الصوره  :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$secuirity->image_path}}</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-sm-12 col-form-label">ملاحظات :</span>
                                            <span class="col-sm-12 col-form-label" style="max-width: fit-content;">لايوجد ملاحظات</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="btn-operation">

                                    <a href="{{ route('secuirity.edit', $secuirity->id) }}" class="btn"><i class="fa fa-edit"></i>تعديل الأمن</a>
                                    {{-- <a href="#"
                                    onclick="confirmDelete('{{ route('secuirity.delete', $secuirity->id) }}');">
                                    <i class="fa fa-trash fa-fw op"></i>
                                </a> --}}
                                    <a  href="#" class="delete-btn btn" onclick="confirmDelete('{{ route('secuirity.delete', $secuirity->id) }}');"><i class="fa fa-edit"></i>حذف الأمن</a>
                                </div>
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
  