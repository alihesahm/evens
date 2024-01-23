@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>التقارير</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة التقارير</h6>
                    </div>

                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>قائمة التقارير</h6>
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
                                <div class="add-button">
                                    <a href="{{ route('reports.create') }}" class="btn">
                                        <i class="fa fa-plus"></i>
                                        انشاء تقرير
                                    </a>
                                </div>
                                <div class="search-form">
                                    <form action="{{ route('searchreports') }}" method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name">اسم التقرير</option>
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
                                            <th>اسم المرسل</th>

                                            <th> النوع</th>

                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach ($reports as $report)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td> {{ $report->name }}</td>
                                                <td>{{ $report->type == 'quest' ? 'ضيف' : $report->type }}</td>

                                                {{-- <td>20 PCs</td> --}}
                                                <td>
                                                    <a title="عرض التفاصيل"
                                                        href="{{ route('reports.showdetails', $report->id) }}"><i
                                                            class="fa fa-eye fa-fw op"></i></a>

                                                    {{-- <form action="{{route('concert.edit')}}" method="post"> --}}
                                                    {{-- <a title="تعديل " href="{{ route('reports.edit', $report->id) }}"><i
                                                            class="fa fa-edit fa-fw op"></i></a> --}}
                                                    {{-- </form> --}}
                                                    <a class="d" href="#"
                                                        onclick="confirmDelete('{{ route('reports.delete', $report->id) }}');">
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


        $(document).ready(function() {
            let searchTimer;
            let originalData;
            originalData = {!! json_encode($report) !!};

            $('#searchValue').on('input', function() {
                clearTimeout(searchTimer);

                let searchValue = $(this).val();

                // If search value is not empty
                if (searchValue) {
                    searchTimer = setTimeout(function() {
                        $.ajax({
                            dataType: 'json',
                            url: "/searchreports",
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
                data.forEach(function(reports) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + reports.name + "</td>");
                    // row.append("<td>" + reports.email + "</td>");
                    let actions = $("<td>");

                        actions.append('<a href="' + "{{ route('reports.showdetails', ':id') }}".replace(':id', reports
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');


                    actions.append('<a href="' + "{{ route('reports.edit', ':id') }}".replace(':id', reports
                        .id) + '"><i class="fa fa-edit fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('reports.delete', ':id') }}"
                        .replace(':id', reports.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
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
                    // actions.append('<a href="' + "{{ route('user.showdetails', ':id') }}".replace(':id', reports
                    //     .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');
                    // actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}"
                    //     .replace(':id', reports.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
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
    </script>
</body>

</html>
