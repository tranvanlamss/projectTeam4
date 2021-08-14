<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Permission</title>
	<!-- Latest compiled and minified CSS -->
</head>
<body>
	<div class="container">
		<center><h1>Edit User</h1></center>
		<div class="row">
			
			<div class="col-md-12">
				<form action="{{ route('users.update') }}" method="POST">
					@csrf
					<div class="form-group">
						<input type="hidden" name="id" value="{{ $users['id'] }}">
					</div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email:</label>
				    <input type="email" class="form-control" name="email" value="{{ $users['email'] }}" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleName">Tên Đăng Nhập:</label>
				    <input type="text" class="form-control" name="name" value="{{ $users['name'] }}" placeholder="Enter Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleRole">Quyền(Nhập 1: Admin; Nhập 2: Mod; Nhập 3: User):</label>
				    <input type="number" class="form-control" name="role_id" value="{{ $users['role_id'] }}" placeholder="Enter Role">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
</body>
</html>