<div class="container-fluid">
<div class="row">
  <div class="col-lg-6">
     <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">
                   Pilih Perguruan Tinggi
                  </h4>
                  <?php  
             echo validation_errors();                       
    echo form_open('dashboard/prodi'); ?>
                    
                      <div class="mb-3">
                        
                         <select  name="kode_pt" 
                    class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"
                  >
                   <option value="">Semua Perguruan Tinggi</option>
                  <?php foreach ($dt_pt as $d):?>
                 
                <option value="<?= $d->kode_pt; ?>" <?php if($d->kode_pt == $kode_pt) { echo 'selected'; } ?>><?= $d->nama_pt; ?></option>
                <?php endforeach; ?>
                </select>
                         <button
                        type="submit"
                        class="btn btn-info rounded-pill px-4 mt-3"
                      >
                        Submit
                      </button>
                    
                      </div>
                     
                      
                     
                  </form>
                </div>
              </div>
            </div>

  <div class="col-lg-6">
     <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">
                   Pilih Wilayah
                  </h4>
                  <?php  
             echo validation_errors();                       
    echo form_open('dashboard/prodi'); ?>
                    
                      <div class="mb-3">
                        
                            <select name="provinsi" 
                    class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"
                  >
                   <option value="">Semua Wilayah</option>
                  <?php foreach ($dt_provinsi as $a):?>
                 
                 <option value="<?= $a->provinsi; ?>" <?php if($a->provinsi == $provinsi) { echo 'selected'; } ?>><?= $a->provinsi; ?></option>
                <?php endforeach; ?>
                </select>
                         <button
                        type="submit"
                        class="btn btn-info rounded-pill px-4 mt-3"
                      >
                        Submit
                      </button>
                    
                      </div>
                     
                      
                     
                  </form>
                </div>
              </div>
            </div>
</div>
<div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                 
                 
                <div id="bidang_prodi"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                   <div id="akred_prodi"></div>
                 
                
                </div>
              </div>
            </div>
             <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                   <div id="jenjang_prodi"></div>
                 
                
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                   <div id="nama_prodi"></div>
                 
                
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
          </div>

