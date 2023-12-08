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
                          <th>Asisten Ahli</th>
                          <th>Lektor</th>
                          <th>Lektor Kepala</th>
                          <th>Profesor</th>
                          <th>Tanpa Jabatan</th>
                          <th>Jumlah</th>
                          
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_ds as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->Asisten_Ahli; ?></td>
                           <td><?= $d->Lektor; ?></td>
                          <td><?= $d->Lektor_Kepala; ?></td>
                          <td><?= $d->Profesor; ?></td>
                          <td><?= $d->Tanpa_Jabatan; ?></td>
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