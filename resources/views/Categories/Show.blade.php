@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الاصناف</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> عرض النصف</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{$category->name}}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>عرض الصنف</h6>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">اسم الصنف :</span>
                                        <span class="col-md-9 col-sm-12 col-form-label">
                                            {{$category->name}}
                                            </span><!--Put Server Variable Here-->
                                    </div>
                                    {{-- <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">رمز المنتج :</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">123456789</span><!--Put Server Variable Here-->
                                    </div> --}}
                                    {{-- <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">سعر البيع :</span>
                                        <span class="col-md-3 col-sm-12 col-form-label">100
                                            SR</span><!--Put Server Variable Here-->
                                        <span class="col-md-3 col-sm-12 col-form-label">التكلفة :</span>
                                        <span class="col-md-3 col-sm-12 col-form-label">50
                                            SR</span><!--Put Server Variable Here-->
                                    </div> --}}
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> الوصف :</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{$category->description}}</span><!--Put Server Variable Here-->
                                    </div>

                                </div>
                            </div>



                            <div class="btn-operation">
                                <a href="{{route('category.create',$category->id)}}" class="btn"><i class="fa fa-edit"></i>تعديل المنتج</a>
                                <a class="delete-btn btn" href="#"
                                onclick="confirmDelete('{{ route('category.delete', optional($category)->id ?? 0) }}');">
                                <i class="fa fa-trash fa-fw op"></i> حذف الصنف
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
