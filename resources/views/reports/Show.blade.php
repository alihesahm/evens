@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الادوار</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض الدور</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{ $report->name }}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>عرض الدور</h6>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">اسم المرسل :</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{ $report->name }}</span><!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">  نوع:</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{ $report->type == 'quest' ? 'ضيف' : $report->type }}</span><!--Put Server Variable Here-->
                                    </div>

                                    <div class="form-group row">
                                        {{-- <span class="col-md-3 col-sm-12 col-form-label">سعر البيع :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">100 SR</span><!--Put Server Variable Here-->
                                            <span class="col-md-3 col-sm-12 col-form-label">التكلفة :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">50 SR</span><!--Put Server Variable Here--> --}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> البريد الالكتروني :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$report->email}}</span><!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">  العنوان:</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{ $report->title }}</span><!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row">
                                        {{-- <span class="col-md-3 col-sm-12 col-form-label">الخصم :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">0 SR</span><!--Put Server Variable Here-->
                                            <span class="col-md-3 col-sm-12 col-form-label">الكمية :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">50 QTY</span><!--Put Server Variable Here--> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group row">
                                        <span class="col-sm-12 col-form-label">وصف :</span>
                                        <span class="col-sm-12 col-form-label" style="max-width: fit-content;">

                                            {{$report->description}}
                                        </span><!--Put Server Variable Here-->
                                    </div>
                                </div>
                            </div>


                            <div class="btn-operation">
                                {{-- <a href="{{ route('reports.edit', $report->id) }}" class="btn"><i
                                        class="fa fa-edit"></i>تعديل الدور</a> --}}
                                <a class="delete-btn btn" href="#"
                                    onclick="confirmDelete('{{ route('reports.delete', $report->id) }}');">
                                    <i class="fa fa-trash fa-fw op"></i>
                                    حذف الدور
                                </a>
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

