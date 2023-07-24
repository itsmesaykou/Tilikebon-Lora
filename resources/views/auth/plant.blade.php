@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Plant</h1>
    </div>

    

    <div class="row">
        <div class="col-sm-3">
          <div class="card" style="text-align: center">
            <div class="card-body">
              <h5 class="card-title">Chili Plant #1</h5>
              <img src="img/plant.png" alt="" style="width: 50%">
              <p class="card-text">Weather Status : Sunny</p>
              <p class="card-text">Kelembapan Tanah (persen) : 15</p>
              <p class="card-text">Kelembapan Udara (C) : 63</p>
              <p class="card-text">Intensitas Cahaya (lx): 18</p>
              <a href="#" class="btn btn-primary">Water the plants</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card" style="text-align: center">
            <div class="card-body">
              <h5 class="card-title">Chili Plant #2</h5>
              <img src="img/plant.png" alt="" style="width: 50%">
              <p class="card-text">Weather Status : Rain</p>
              <p class="card-text">Kelembapan Tanah (persen) : 15</p>
              <p class="card-text">Kelembapan Udara (C) : 63</p>
              <p class="card-text">Intensitas Cahaya (lx): 18</p>

              <a href="#" class="btn btn-primary">Water the plants</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="text-align: center">
              <div class="card-body">
                <h5 class="card-title">Chili Plant #3</h5>
                <img src="img/plant.png" alt="" style="width: 50%">
                <p class="card-text">Weather Status : Sunny</p>
              <p class="card-text">Kelembapan Tanah (persen) : 15</p>
              <p class="card-text">Kelembapan Udara (C) : 63</p>
              <p class="card-text">Intensitas Cahaya (lx): 18</p>

                <a href="#" class="btn btn-primary">Water the plants</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="text-align: center">
              <div class="card-body">
                <h5 class="card-title">Chili Plant #4</h5>
                <img src="img/plant.png" alt="" style="width: 50%">
                <p class="card-text">Weather Status : Rain</p>
              <p class="card-text">Kelembapan Tanah (persen) : 15</p>
              <p class="card-text">Kelembapan Udara (C) : 63</p>
              <p class="card-text">Intensitas Cahaya (lx): 18</p>

                <a href="#" class="btn btn-primary">Water the plants</a>
              </div>
            </div>
          </div>
      </div>

      <!-- content -->
      <br><br>
    <div class="row">
        <div class="col-sm-12 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Aturan Pengairan</h5>
              <p class="card-text">
                Berikut adalah contoh jadwal penyiraman air untuk tanaman cabe dalam kondisi normal (tanpa hujan) dan kondisi saat hujan tidak turun sama sekali. Harap dicatat bahwa jadwal ini bisa disesuaikan berdasarkan lingkungan tumbuh tanaman cabe Anda, dan penting untuk selalu memantau kondisi tanaman secara langsung.
              </p>

              <p class="card-title">
                Jadwal Penyiraman Tanaman Cabe dalam Kondisi Normal (tanpa hujan):
              </p>
              <p class="card-text">
                Pagi hari (sekitar jam 6-8 pagi): Air cukup mudah menguap pada pagi hari, sehingga menyiram tanaman pada waktu ini membantu memastikan bahwa tanaman mendapatkan cukup air untuk memulai hari.
              </p>

              <p class="card-text">
                Sore hari (sekitar jam 4-6 sore): Sore hari adalah waktu lain yang baik untuk penyiraman karena suhu telah menurun, dan tanaman akan memiliki waktu untuk menyerap air sebelum malam tiba.
              </p>

              <p class="card-title">
                Jadwal Penyiraman Tanaman Cabe dalam Kondisi Tidak Turun Hujan Sama Sekali:
              </p>

              <p class="card-text">
                Pagi hari (sekitar jam 6-8 pagi): Jika tidak ada tanda-tanda hujan pada pagi hari, lakukan penyiraman seperti yang dijelaskan di atas untuk memastikan tanaman mendapatkan air yang cukup.
              </p>

              <p class="card-text">
                Sore hari (sekitar jam 4-6 sore): Jika tidak ada hujan sepanjang hari, maka lakukan penyiraman kembali pada sore hari untuk memastikan tanaman tetap terhidrasi.
              </p>
            </div>
          </div>
        </div>
      </div>
      

    
    
</div>
@endsection