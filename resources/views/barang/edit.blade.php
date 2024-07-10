@extends('layout.app')
@section('content')

<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Level</h5>
        <small class="text-muted float-end">level menu</small>
      </div>
      <div class="card-body">

        <form action="{{ route('barang.update' , $edit->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if (Auth::user()->id_level == 1)
              
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama Barang</label>
            <input name="nama_barang" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->nama_barang}}"/>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">satuan</label>
            <input name="satuan" type="text" class="form-control" id="basic-default-fullname" value="{{ $edit->satuan }}"/>
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">harga</label>
            <input name="harga" type="number" class="form-control" id="basic-default-fullname" value="{{ $edit->harga }}"/>
          </div>
          
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Select level</label>
            <br>
            <select name="id_kategori" id="">
              <option value="" disabled>Choose level</option>
              @foreach ($cc as $level)
              <option value="{{ $level->id }}" {{ $level->id == $edit->id ? 'selected' : '' }} >{{ $level->nama_kategori }}</option>
              @endforeach
            </select>
          </div>

          @endif

          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">qty</label>
            <input name="qty" type="number" class="form-control" id="basic-default-fullname" value="{{ $edit->qty }}"/>
          </div>

          <button type="submit" value="Update" class="btn btn-primary">Send</button>
          <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        </form>

      </div>
    </div>

</div>
    

@endsection
