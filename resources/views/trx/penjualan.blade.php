

@extends('layout.app')
@section('content')

<div class="card">
    <h5 class="card-header">Data LOAN</h5>
    <div class="table-responsive text-nowrap">
        <div class="mx-5 divider text-end">

          @if (Auth::user()->id_level == 2)
          <a href="{{ route('showTrx') }}" class="btn btn-primary">Create</a>
          @endif
          </div>

          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Masukan data diri anda!</h5>
                <small class="text-muted float-end">Default label</small>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Transaction</th>
                        <th>Nama User</th>
                        <th>Tgl Transaksi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->kode_transaksi }}</td>
                        <td>{{ $data->usertrxname->nama_lengkap }}</td>
                        <td>{{ $data->tanggal_transaksi }}</td>
                        <td>
                            <div class="col-lg-4 col-md-6">
                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter{{ $data->id }}">
                                        Detail
                                    </button>
                                    <div class="modal fade" id="modalCenter{{ $data->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalCenterTitle">Detail Loans</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>No Transaction: {{ $data->kode_transaksi }}</h5>
                                                    <dl class="row mt-2">
                                                        <dt class="col-sm-3">Member</dt>
                                                        <dd class="col-sm-9">: {{ $data->usertrxname->nama_lengkap }}</dd>
                                                        @foreach ($data->dls as $detail)
                                                            <dt class="col-sm-3">Nama Barang</dt>
                                                            <dd class="col-sm-9">: {{ $detail->barang->nama_barang }}</dd>
                                                            <dt class="col-sm-3">Qty</dt>
                                                            <dd class="col-sm-9">: {{ $detail->qty }}</dd>
                                                            <dt class="col-sm-3">Harga</dt>
                                                            <dd class="col-sm-9">: {{ $detail->harga }}</dd>
                                                            <dt class="col-sm-3">Jumlah</dt>
                                                            <dd class="col-sm-9">: {{ $detail->jumlah }}</dd>
                                                        @endforeach
                                                        <dt class="col-sm-3">Nominal Bayar</dt>
                                                        <dd class="col-sm-9">: {{ $data->dls->sum('nominal_bayar') }}</dd>
                                                        <dt class="col-sm-3">Total Harga</dt>
                                                        <dd class="col-sm-9">: {{ $data->dls->sum('total_harga') }}</dd>
                                                        <dt class="col-sm-3">Kembalian</dt>
                                                        <dd class="col-sm-9">: {{ $data->dls->sum('kembalian') }}</dd>

                                                    </dl>
                                                    </dl>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <h6 class="card-footer mt-4">Made by Bintang Ramdhan for UJK Web Programming PPKD Jakarta Pusat 2024</h6>
</div>



@endsection


