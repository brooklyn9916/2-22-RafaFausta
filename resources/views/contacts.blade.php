@extends ('layouts.main')

@section('container')
<h1 class="mb-3">Contact Us</h1>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingPassword" placeholder="Nama" name="nama">
    <label for="floatingPassword">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Comments</label>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Kirim</button>
</form>
@endsection