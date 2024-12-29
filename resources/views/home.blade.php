@extends('layouts.app')

@section('content')
    @include('default')
    {{-- <div class="container mt-4">
        <h4 style="font-weight: bolder">{{ $pageTitle = 'Home' }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is {{ $pageTitle }}.</h4>
        </div>
    </div> --}}
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
