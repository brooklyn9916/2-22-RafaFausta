@extends ('layouts.main')

@section('container')
<h1 class="mb-3">Contact Us</h1>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingPassword" placeholder="Nama">
  <label for="floatingPassword">Nama</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>

<button type="button" class="btn btn-primary mb-3">Submit</button>

@endsection