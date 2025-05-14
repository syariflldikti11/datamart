
 
   <div class="container-fluid">
          <div class="row">

            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card">
                <div class="box p-2 rounded bg-info text-center">
                  <h1 class="fw-light text-white"><?= $pt; ?></h1>
                  <h6 class="text-white">Perguruan Tinggi</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card">
                <div class="box p-2 rounded bg-primary text-center">
                  <h1 class="fw-light text-white"><?= $prodi; ?></h1>
                  <h6 class="text-white">Program Studi</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card">
                <div class="box p-2 rounded bg-success text-center">
                  <h1 class="fw-light text-white"><?= $dosen; ?></h1>
                  <h6 class="text-white">Dosen</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card">
                <div class="box p-2 rounded bg-warning text-center">
                  <h1 class="fw-light text-white"><?= $mhs->jumlah_mhs; ?></h1>
                  <h6 class="text-white">Mahasiswa</h6>
                </div>
              </div>
            </div>
          </div>
        
 <div class="row">
    <div class="col-12">
         <div class="card">
                <div class="card-body">
                    <div
                      class="
                        alert alert-light-info
                        text-info
                        alert-dismissible
                        fade
                        show
                      "
                      role="alert"
                    >
                      <div
                        class="
                          d-flex
                          align-items-center
                          text-info
                          font-weight-medium
                        "
                      >
                        <i
                          data-feather="info"
                          class="fill-white feather-sm me-2"
                        ></i>
                         Disclaimer !!! Website ini memberikan informasi perguruan tinggi di lingkungan kerja LLDIKTI Wilayah XI Kalimantan yang bersumber dari PDDIKTI. Update data terakhir pada tanggal <?= $sync->last_sync; ?>
                      </div>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                      ></button>
                    </div>
                Selamat datang di Datamart LLDIKTI XI, Lembaga Layanan Pendidikan Tinggi Wilayah XI  saat ini memiliki cakupan layanan sebanyak <?= $pt; ?> perguruan tinggi yang tersebar di <?= $provinsi; ?> provinsi dan <?= $kab_pt; ?> Kabupaten/Kota yang berada di pulau kalimantan. Dashboard ini memberikan gambaran peta dan kondisi perguruan tinggi dari sisi aspek geografis, kelembagaan, sumber daya yang mencakup Dosen, Mahasiswa dan Tenaga Kependidikan <br />
           
               
                </div>
              </div>
            </div>
            </div>
   
         <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Sebaran Perguruan Tinggi Swasta di Lingkungan LLDIKTI Wilayah XI</h4>
                </div>

                <div class="card-body">
   <div id="mapsy" class="gmaps"></div>
                    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
   <script>
    // Initialize the map
    var map = L.map('mapsy').setView([0.610442, 113.984194], 6);

    // Add a tile layer to the map (OpenStreetMap tiles)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Sample marker data array (usually this data comes from a database or API)
    var markerData = [
     <?php foreach($pts as $d): ?>
        {
            name: "<?= $d->nama_pt; ?>",
            code: "<?= $d->kode_pt; ?>",
            province: "<?= $d->provinsi; ?>",
            city: "<?= $d->kab_kota_pt; ?>",
            akred: "<?= $d->nm_akred; ?>",
            jumlah_mhs: "<?= $d->jumlah_mhs; ?>",
            jumlah_dosen: "<?= $d->jumlah_dosen; ?>",
            jumlah_dosen_ajar: "<?= $d->jumlah_dosen_ajar; ?>",
            lat: "<?= $d->lintang_pt; ?>",
            lon: "<?= $d->bujur_pt; ?>"
        },
     <?php endforeach; ?>
        // Add more data as needed...
    ];

    // Loop through markerData and add markers to the map
    markerData.forEach(function(data) {
        var marker = L.marker([data.lat, data.lon]).addTo(map);

        // Create popup content
        var popupContent = "<b>Kode PT: " + data.code + "</b><br>" +
                           "Nama PT: " + data.name + "<br>" +
                           "Provinsi: " + data.province + "<br>" +
                           "Kabupaten: " + data.city + "<br>" +
                           "Akreditas: " + data.akred + "<br>" +
                           "Jumlah Mahasiswa: " + data.jumlah_mhs + "<br>" +
                           "Jumlah Dosen: " + data.jumlah_dosen + "<br>" +
                           "Jumlah Dosen Ajar: " + data.jumlah_dosen_ajar;

        // Bind popup to marker
        marker.bindPopup(popupContent);
    });

    // Add KML layer
    var kmlLayer = omnivore.kml('<?= base_url();?>assets/kalimantan.kml') // Replace with your KML file path
        .on('ready', function() {
            map.fitBounds(kmlLayer.getBounds()); // Optional: zoom to the bounds of the KML layer
        })
        .addTo(map);
</script>     
                </div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                 
                 
                <div id="provinsi_pt"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                   <div id="kab_pt"></div>
                 
                
                </div>
              </div>
            </div>
          </div>
        </div>

        
         
