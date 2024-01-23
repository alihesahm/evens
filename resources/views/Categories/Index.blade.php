@extends('layout.navrightbar')

@section('content')
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الاصناف</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة الاصناف</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>قائمة الاصناف</h6>
                        </div>
                        @if (session('createdsyccess'))
                        <div id="createdsyccess" class="alert alert-success">
                            {{ session('createdsyccess') }}
                        </div>
                    @endif
                    {{-- @if (session('createdsyccess'))
                    <div id="createdsyccess" class="alert alert-success">
                        {{ session('createdsyccess') }}
                    </div>
                @endif --}}

                @if (session('errordelete'))
                    <div id="errordelete" class="alert alert-danger">
                        {{ session('errordelete') }}
                    </div>
                @endif
                @if (session('successdelete'))
                    <div id="successdelete" class="alert alert-success">
                        {{ session('successdelete') }}
                    </div>
                @endif

                @if (session('errordelete'))
                    <div id="faildelete" class="alert alert-danger">
                        {{ session('errordelete') }}
                    </div>
                @endif

                @if (session('success'))
                    <div id="success-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div id="error-alert" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                        <div class="content">
                            <div class="before-table">
                                <div class="add-button">
                                    <a href="{{route('category.create')}}" class="btn">
                                        <i class="fa fa-plus"></i>
                                        اضف صنف جديد
                                    </a>
                                </div>
                                <div class="search-form">
                                    <form  method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name"> اسم الصنف</option>
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
                                            <th>اسم الصنف</th>

                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">


                                        @foreach ($Categories as $Category)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td> {{$Category->name}}</td>

                                                <td>
                                                    <a href="{{route('category.showdetails',$Category->id)}}"><i class="fa fa-eye fa-fw op"></i></a>
                                                    <a href="{{route('category.edit',$Category->id)}}"><i class="fa fa-edit fa-fw op"></i></a>
                                                    <a href="#"
                                                    onclick="confirmDelete('{{ route('category.delete',$Category->id) }}');">
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


        $(document).ready(function() {
            let searchTimer;

            $('#searchValue').on('input', function() {
                clearTimeout(searchTimer);

                let searchValue = $(this).val();

                if (searchValue == '') {
                // console.log('inside condition')
                searchValue = 'all';
            }
                // If search value is not empty
                if (searchValue) {

                        $.ajax({
                            dataType: 'json',
                            url: "/searchcategory",
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

                } else {

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
                data.forEach(function(role) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + role.name + "</td>");
                    // row.append("<td>" + role.email + "</td>");
                    let actions = $("<td>");

                        actions.append('<a href="' + "{{ route('roles.showdetails', ':id') }}".replace(':id', role
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');


                    actions.append('<a href="' + "{{ route('roles.edit', ':id') }}".replace(':id', role
                        .id) + '"><i class="fa fa-edit fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}"
                        .replace(':id', role.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
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
    <!--End Wrapper-->

