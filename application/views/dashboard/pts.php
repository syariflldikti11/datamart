<div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
     <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">
                  Pilih Wilayah
                  </h4>
                  <?php  
             echo validation_errors();                       
    echo form_open('dashboard/pts'); ?>
                    
                      <div class="mb-3">
                        
                         <select name="provinsi" 
                    class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"
                  >
                   <option value="">Semua Wilayah</option>
                  <?php foreach ($dt_provinsi as $d):?>
                 
                 <option value="<?= $d->provinsi; ?>" <?php if($d->provinsi == $provinsi) { echo 'selected'; } ?>><?= $d->provinsi; ?></option>
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
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                 
                 
                <div id="container"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                   <div id="akred_pt"></div>
                 
                
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
                          <th>Bentuk</th>
                           <th>Email</th>
                           <th>Website</th>
                          <th>Alamat</th>
                           <th>Provinsi</th>
                          <th>Kab/Kota</th>
                          <th>Kecamatan</th>
                         
                        
                          <th>Akreditasi</th>
                          <th>Tanggal Berlaku</th>
                          <th>Tanggal Berakhir</th>
                          <th>Last Update</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_pt as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->nm_bp; ?></td>
                          <td><?= $d->email; ?></td>
                            <td><?= $d->website_pt; ?></td>
                              <td><?= $d->jln; ?></td>
                           <td><?= $d->provinsi; ?></td>
                          <td><?= $d->kab_kota_pt; ?></td>
                         
 <td><?= $d->kecamatan_pt; ?></td>
                          <td><?= $d->nm_akred; ?></td>
                          <td><?= $d->tgl_sk_akred_sp; ?></td>
                          <td><?= $d->tst_sk_akred_sp; ?></td>
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

