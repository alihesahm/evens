

    @extends('layout.navrightbar')
    <!--Start Mobile Navigation-->

    <!--End Mobile Navigation-->
    <!--Start Wrapper-->

    @section('content')
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الاصناف</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>تعديل صنف </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>تعديل صنف </h6>
                        </div>
                        <div class="content">
                            <form method="post" action="{{route('category.edit.update',$category->id)}}"><!--Add Form Details Here-->

                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الصنف :</label>
                                            <div class="col-md-12 col-sm-12">
                                                <input value="{{$category->name}}" type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم الصنف">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-12 col-form-label">وصف :</label>
                                                    <div class="col-sm-12">
                                                        <textarea value='{{$category->description}}' name="description" class="form-control" rows="5" placeholder="ادخل وصف الصنف">
                                                        {{$category->description}}</textarea>
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
                                        {{-- <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رمز الصنف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="ادخل رمز الصنف">
                                            </div> --}}
                                        {{-- </div> --}}
                                        {{-- <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">سعر البيع :</label>
                                            <div class="col-md-3 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="SR">
                                            </div>
                                            <label class="col-md-3 col-sm-12 col-form-label">التكلفة :</label>
                                            <div class="col-md-3 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="SR">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">فئة المنتج :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <select class="form-control" name="">
                                                    <option selected>إختر فئة المنتج ..</option>
                                                    <option value="">اكسسوارات</option>
                                                    <option value="">عطور</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الخصم :</label>
                                            <div class="col-md-3 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="SR">
                                            </div>
                                            <label class="col-md-3 col-sm-12 col-form-label">الكمية :</label>
                                            <div class="col-md-3 col-sm-12">
                                                <input type="text" class="form-control" name="" placeholder="QTY">
                                            </div>
                                        </div>
                                    </div> --}}
                                    </div>

                                    {{-- <div class="row">
                                    <div class="col-md-6 col-sm-12" id="photoColumn">
                                        <div class="form-group row" id="photoRow">
                                            <label class="col-md-3 col-sm-12 col-form-label">صورة المنتج :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="file" class="form-control" name="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-photo">
                                    <button type="button" class="btn" id="addPhotoBtn" onclick="addPhoto()"><i class="fa fa-plus"></i>اضف صورة</button>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">الموردين :</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" id="unConfirmed" name="" multiple>
                                                    <option value="1" onclick="assignToSupplier(this)">شركة محمد للعطور</option>
                                                    <option value="2" onclick="assignToSupplier(this)">شركة خالد للاكسسوارات</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">ماتم تعيينه كمورد :</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" id="confirmed" name="" multiple>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

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
