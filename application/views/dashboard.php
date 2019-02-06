<div class="main-content">
<div class="container-fluid">
<div class="panel panel-headline">
		<div class="panel-heading">
<h3><i class="fa fa-book"></i> E-SHOP </h3>
<p class="panel-subtitle">Selamat Datang <?=$this->session->userdata('nama_user')?></p>
		
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">

				<a href="<?=base_url('index.php/Kategori')?>" style="color: black">
					<div class="metric">
						<span class="icon"><i class="fa fa-dashboard"></i></span>
						<p>
							<!-- <span class="number"><?= $kategori ?></span> -->
							<span class="title">Kategori barang</span>
						</p>
					</div>

					</a>
				</div>
				<div class="col-md-3">
				<a href="<?=base_url('index.php/Barang')?>" style="color: black">
					<div class="metric">
						<span class="icon"><i class="fa fa-book"></i></span>
						<p>
							<!-- <span class="number"><?= $barang ?></span> -->
							<span class="title">Barang yang tersedia</span>
						</p>
					</div>

					</a>
					</div>
					<div class="col-md-3">
				<a href="<?=base_url('index.php/Histori')?>" style="color: black">
					<div class="metric">
						<span class="icon"><i class="fa fa-shopping-cart"></i></span>
						<p>
							<!-- <span class="number"><?= $transaksi ?></span> -->
							<span class="title">Transaksi di Perpustakaan</span>
						</p>
					</div>
					</a>
				</div>
				</div>
			</div>
		</div>

	<div class="boss" style="width">
</div>
</div>
</div>
</div>	
</div>				