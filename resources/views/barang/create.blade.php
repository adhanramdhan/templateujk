@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Add User</h5>
        <small class="text-muted float-end">User menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Select level</label>
              <br>
              <select name="id_kategori" id="" class="form-control">
                <option value="" disabled>pilih kategori</option>
                @foreach ($cc as $kt)
                <option value="{{ $kt->id }}">{{ $kt->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama Barang</label>
            <input name="nama_barang" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan nama lengkap anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Satuan</label>
            <input name="satuan" type="text" class="form-control" id="basic-default-fullname" placeholder="Masukan email anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">qty</label>
            <input name="qty" type="number" class="form-control" id="basic-default-fullname" placeholder="Masukan password anda"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">harga</label>
            <input name="harga" type="number" class="form-control" id="basic-default-fullname" placeholder="Masukan password anda"/>
          </div>
  

          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{url()->previous() }}" class="btn btn-primary">Back</a>
        </form>


      </div>
    </div>

</div>

@endsection
