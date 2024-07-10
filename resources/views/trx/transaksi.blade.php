<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('/assets/')}}"
  data-template="vertical-menu-template-free"
>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Dashboard - PPKD JP</title>
  <meta name="description" content="" />
  @include('layout.inc.css')
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{asset('assets/admin/assets/img/helocat.gif')}}" alt="" width="50" height="50">
                </span>
                <span class="app-brand-text demo text-body fw-bolder">Toko Adhan Makmur Sejahtera</span>
              </a>
            </div>
            <h4 class="fw-bold py-3 mb-1 mx-4">Data Loan
              <h6 class="text-muted fw-light mx-4">Senyum. Sapa, Salam</h6>
            </h4>
            <div class="nav-item d-flex align-items-center mx-4">
              <a href="{{ route('trx.penjualan') }}" class="btn btn-primary">Back to History Trx</a>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <form action="{{ route('penjualanstore') }}" method="post" class="card-body row g-3">
                  @csrf
                  <div class="col-xl-12">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Loan Transaction</h5>
                        <small class="text-muted float-end">Loan transaction for member</small>
                      </div>
                      <div class="col-md-6">
                        <label for="" class="mx-4">Nama Pengguna</label>
                        <div class="input-group mx-4 mb-3">
                          <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" />
                          <input disabled type="text" class="form-control" value="{{ Auth::user()->nama_lengkap }}" />
                        </div>
                        <label for="" class="mx-4">Tanggal Transaksi</label>
                        <div class="input-group mx-4">
                          <input type="hidden" name="tanggal_transaksi" value="{{ $date }}" />
                          <input disabled type="text" class="form-control" value="{{ $date }}" />
                        </div>
                        <br>
                        <div class="mb-3 mx-4">
                          <label class="form-label" for="basic-default-company">No Transaction</label>
                          <input readonly name="kode_transaksi" type="text" class="form-control" id="basic-default-company" placeholder="" value="{{ $transactionCode }}" />
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary m-3 btn-add">Tambah
                        <i class='bx bx-plus-circle'></i>
                      </button>
                      <table class="table">
                        <div align="right" class="m-b"></div>
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0"></tbody>
                      </table>

                      <div class="m-4">
                        <div>
                          <h4>Total Harga: <span id="total-harga">0</span></h4>
                          <h4>Nominal Bayar:</h4>
                          <input type="number" name="nominal_bayar" id="nominal_bayar" class="form-control mb-3" placeholder="Masukkan nominal bayar">
                          <button type="button" id="hitung-kembalian" class="btn btn-primary">Hitung Kembalian</button>
                        </div>
                        <div class="mt-3">
                          <h5>Kembalian: <span id="kembalian">0</span></h5>
                          <input type="hidden" id="hidden_kembalian">
                          <input type="text" id="kembalian" name="kembalian" class="form-control mb-3" placeholder="masukan ulang kembalian"> 

                          <input type="number" name="jumlah" class="form-control mb-" placeholder="jumlah">
                        </div>
                        
                      </div>

                      <hr>
                      <div align="right" class="col-12">
                        <a href="{{ url()->previous() }}" class="btn btn-danger mb-4 mx-4">Back
                          <i class='bx bx-arrow-back'></i>
                        </a>
                        <button type="submit" class="btn btn-success mb-4 mx-4">Add
                          <i class='bx bxs-save'></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <p class="text-center">
              <span>Sudah meminjam?</span>
            
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
  @include('layout.inc.js')
  <script>
    const barangData = @json($barang);

    document.querySelector('.btn-add').addEventListener('click', function() {
      let tbody = document.querySelector('tbody');
      let newTr = document.createElement('tr');
      newTr.innerHTML = `
        <td>#</td>
        <td><button type='button' class='btn btn-danger remove-row'><i class='bx bx-trash me-1'></i>Delete</button></td>
        <td>
          <select name='id_barang[]' class='form-control select-barang'>
            <option value=''>Select books</option>
            @foreach ($barang as $item)
              <option value='{{ $item->id }}'>{{ $item->nama_barang }}</option>
            @endforeach
          </select>
        </td>
        <td><input type='number' name='qty[]' class='form-control qty-input' value="1" min="1"></td>
        <td><input type='number' name='harga[]' class='form-control harga-input' readonly></td>
        <td><input type='number' name='total_harga[]' class='form-control total-harga-input' readonly></td>
      `;
      tbody.appendChild(newTr);
    });

    document.querySelector('tbody').addEventListener('change', function(event) {
      if (event.target.classList.contains('select-barang')) {
        let selectedBarang = barangData.find(item => item.id == event.target.value);
        let tr = event.target.closest('tr');
        tr.querySelector('.harga-input').value = selectedBarang.harga;
        tr.querySelector('.qty-input').value = 1;
        tr.querySelector('.total-harga-input').value = selectedBarang.harga;
        calculateTotalHarga();
      } else if (event.target.classList.contains('qty-input')) {
        let tr = event.target.closest('tr');
        let harga = tr.querySelector('.harga-input').value;
        let qty = event.target.value;
        tr.querySelector('.total-harga-input').value = harga * qty;
        calculateTotalHarga();
      }
    });

    document.querySelector('tbody').addEventListener('click', function(event) {
      if (event.target.classList.contains('remove-row')) {
        event.target.closest('tr').remove();
        calculateTotalHarga();
      }
    });

    document.querySelector('#hitung-kembalian').addEventListener('click', function() {
      let totalHarga = parseInt(document.querySelector('#total-harga').innerText);
      let nominalBayar = parseInt(document.querySelector('#nominal_bayar').value);
      let kembalian = nominalBayar - totalHarga;
      document.querySelector('#kembalian').innerText = kembalian;
      document.querySelector('#hidden_kembalian').value = kembalian;

    });

    function calculateTotalHarga() {
      let totalHarga = 0;
      document.querySelectorAll('.total-harga-input').forEach(input => {
        totalHarga += parseInt(input.value);
      });
      document.querySelector('#total-harga').innerText = totalHarga;
      // document.querySelector('#total-harga').value = totalHarga;
    }
  </script>
</body>
</html>
