@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الادمنز</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض الادمن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{$admin->name}}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>عرض الادمن</h6>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">اسم الادمن :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$admin->name}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">رقم التلفون :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$admin->phone_number}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الايميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$admin->email}}</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">عنوان الادمن :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$admin->address}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الصوره الشخصيه</span>
                                            @if ($admin->profile_photo_path && file_exists(public_path('storage/' . $admin->profile_photo_path)))
                                            <img style="height:200px; width:150px" src="{{ asset('storage/' . $admin->profile_photo_path) }}" class="col-md-9 col-sm-12 col-form-label" alt="صوره ادمن">
                                        @else
                                            <img style="height:200px; width:150px" src="{{ asset('assets/img/team/team-1.jpg') }}" class="col-md-9 col-sm-12 col-form-label" alt="صوره">
                                        @endif
                                                                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-sm-12 col-form-label">ملاحظات :</span>
                                            <span class="col-sm-12 col-form-label" style="max-width: fit-content;">لايوجد ملاحظات</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-operation">
                                    <a  class="btn"><i class="fa fa-edit"></i>تعديل الادمن</a>
                                    <a  class="delete-btn btn" onclick="return confirm('هل انت متأكد')"><i class="fa fa-edit"></i>حذف الادمن</a>
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

