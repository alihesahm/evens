@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>تعديل الدعوه</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>تعديل فعاليه جديده </h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6> تعديل فعاليه جديده</h6>
                        </div>
                        <div class="content">
                            <form method="post" action="{{ route('invite.edit.update', $invite->id) }}">
                                <!--Add Form Details Here-->
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم المدعو :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{ $invite->name }}" type="text"
                                                    class="form-control" name="name"
                                                    placeholder="ادخل اسم المدعو">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الهاتف :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="number" value="{{ $invite->phone_number }}" type="text"
                                                    class="form-control" name="phone_number"
                                                    placeholder="ادخل رقم الهاتف">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الايميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input value="{{ $invite->email }}" type="email"
                                                    class="form-control" name="email" placeholder="ادخل الايميل">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">مؤسس الفعاليه :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input disabled value="{{ $invite->party->user->name }}"
                                                    type="text" class="form-control" name=""
                                                    placeholder="ادخل عنوان العميل">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم الفعاليه : </label>
                                            <div class="col-md-9 col-sm-12">
                                                <select class="form-control" name="party_id" id="">
                                                    <option hidden value="{{ $invite->party->id }}">
                                                        {{ $invite->party->name }}</option>
                                                    @foreach ($concerts as $concerts)
                                                        <option value="{{ $concerts->id }}">{{ $concerts->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="row">-->
                                <!--    <div class="col-sm-12">-->
                                <!--        <div class="form-group row">-->
                                <!--            <label class="col-sm-12 col-form-label">ملاحظات :</label>-->
                                <!--            <div class="col-sm-12">-->
                                <!--                <textarea name="" class="form-control" rows="5" placeholder="ادخل ملاحظات للعميل"></textarea>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
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

