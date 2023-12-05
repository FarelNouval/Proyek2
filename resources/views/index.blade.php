@include('header')

<!-- Gambar -->
<div class="container-fluid" style="margin: 0;padding: 0;">
    <div class="image" style="margin-top: -21px">
        <img src="{{ asset('image/home/2.jpg') }}" style="width: 100%;  height: 650px;">
    </div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
    <h4 class="text-center" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #3b2c25; border-bottom: 2px solid #3b2c25;">Bakery Bread House, didirikan pada tahun 2022, menyediakan roti berkualitas tinggi dan produk kuliner lezat. Dengan keahlian tangan dan bahan baku terbaik, toko ini cepat dikenal di kalangan warga setempat dan wisatawan. Tetap berinovasi, Bakery Bread House menjadi destinasi kuliner favorit dengan layanan pesanan khusus dan kehadiran online.</h4>
    <h2 style="width: 100%; border-bottom: 4px solid #3b2c25; margin-top: 80px;"><b>Produk Kami</b></h2>
	
		<div class="row">
			@foreach($produk as $row)
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="image/produk/{{ $row->image }}" >
						<div class="caption">
							<h3>{{ $row->nama }}</h3>
							<h4>Rp.{{ number_format($row->harga) }}</h4>
							<div class="row">
								<div class="col-md-6">
									<a href="{{ route('produk.detail', ['produk' => $row->kode_produk]) }}" class="btn btn-warning btn-block">Detail</a>
								</div>
								@if(session('kd_cs'))
									<div class="col-md-6">
										<a href="{{ route('keranjang.tambah', ['produk' => $row->kode_produk, 'kd_cs' => session('kd_cs'), 'hal' => 1]) }}" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
									</div>
								@else
									<div class="col-md-6">
										<a href="{{ route('keranjang.index') }}" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	
	@include ('footer')   

