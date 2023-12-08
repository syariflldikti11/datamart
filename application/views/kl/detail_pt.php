    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="border-bottom title-part-padding">
                    <h4 class="card-title mb-0">PROFIL PERGURUAN TINGGI</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table customize-table mb-0 v-middle">
                                <tbody>
                                    
                                    <tr>
                                        <td colspan="2">
                                            <?php $nama_logo = trim($get_detail_pt->kode_pt) ?>
                                            <img src="<?= site_url('assets/images/logo_pt/') . $nama_logo . '.png' ?>" height="120px">
                                        </td>
                                        <td>
                                            <h1> <?= $get_detail_pt->nama_pt ?> </h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">Kode PT</td>
                                        <td>:</td>
                                        <td><?= $get_detail_pt->kode_pt ?></td>
                                    </tr>
                                   
                                    <tr>
                                        <td width="200px">Kabupaten/Kota</td>
                                        <td>:</td>
                                        <td><?= $get_detail_pt->kab_kota_pt ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">Telepon</td>
                                        <td>:</td>
                                        <?php if ($get_detail_pt->no_tel == NULL) {
                                            $no_tel = '-';
                                        } else {
                                            $no_tel = $get_detail_pt->no_tel;
                                        } ?>
                                        <td><?= $no_tel ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">Email</td>
                                        <td>:</td>
                                        <?php if ($get_detail_pt->email == NULL) {
                                            $email = '-';
                                        } else {
                                            $email = $get_detail_pt->email;
                                        } ?>
                                        <td><?= $email ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">Website</td>
                                        <td>:</td>
                                        <?php if ($get_detail_pt->website == NULL) {
                                            $website = '-';
                                        } else {
                                            $website = $get_detail_pt->website;
                                        } ?>
                                        <td><?= $website ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200px">Akreditasi</td>
                                        <td>:</td>
                                        <?php if ($get_detail_pt->nm_akred == NULL) {
                                            $nm_akred = 'Belum Ternm_akred';
                                        } else {
                                            $nm_akred = $get_detail_pt->nm_akred;
                                        } ?>
                                        <td><?= $nm_akred ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <?php if($get_detail_pt->nm_akred==NULL){}else{?>          
                            <div class="row">
                                <?php
                                        if ($get_detail_pt->nm_akred == "A") {
                                            $logo_akre = "akre_a.png";
                                        } else if ($get_detail_pt->nm_akred == "B") {
                                            $logo_akre = "akre_b.png";
                                        } else if ($get_detail_pt->nm_akred == "C") {
                                            $logo_akre = "akre_c.png";
                                        } else if ($get_detail_pt->nm_akred == "Baik Sekali") {
                                            $logo_akre = "akre_baik_sekali.png";
                                        } else if ($get_detail_pt->nm_akred == "Baik") {
                                            $logo_akre = "akre_baik.png";
                                        } else if ($get_detail_pt->nm_akred == "Unggul") {
                                            $logo_akre = "akre_unggul.png";
                                        }
                                        ?>
                                <img width="50px" src="<?= site_url('assets/images/').$logo_akre ?>">
                            </div>
                            <?php }?>
                            <div class="row">
                            <canvas id="bar" height="150"></canvas>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

    