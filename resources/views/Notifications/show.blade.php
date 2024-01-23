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
                        {{-- <h6> {{ $report->name }}</h6> --}}
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>قائمة الاشعارات</h6>
                        </div>
                        @if (session('createdsyccess'))
                            <div id="createdsyccess" class="alert alert-success">
                                {{ session('createdsyccess') }}
                            </div>
                        @endif
                        @if (session('successdelete'))
                            <div id="successdelete" class="alert alert-success">
                                {{ session('successdelete') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div id="createdsyccess" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div id="errordelete" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="content">
                            <div class="before-table">

                                <div class="search-form">
                                    <form action="{{ route('searchreports') }}" method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name">اسم </option>
                                                    {{-- <option value="email"> البريد الالكتروني</option> --}}
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>

                                            <div class="col-auto">
                                                <input type="text" class="form-control" name="search_value"
                                                    id="searchValue" placeholder="البحث">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-info">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم العميل</th>

                                            <th> تم قراءته</th>

                                            <th> العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">


                                        @foreach ($notifi as $notificationData)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $notificationData->user_creator }}</td>
                                                {{-- <td>{{ $report->type == 'quest' ? 'ضيف' : $report->type }}</td> --}}

                                                <td>{{$notificationData->read_at ? 'نعم' : 'لا'}}</td>
                                                {{-- <td>{{$notificationData->party_name ?? 'لايوجد'}}</td> --}}

                                                <td>
                                                    <a href="#"
                                                    onclick="confirmDelete('{{ route('notification.delete', $notificationData->id) }}');">
                                                    <i class="fa fa-trash fa-fw op"></i>
                                                </a>
                                                </td>

                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                            <div class="pagin"><!--Put Pagination ASP CORE Here-->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link">Previous</a></li>
                                        <li class="page-item"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
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


        $(document).ready(function() {
            let searchTimer;
            let originalData;

            $('#searchValue').on('input', function() {
                clearTimeout(searchTimer);

                let searchValue = $(this).val();

                // If search value is not empty
                console.log('this is value '+searchValue);
                if (searchValue == '') {
                searchValue = 'all';
                console.log('this is value '+searchValue);

            }
                if (searchValue) {
                    searchTimer = setTimeout(function() {
                        $.ajax({
                            dataType: 'json',
                            url: "/searchinvite",
                            type: "GET",
                            data: $('#searchForm').serialize(),
                            success: function(data) {
                                console.log(data);
                                console.log(data.message);

                                console.log('found');

                                // Update the tbody content with the new data
                                updateTableRows(data.message);
                            },
                            error: function(error) {
                                console.log('not found');
                                console.log(error);
                            }
                        });
                    }, 500);
                } else {

                    console.log('else'+searchValue);

                    updateTableRows(searchValue);
                }
            });
        });


        function updateTableRows(data) {
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

