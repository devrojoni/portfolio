<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-5">
                    <div class="years flex-shrink-0 text-center me-4">
                        <h1 class="display-1 mb-0">{{ $aboutSection->experience_year }}</h1>
                        <h5 class="mb-0">Years</h5>
                    </div>
                    <h3 class="lh-base mb-0">{{ $aboutSection->experience_title }}</h3>
                </div>
                <p class="mb-4">{{ $aboutSection->description }}</p>
                <!--  <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $aboutSection->description }}</p>
                <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $aboutSection->description }}</p>
                <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3 mb-4">
                    <div class="col-sm-12">
                        <img class="img-fluid rounded" src="{{ asset($aboutSection->image) }}"
                            alt="Image" />
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">{{ $aboutSection->total_client }}</h2>
                </div>
                <p class="mb-4">{{ $aboutSection->client_description }}</p>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">{{ $aboutSection->total_project }}</h2>
                </div>
                <p class="mb-0">{{ $aboutSection->project_description }}</p>
            </div>
        </div>
    </div>
</div>