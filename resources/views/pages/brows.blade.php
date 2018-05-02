<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text">Upload</span>
		</div>
		<div class="custom-file">
			<form action="/brows" method="post" accept-charset="utf-8">
				<input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
				<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			</form>
		</div>
	</div>
	//////
	<h2>Custom components</h2>
	<p>Brand new components and templates to help folks quickly get started with Bootstrap and demonstrate best practices for adding onto the framework.</p>

	<div class="row">
		@for($i=0;$i<=10;$i++)
		<div class="col-sm-6 col-md-4 col-xl-3 mb-3">
			<a href="/docs/4.0/examples/album/">
				<img class="img-thumbnail mb-3" src="img/instagram_2.jpg" alt="Album screenshot" width="960" height="600">
				<h5 class="mb-1">Album</h5>
			</a>
			<p class="text-muted">Simple one-page template for photo galleries, portfolios, and more.</p>
		</div>
		@endfor
	</div>
</body>
</html>
