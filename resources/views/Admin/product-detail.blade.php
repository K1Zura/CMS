<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>K1Zura | Detail</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-black bg-primary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">K1Zura</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
		data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
		aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    </div>
	  </div>
	</nav>
    <center>
    <h2>
        Detail Siswa: {{$product->name}}
    </h2>
    </center>
    <div class="mt-5">
        <a href="/product" class="btn btn-primary">Back</a>
    </div>

    <div class="my-3 d-flex justify-content-center">
        @if($product->image != '')
            <img src="{{asset('storage/photo/'.$product->image)}}" alt="" width="500px">
        @else
            <img src="{{asset('/image/icon.jpg/')}}" alt="" width="500px">
        @endif
    </div>

    <div class="mt-5 mb-5">
    <table class="table">
        <tr>
            <th>Product</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->deskripsi}}</td>
        </tr>
    </table>
    </div>

    <style>
        th{
            width: 25%;
        }
    </style>
<!-- JS only -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
	crossorigin="anonymous"></script>
</body>
</html>