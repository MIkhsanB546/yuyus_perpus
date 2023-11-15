<div class="card mt-5">
	<div class="card-header">
		Featured
	</div>
	<div class="card-body">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th scope="col">Judul</th>
					<th scope="col">Harga</th>
					<th scope="col">Stok</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<?php foreach ($pengadaan as $ms): ?>
				<tr>
					<td><?php echo $ms->nama_buku; ?></td>
					<td><?php echo $ms->harga; ?></td>
					<td><?php echo $ms->stok; ?></td>
				</tr>
				<?php endforeach; ?>
				</tr>
			</tbody>
		</table>

	</div>
</div>
