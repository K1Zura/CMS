<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>K1Zura | Delete</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
    <div class="mt-5 container">
        <form style="display: inline" action="/product-destroy/{{$product->id}}" method="post">
            @method('DELETE')
            @csrf
            <h2>Are you sure to delete this Data : {{$product->name}} ({{$product->id}})?</h2>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            <a href="/product" class="btn btn-primary">Cancel</a>
    </div>
<!-- JS only -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
	crossorigin="anonymous"></script>
</body>
</html>