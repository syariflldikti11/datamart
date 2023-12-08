<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judul; ?></h4>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table
                      id="file_export"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                           <th>Kode PT</th>
                          <th>Nama PT</th>
                          <th>Nama Prodi</th>
                          <th>Provinsi</th>
                          <th>Kab/Kota</th>
                          <th>Jenjang</th>
                          <th>Nomor SK</th>
                          <th>Akreditasi</th>
                          <th>Tanggal Berlaku</th>
                          <th>Tanggal Berakhir</th>
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_pr as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nm_lemb; ?></td>
                          <td><?= $d->nm_prodi; ?></td>
                           <td><?= $d->provinsi_pt; ?></td>
                          <td><?= $d->kab_kota_pt; ?></td>
                          <td><?= $d->jenjang_prodi; ?></td>
                          <td><?= $d->sk_akred_prodi; ?></td>
                          <td><?= $d->nm_akred; ?></td>
                          <td><?= $d->tgl_sk_akred_prodi; ?></td>
                          <td><?= $d->tst_sk_akred_prodi; ?></td>

                         
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>