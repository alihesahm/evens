@extends('layout.navrightbar')
@section('content')
    <!--Start Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title">
                <i class="fab fa-product-hunt"></i>
                <a href="{{ route('concert.show') }}">
                    <h6>الفعاليات</h6>
                </a>

                <i class="fa fa-angle-left"></i>
                <h6> تفاصيل الفعاليه</h6>
                <i class="fa fa-angle-left"></i>
                {{-- <h6>عطر رجالي</h6> --}}
            </div>
            <div class="page-info shadow">
                <div class="title">
                    <i class="fab fa-product-hunt"></i>
                    <h6>عرض تفاصيل الفعاليه</h6>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group row">
                                <span class="col-md-3 col-sm-12 col-form-label"> اسم الفعاليه :</span>
                                @if (auth()->user()->role->name == 'Manager')
                                    <span class="col-md-9 col-sm-12 col-form-label">
                                        {{ $concertdetails->name }}</span>
                                @else
                                    <span class="col-md-9 col-sm-12 col-form-label">
                                        {{ $concert_details->name }}</span>
                                @endif


                                <!--Put Server Variable Here-->
                            </div>
                            @if (auth()->user()->role->name == 'Manager')
                                <div class="form-group row">
                                    <span class="col-md-3 col-sm-12 col-form-label"> اسم الحارس :</span>
                                    <span class="col-md-9 col-sm-12 col-form-label">
                                        {{ $security_id_in_user_table->name ?? 'لايوجد' }}</span>

                                    {{-- <span class="col-md-9 col-sm-12 col-form-label">
                                                </span><!--Put Server Variable Here--> --}}
                                </div>
                            @endif

                            <div class="form-group row">
                                <span class="col-md-3 col-sm-12 col-form-label">فئه الفعاليه : </span>
                                @if (auth()->user()->role->name == 'Manager')
                                    <span
                                        class="col-md-9 col-sm-12 col-form-label">{{ $concertdetails->category->name }}</span>
                                @else
                                    <span
                                        class="col-md-9 col-sm-12 col-form-label">{{ $concert_details->category->name }}</span>
                                @endif
                                <!--Put Server Variable Here-->
                            </div>
                            {{-- <div class="form-group row">

                                            <span class="col-md-3 col-sm-12 col-form-label">التكلفة :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">50 SR</span><!--Put Server Variable Here-->
                                        </div> --}}
                        </div>
                        <div class="col-md-6 col-sm-12">

                            <div class="form-group row">
                                <span class="col-md-3 col-sm-12 col-form-label"> الموقع : </span>
                                @if (auth()->user()->role->name == 'Manager')
                                    <span class="col-md-3 col-sm-12 col-form-label">{{ $concertdetails->location }}
                                    </span>
                                @else
                                    <span class="col-md-3 col-sm-12 col-form-label">{{ $concert_details->location }}
                                    </span>
                                @endif
                                <!--Put Server Variable Here--><!--Put Server Variable Here-->
                                <!--Put Server Variable Here-->
                            </div>
                            <div class="form-group row ">
                                <span class="col-md-3 col-sm-12 col-form-label">تاريخ البدا :</span>
                                @if (auth()->user()->role->name == 'Manager')
                                    <span class="col-md-3  col-sm-12 col-form-label">{{ $concertdetails->startdate }}
                                    </span>
                                @else
                                    <span class="col-md-3  col-sm-12 col-form-label">{{ $concert_details->startdate }}
                                    </span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <span class="col-sm-12 col-form-label "> الوصف :</span>

                                @if (auth()->user()->role->name == 'Manager')
                                    <span class="col-sm-12 col-form-label"
                                        style="">{{ $concertdetails->description }}</span>
                                @else
                                    <span class="col-sm-12 col-form-label"
                                        style="">{{ $concert_details->description }}</span>
                                @endif
                                <!--Put Server Variable Here-->
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
                        {{-- <a href="{{ route('concert.edit', ['id' => optional($concertdetails)->id ?? 0, 'ids' => $security_id_in_user_table->id]) }}" class="btn">
                                    <i class="fa fa-edit"></i> تعديل الفعاليهة
                                </a>                                <a class="delete-btn btn" href="#" onclick="confirmDelete('{{ route('concert.delete', $concertdetails->id) }}');">
                                    <i class="fa fa-trash fa-fw op"></i>
                                    حذف الفعاليه
                                </a> --}}
                        @if (auth()->user()->role->name == 'Manager')
                            <a href="{{ route('concert.edit', ['id' => $concertdetails->id, 'ids' => $security_id_in_user_table->id ?? 0]) }}"
                                class="btn">
                                <i class="fa fa-edit"></i> تعديل الفعاليه
                            </a>
                        @endif
            @if (auth()->user()->role->name == "Manager")
            <a class="delete-btn btn" href="#"
            onclick="confirmDelete('{{ route('concert.delete', optional($concertdetails)->id ?? 0) }}');">
            <i class="fa fa-trash fa-fw op"></i> حذف الفعاليه
        </a>
            @else
            <a class="delete-btn btn" href="#"
            onclick="confirmDelete('{{ route('concert.delete', optional($concert_details)->id ?? 0) }}');">
            <i class="fa fa-trash fa-fw op"></i> حذف الفعاليه
        </a>
            @endif


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
