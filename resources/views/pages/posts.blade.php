@include('layouts.header')
@section('title')
<title>posts</title>
@endsection

<form method="post" action="/insertpage">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter title "  pattern="" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">text area</label>
    <textarea name=" publish" class="form-control" pattern="" required> </textarea> 
  </div>
  <button type="submit" class="">Submit</button>
</form>
@include('layouts.footer')