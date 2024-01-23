@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الفعاليات</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة فعاليه جديده</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>إضافة فعاليه جديده</h6>
                        </div>
                        <div class="content">
                            <form method="POST" action="{{ route('concert.create.store', $currentuser) }}">

                                <!--Add Form Details Here-->

                                @csrf
                                <div class="row pe-1">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">نوع الفعاليه :</label>
                                            <div class=" col-sm-12">
                                                {{-- {{$category}} --}}
                                                <select class="form-control" name="category_id" id="">
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                {{-- <input type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم فعاليه"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {{-- <label class="col-md-3 col-sm-12 col-form-label">الأمن :</label> --}}
                                            <div class=" col-sm-12">
                                                {{-- {{$category}} --}}
                                                @if (!empty($secuirity))
                                                    <label class="col-md-3 col-sm-12 col-form-label">الأمن :</label>

                                                    <select class="form-control" name="secuirity_id" id="">
                                                        @foreach ($secuirity as $secuirity)
                                                            <option value="{{ $secuirity->id }}">
                                                                {{ $secuirity->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                @endif

                                                {{-- <input type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم فعاليه"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الفعاليه :</label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم فعاليه">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">موقع فعاليه :</label>
                                            <div class="col-md-12 col-sm-12">
                                                <input type="text" class="form-control" name="location"
                                                    placeholder=" موقع الفعاليه">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label"> تاريخ بدء الفعاليه :</label>
                                            <div class="col-md-12 col-sm-12">
                                                <input required type="datetime-local" class="form-control" name="startdate"
                                                    placeholder="ادخل تاريخ بدء الفعاليه">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">وصف :</label>
                                                    <div class="col-sm-12">
                                                        <textarea name="description" class="form-control" rows="5" placeholder="ادخل وصف فعاليه"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <div class="submit-btn">
                                                        <button type="submit" class="btn"><i
                                                                class="fa fa-plus"></i>حفظ </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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

