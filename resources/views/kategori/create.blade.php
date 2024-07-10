@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah ketegori</h5>
        <small class="text-muted float-end">kategori menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('KategoriBarang.store') }}" method="POST">
            @csrf

          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">kategori Name</label>
            <input name="nama_kategori" type="text" class="form-control" id="basic-default-fullname" placeholder="Input your kategori name"/>
          </div>
          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Back</a>
        </form>


      </div>
    </div>

</div>

@endsection
