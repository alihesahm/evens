@extends('layout.navrightbar')

@section('content')
<!--Start Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title">
                        <i class="fab fa-product-hunt"></i>
                        <h6>الفعاليات</h6>
                        <i class="fa fa-angle-left"></i>
                        <h6>قائمة الفعاليات</h6>
                    </div>
                    <div class="page-info shadow">
                        <div class="title">
                            <i class="fab fa-product-hunt"></i>
                            <h6>قائمة الفعاليات</h6>
                        </div>
                        @if (session('createdsyccess'))
                            <div id="createdsyccess" class="alert alert-success">
                                {{ session('createdsyccess') }}
                            </div>
                        @endif

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
                                    <a href="{{ route('concert.create') }}" class="btn">
                                        <i class="fa fa-plus"></i>
                                        انشاء فعاليه
                                    </a>
                                </div>
                                <div class="search-form">
                            <form method="GET" id="searchForm">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <select class="custom-select" name="search_option">
                                            <option value="name" selected hidden>بحث بحسب</option>
                                            <option value="name">اسم الفعاليه</option>
                                            <option value="location"> الموقع</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <div class="col-auto">
                                        <input type="text" class="form-control" name="search_value" id="searchValue"
                                            placeholder="البحث">
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
                                            <th>اسم الفعاليه</th>
                                            <th>الموقع </th>
                                            {{-- <th>المكان </th>
                                            <th>التاريخ</th> --}}
                                            <th>عمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @if (auth()->user()->role_id == 2)
                                        @php
                                        $counter = 0;

                                    @endphp


                                    @foreach ($currentparty_user as $currentparty_user)
                                        <tr>
                                            {{-- @php
                                            $counter++;
                                        @endphp --}}
                                            <td>{{ ++$counter }}</td>
                                            <td> {{ $currentparty_user->name }}</td>
                                            {{-- <td>{{$currentparty_user->description}}</td> --}}
                                            <td>{{ $currentparty_user->location }}</td>
                                            {{-- <td>{{$currentparty_user->startdate}}</td> --}}
                                            <td class="d-flex justify-content-center">

                                                <a title="عرض التفاصيل"
                                                    href="{{ route('concert.showdetails', $currentparty_user->id) }}"><i
                                                        class="fa fa-eye fa-fw op"></i></a>

                                                {{-- <form action="{{route('concert.edit')}}" method="post"> --}}
                                                <a title="تعديل "
                                                    href="{{ route('concert.edit', [$currentparty_user->id,$currentparty_user->secuirity_id ?? 0]) }}"><i
                                                        class="fa fa-edit fa-fw op"></i></a>
                                                {{-- </form> --}}
                                                <a href="#"
                                                    onclick="confirmDelete('{{ route('concert.delete', ['id' => $currentparty_user->id, 'ids' => $currentparty_user->secuirity_id]) }}');">
                                                    <i class="fa fa-trash fa-fw op"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    @else
                                    @foreach ($party as $party)
                                    <tr>
                                        {{-- @php
                                        $counter++;
                                    @endphp --}}
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{ $party->name }}</td>
                                        {{-- <td>{{$currentparty_user->description}}</td> --}}
                                        <td>{{ $party->location }}</td>
                                        {{-- <td>{{$currentparty_user->startdate}}</td> --}}
                                        <td class="d-flex justify-content-center">

                                            <a title="عرض التفاصيل"
                                                href="{{ route('concert.showdetails', $party->id) }}"><i
                                                    class="fa fa-eye fa-fw op"></i></a>

                                            {{-- <form action="{{route('concert.edit')}}" method="post"> --}}
                                            {{-- <a title="تعديل "
                                                href="{{ route('concert.edit', [$party->id,$party->secuirity_id ?? 0]) }}"><i
                                                    class="fa fa-edit fa-fw op"></i></a> --}}
                                            {{-- </form> --}}
                                            <a href="#"
                                                onclick="confirmDelete('{{ route('concert.delete', ['id' => $party->id, 'ids' => $party->secuirity_id]) }}');">
                                                <i class="fa fa-trash fa-fw op"></i>
                                            </a>

                                        </td>
                                    </tr>

                                    @endforeach
                                        @endif





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
        let originalData;





        $('#searchValue').on('input', function() {
            clearTimeout(searchTimer);

            let searchValue = $(this).val();

            // console.log('this is search value');

            // console.log(searchValue);
            if (searchValue == '') {
                // console.log('inside condition')
                searchValue = 'all';
            }

            if (searchValue) {
                
                    $.ajax({
                        dataType: 'json',
                        url: "/searchconcert",
                        type: "GET",
                        data: $('#searchForm').serialize(),
                        success: function(data) {
                            // console.log(data);
                            // console.log(data.message);

                            // console.log('found');

                            updateTableRows(data.message);
                        },
                        error: function(error) {
                            // console.log('not found');
                            console.log(error);
                        }
                    });
        
            } else {
                updateTableRows(originalData);
            }
        });
    });


    function updateTableRows(data) {
        let tbody = $("#tbody");
        tbody.empty();


        var counter = 0;


        data.forEach(function(party) {
            let row = $("<tr>");
            row.append("<td>" + ++counter + "</td>");
            row.append("<td>" + party.name + "</td>");
            row.append("<td>" + party.location + "</td>");
            let actions = $("<td>");

            actions.append('<a href="' + "{{ route('concert.showdetails', ':id') }}".replace(':id', party
                .id) + '"><i class="fa fa-eye fa-fw op"></i></a>');

            actions.append('<a href="' + "{{ route('concert.edit', ['id' => ':id', 'ids' => ':ids']) }}"
                .replace(':id', party.id)
                .replace(':ids', party.secuirity_id) + '"><i class="fa fa-edit fa-fw op"></i></a>');



            actions.append('<a href="#" onclick="confirmDelete(\'' + "{{ route('concert.delete', ':id') }}"
                .replace(':id', party.id) + '\');"><i class="fa fa-trash fa-fw op"></i></a>');
            row.append(actions);


            tbody.append(row);
        });

     

    }


</script>





