@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>الادمنز</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة الادمنز</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>قائمة الادمنز</h6>
                        </div>
                        @if (session('successdelete'))
                            <div id="successdelete" class="alert alert-success">
                                {{ session('successdelete') }}
                            </div>
                        @endif
                        @if (session('createdsyccess'))
                        <div id="createdsyccess" class="alert alert-success">
                            {{ session('createdsyccess') }}
                        </div>
                    @endif
                    @if (session('success'))
                    <div id="success" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                        <div class="content">
                            <div class="before-table">
                                <div class="add-button">
                                    <a class="btn" href="{{ route('admin.create') }}">
                                        <i class="fa fa-plus"></i>
                                        اضف ادمن جديد
                                    </a>
                                </div>
                                <div class="search-form">
                                    <form action="{{ route('searchadmin') }}" method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name">اسم الادمن</option>
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

                                    <div id="searchResults"></div>

                                </div>
                            </div>
                            <div class="table-info">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الادمن</th>

                                            <th>البريد الالكتروني</th>
                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">


                                        @foreach ($Admins as $Admin)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $Admin->name }}</td>
                                                <td>{{ $Admin->email }}</td>
                                                {{-- <td>0502622135</td>
                                            <td>moh@gmail.com</td> --}}
                                                <td>
                                                    <a href="{{ route('admin.showdetails', $Admin->id) }}"><i
                                                            class="fa fa-eye fa-fw op"></i></a>
                                                    <a href="{{route('admin.edit',$Admin->id)}}" ><i class="fa fa-edit fa-fw op"></i></a>
                                                    <a href="#"
                                                        onclick="confirmDelete('{{ route('admin.delete', $Admin->id) }}');">
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
    <!--End Wrapper-->

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
                success
                $('#createdsyccess, #errordelete').fadeOut()
                $('#success, #success').fadeOut()
                $('#success-alert, #error-alert').fadeOut()
                $('#successdelete, #faildelete').fadeOut()
            }, 2000);
        });


        $(document).ready(function() {
            let searchTimer;
            let originalData;
            originalData = {!! json_encode($Admins) !!};

            $('#searchValue').on('input', function() {
                clearTimeout(searchTimer);

                let searchValue = $(this).val();

                // If search value is not empty
                if (searchValue) {
                    searchTimer = setTimeout(function() {
                        $.ajax({
                            dataType: 'json',
                            url: "/searchadmin",
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
                    }, 500); // Adjust the delay (in milliseconds) based on your needs
                } else {
                    // If search value is empty, restore the original data
                    updateTableRows(originalData);
                }
            });
        });


        function updateTableRows(data) {
            let tbody = $("#tbody");
            tbody.empty();
            // console.log('this is data')
            // console.log(data);

            var counter = 0;

            // Check if data is an array before using forEach
            if (Array.isArray(data)) {
                // Loop through the data and append new rows to the tbody
                data.forEach(function(admin) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + admin.name + "</td>");
                    row.append("<td>" + admin.email + "</td>");
                    let actions = $("<td>");

                        actions.append('<a href="' + "{{ route('admin.showdetails', ':id') }}".replace(':id', admin
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');


                    actions.append('<a href="' + "{{ route('admin.edit', ':id') }}".replace(':id', admin
                        .id) + '"><i class="fa fa-edit fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('admin.delete', ':id') }}"
                        .replace(':id', admin.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
                    row.append(actions);

                    // Add other columns as needed

                    tbody.append(row);
                });

                // }else if (typeof data === 'object') {
                // // Handle the case where data is a single object
                // let row = $("<tr>");
                // row.append("<td>" + ++counter + "</td>");

                // // Loop through the properties of the object
                // Object.keys(data).forEach(function (key) {
                //     let cellValue = data[key];

                //     if (typeof cellValue === 'object') {
                //         // If the property value is an object, stringify it
                //         cellValue = JSON.stringify(cellValue);
                //         // console.log(cellValue[0].name)
                //     }
                //     row.append($("<td>").html(cellValue));
                //     cellValue.forEach(function (item) {
                // console.log(item.name);

            } else {
                // var nameForId2 = data[0].name;
                // console.log(nameForId2);
                console.log( JSON.stringify(data));

                var count = 0;
                var x;
                var y;
                for (x = 0; x < data.length; x++) {
                    for (y = 0; y < data.length; x++) {
                        console.log(data[x][y])
                    }

                    // var name = data[i].name;
                    // console.log(name);
                    // let row = $("<tr>");
                    // row.append("<td>" + ++counter + "</td>");
                    // row.append("<td>" + name + "</td>");
                    // row.append("<td>" + data[i].email + "</td>");
                    // let actions = $("<td>");
                    // actions.append('<a href="' + "{{ route('user.showdetails', ':id') }}".replace(':id', role
                    //     .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');
                    // actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}"
                    //     .replace(':id', role.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
                    // row.append(actions);

                    // // Add other columns as needed

                    // tbody.append(row);
                }

                // forEach( x in data)

                //     forEach( y in data)
                //         console.log(y.name)





                // var xx = JSON.stringify(data);
                // for (var key in xx) {
                //     // for(xxx in xx){
                //     //     console.log(xx[xxx]);
                //     // }
                //     // if (xx.hasOwnProperty(key)) {
                //     //     count++;
                //     //     console.log(count);
                //     //     console.log('=>', xx[key]);
                //     // }
                // }

                // console.log('name')
                // console.log(xx[0].name);
            }

        }
        // row.append("<td>" + cellValue['email'] + "</td>");


        // let actions = $("<td>");
        // actions.append('<a href="' + "{{ route('user.showdetails', ':id') }}".replace(':id', data.id) + '"><i class="fa fa-eye fa-fw op"></i></a>');
        // actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}".replace(':id', data.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
        // row.append(actions);
        // // Add other columns as needed

        // tbody.append(row);
    </script>
