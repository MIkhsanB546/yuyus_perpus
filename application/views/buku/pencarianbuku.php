    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h1><a class="btn btn-secondary" href="<?php echo site_url('Welcome/buku')?>" ><--</a> Pencarian buku</h1>
        </div>
        <div class="container">
			<div class="wrapper mt-4">
				<form method="post" class="d-flex" action="<?php echo site_url('Welcome/pencarianbuku'); ?>">
                    <input type="text" for="search-btn" name="cari" placeholder="Judul Buku" class="form-control me-2">
                    <button class="btn btn-outline-primary" id="search-btn" type="submit">Search</button>
					
                </form>
                </form>
                <table class="table table-bordered table-hover mt-2">
                    <thead>
                        <tr>
                            <th>No. Buku</th>
                            <th>Nama Buku</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($GetDataCariBuku) && !empty($GetDataCariBuku)) {
                            foreach ($GetDataCariBuku as $buku) { ?>
                                <tr>
                                    <td><?php echo $buku->id_buku; ?></td>
                                    <td><?php echo $buku->nama_buku; ?></td>
                                    <td><?php echo $buku->stok; ?></td>
                                    <td><?php echo $buku->penerbit; ?></td>
                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="2">Tidak ada hasil pencarian.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

