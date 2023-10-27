@extends('layout.template')

@Section('content')
@section('title', 'Product')
@section('awal', 'Product')
<br>
<div class="">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Barang
  </button>
  
  <!-- Modal -->
  <form action="product" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input name="name" id="name" type="text" class="form-control form-control-round" placeholder="Nama Barang">
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Deskripsi</label>
              <input class="form-control" type="text" name="deskripsi" id="deskripsi">
          </div>
          <div class="mb-3">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
              <option value="">....</option>
              <option value="Sablon">Sablon</option>
              <option value="Konveksi">Konveksi</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
<form action="" method="get">
<div class="bd-example">
  <div class="table-hover">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Foto</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barang as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>
              @if($item->image != '')
                <img src="{{asset('storage/photo/'.$item->image)}}" alt="" width="100px">
              @else
                <img src="{{asset('/image/icon.jpg/')}}" alt="" width="100px">
              @endif
            </td>
            <td>{{$item->deskripsi}}</td>
            <td>{{$item->kategori}}</td>
            <td>
              <a class="btn btn-primary" href="product-detail/{{$item->id}}">
                <i class="fa fa-info" aria-hidden="true"><br>Detail</i>
              </a>
              <a class="btn btn-warning" href="{{url('/product-update/'.$item->id)}}">
                <i class="fa fa-wrench" aria-hidden="true"><br>Update</i>
              </a>
              <a  class="btn btn-danger" href="product-delete/{{$item->id}}">
                <i class="fa fa-trash-o" aria-hidden="true"><br>Hapus</i>
              </a>
            </td>
          </tr>    
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</form>
@endsection