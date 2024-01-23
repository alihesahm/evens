@extends('layout.navrightbar')
{{-- @section('nav')
                @parent


            @endsection

            @section('content')

            @endsection --}}
<!--Start Mobile Navigation-->

<!--End Mobile Navigation-->
<!--Start Wrapper-->

{{-- @extends('layout.topbar'); --}}


<!--End Top Bar-->
<!--Start Page Content-->
@section('content')
    <div class="container-fluid">
        <!--Start Main Dashboard-->
        <div class="main-dashboard">
            <!--Start Statistics-->
            {{-- <div class="statistics-date shadow" onclick="displayStatistics()">
                        <h3>الشهر الحالي</h3>
                        <i class="fa fa-angle-down"></i>
                    </div> --}}
            {{-- <div class="statistics-option shadow" id="st-option">
                        <ul>
                            <a ><li>الشهر الحالي</li></a>
                            <a ><li>الشهر الماضي</li></a>
                            <a ><li>اليوم</li></a>
                        </ul>
                    </div> --}}
            <!--End Statistics-->
            <!--Start Enterprise info-->
            <div class="enterprise-info">
                <div class="row justify-content-between text-center">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <h5>عدد الفعاليات</h5>
                            @if (auth()->user()->role->name == "Admin")
                                <h3>{{ $party }}</h3>
                            @else
                                <h5>{{ $counter_currentpartyuser ?? 0 }}</h5><!--Put the server variable Here-->
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <h5>عدد المدعووين</h5>
                            @php
                                $sum = 0;
                            @endphp
                            @if (auth()->user()->role->name == "Manager")
                                @foreach ($invitationCounts as $partyId => $inviteCount)
                                    @php
                                        $sum += $inviteCount;
                                    @endphp
                                    {{-- <p>{{$sum+=$inviteCount}}</p> --}}
                                @endforeach

                                <h5>{{ $sum }}</h5>
                            @elseif (auth()->user()->role->name == "Admin")
                                <h3>{{ $invite }}</h3>
                            @else
                                <h5>1</h5>
                            @endif

                            <!--Put the server variable Here-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <h5>عدد الأمن</h5>
                            @if (auth()->user()->role->name == "Admin")
                                <h5>{{ $secuirity }}</h5>
                            @else
                                <h5>{{ $counter_secuirity_current_user ?? 1 }}</h5><!--Put the server variable Here-->
                            @endif
                        </div>
                    </div>
                @if (auth()->user()->role->name == "Admin")

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                                <h5>العملاء</h5>
                                <h5>{{$user}}</h5>
                        </div>
                    </div>
            @endif

                </div>
            </div>
            <!--End Enterprise info-->
            <!--Start New Order-->
            @if (auth()->user()->role->name == "Manager")

            @endif
            <div class="row">
                <div class="col-12">
                    <div class="new-order shadow">
                        <i class="fa fa-cart-plus icon"></i>
                        <h4> احصائيات</h4>
                        <div class="order-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>اسم الفعاليه</td>
                                        <td>عدد المدعووين</td>
                                        <td>عدد الحضور</td>
                                        <td>عدد غير الحاضرين</td>
                                        {{-- <td>عمليات</td> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (auth()->user()->role->name == "Manager")
                                        @foreach ($invitationCounts as $partyId => $inviteCount)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                {{-- <td>{{ $partyId }}</td> --}}
                                                <td>{{ $partyNames[$partyId] }}</td>

                                                <td>{{ $inviteCount }}</td>
                                                <td>{{ $partyAttendeesCount[$partyId] !== 0 ? $partyAttendeesCount[$partyId] : 'لا يوجد حضور' }}
                                                </td>

                                                <td>{{ $partyabsentCount[$partyId] !== 0 ? $partyabsentCount[$partyId] : 'لا يوجد غياب' }}
                                                </td>
                                                {{-- <td>مكتمل</td> --}}
                                                {{-- <td>
                                            <a><i class="fa fa-eye fa-fw op"></i></a>
                                            <a><i class="fa fa-edit fa-fw op"></i></a>
                                        </td> --}}
                                            </tr>
                                        @endforeach
                                    @endif




                                    {{-- <tr>
                                        <td>1</td>
                                        <td>عبدالرحمن باجعمان</td>
                                        <td>2020/1/1</td>
                                        <td>1550 SR</td>
                                        <td>مكتمل</td>
                                        <td>
                                            <a><i class="fa fa-eye fa-fw op"></i></a>
                                            <a><i class="fa fa-edit fa-fw op"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>عبدالرحمن باجعمان</td>
                                        <td>2020/1/1</td>
                                        <td>1550 SR</td>
                                        <td>مكتمل</td>
                                        <td>
                                            <a><i class="fa fa-eye fa-fw op"></i></a>
                                            <a><i class="fa fa-edit fa-fw op"></i></a>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End Main Dashboard-->
    </div>
@endsection

<!--End Page Content-->
</div>
<!--End Content Wrapper-->
</div>
<!--End Wrapper-->
