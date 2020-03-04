<div class="container-fluid">
	<h4>Detail pesanan <div class="btn btn-sm btn-success">no invoice <?= $invoice->id ?> </div> </h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>id barabg</th>
			<th>nama produk</th>
			<th>jumlah pesanan</th>
			<th>harga satuan</th>
			<th>subtotal</th>
		</tr>

		<tr>
			<?php 
			$total = 0;
			foreach ($pesanan as $psn) :
				$subtotal = $psn->jumlah * $psn->harga;
				$total += $subtotal;

			 ?>
			 <tr>
			 	<td><?= $psn->id_brg ?></td>
			 		<td><?= $psn->nama_brg ?></td>
			 			<td><?= $psn->jumlah?></td>
			 				<td><?= number_format($psn->harga, 0,',','.') ?></td>
			 					<td><?= number_format($subtotal, 0,',','.') ?></td>
			 </tr>
			<?php endforeach; ?>

			<tr>
				<td colspan="4" align="right">Grand total</td>
				<td align="right">Rp. <?= number_format($total, 0,',','.') ?></td>
			</tr>
		</tr>
	</table>

	<a href="<?= base_url('admin/invoice/index') ?>"><div class="btn btn-primary">kembali </div></a>
</div>