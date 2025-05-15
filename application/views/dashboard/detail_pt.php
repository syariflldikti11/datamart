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
                      >Profile</a
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
                      >Setting</a
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
                    <table
                      id="zero-config"
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
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Full Name</strong>
                          <br />
                          <p class="text-muted">Johnathan Deo</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Mobile</strong>
                          <br />
                          <p class="text-muted">(123) 456 7890</p>
                        </div>
                        <div class="col-md-3 col-xs-6 b-r">
                          <strong>Email</strong>
                          <br />
                          <p class="text-muted">johnathan@admin.com</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                          <strong>Location</strong>
                          <br />
                          <p class="text-muted">London</p>
                        </div>
                      </div>
                      <hr />
                      <p class="mt-4">
                        Donec pede justo, fringilla vel, aliquet nec, vulputate
                        eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                        venenatis vitae, justo. Nullam dictum felis eu pede
                        mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                        elementum semper nisi. Aenean vulputate eleifend tellus.
                        Aenean leo ligula, porttitor eu, consequat vitae,
                        eleifend ac, enim.
                      </p>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has
                        survived not only five centuries
                      </p>
                      <p>
                        It was popularised in the 1960s with the release of
                        Letraset sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like
                        Aldus PageMaker including versions of Lorem Ipsum.
                      </p>
                      <h4 class="font-weight-medium mt-4">Skill Set</h4>
                      <hr />
                      <h5 class="mt-4">
                        Wordpress <span class="pull-right">80%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 80%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        HTML 5 <span class="pull-right">90%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          aria-valuenow="90"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 90%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        jQuery <span class="pull-right">50%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          aria-valuenow="50"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 50%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                      <h5 class="mt-4">
                        Photoshop <span class="pull-right">70%</span>
                      </h5>
                      <div class="progress">
                        <div
                          class="progress-bar bg-warning"
                          role="progressbar"
                          aria-valuenow="70"
                          aria-valuemin="0"
                          aria-valuemax="100"
                          style="width: 70%; height: 6px"
                        >
                          <span class="sr-only">50% Complete</span>
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
                      <form class="form-horizontal form-material">
                        <div class="mb-3">
                          <label class="col-md-12">Full Name</label>
                          <div class="col-md-12">
                            <input
                              type="text"
                              placeholder="Johnathan Doe"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="example-email" class="col-md-12"
                            >Email</label
                          >
                          <div class="col-md-12">
                            <input
                              type="email"
                              placeholder="johnathan@admin.com"
                              class="form-control form-control-line"
                              name="example-email"
                              id="example-email"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Password</label>
                          <div class="col-md-12">
                            <input
                              type="password"
                              value="password"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Phone No</label>
                          <div class="col-md-12">
                            <input
                              type="text"
                              placeholder="123 456 7890"
                              class="form-control form-control-line"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-md-12">Message</label>
                          <div class="col-md-12">
                            <textarea
                              rows="5"
                              class="form-control form-control-line"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="col-sm-12">Select Country</label>
                          <div class="col-sm-12">
                            <select class="form-control form-control-line">
                              <option>London</option>
                              <option>India</option>
                              <option>Usa</option>
                              <option>Canada</option>
                              <option>Thailand</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="col-sm-12">
                            <button class="btn btn-success">
                              Update Profile
                            </button>
                          </div>
                        </div>
                      </form>
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