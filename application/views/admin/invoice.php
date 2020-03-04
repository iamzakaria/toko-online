<!DOCTYPE html>
<html>
<head>
	<title>Membuat Jam Digital Dengan Javascript - www.malasngoding.com</title>
	<style>
		@font-face {
  font-family: Roboto;
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v16/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v16/2UX7WLTfW3W8TclTUvlFyQ.woff) format('woff'), url(https://fonts.gstatic.com/s/roboto/v16/QHD8zigcbDB8aPfIoaupKOvvDin1pK8aKteLpeZ5c0A.ttf) format('truetype')
}
@font-face {
  font-family: Roboto;
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2'), url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOD8E0i7KZn-EPnyo3HZu7kw.woff) format('woff'), url(https://fonts.gstatic.com/s/roboto/v16/d-6IYplOFocCacKzxwXSOCZ2oysoEQEeKwjgmXLRnTc.ttf) format('truetype')
}
.countdown {
  font-family: Roboto, sans-serif;
  font-size: 16px;
  font-weight: 400;
}
.countdown .countdown_text {
  display: block;
}
#time {
  font-family: Roboto, sans-serif;
  font-size: 40px;
  font-weight: 700;
  vertical-align: middle;
}
	</style>
</head>
<body>

<div class="container-fluid">
	<h4>Invoice pemesanan produk</h4>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Invoice</th>
			<th>Nama Pemesan</th>
			<th>Lamat pengiriman</th>
			<th>Tanggal Pemesanan</th>
			<th>batas pembayaran</th>
			<th>aksi</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
		<tr>
			<td><?= $inv->id ?></td>
			<td><?= $inv->nama ?></td>
			<td><?= $inv->alamat ?></td>
			<td><?= $inv->tgl_pesan ?></td>
			<td>
				<div class="countdown">
				  <!-- <span class="countdown_text">Registration closes in</span> -->
				  <span id="time"><?= $inv->batas_bayar ?></span>
				  <!-- <span>minutes!</span> -->
				</div>


			</td>
			<td>
				<?= anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">detail</div>') ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>



<script>
<![CDATA[
function startTimer(duration, display) {
  var timer = duration, hours, minutes, seconds;
  setInterval(function() {
    hours = parseInt(timer / 3600, 10);
    minutes = parseInt(timer % 3600 / 60, 10);
    seconds = parseInt(timer % 60, 10);

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = hours + ":" + minutes + ":" + seconds;

    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}

window.onload = function() {
  var fiveMinutes = 1440 * 60,
    display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};
]]>
</script>
</body>
</html>