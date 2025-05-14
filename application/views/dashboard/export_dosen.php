 <?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=dosen.xls");
?>

  <table border='1'>
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
                          <th>No Reg</th>
                          <th>Nama</th>
                          <th>JK</th>
                          <th>Pendidikan</th>
                          <th>Jabatan Akademik</th>
                            <th>TMT SK Jabfung</th>
                              <th>Tahun Jabfung</th>
                          <th>Ikatan Kerja</th>
                          <th>Status Aktif</th>
                          <th>Status Pegawai</th>
                          <th>Tahun Sertifikasi</th>
                        
                          
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
                  <?php foreach($dt_dosen as $d): ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d->kode_pt; ?></td>
                          <td><?= $d->nama_pt; ?></td>
                          <td><?= $d->provinsi_pt; ?></td>
                          <td><?= $d->kode_prodi; ?></td>
                           <td><?= $d->nm_prodi; ?></td>
                          <td><?= $d->jenjang_prodi; ?></td>
                          <td><?= $d->Kelompok_No_Reg; ?></td>
                           <td><?= $d->nuptk; ?></td>
                          <td><?= $d->nidn; ?></td>
                          <td><?= $d->nama_dosen; ?></td>
                           <td><?= $d->jk; ?></td>
                          <td><?= $d->jenjang_tertinggi; ?></td>
                          <td><?= $d->jabatan_akademik; ?></td>
                            <td><?= $d->tmt_sk_jabfung; ?></td>
                          <td><?php $tgl=$d->tmt_sk_jabfung; 
                          $tahun = date("Y", strtotime($tgl));
                          echo $tahun;
                          ?></td>
                          <td><?= $d->nm_ikatan_kerja; ?></td>
                          <td><?= $d->nm_stat_aktif; ?></td>
                          <td><?= $d->nm_stat_pegawai; ?></td>
                          <td><?= $d->thn_sert; ?></td>
                        
                         
                        </tr>
                  <?php endforeach; ?>
                            
                     
                      </tbody>
                     
                    </table>
                    <?php
        exit ()
        ?>