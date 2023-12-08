<div class="container-fluid">
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judul; ?></h4>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode PT</th>
                          <th>Nama PT</th>
                           <th>Provinsi</th>
                          <th>Kab/Kota</th>
                          <th>Detail</th>
                          
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_pt as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                           <td><?= $d->provinsi_pt; ?></td>
                          <td><?= $d->kab_kota_pt; ?></td>
                         
<td>
                                                        <a href="<?= site_url('kl/detail_pt/' . $d->kode_pt) ?>"><button class="btn btn-info btn-sm px-4 fs-4 font-weight-medium">
                                                                Lihat
                                                            </button></a>
                                                    </td>
                         
                         
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>