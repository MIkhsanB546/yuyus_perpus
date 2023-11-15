<div class="card">
  <div class="card-header">
		<h3>Data buku</h3>
    
  </div>
  <div class="card-body">
		<div class="d-flex justify-content-between">

			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
				Tambah Data
			</button>
			<!-- <a href="<?php echo site_url('Welcome/pencarianbuku')?>" class="btn btn-outline-primary">Search 🔎</a> -->
			<form method="post" class="d-flex" action="<?php echo site_url('Welcome/buku'); ?>">
					<input type="text" for="search-btn" name="cari" placeholder="Judul Buku" class="form-control me-2">
					<button class="btn btn-outline-primary" id="search-btn" type="submit">Search</button>
			</form>
		</div>

    <!-- Modal tambah data -->
    <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Buku</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url('Welcome/inputbuku'); ?>" method="post">
              <div class="mb-3">
                <label for="nama_buku" class="form-label">Nama Buku</label>
                <input type="text" class="form-control" id="nama_buku" name="nama_buku">
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
              </div>
              <div class="mb-3">
                <label for="stok" class="form-label">stok</label>
                <input type="text" class="form-control" id="stok" name="stok">
              </div>
              <div class="mb-3">
                <label for="penerbit" class="form-label">penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

		

    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th scope="col">id_buku</th>
          <th scope="col">Nama buku</th>
          <th scope="col">kategori</th>
          <th scope="col">harga</th>
          <th scope="col">stok</th>
          <th scope="col">penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($GetDataCariBuku)) {

          foreach ($GetDataCariBuku as $Read) {
        ?>
            <tr>
              <th scope="row"><?php echo $Read->id_buku ?></th>
              <td><?php echo $Read->nama_buku ?></td>
              <td><?php echo $Read->kategori ?></td>
              <td><?php echo $Read->harga ?></td>
              <td><?php echo $Read->stok ?></td>
              <td><?php echo $Read->penerbit ?></td>
              <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editmodal" data-bs-whatever="@mdo">Edit</button>
                <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo site_url('Welcome/editbuku'); ?>" method="post">
                          <div class="mb-3">
                            <label for="id_buku" class="form-label">ID Buku</label>
                            <input type="text" class="form-control" id="id_buku" name="id_buku">
                          </div>
                          <div class="mb-3">
                            <label for="nama_buku" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama_buku" name="nama_buku">
                          </div>
                          <div class="mb-3">
                            <label for="kategori" class="form-label">kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori">
                          </div>
                          <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                          </div>
                          <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                          </div>
                          <div class="mb-3">
                            <label for="penerbit" class="form-label">penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- hapus button awal -->
                <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/deletebuku/' . $Read->id_buku); ?>" onclick="return confirm('are you sure?')">Delete</a>

              </td>
            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
