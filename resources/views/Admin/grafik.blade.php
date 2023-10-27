@extends('layout.template')

@Section('content')
@section('title', 'Grafik')
@section('awal', 'Grafik')
@section('js')
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
    
@endsection
<div class="p-6 m-20 bg-white rounded shadow card-body">
    {!! $chart->container() !!}
</div>


@endsection