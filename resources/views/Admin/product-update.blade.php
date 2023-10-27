<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>K1Zura | Update</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-black bg-warning">
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
    <center><h1>Update Student</h1></center>
<div class="container"> 
    <div class="mt-5 col-5 m-auto">
        <br>
        <form action="/update/{{$product->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" required>
            </div>
            <div class="mb-3">
                <label for="nis">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$product->deskripsi}}" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
                <a href="/product" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- JS only -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
	crossorigin="anonymous"></script>
</body>
</html>