<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents() )
				{
					foreach ($keranjang as $items)
					 {
						$grand_total = $grand_total + $items['subtotal'];
					}

					echo "<h4>Total belanja anda: RP. ".number_format($grand_total, 0,',','.');
			
					?>
			</div><br><br>
		<h3>Input alamat pengiriman dan pembayaran</h3>
		<form action="<?= base_url() ?>dashboard/proses_pesanan" method="post">
			<div class="form-group">
				<label for="">Nama lengkap</label>
				<input type="text" name="nama" placeholder="nama lengkap anda" class="form-control">
			</div>
			<div class="form-group">
				<label for="">alamat lengkap</label>
				<input type="text" name="alamat" placeholder="alamat lengkap anda" class="form-control">
			</div>
			<div class="form-group">
				<label for="">NO Telp</label>
				<input type="text" name="no_telp" placeholder="no telp anda" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Jasa pengiriman</label>
				<select name="" id="" class="form-control">
					<option value="">JNE</option>
					<option value="">JNT</option>
					<option value="">POST INdeonesia</option>
					<option value="">tiki</option>
					<option value="">grab</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">pilih bank</label>
				<select name="" id="" class="form-control">
					<option value="">BCA - XXXXXXX</option>
					<option value="">BNI - XXXXXXX</option>
					<option value="">MANDIRI - XXXXXX</option>
				</select>
			</div>

			<button type="submit" name="" class="btn btn-sm btn-primary mb-3">pesan</button>
		</form>

		<?php
		}else{
			echo "<h4>keranjang belanja anda masih kosong";

		}
		 ?>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>