<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        @php
        $counter = 0;

    @endphp


    @foreach ($currentparty_user as $currentparty_user)

        <tr>
            <td>{{ ++$counter }}</td>
            <td> {{ $currentparty_user->name }}</td>
            {{-- <td>{{$currentparty_user->description}}</td> --}}
            <td>{{ $currentparty_user->category->name }}</td>
        </tr>
        @endforeach
    </table>
    <div class="pagination">
            <ul class="pagination justify-content-center">
                @if ($users->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">&laquo;</a>
                    </li>
                @endif
                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
                @if ($users->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&raquo;</span>
                    </li>
                @endif
            </ul>
        </div>

        <!-- Pagination label -->
        <div class="pagination-label">
            Page {{ $users->currentPage() }} of {{ $users->lastPage() }}
        </div>

</body>
</html>
