<x-app-layout>
    
<h1 class="heading mb-40">My Leads</h1>

<div class="container px-0">
  <div class="row">
    
    <div class="col-6 px-0 pe-4"> <!-- carousel start -->
        <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-indicators">
                <button
                type="button"
                data-mdb-target="#carouselExampleIndicators"
                data-mdb-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
                ></button>
                <button
                type="button"
                data-mdb-target="#carouselExampleIndicators"
                data-mdb-slide-to="1"
                aria-label="Slide 2"
                ></button>
                <button
                type="button"
                data-mdb-target="#carouselExampleIndicators"
                data-mdb-slide-to="2"
                aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner" style="border-radius:10px;">
                <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="d-block w-100" alt="Wild Landscape"/>
                </div>
                <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="d-block w-100" alt="Camera"/>
                </div>
                <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits"/>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                <span class="fa-solid fa-circle-chevron-left" aria-hidden="true" style="font-size: 28px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                <span class="fa-solid fa-circle-chevron-right" aria-hidden="true" style="font-size: 28px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> <!-- carousel end -->

    <div class="col-6 px-0 ps-4 lc-view" style="background:#fff; border:1px solid #dfdfdf; border-radius:10px; padding:20px 40px;">
      <div class="row">
        <div class="col-6 mb-2 lc-fc">NOV 14, 2022 - 11:07PM</div>
        <div class="col-6 text-end">
            <div class="lc-verified"><i class="fa-solid fa-circle-check"></i> PHONE NUMBER VERIFIED</div>
        </div>
        <div class="col-5 mb-2">
            <p class="lc-ft">Name</p>  
            <p class="lc-fc">Randolph Fonseca</p>
        </div>
        <div class="col-3">
            <p class="lc-ft">Phone</p>  
            <p class="lc-fc"><a href="tel:+15551035423">(555) 103 5423</a></p>
        </div>
        <div class="col-4">
            <p class="lc-ft">E-Mail Address</p>  
            <p class="lc-fc"><a href="mailto:randolphs@gmail.com">randolphs@gmail.com</a></p>
        </div>        
        <div class="col-5 mb-2">
            <p class="lc-ft">Address</p>  
            <p class="lc-fc">10880 Malibu Point</p>
        </div>
        <div class="col-3">
            <p class="lc-ft">City</p>  
            <p class="lc-fc">Los Angeles</p>
        </div>
        <div class="col-4">
            <p class="lc-ft">State</p>  
            <p class="lc-fc">California</p>
        </div>

      </div>
    </div>
  </div>
</div>
</x-app-layout>