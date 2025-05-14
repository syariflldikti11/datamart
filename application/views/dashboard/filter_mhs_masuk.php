<div class="container-fluid">
<div class="row">
  <div class="col-lg-12">
     <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">
                   Pilih Perguruan Tinggi
                  </h4>
                   <?php  
             echo validation_errors();                       
    echo form_open('dashboard/filter_mhs_masuk'); ?>
                    
                     <div class="mb-3">
                        
                         <select required name="kode_pt"
                    class="select2 form-control custom-select"
                    style="width: 100%; height: 36px"
                  >
                   <option value="">Pilih</option>
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
                   <a  class="btn btn-dark rounded-pill px-4 mt-3" href="<?= base_url('dashboard/mhs_masuk'); ?>">Reset</a>
                    
                      </div>
                     
                      
                     
                  </form>
                </div>
              </div>
            </div>
</div>
<div class="row">
           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                   <div id="mhs_masuk"></div>
                 
                
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
                          <th>Tahun</th>

                        
                          <th>Jumlah</th>
                         
                       
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_mhs_masuk as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                           <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                           <td><?= $d->provinsi_pt; ?></td>
                          <td><?= $d->tahun; ?></td>
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


