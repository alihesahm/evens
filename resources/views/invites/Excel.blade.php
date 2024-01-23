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
                            <form method="post" enctype="multipart/form-data" action="{{ route('SaveDataFromExcel') }}">
                                <!--Add Form Details Here-->
                                @csrf
                                <div class="row">

                                    <input required type="file" name="file" id="" value="اضف ملف اكسل">

                                    <div class="submit-btn">
                                        <button type="submit" class="btn"><i class="fa fa-plus"></i>حفظ </button>
                                    </div>                                </div>

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


