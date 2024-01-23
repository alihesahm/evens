@extends('layout.navrightbar')

@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>تعديل الفعاليه</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>تعديل فعاليه </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>تعديل فعاليه </h6>
                        </div>
                        <div class="content">
                            {{-- {{dd($concert)}} --}}
                            <form method="post" action="{{ route('concert.edit.update', $concert->id) }}">
                                <!--Add Form Details Here-->
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الفعاليه :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{ $concert->name }}" type="text"
                                                    class="form-control" name="name"
                                                    placeholder="ادخل اسم الفعاليه">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الهاتف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name=""
                                                    placeholder="ادخل رقم الهاتف">
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الفئه :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <select class="form-control" name="category_id" id="">
                                                    <option hidden value="{{ $concert->category->id }}">
                                                        {{ $concert->category->name }}</option>
                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {{-- <label class="col-md-3 col-sm-12 col-form-label">الأمن :</label> --}}
                                            {{-- <div class=" col-sm-12"> --}}
                                            {{-- {{$category}} --}}
                                            @if (!empty($secuirity))
                                                <label class="col-md-3 col-sm-12 col-form-label">الأمن :</label>
                                                <div class="col-md-9 col-sm-12">

                                                    <select class="form-control" name="secuirity_id" id="">
                                                        @if (!empty($selected_secuirity))
                                                            <option hidden value="{{ $selected_secuirity->id }}">
                                                                {{ $selected_secuirity->name }}</option>
                                                        @else
                                                            <option hidden value=""></option>
                                                            @endif @foreach ($secuirity as $secuirity)
                                                                <option value="{{ $secuirity->id }}">
                                                                    {{ $secuirity->name }}
                                                                </option>
                                                            @endforeach

                                                    </select>
                                                </div>
                                            @endif

                                            {{-- <input type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم فعاليهه"> --}}
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الموقع : </label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{ $concert->location }}" type="text"
                                                    class="form-control" name="location"
                                                    placeholder="ادخل موقع الفعاليه">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">تاريخ بدء الفعاليه :
                                            </label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value='{{ $concert->startdate }}' type="datetime-local"
                                                    class="form-control" name="startdate"
                                                    placeholder="ادخل تاريخ بدء الفعاليه">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-sm-12 col-form-label">الوصف :</label>
                                            <div class="col-sm-12">
                                                <textarea name="description" class="form-control">{{$concert->description }}
                                                </textarea>
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
 
