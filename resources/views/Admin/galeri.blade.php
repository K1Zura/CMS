@extends('layout.template')

@section('content')
@section('title', 'Galeri')
@section('awal', 'Galeri')
    
<form action="" method="get">
    <div class="bd-example">
        <div class="table-hover">
            <table class="table">
                <thead>
                    <tr>
                        <th>Konveksi</th>
                        <th>Sablon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($benda as $item)
                        <tr>
                            <td>
                                @if ($item->kategori == "Konveksi")
                                    <img src="{{ $item->image != '' ? asset('storage/photo/'.$item->image) : asset('/image/icon.jpg') }}" alt="" width="100px">
                                    <br>
                                    <hr>
                                    {{ $item->kategori }}
                                @endif
                            </td>
                            <td>
                                @if ($item->kategori == "Sablon")
                                    <img src="{{ $item->image != '' ? asset('storage/photo/'.$item->image) : asset('/image/icon.jpg') }}" alt="" width="100px">
                                    <br>
                                    <hr>
                                    {{ $item->kategori }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</form>

@endsection