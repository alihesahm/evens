@extends('layout.navrightbar')
@section('content')
            <!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fa fa-users"></i>
                        <h6>العملاء</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة العملاء</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fa fa-users"></i>
                            <h6>قائمة العملاء</h6>
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
                        <div class="content">
                            <div class="before-table">
                                <div class="add-button">
                                    <a class="btn" href="{{ route('user.create') }}">
                                        <i class="fa fa-plus"></i>
                                        اضف عميل جديد
                                    </a>
                                </div>
                                <div class="search-form">
                                    <form action="{{ route('search') }}" method="GET" id="searchForm">
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <select class="custom-select" name="search_option">
                                                    <option value="name" selected hidden>بحث بحسب</option>
                                                    <option value="name">اسم العميل</option>
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
                                            <th>اسم العميل</th>

                                            <th>البريد الالكتروني</th>
                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">


                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $client->name }}</td>
                                                <td>{{ $client->email }}</td>
                                                {{-- <td>0502622135</td>
                                            <td>moh@gmail.com</td> --}}
                                                <td>
                                                    <a href="{{ route('user.showdetails', $client->id) }}"><i
                                                            class="fa fa-eye fa-fw op"></i></a>
                                                    {{-- <a ><i class="fa fa-edit fa-fw op"></i></a> --}}
                                                    <a href="#"
                                                        onclick="confirmDelete('{{ route('user.delete', $client->id) }}');">
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


            // originalData = {!! json_encode($clients, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK) !!};



            $('#searchValue').on('input', function() {
                clearTimeout(searchTimer);

                let searchValue = $(this).val();

                // console.log('this is search value');

                // console.log(searchValue);
                if(searchValue == ''){
                    // console.log('inside condition')
                    searchValue='all';
                }

                if (searchValue) {
                    searchTimer = setTimeout(function() {
                        $.ajax({
                            dataType: 'json',
                            url: "/search",
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
                    updateTableRows(originalData);
                }
            });
        });


        function updateTableRows(data) {
            let tbody = $("#tbody");
            tbody.empty();
            // console.log('this is data')
            console.log(data);

            var counter = 0;

            if (Array.isArray(data)) {
                data.forEach(function(client) {
                    let row = $("<tr>");
                    row.append("<td>" + ++counter + "</td>");
                    row.append("<td>" + client.name + "</td>");
                    row.append("<td>" + client.email + "</td>");
                    let actions = $("<td>");
                    actions.append('<a href="' + "{{ route('user.showdetails', ':id') }}".replace(':id', client
                        .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');
                    actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}"
                        .replace(':id', client.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
                    row.append(actions);


                    tbody.append(row);
                });

                // }else if (typeof data === 'object') {
                // let row = $("<tr>");
                // row.append("<td>" + ++counter + "</td>");

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
                    // console.log( JSON.stringify(data));

                var count = 0;
                var x;
                var y;
                for ( x = 0; x < data.length; x++) {
                    for(y=0; y<data.length;x++){
                        console.log(data[x][y])
                    }

                    // var name = data[i].name;
                    // console.log(name);
                    // let row = $("<tr>");
                    // row.append("<td>" + ++counter + "</td>");
                    // row.append("<td>" + name + "</td>");
                    // row.append("<td>" + data[i].email + "</td>");
                    // let actions = $("<td>");
                    // actions.append('<a href="' + "{{ route('user.showdetails', ':id') }}".replace(':id', client
                    //     .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');
                    // actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('user.delete', ':id') }}"
                    //     .replace(':id', client.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
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
</body>

</html>
