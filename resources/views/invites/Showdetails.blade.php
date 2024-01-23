@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <a href="{{ route('concert.show') }}">
                            <h6>الدعوه</h6>
                        </a>

                        <i class="fa fa-angle-left"></i>
                        <h6> تفاصيل الدعوه</h6>
                        <i class="fa fa-angle-left"></i>
                        {{-- <h6>عطر رجالي</h6> --}}
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>عرض تفاصيل الدعوه</h6>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> اسم المدعو :</span>
                                        <span class="col-md-9 col-sm-12 col-form-label">
                                            {{ $invite->name }}</span>

                                        <!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> اسم الفعاليه : </span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{ $invite->party->name }}</span><!--Put Server Variable Here-->
                                    </div>
                                    {{-- <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> مؤسس الفعاليه : </span>
                                        <span
                                            class="col-md-3 col-sm-12 col-form-label">{{ $invite->party->user->name }}
                                        </span><!--Put Server Variable Here--><!--Put Server Variable Here-->
                                        <!--Put Server Variable Here-->
                                    </div> --}}
                                    {{-- <div class="form-group row ">
                                        <span class="col-md-3 col-sm-12 col-form-label"> رقم الجوال :</span>
                                        <span class="col-md-3  col-sm-12 col-form-label">{{ $invite->phone_number }}
                                        </span>
                                    </div> --}}
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> مؤسس الفعاليه : </span>
                                        <span
                                            class="col-md-3 col-sm-12 col-form-label">{{ $invite->party->user->name }}
                                        </span><!--Put Server Variable Here--><!--Put Server Variable Here-->
                                        <!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row ">
                                        <span class="col-md-3 col-sm-12 col-form-label"> رقم الجوال :</span>
                                        <span class="col-md-3  col-sm-12 col-form-label">{{ $invite->phone_number }}
                                        </span>
                                    </div>
                                    {{-- <div class="form-group row">

                                            <span class="col-md-3 col-sm-12 col-form-label">التكلفة :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">50 SR</span><!--Put Server Variable Here-->
                                        </div> --}}
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row ">
                                        {{-- $data=['ad','dsa',''] --}}
                                        <span class="col-md-3 col-sm-12 col-form-label"> رمز الدعوه :</span>
                                        <span class="col-md-3  col-sm-12 col-form-label"> {!! QrCode::size(200)->generate($invite->id) !!}

                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-sm-12 col-lg-2 col-form-label "> البريد الالكتروني :</span>
                                        <span class="col-sm-12 col-lg-10 col-form-label"
                                            style="">{{ $invite->email }}</span><!--Put Server Variable Here-->
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <span class="col-sm-12 col-form-label">صور المنتج :</span>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <!--Print Your Image Here-->
                                                    <div class="col-md-4 col-sm-12">
                                                        <a  ><img class="img-thumbnail" src="http://placehold.it/300"></a>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <a  ><img class="img-thumbnail" src="http://placehold.it/300"></a>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <a  ><img class="img-thumbnail" src="http://placehold.it/300"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">موردين المنتج :</label>
                                            <div class="col-sm-12">
                                                <div style="overflow-x: auto;">
                                                    <table class="table table-striped">
                                                      <tbody>
                                                        <tr>
                                                            <td>مؤسسة خالد للعطور</td>
                                                        </tr>
                                                        <tr>
                                                            <td>مؤسسة ابراهيم للاكسسوارات</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="btn-operation">
                                <a style="background-color: rgb(133, 133, 61)" class=""
                                    href="{{ route('pdf', $invite->id) }}">
                                    <i class=""></i>
                                    تحميل ملف بي دي اف
                                </a>
                                <a href="{{ route('invite.edit', $invite->id) }}" class="btn"><i
                                        class="fa fa-edit"></i>تعديل الدعوهه</a>
                                <a class="delete-btn btn" href="#"
                                    onclick="confirmDelete('{{ route('invite.delete', $invite->id) }}');">
                                    <i class="fa fa-trash fa-fw op"></i>
                                    حذف الدعوهه
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
 