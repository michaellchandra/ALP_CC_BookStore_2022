@extends('layouts.app')

@section('content')
<section class="py-5 my-5">
    <div class="container py-5">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">Tentang Kami<br></span></h2>
                <p class="text-muted mb-5">Kami mahasiswa IMT UC Surabaya membuat platform EverywhereBooks ini sebagai nilai akhir mata kuliah Cloud Computing dalam implementasi penggunaan API oleh publik</p>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">FAQ<br></span></h2>
                <p class="text-muted mb-5">Pertanyaan yang sering ditanyakan seputar EverywhereBooks</p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted" role="tablist" id="accordion-2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2 .item-1" aria-expanded="true" aria-controls="accordion-2 .item-1">Apa itu EverywhereBooks</button></h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-2">
                            <div class="accordion-body">
                                <p>EverywhereBooks merupakan website yang menampilkan list buku-buku yang tersebar secara online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection