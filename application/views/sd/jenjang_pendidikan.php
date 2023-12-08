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
                      id="file_export"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                           <th>Kode PT</th>
                          <th>Nama PT</th>
                          <th>Provinsi</th>
                          <th>D3</th>
                          <th>D4</th>
                          <th>S1</th>
                          <th>S2</th>
                          <th>S2 Terapan</th>
                          <th>S3</th>
                          <th>S3 Terapan</th>
                          <th>Profesi</th>
                          <th>Sp-1</th>
                          <th>Sp-2</th>
                          <th>Tanpa Jenjang</th>
                          <th>Jumlah Dosen</th>
                          
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_ds as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->provinsi_pt; ?></td>
                          <td><?= $d->D3; ?></td>
                           <td><?= $d->D4; ?></td>
                          <td><?= $d->S1; ?></td>
                          <td><?= $d->S2; ?></td>
                          <td><?= $d->S2_Terapan; ?></td>
                          <td><?= $d->S3; ?></td>
                          <td><?= $d->S3_Terapan; ?></td>
                          <td><?= $d->Profesi; ?></td>
                          <td><?= $d->Sp1; ?></td>
                          <td><?= $d->Sp2; ?></td>
                          <td><?= $d->Tanpa_Jenjang; ?></td>
                          <td><?= $d->Jumlah; ?></td>

                         
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>