@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


@if (session('success'))


    <div class="alert alert-success   alert-dismissible fade show" role="alert">
        <strong>Congratulation! </strong> {{session('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif


{{-- session error message --}}

@if (session('error'))


<div class="alert alert-danger   alert-dismissible fade show" role="alert">
<strong>SORRY! </strong> {{session('error')}}.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

@endif