<div class="container-fluid">


<div class="row">

            <div class="col-12">
              
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judula; ?></h4>
                  <br />
            <button id="export-btn" class="btn btn-primary">Export All Data</button>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                  
                  <table id="tb_dosen" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
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
                          <th>Provinsi PT</th>
                           <th>Jumlah</th>

                         
                       
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_jumlah_dosen_serdos as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->provinsi_pt; ?></td>
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

