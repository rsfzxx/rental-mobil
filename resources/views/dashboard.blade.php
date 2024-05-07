<x-app-layout>
    <div class="container mt-5">
        <div class="judul">Dashboard - Admin</div>
        <div class="judul">"Bengkelin"</div>
        <div class="text"> Profesional x Reliable x Affordable </div>
        <div class="row justify-content-center">
            <div class="col-md-2 text-center">
                <button class="btn btn-primary btn-lg">
                    <i class="bi bi-clock"></i>&nbsp; Data Lama
                </button>
            </div>
            <div class="col-md-2 text-center">
                <a href="{{ route('showForm') }}">
                    <button class="btn btn-success btn-lg">
                        <i class="bi bi-plus-circle-fill"></i>&nbsp;  Buat Baru
                    </button>
                </a>
            </div>
        </div>          
    </div>
</x-app-layout>
