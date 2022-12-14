<x-app-layout>
<div class="heading-text">
      <div class="row px-0">

        <!-- mobile header dropdown start -->
        <div class="col-6 order-1 col-lg-1 px-0 d-lg-none">
          <div class="dropdown">
            <a class=" dropdown-toggle heading third-color-text" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Leads For Investors
            </a>
          
            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">For Investors</a></li>
              <li><a class="dropdown-item" href="#">For Agents</a></li>
            </ul>
          </div>
        </div>
        <!-- mobile header dropdown end -->
        <div class="col-6 order-1 col-lg-1 px-0 d-none d-lg-inline-block">
          <h1 class="heading">Leads</h1>
        </div>
      
   
        <div class="col-12 order-3 orde-lg-2 px-0 px-lg-3 col-lg-3 mx-auto mx-lg-0 d-none d-lg-inline-block">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">For Investors</button>
            <button type="button" class="btn btn-white">For Agents</button>
          </div>
        </div>
        <div class="col-6 order-2 order-lg-3 col-lg-4 px-0 px-lg-3 myshortlist-container">

          <a href="" class="btn btn-white "> <i class="bi bi-heart text-danger "></i> <span class="d-none d-lg-inline">My Shortlist</span></a>
        </div>
      </div>
    </div>


    <form class="row filters-container px-0">
      <div class="search-filters col-9 px-0 col-lg-10">

        <div class="input-group px-0">

          <div class="group col-11 col-lg-5 px-0">
            <input class="form-control   px-5 search " type="search" value="search" id="example-search-input">
            <span class="input-group-append">
              <img src="/storage/icons/search.png" alt="">
            </span>
          </div>
          <!-- hidden on mobile -->
          <div class="group col d-none d-lg-inline">
            <select class="select border-0" multiple data-mdb-placeholder="Country" multiple>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
            <span class="input-group-append">
              <img src="/storage/icons/map.png" alt="">
            </span>
          </div>
          <div class="group col d-none d-lg-inline">
            <select class="select border-0" multiple data-mdb-placeholder="Madison" multiple>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
            <span class="input-group-append">
              <img src="/storage/icons/map-pin.png" alt="">
            </span>
          </div>
          <div class="group col d-none d-lg-inline">
            <select class="select border-0" multiple data-mdb-placeholder="Status" multiple>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
            <span class="input-group-append">
              <img src="/storage/icons/sliders.png" alt="">
            </span>

          </div>
          <!-- hidden on mobile -->
          <button class="btn btn-primary d-none d-lg-inline" type="button" id="button-addon2">Search</button>

        </div>

      </div>
