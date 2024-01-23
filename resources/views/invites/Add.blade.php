@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الدعوات</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>إضافة دعوه جديده</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>إضافة دعوه جديد</h6>
                        </div>

                        <div class="content">
                            <form method="post" action="{{ route('invite.create.store') }}">
                                <!--Add Form Details Here-->
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اسم المدعو :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="ادخل اسم المدعو">
                                                    @error('name')
                                                    <div class="text-danger"> ادخل اسم</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">اختر حفله</label>
                                            <div class="col-md-9 col-sm-12">
                                                <select required class="form-control" name="party_id" id="">
                                                    @foreach ($partyuser as $partyuser)
                                                        <option value="{{ $partyuser->id }}">{{ $partyuser->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">رقم الجوال :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="phone_number"
                                                    placeholder="ادخل  رقم الجوال">
                                                    @error('phone_number')
                                                    <div class="text-danger">  ادخل رقم جوال</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-sm-12 col-form-label">الايميل :</label>
                                            <div class="col-md-9 col-sm-12">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="ادخل الايميل">
                                                    @error('email')
                                                    <div class="text-danger">  ادخل ايميل صحيح</div>
                                                @enderror
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
                                    <button type="submit" class="btn"><i class="fa fa-plus"></i>حفظ </button>
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


