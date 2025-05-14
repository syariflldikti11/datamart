<div class="container-fluid">


<div class="row">

            <div class="col-12">
              
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judul; ?></h4>
                  <br />
              <button id="export-btnn" class="btn btn-primary">Export All Data</button>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                  
                  <table id="tb_dosen" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                            <!--<th>Opsi</th>-->
                          <th>Kode PT</th>
                          <th>Nama PT</th>
                          <th>Provinsi PT</th>
                          <th>Kode prodi</th>
                          <th>Nama Prodi</th>
                          <th>Jenjang</th>
                          <th>Registrasi</th>
                           <th>NUPTK</th>
                          <th>NIDN</th>
                          <th>Nama</th>
                          <th>JK</th>
                          <th>Pendidikan</th>
                          <th>Jabatan Akademik</th>
                              <th>TMT SK Jabfung</th>
                          <th>Ikatan Kerja</th>
                          <th>Status Aktif</th>
                          <th>Status Pegawai</th>
                          <th>Tahun Sertifikasi</th>
                         
                        
                        
                        </tr>
                      </thead>
                     
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judula; ?></h4>
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
                           <th>Jumlah</th>

                         
                       
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_jumlah_dosen as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                           <td><?= $d->jumlah; ?></td>
      
                         
                         
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Dosen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form fields to edit Dosen details, you can bind them dynamically -->
                <form id="editDosenForm">
                    <input type="hidden" id="dosenId">
                    <div class="mb-3">
                        <label for="namaDosen" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="namaDosen">
                    </div>
                    <!-- Add more form fields as needed -->
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


