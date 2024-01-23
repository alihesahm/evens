@extends('layout.navrightbar')

@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>العملاء</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض العميل</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{$client->name}}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>عرض العميل</h6>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">اسم العميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$client->name}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">رقم التلفون :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$client->phone_number}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الايميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$client->email}}</span><!--Put Server Variable Here-->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">عنوان العميل :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label"> {{$client->address}}</span><!--Put Server Variable Here-->
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-md-3 col-sm-12 col-form-label">الصوره الشخصيه</span>
                                            @if ($client->profile_photo_path && file_exists(public_path('storage/' . $client->profile_photo_path)))
                                            <img style="height:200px; width:150px" src="{{ asset('storage/' . $client->profile_photo_path) }}" class="col-md-9 col-sm-12 col-form-label" alt="Client Image">
                                        @else
                                            <img style="height:200px; width:150px" src="{{ asset('assets/img/team/team-1.jpg') }}" class="col-md-9 col-sm-12 col-form-label" alt="Default Image">
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
                                    <a  class="btn"><i class="fa fa-edit"></i>تعديل العميل</a>
                                    <a  class="delete-btn btn" onclick="return confirm('هل انت متأكد')"><i class="fa fa-edit"></i>حذف العميل</a>
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

</body>
</html>
