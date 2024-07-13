<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
@vite('resources/css/app.css')
</head>
<body>

<div class="container mt-5">
<div class="row">
<div class="col-md-12">

@if ($errors->any())
<ul class="alert alert-warning">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

<div class="card">
<div class="card-header">
<h4>Create User
<a href="{{ url('users') }}" class="btn btn-danger float-end">Back</a>
</h4>
</div>
<div class="card-body">
<form action="{{ url('users') }}" method="POST">
@csrf

<div class="mb-3">
<label for="">Name</label>
<input type="text" name="name" class="form-control" />
</div>
<div class="mb-3">
<label for="">Email</label>
<input type="text" name="email" class="form-control" />
</div>
<div class="mb-3">
<label for="">Password</label>
<input type="text" name="password" class="form-control" />
</div>
<div class="mb-3">
<label for="">Roles</label>
<select name="roles[]" class="form-control" multiple>
<option value="">Select Role</option>
@foreach ($roles as $role)
<option value="{{ $role }}">{{ $role }}</option>
@endforeach
</select>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@vite('resources/js/app.js')

</body>
</html>