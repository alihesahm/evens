@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الامن</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة الامن</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>قائمة الامن</h6>
                        </div>

                        @if (session('createdsyccess'))
                        <div id="createdsyccess" class="alert alert-success">
                            {{ session('createdsyccess') }}
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


                    @if (session('successdelete'))
                        <div id="successdelete" class="alert alert-success">
                            {{ session('successdelete') }}
                        </div>
                    @endif

                    @if (session('errordelete'))
                        <div id="faildelete" class="alert alert-success">
                            {{ session('errordelete') }}
                        </div>
                    @endif
                        <div class="content">
                            <div class="before-table">
                                <div class="add-button">
                                    <a class="btn" href="{{ route('secuirity.create') }}">
                                        <i class="fa fa-plus"></i>
                                        اضف امن جديد
                                    </a>
                                </div>
                                <div class="search-form">
                                    <form  method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name">اسم الأمن</option>
                                                    <option value="email"> البريد الالكتروني</option>
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
                                            <th>اسم الامن</th>
                                            <th>البريد الالكتروني </th>
                                            {{-- <th>رقم الجوال</th>
                                            <th>البريد الالكتروني</th> --}}
                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @php
                                            $counter = 0;
                                        @endphp
                                        @foreach ($secuirity as $secuirity)
                                            <tr>
                                                <td>{{ ++$counter }}</td>
                                                <td>{{ $secuirity->name }}</td>
                                                <td>{{ $secuirity->email }}</td>
                                                {{-- <td>{{$secuirity->role->name}}</td> --}}

                                                <td>
                                                    <a href="{{ route('secuirity.showdetails', $secuirity->id) }}"><i
                                                            class="fa fa-eye fa-fw op"></i></a>
                                                    <a href="{{ route('secuirity.edit', $secuirity->id) }}"><i
                                                            class="fa fa-edit fa-fw op"></i></a>
                                                    <a href="#"
                                                        onclick="confirmDelete('{{ route('secuirity.delete', $secuirity->id) }}');">
                                                        <i class="fa fa-trash fa-fw op"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
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

             if (searchValue == '') {
                searchValue = 'all';
            }
                if (searchValue) {
                    searchTimer = setTimeout(function() {
                        $.ajax({
                            dataType: 'json',
                            url: "/searchsecuirity",
                            type: "GET",
                            data: $('#searchForm').serialize(),
                            success: function(data) {
                           
                                // Update the tbody content with the new data
                                updateTableRows(data.message);
                            },
                            error: function(error) {
                            
                                console.log(error);
                            }
                        });
                    }, 500);
                } else {
                    updateTableRows(originalData);
                }
            });
        });


         function updateTableRows(data) {
            let tbody = $("#tbody");
            tbody.empty();
     
            var counter = 0;


                data.forEach(function(secuirity) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + secuirity.name + "</td>");
                    row.append("<td>" + secuirity.email + "</td>");
                    let actions = $("<td>");

                        actions.append('<a href="' + "{{ route('secuirity.showdetails', ':id') }}".replace(':id', secuirity
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');


                    actions.append('<a href="' + "{{ route('secuirity.edit', ':id') }}".replace(':id', secuirity
                        .id) + '"><i class="fa fa-edit fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('secuirity.delete', ':id') }}"
                        .replace(':id', secuirity.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
                    row.append(actions);


                    tbody.append(row);
                });


            }

    </script>
    <!--End Wrapper-->
