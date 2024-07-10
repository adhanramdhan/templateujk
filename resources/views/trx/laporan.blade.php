@include('layout.inc.css')
@include('layout.inc.js')

<form method="get" action="{{ route('laporan.index') }}" class="mb-4">
    <div class="row">
        <div class="col-md-4">
            <input type="date" name="date" class="form-control" placeholder="Cari berdasarkan nama" value="{{ request('tanggal') }}">
        </div>
        <div class="col-md-4">
            <select name="jurusan" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($cat as $jurusan)
                    <option value="{{ $jurusan->id }}" {{ request('kategori') == $jurusan->id ? 'selected' : '' }}>
                        {{ $jurusan->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </div>
</form>


    


<div class="card">
    <div class="card-header">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Barang terjual</th>
               
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($datas as $data)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>{{ $data->kategori->nama_kategori }}</td> 
                    <td>{{ $data->$tahun }}</td> 
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