<!-- mobile filters modal start -->
      <div class=" d-lg-inline-block d-lg-none col-3 col-lg-2 px-0 px-lg-3 ">
        <div class="row w-100 px-0">
          <button class="btn btn-primary more-filters-btn w-100 px-0" type="button" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">Show Filters</button>

        </div>


      </div>
      <!-- Button trigger modal -->


      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog more-filters">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="staticBackdropLabel">Filters</h5>
              <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"> <img src="/storage/icons/modal-close.png" alt=""></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12 px-0 col-lg-3 my-2 my-lg-0">
                  <div class="group col">
                    <select class="select border-0" multiple data-mdb-placeholder="Madison" multiple>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                      <option value="5">Five</option>
                    </select>
                    <span class="input-group-append">
                      <img src="/storage/icons/map-pin.png" alt="">
                    </span>
                  </div>
                </div>
             
                <div class=" col-12 px-0  col-lg-3 my-2 my-lg-0">
                  <div class="group ">
                    <select class=" browser-default select " multiple data-mdb-placeholder="Country" multiple>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                      <option value="5">Five</option>
                    </select>
                    <span class="input-group-append">
                      <img src="/storage/icons/sliders.png" alt="">
                    </span>

                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-center border-0">
              <button type="button" class="btn secondary-btn" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Apply</button>
            </div>
          </div>
        </div>
      </div>

      <!-- mobile filters modal end -->

      <!-- hidden on mobile -->

      <div class="more-filters-container d-none d-lg-inline-block col-3 col-lg-2 px-0 px-lg-3 ">

        <div class="row w-100 px-0">
          <button class="btn btn-primary more-filters-btn w-100" data-text="More Filters" type="button"
            data-bs-toggle="collapse" data-bs-target="#morefilters" aria-expanded="false"
            aria-controls="morefilters">More Filters</button>

        </div>


      </div>
      <div class="collapse more-filters px-0 " id="morefilters" tabindex="-1">
        <div class="card card-body py-3 px-3">
          <div class="row">
            <div class="col-lg-3 my-2 my-lg-0">
              <div class="group col">
                <select class="select border-0" multiple data-mdb-placeholder="Status" multiple>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
                  <option value="5">Five</option>
                </select>
                <span class="input-group-append">
                  <img src="/storage/icons/sliders.png" alt="">
                </span>

              </div>
            </div>
            <div class="col-lg-3 my-2 my-lg-0">
              <div class="group ">
                <select class=" browser-default select " multiple data-mdb-placeholder="Country" multiple>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
                  <option value="5">Five</option>
                </select>
                <span class="input-group-append">
                  <img src="/storage/icons/sliders.png" alt="">
                </span>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- hidden on mobile -->

      <div class="row filter-labels px-0">
        <div class="label  col-6 col-lg-1 order-1 order-lg-1">Filter By:</div>
        <div class="col-12 col-lg-9 order-3 order-lg-2"> <a class="btn btn-white d-inline" href="#">Fair <img
              src="/storage/icons/primary-close.png" alt=""></a> <a class="btn btn-white d-inline" href="#">Alabama (AL)
            <img src="/storage/icons/primary-close.png" alt=""></a> <a class="btn btn-white d-inline" href="#">Madison
            <img src="/storage/icons/primary-close.png" alt=""></a></div>
        <div class="clear col-6 col-lg-2 px-0 px-lg-3 order-2 order-lg-3"><button type="reset">Clear Filter <img
              src="/storage/icons/danger-close.png" alt=""></button></div>
      </div>
    </form>
    <div class="row leads-list">
      <div class="card px-0 my-2">
        <div class="row px-0">
          <div class="col-12 col-lg-2 px-0  img-container">
            <img class="map" src="/storage/maps-image.png" alt="">
            <img class="gps-location" src="/storage/icons/gps-location.png" alt="">
            <img class="new-label" src="/storage/icons/new-label.png" alt="">
          </div>
          <div class="col-12 col-lg-2    first-col">
            <h3>Cape Coral, FL</h3>
            <p class="city">City Pop. 703,498 </p>
            <p class="country">County Pop. 1,096,496</p>
            <div class="phone-status"><img src="/storage/icons/success-check.png" alt=""> <span>PHONE NUMBER
                VERIFIED</span></div>
            <div class="date"><img src="/storage/icons/calnder.png" alt=""><span>Nov 14, 2022 - 11:07PM</span></div>
            <div class="seo"><img src="/storage/icons/google.png" alt=""><span>Cash Offer Requested Lead Google Search
                SEO</span></div>
          </div>
          <div class="col-12 col-lg-6 px-1 px-lg-0  second-col">
            <div class="row">
              <div class="col-5 mx-auto text-center ">
                <!-- hide on disktop -->
                <a class="btn btn-light show-motivate dropdown-toggle d-lg-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Key Details
                </a>
                <!-- hide on disktop -->
              </div>
              
            </div>
            <div class="row px-0 justify-content-between motivate-container collapse    dont-collapse-sm"    id="collapseExample">
              <div class="col-11 mx-auto px-3  col-lg-7 ">
                <div class="row px-0">
                  <div class="col-12 col-lg-3 px-0 d-lg-none">
                    <p class="motivation-label">Pictures Motivation</p>
                    <p class="motivation ">Yes. Included.</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Seller Motivation</p>
                    <p class="motivation ">Avoid Foreclosure</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Selling Timeframe</p>
                    <p class="motivation">2-4 Weeks</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                  </div>
                
                </div>
                <div class="row px-0 py-2">
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12  col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                </div>
              
              </div>
              <div class="col-9 mx-auto mx-lg-0 col-lg-4 px-1 px-lg-0  third-column">
                <div class="items-container">
                  <div class="row px-0">
                    <div class="col-6 px-0 item">
                      <div class="item-head">Zip Code</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">House Type</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Sq. Footage</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Constructed</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 px-0 item">
                      <div class="item-head">Bedrooms</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Bathrooms</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-12 px-0">
                      <div class="pro-status ">
                        <a href="#">Unlock details with <img src="/storage/icons/Pro.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 px-1 px-lg-0 d-none d-lg-inline position-relative py-2 ">
                <div class="picture-status position-absolute bottom-0"><img src="/storage/icons/image.png" alt=""> <span>Property pictures
                    available upon purchase</span></div>
              </div>
            </div>

          </div>
       
          <div class="col-12 col-lg-2 fourth-column">

            <div class="heart"> <a href="#" class="btn btn-light showlist-heart"> <i
                  class="bi bi-heart-fill text-danger "></i> </a>
            </div>
            <div class="price-container">
              <span class="price-off">$197</span>
              <span class="price">$197</span>
            </div>
            <div class="buy-leads">
              <a href="#" class="btn btn-primary">Buy Leads</a>
              <p>Off Market Guarantee</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card px-0 my-2  ">
        <div class="row px-0 ">
          <div class="col-12 col-lg-2 px-0  img-container ">
            <img class="map"  src="/storage/maps-image.png" alt="">
            <img class="gps-location" src="/storage/icons/gps-location.png" alt="">
            <img class="new-label" src="/storage/icons/new-label.png" alt="">
          </div>
          <div class="col-12 col-lg-2    first-col">
            <h3>Cape Coral, FL</h3>
            <p class="city">City Pop. 703,498 </p>
            <p class="country">County Pop. 1,096,496</p>
            <div class="phone-status"><img src="/storage/icons/success-check.png" alt=""> <span>PHONE NUMBER
                VERIFIED</span></div>
            <div class="date"><img src="/storage/icons/calnder.png" alt=""><span>Nov 14, 2022 - 11:07PM</span></div>
            <div class="seo"><img src="/storage/icons/google.png" alt=""><span>Cash Offer Requested Lead Google Search
                SEO</span></div>
          </div>
          <div class="col-12 col-lg-6 px-1 px-lg-0  second-col">
            <div class="row px-0 justify-content-between motivate-container ">
              <div class="col-11 mx-auto px-3  col-lg-7 ">
                <div class="row px-0">
                  <div class="col-12 col-lg-3 px-0 d-lg-none">
                    <p class="motivation-label">Pictures Motivation</p>
                    <p class="motivation ">Yes. Included.</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Seller Motivation</p>
                    <p class="motivation ">Avoid Foreclosure</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Selling Timeframe</p>
                    <p class="motivation">2-4 Weeks</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                  </div>
                
                </div>
                <div class="row px-0 py-2">
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12  col-lg px-1">
                    <p class="motivation-label">Agent Listed</p>
                    <p class="motivation">No</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                </div>
              
              </div>
              
              <div class="col-9 mx-auto mx-lg-0 col-lg-4 px-1 px-lg-0  third-column">
                <div class="items-container active">
                  <div class="row px-0">
                    <div class="col-6 px-0 item">
                      <div class="item-head">Zip Code</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">House Type</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Sq. Footage</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Constructed</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 px-0 item">
                      <div class="item-head">Bedrooms</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="item-head">Bathrooms</div>
                      <div class="item-text">32 •••</div>
                    </div>
                    <div class="col-12 px-0">
                      <div class="pro-status ">
                        <a href="#"> <img src="/storage/icons/Pro.png" alt=""> Details </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 px-1 px-lg-0 d-none d-lg-inline position-relative  py-2">
                <div class="picture-status position-absolute bottom-0"><img src="/storage/icons/image.png" alt=""> <span>Property pictures
                    available upon purchase</span></div>
              </div>
            </div>

          </div>
        
          <div class="col-12 col-lg-2 fourth-column">

            <div class="heart"> <a href="#" class="btn btn-light showlist-heart"> <i
                  class="bi bi-heart-fill text-danger "></i> </a>
            </div>
            <div class="price-container">
              <span class="price-off">$197</span>
              <span class="price">$197</span>
            </div>
            <div class="buy-leads">
              <a href="#" class="btn btn-primary">Buy Leads</a>
              <p>Off Market Guarantee</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row pagination" style="text-align:center">
      <div class="pagination-buttons " style="margin-left: auto;">
        <a href="" class="btn btn-primary prev"><img src="/storage/icons/prev.png" alt=""></a>
        <span class="page">1/18</span>
        <a href="" class="btn btn-primary next"><img src="/storage/icons/next.png" alt=""></a>

      </div>
    </div>
</x-app-layout>
