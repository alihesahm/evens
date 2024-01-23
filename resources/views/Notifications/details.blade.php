@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الاشعارات</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>عرض الاشعار</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6> {{$notificationArray['title']}}</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>عرض الاشعار</h6>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label"> الاشعار :</span>
                                        <span
                                            class="col-md-9 col-sm-12 col-form-label">{{$notificationArray['title']}}</span>
                                            <span class="col-md-3 col-sm-12 col-form-label"> منشئ الحفله :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">{{$notificationArray['user_creator']}}</span><!--Put Server Variable Here-->
                                    </div>

                                    <div class="form-group row">
 <!--Put Server Variable Here--><!--Put Server Variable Here-->
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group row">
                                        <span class="col-md-3 col-sm-12 col-form-label">تمت القراءه :</span>
                                            <span class="col-md-9 col-sm-12 col-form-label">{{$notificationArray['read_at']}}</span>

                                            <span class="col-md-3 col-sm-12 col-form-label">اسم الحفله :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">{{$notificationArray['name']}}</span><!--Put Server Variable Here-->
                                    </div>
                                    <div class="form-group row">
                                        {{-- <span class="col-md-3 col-sm-12 col-form-label">الخصم :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">0 SR</span><!--Put Server Variable Here-->
                                            <span class="col-md-3 col-sm-12 col-form-label">الكمية :</span>
                                            <span class="col-md-3 col-sm-12 col-form-label">50 QTY</span><!--Put Server Variable Here--> --}}
                                    </div>
                                </div>
                            </div>



                            {{-- <div class="btn-operation">
                                <a href="{{ route('notifications.edit', $notification->id) }}" class="btn"><i
                                        class="fa fa-edit"></i>تعديل الاشعار</a>--}}
                                        <div class="btn-operation">
                                            <a class="delete-btn btn" href="#"
                                            onclick="confirmDelete('{{ route('notification.delete',$notificationArray['id'] ) }}');">
                                            <i class="fa fa-trash fa-fw op"></i> حذف الاشعار
                                        </a>
                                        </div>
                                        {{-- <a href="#"
                                        onclick="confirmDelete('{{ route('notification.delete', $notificationArray['id']) }}');">
                                        <i class="fa fa-trash fa-fw op"></i>
                                    </a> --}}
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script src="../sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(deleteUrl) {
            Swal.fire({
                title: 'هل أنت متأكد؟',
                text: 'لن تتمكن من التراجع عن هذا الإجراء!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم، احذفه!',
                cancelButtonText: 'إلغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = deleteUrl;
                }
            });
        }
        $(document).ready(function() {
            setTimeout(function() {

                $('#createdsyccess, #errordelete').fadeOut()

                $('#success-alert, #error-alert').fadeOut()
                $('#successdelete, #faildelete').fadeOut()
            }, 2000);
        });



            console.log('here data update table rows');
            console.log(data);
            let tbody = $("#tbody");
            tbody.empty();


            var counter = 0;


                data.forEach(function(invites) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + invites.name + "</td>");

                    let actions = $("<td>");

                        actions.append('<a href="' + "{{ route('invite.showdetails', ':id') }}".replace(':id', invites
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');


                    actions.append('<a href="' + "{{ route('invite.edit', ':id') }}".replace(':id', invites
                        .id) + '"><i class="fa fa-edit fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('invite.delete', ':id') }}"
                        .replace(':id', invites.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
                    row.append(actions);


                    tbody.append(row);
                });


            }



    </script>
    <!--End Wrapper-->

