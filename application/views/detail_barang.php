<div class="container-fluid">
	<div class="card">
	  <h5 class="card-header"> Detail produk</h5>
	  <div class="card-body">
	  	<?php foreach ($barang as $brg) :  ?>
		    <div class="row">
		    	<div class="col-md-4">
		    		<img src="<?= base_url() . '/uploads/'. $brg->gambar ?>" alt="" class="card-img-top">
		    	</div>
		    	<div class="col-md-8">
		    		<table class="table">
			    		<tr>
			    			<td>nama produk</td>
			    			<td><strong><?= $brg->nama_brg ?></strong></td>
			    		</tr>
			    		<tr>
			    			<td>keterangan</td>
			    			<td><strong><?= $brg->keterangan ?></strong></td>
			    		</tr>
			    		<tr>
			    			<td>kategori</td>
			    			<td><strong><?= $brg->kategori ?></strong></td>
			    		</tr>
			    		<tr>
			    			<td>stok</td>
			    			<td><strong><?= $brg->stok ?></strong></td>
			    		</tr>
			    		<tr>
			    			<td>harga </td>
			    			<td><strong><div class="btn btn-sm btn-success">Rp. <?= number_format($brg->harga, 0,',','.')  ?></div></strong></td>
			    		</tr>
	    			</table>
	    			<?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary mb-3">Tambah ke keranjang</div>') ?>

	    	 		<?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger mb-3"> Kembali</div>') ?>
		    	</div>
		    </div>
		  <?php endforeach; ?>
	  </div>
	</div>
</div>
