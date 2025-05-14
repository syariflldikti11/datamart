<div class="container-fluid">




<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0"> <?= $judul; ?> <a   data-bs-toggle="modal"
                        data-bs-target="#bs-example-modal-md" href="#" class="btn btn-info btn-sm"> Tambah</a></h4>
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
                          
                          <th>Nama PT</th>
                          <th>Nama Prodi</th>
                           <th>Jenjang</th>
                           <th>Nama Jenis Dokumen</th>
                            <th>Nomor SK</th>
                           <th>Tanggal SK</th>
                          <th><center>File</center></th>
                        
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_dokumen_prodi as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                        
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->nm_prodi; ?></td>
                          <td><?= $d->nm_jenj_didik; ?></td>
                          <td><?= $d->nama_jenis_dokumen; ?></td>
                           <td><?= $d->no_sk; ?></td>
                              <td><?= $d->tgl_sk; ?></td>
                           <td><center><a  target="_blank" href="<?= base_url();?>upload/<?= $d->file; ?>"><i class="fa fa-file"></i></a> <a  data-tooltip="tooltip"
                      data-bs-placement="top"
                      title="Delete" 
                  onclick="return confirm('anda yakin ingin menghapus data ini')"
                   href="<?php echo base_url('admin/delete_dokumen_prodi/'.$d->id_dokumen_prodi.'/'.$d->kode_pt.'/'.$d->kode_prodi);?>" 
                    ><i class="fa fa-trash"></i></a></center></td>
                 
                         
                        </tr>
                
                  
                            
                      <?php endforeach; ?>
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

<div
                        id="bs-example-modal-md"
                        class="modal fade"
                        tabindex="-1"
                        aria-labelledby="bs-example-modal-md"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myModalLabel">
                              Tambah Dokumen Prodi
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">

                         <?php  
             echo validation_errors();                       
    echo form_open_multipart('admin/simpan_dokumen_prodi'); ?>
                   
                   <div class="mb-3">
                        <label for="exampleInputEmail1">Jenis Dokumen</label>
                        <select class="form-select" name="id_jenis_dokumen">
                       
                          <?php foreach ($dt_jenis_dokumen as $g) :?>
                          <option value="<?= $g->id_jenis_dokumen; ?>"><?= $g->nama_jenis_dokumen; ?></option>
                          <?php endforeach;?>
                        </select>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1">Nomor SK</label>
                        <input type="text" class="form-control"  name="no_sk" required >
                        
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputEmail1">Tanggal SK</label>
                        <input type="date" class="form-control"  name="tgl_sk" required >
                        
                      </div>
                      
                       <div class="mb-3">
                        <label for="exampleInputEmail1">File</label>
                        <input type="file" class="form-control"  name="file" required >
                        
                      </div>
                      <input type="hidden" class="form-control"  name="kode_pt" value="<?= $kode_pt; ?>" required >
                       <input type="hidden" class="form-control"  name="kode_prodi" value="<?= $kode_prodi; ?>" required >
                            </div>
                            <div class="modal-footer">
                            <input type="submit" name="submit"  class="btn btn-info btn-pill" value="Submit">
                              <button
                                type="button"
                                class="btn btn-danger btn-pill"
                                data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                </form>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
