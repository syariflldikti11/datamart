    <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
              <div class="card">
                <div class="card-body">
                  <center class="mt-4">
                    <?php $nama_logo = trim($get_detail_pt->kode_pt) ?>
                    <img
                      src="<?= site_url('assets/images/logo_pt/') . $nama_logo . '.png' ?>"
                      width="150"
                    />
                    <h4 class="card-title mt-2"><?= $get_detail_pt->nama_pt ?></h4>
                    <h6 class="card-subtitle"><?= $get_detail_pt->jln ?> <?= $get_detail_pt->kab_kota_pt ?>, <?= $get_detail_pt->provinsi ?></h6>
                 
                  </center>
                </div>
                <div>
                  <hr />
                </div>
                <div class="card-body">
                  <small class="text-muted">Kode PT</small>
                  <h6><?= $get_detail_pt->kode_pt ?></h6>
                  <small class="text-muted">Tanggal Berdiri</small>
                  <h6><?= date('d-m-Y', strtotime($get_detail_pt->tgl_berdiri)); ?></h6>
                  <small class="text-muted pt-4 db">Akred</small>
                  <h6><?= $get_detail_pt->nm_akred ?></h6>
                  <small class="text-muted pt-4 db">SK Akred</small>
                  <h6><?= $get_detail_pt->sk_akred ?></h6>
                   <small class="text-muted pt-4 db">Email</small>
                  <h6><?= $get_detail_pt->email ?></h6> 
                    <small class="text-muted pt-4 db">Website</small>
                  <h6><?= $get_detail_pt->website_pt ?></h6> <br />
                  <div class="map-box">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                      width="100%"
                      height="150"
                      frameborder="0"
                      style="border: 0"
                      allowfullscreen
                    ></iframe>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
              <div class="card">
                <!-- Tabs -->
                <ul
                  class="nav nav-pills custom-pills"
                  id="pills-tab"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="pills-timeline-tab"
                      data-bs-toggle="pill"
                      href="#current-month"
                      role="tab"
                      aria-controls="pills-timeline"
                      aria-selected="true"
                      >Program Studi</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-profile-tab"
                      data-bs-toggle="pill"
                      href="#last-month"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                      >Dosen</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-setting-tab"
                      data-bs-toggle="pill"
                      href="#previous-month"
                      role="tab"
                      aria-controls="pills-setting"
                      aria-selected="false"
                      >Mahasiswa</a
                    >
                  </li>
                    <li class="nav-item">
                    <a
                      class="nav-link"
                      id="pills-pelaporan-tab"
                      data-bs-toggle="pill"
                      href="#pelaporan-month"
                      role="tab"
                      aria-controls="pills-pelaporan"
                      aria-selected="false"
                      >Pelaporan PT</a
                    >
                  </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="current-month"
                    role="tabpanel"
                    aria-labelledby="pills-timeline-tab"
                  >
                    <div class="card-body">
                       <div class="row">
                       <div class="col-md-4 col-xs-6 b-r">
                         <div id="bidang_prodi"></div>
                        </div>
                        <div class="col-md-4 col-xs-6 b-r">
                         <div id="akred_prodi"></div>
                        </div>
                         <div class="col-md-4 col-xs-6 b-r">
                         <div id="jenjang_prodi"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="table-responsive">
                      
                      <hr />
                       <h4 class="font-weight-medium mt-4">Data Prodi</h4>
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
                          <th>Kode Prodi</th>
                          <th>Nama prodi</th>
                          <th>Jenjang</th>
                          <th>Bidang</th>
                          
                          <th>Tanggal Berdiri</th>
                          <th>SK Akred</th>
                        
                          <th>Akreditasi</th>
                         
                         <th>Tgl SK Akred</th>
                            <th>Last Update</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_prodi as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                           <td><?= $d->provinsi; ?></td>
                          <td><?= $d->kab_kota_pt; ?></td>
                          <td><?= $d->kode_prodi; ?></td>
                          <td><?= $d->nm_prodi; ?></td>
                          <td><?= $d->nm_jenj_didik; ?></td>
                          <td><?= $d->nm_kel_bidang; ?></td>
                          <td><?= $d->tgl_berdiri; ?></td>
                          <td><?= $d->sk_akred_prodi; ?></td>

                          <td><?= $d->nm_akred; ?></td>
                         
                          <td><?= $d->tgl_sk_akred_prodi; ?></td>
                            <td><?= $d->last_sync; ?></td>
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                     
                    </table>
                  </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="last-month"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                  >
                    <div class="card-body">
                       <div class="row">
                       <div class="col-md-4 col-xs-6 b-r">
                          <div id="dosen_ikatan_kerja"></div>
                        </div>
                        <div class="col-md-4 col-xs-6 b-r">
                         <div id="dosen_stat_pegawai"></div>
                        </div>
                         <div class="col-md-4 col-xs-6 b-r">
                        <div id="dosen_stat_aktif"></div>
                        </div>
                         <div class="col-md-4 col-xs-6 b-r">
                        <div id="dosen_jenjang_tertinggi"></div>
                        </div>
                         <div class="col-md-4 col-xs-6 b-r">
                        <div id="dosen_jabfung"></div>
                        </div>
                         <div class="col-md-4 col-xs-6 b-r">
                         <div id="dosen_kelompok"></div>
                        </div>
                        <div class="col-md-4 col-xs-6 b-r">
                         <div id="dosen_jk"></div>
                        </div>
                        <div class="col-md-4 col-xs-6 b-r">
                         <div id="dosen_sertifikasi"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="table-responsive">
                      
                      <hr />
                       <h4 class="font-weight-medium mt-4">Data Dosen</h4>
                     

                      <table
                      id="dosenn"
                      class="table table-striped table-bordered"
                    >
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
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_dosen as $gt): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                    <td><?= $gt->kode_pt; ?> </td> 
         
          <td><?= $gt->nama_pt; ?> </td> 
          <td><?= $gt->provinsi_pt; ?> </td> 
          <td><?= $gt->kode_prodi; ?> </td> 
          <td><?= $gt->nm_prodi; ?> </td> 
          <td><?= $gt->jenjang_prodi; ?> </td> 
          <td><?= $gt->Kelompok_No_Reg; ?> </td> 
           <td><?= $gt->nuptk; ?> </td>  
          <td><?= $gt->nidn; ?> </td>  
          <td><?= $gt->nama_dosen; ?> </td> 
          <td><?= $gt->jk; ?> </td> 
          <td><?= $gt->jenjang_tertinggi; ?> </td> 
          <td><?= $gt->jabatan_akademik; ?> </td> 
                  <td><?= $gt->tmt_sk_jabfung; ?> </td> 
          <td><?= $gt->nm_ikatan_kerja; ?> </td> 
          <td><?= $gt->nm_stat_aktif; ?> </td> 
          <td><?= $gt->nm_stat_pegawai; ?> </td> 
          <td><?= $gt->thn_sert; ?> </td> 
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                     
                    </table>
                  </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="previous-month"
                    role="tabpanel"
                    aria-labelledby="pills-setting-tab"
                  >
                          <div class="card-body">
                       <div class="row">
                       <div class="col-md-12 col-xs-6 b-r">
                         <div id="jumlah_mhs_smtt"></div>
                        </div>
                        <div class="col-md-6 col-xs-6 b-r">
                         <div id="mhs_masuk"></div>
                        </div>
                         <div class="col-md-6 col-xs-6 b-r">
                          <div id="mhs_keluar"></div>
                        </div>
                      </div>
                   
                    </div>
                  </div>
                   <div
                    class="tab-pane fade"
                    id="pelaporan-month"
                    role="tabpanel"
                    aria-labelledby="pills-pelaporan-tab"
                  >
                          <div class="card-body">
                       <div class="row">
                       <div class="col-md-12 col-xs-6 b-r">
                         <div id="jumlah_dosen_smt"></div>
                        </div>
                        <div class="col-md-12 col-xs-6 b-r">
                                 <div id="jumlah_dosen_ajar_smt"></div>
                        </div>
                         <div class="col-md-12 col-xs-6 b-r">
                        <div id="jumlah_mhs_smt"></div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="table-responsive">
                      
                      <hr />
                       <h4 class="font-weight-medium mt-4">Data Pelaporan</h4>
                    <table
                      id="zero_configg"
                      class="table table-striped table-bordered"
                    >
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode PT</th>
                          <th>Nama PT</th>
                           <th>Provinsi</th>
                                                      <th>Kota/Kab</th>
                          <th>ID SMT</th>
                          <th>Jumlah Dosen</th>
                          <th>Jumlah Dosen Ajar</th>
                          <th>Jumlah MHS</th>
                          <th>Rasio</th>
                           <th>Last Update</th>
                       
                       
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_pelaporan_pt as $h): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $h->kode_pt; ?></td>
                          <td><?= $h->nama_pt; ?></td>
                           <td><?= $h->provinsi_pt; ?></td>
                              <td><?= $h->kab_kota_pt; ?></td>
                            <td><?= $h->id_smt; ?></td>
                          <td><?= $h->jumlah_dosen; ?></td>
                          <td><?= $h->jumlah_dosen_ajar; ?></td>
                          <td><?= $h->jumlah_mhs; ?></td>
                          <td><?= $h->rasio; ?></td>
                         
                           <td><?= $h->last_sync; ?></td>
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                     
                    </table>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>