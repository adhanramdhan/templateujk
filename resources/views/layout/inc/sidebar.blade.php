          @php
          $Alluser = [1,2,3,4,5,6,7,8,9,10];
          $karyawan = [1,2,3];
          $Tamu = [4-10];
          @endphp



<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
       <img src="{{asset('assets/admin/assets/img/ppkd.jpg')}}" alt="" width="50" height="50">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Toko Adhan</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

 
        

      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{route('dashboard.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

     
      
      <!-- Layouts -->

      @if (Auth::user()->id_level == 1)
        
      {{-- data master  --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-book"></i>
          <div data-i18n="Layouts">Data Masters</div>
        </a>

        <ul class="menu-sub">
          
          {{-- @if (Auth::user()->id_level == 1) --}}
          <li class="menu-item">
            <a href="{{ route('user.index') }}" class="menu-link">
              <div data-i18n="Without menu">Users</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('level.index') }}" class="menu-link">
              <div data-i18n="Without navbar">Level</div>
            </a>
          </li>
          {{-- @endif --}}
          {{-- @if (in_array(Auth::user()->id_level , $karyawan)) --}}
        
          <li class="menu-item">
            <a href="{{ route('KategoriBarang.index') }}" class="menu-link">
              <div data-i18n="Container">ketegori produk</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="{{ route('barang.index') }}" class="menu-link">
              <div data-i18n="Container">barang</div>
            </a>
          </li>

        </ul>
      </li>
      @endif


      {{-- master produk --}}
      
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-box"></i>
          <div data-i18n="Layouts">Data Produk</div>
        </a>

        <ul class="menu-sub">
          
          


          @if (Auth::user()->id_level == 2 || Auth::user()->id_level == 3)
          <li class="menu-item">
            <a href="{{ route('barang.index') }}" class="menu-link">
              <div data-i18n="Container">barang</div>
            </a>
          </li>
          @endif

        </ul>
      </li>

      @if (Auth::user()->id_level == 2)
        
      {{-- transaksi --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-data"></i>
            <div data-i18n="Layouts">Data Transaction</div>
          </a>
          
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="{{ route('trx.penjualan') }}" class="menu-link">
                <div data-i18n="Without menu">Penjualan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('showTrx') }}" class="menu-link">
                <div data-i18n="Container">Transaksi</div>
              </a>
            </li>
          
          </ul>
      </li>
      @endif


        @if (Auth::user()->id_level == 3)
          
        <li class="menu-item">
          <a href="{{ route('trx.penjualan') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home"></i>
            <div data-i18n="Analytics">Laporan Penjualan</div>
          </a>
        </li>
        @endif
     

    </ul>
  </aside>
