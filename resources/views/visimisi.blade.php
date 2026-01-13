@extends ('layouts.lifesure')

@section ('content')

 <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">KABUPATEN BLORA</h4>
                                <h1 class="display-4 mb-0">VISI MISI</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Visi
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            Sesarengan mBangun Blora, Maju dan Berkelanjutan
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           Misi
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol style="padding-left: 18px; line-height: 1.8">
                                            <li>Mewujudkan infrastruktur yang merata, berkualitas, dan berkelanjutan.</li>
                                            <li>Meningkatkan kualitas sumber daya manusia.</li>
                                            <li>Meningkatkan produktivitas daerah di sektor pertanian, peternakan, UMKM, dan investasi.</li>
                                            <li>Mewujudkan pemerintahan yang berintegritas, adaptif, dan kolaboratif.</li>
                                            <li>Memperkuat ketahanan sosial budaya, ekonomi, dan ekologi.</li>
                                            <li>Menciptakan lingkungan yang kondusif untuk investasi, stabilitas ekonomi, dan pembangunan berkesinambungan.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="template/img/bupwabup.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

<!-- Service Start -->
<x-service />
<!-- Service End -->
@endsection
