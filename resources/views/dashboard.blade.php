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
      
   
        <div class="col-12 order-3 orde-lg-2 px-0 px-lg-0 col-lg-3 mx-auto mx-lg-0 d-none d-lg-inline-block">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary">For Investors</button>
            <button type="button" class="btn btn-white btn2">For Agents</button>
          </div>
        </div>
        <div class="col-6 order-2 order-lg-3 col-lg-4 px-0 myshortlist-container">

          <a href="" class="btn btn-white lc-btn-short"><i class="fa-regular fa-heart"></i> <span class="d-none d-lg-inline">My Shortlist</span></a>
        </div>
      </div>
    </div>


    <form class="row filters-container px-0">
      
      <!-- search -->
      <div class="search-filters d-flex justify-content-between lc-search p-0">
        <div class="input-group lc-search-primary me-3">
          <div class="group col d-lg-inline-block lc-search-input">
            <input class="form-control ps-5 search" type="search" value="search" id="example-search-input">
            <span class="input-group-append">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
          <!-- hidden on mobile -->
          <div class="group col d-none d-lg-inline-block">
            <select class="select border-0" multiple data-mdb-placeholder="State" data-mdb-filter="true">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
            <span class="input-group-append">
              <i class="fa-solid fa-map"></i>
            </span>
          </div>
          <div class="group col d-none d-lg-inline-block">
            <select class="select border-0" multiple data-mdb-placeholder="County" data-mdb-filter="true">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
            <span class="input-group-append">
              <i class="fa-solid fa-location-dot"></i>
            </span>
          </div>
          <div class="group col d-none d-lg-inline-block">
            <select class="select border-0" multiple data-mdb-placeholder="Status" multiple>
              <option value="1">HOT</option>
              <option value="2">NEW</option>
              <option value="3">Clearance</option>
            </select>
            <span class="input-group-append">
              <i class="fa-solid fa-sliders"></i>
            </span>

          </div>
          <!-- hidden on mobile -->
          <button class="btn btn-primary d-none d-lg-inline-block lc-btn-search" type="button" id="button-addon2">Search</button>
        </div>

        <button class="btn btn-primary more-filters-btn" data-text="More Filters" type="button"
            data-bs-toggle="collapse" data-bs-target="#morefilters" aria-expanded="false"
            aria-controls="morefilters" style="border-radius:10px; font-size:14px; text-transform:capitalize; width:154px;">More Filters</button>
      </div>

<!-- mobile filters modal start -->
      <div class=" d-lg-inline-block d-lg-none col-3 col-lg-2 px-0 ">
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

      <!-- collapsible filters -->
      <div class="collapse more-filters px-0 " id="morefilters" tabindex="-1">
        <div class="card card-body py-3 px-3">
          <div class="row">
            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group col">
                <select class="select border-0">
                  <option value="1">Exterior Condition</option>
                  <option value="2">Like New</option>
                  <option value="3">Average</option>
                  <option value="4">Needs Work</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-house-crack"></i>
                </span>
              </div>
            </div>

            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group ">
                <select class=" browser-default select">
                  <option value="1">Kitchen Condition</option>
                  <option value="2">Like New</option>
                  <option value="3">Average</option>
                  <option value="4">Needs Work</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-kitchen-set"></i>
                </span>
              </div>
            </div>

            
            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group ">
                <select class=" browser-default select">
                  <option value="1">Bathroom Condition</option>
                  <option value="2">Like New</option>
                  <option value="3">Average</option>
                  <option value="4">Needs Work</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-shower"></i>
                </span>
              </div>
            </div>

            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group ">
                <select class=" browser-default select">
                  <option value="1">Yard Condition</option>
                  <option value="2">Lush</option>
                  <option value="3">Sparse</option>
                  <option value="4">No Landscaping</option>
                  <option value="5">No Yard</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-leaf"></i>
                </span>
              </div>
            </div>

          </div>

          <div class="row" style="margin-top:8px;">
            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group col">
                <select class="select border-0">
                  <option value="1">Selling Timeframe</option>
                  <option value="2">ASAP</option>
                  <option value="3">2-4 Weeks</option>
                  <option value="4">4-6 Weeks</option>
                  <option value="5">6+ Weeks</option>
                  <option value="6">Just Browsing</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-money-bill-transfer"></i>
                </span>
              </div>
            </div>

            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group ">
                <select class=" browser-default select">
                  <option value="1">Agent Listed Property?</option>
                  <option value="2">Yes</option>
                  <option value="3">No</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-briefcase"></i>
                </span>
              </div>
            </div>

            
            <div class="col-lg-3 my-2 my-lg-0 px-1">
              <div class="group ">
                <select class=" browser-default select">
                  <option value="1">Mortgage</option>
                  <option value="2">No</option>
                  <option value="3">Yes. Payment up to date</option>
                  <option value="4">Yes. I'm behind payment</option>
                </select>
                <span class="input-group-append">
                  <i class="fa-solid fa-file-signature"></i>
                </span>
              </div>
            </div>

            

          </div>

        </div>
      </div>
      <!-- hidden on mobile -->

      <!-- filter active -->
      <div class="d-flex justify-content-between filter-labels">
        <div class="filter-labels-group">
            Filter by :
            <a class="btn btn-white d-inline" href="#">Fair <i class="fa-solid fa-circle-xmark"></i></a>
            <a class="btn btn-white d-inline" href="#">Alabama (AL) <i class="fa-solid fa-circle-xmark"></i></a>
            <a class="btn btn-white d-inline" href="#">Madison <i class="fa-solid fa-circle-xmark"></i></a>
        </div>
        <button type="reset" class="clear">Clear Filter <i class="fa-solid fa-xmark"></i></button>
      </div>

      
    </form>

    

    <div class="row leads-list">
      <div class="card px-0 my-2">
        <div class="row px-0 lc-card-row">
          <div class="col-12 col-lg-2 px-0  img-container">
            <img class="map" src="/storage/maps-image.png" alt="">
            <img class="gps-location" src="/storage/icons/gps-location.png" alt="">
            <img class="new-label" src="/storage/icons/new-label.png" alt="">
          </div>
          <div class="col-12 col-lg-2 first-col position-relative">
            <h3>Cape Coral, FL</h3>
            <p class="city">County Pop. 703,498<br/>State Pop. 1,096,496</p>

            <div class="phone-status"><i class="fa-solid fa-circle-check"></i> <span>PHONE NUMBER VERIFIED</span></div>

            <div class="position-absolute">
              <div class="date"><i class="fa-regular fa-calendar-check"></i> <span>Nov 14, 2022 - 11:07PM</span></div>
              <div class="seo"><i class="fa-solid fa-money-bill-1-wave"></i> <span>Cash Offer Requested Lead Google Search SEO</span></div>
            </div>
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
              <div class="col-11 px-0 col-lg-9 ">
                <div class="row px-0">
                  <div class="col-12 col-lg-3 px-0 d-lg-none">
                    <p class="labela">Pictures labelb</p>
                    <p class="labelb">Yes. Included.</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Seller Motivation</p>
                    <p class="labelb ">Avoid Foreclosure</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Selling Timeframe</p>
                    <p class="labelb">2-4 Weeks</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Agent Listed</p>
                    <p class="labelb">No</p>
                  </div>

                  <div class="col-12 col-lg px-0">
                    <p class="labela">Mortgage</p>
                    <p class="labelb">No</p>
                  </div>
                
                </div>
                <div class="row px-0 py-2">
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Exterior Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Kitchen Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Granite Countertops<br/>Mixed Appliances</p>
                  </div>
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Bathroom Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Wear &amp; Tear</p>
                  </div>
                  <div class="col-12  col-lg mt-2 px-0">
                    <p class="labela">Yard Cond.</p>
                    <p class="labelb">Lush</p>
                    <p class="third-label">Well Maintained</p>
                  </div>
                </div>

                <div class="lc-prop-pics"><i class="fa-solid fa-images"></i> <span>Property picture(s) available upon purchase</span></div>
              
              </div>
              <div class="col-9 mx-auto mx-lg-0 col-lg-3 px-0 px-lg-0 third-column">
                <div class="items-container">
                  <div class="row px-0">
                    <div class="col-6 px-0 mb-2 item">
                      <div class="labela">Zip Code</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">House Type</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-6 px-0 mb-2 item">
                      <div class="labela">Sq. Footage</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">Constructed</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-6 px-0 mb-2 px-0 item">
                      <div class="labela">Bedrooms</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">Bathrooms</div>
                      <div class="labelb">32 •••</div>
                    </div>
                    <div class="col-12 px-0">
                      <div class="pro-status ">
                        <a href="#">Unlock details with <img src="/storage/icons/Pro.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
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
          <div class="col-12 col-lg-2 first-col position-relative">
            <h3>Bay, FL</h3>
            <p class="city">County Pop. 703,498<br/>State Pop. 1,096,496</p>

            <div class="phone-status"><i class="fa-solid fa-circle-check"></i> <span>PHONE NUMBER VERIFIED</span></div>

            <div class="position-absolute">
              <div class="date"><i class="fa-regular fa-calendar-check"></i> <span>Nov 14, 2022 - 11:07PM</span></div>
              <div class="seo"><i class="fa-solid fa-money-bill-1-wave"></i> <span>Cash Offer Requested Lead Google Search SEO</span></div>
            </div>
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
              <div class="col-11 px-0 col-lg-9 ">
                <div class="row px-0">
                  <div class="col-12 col-lg-3 px-0 d-lg-none">
                    <p class="labela">Pictures labelb</p>
                    <p class="labelb">Yes. Included.</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Seller Motivation</p>
                    <p class="labelb ">Avoid Foreclosure</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Selling Timeframe</p>
                    <p class="labelb">2-4 Weeks</p>
                  </div>
                  <div class="col-12 col-lg px-0">
                    <p class="labela">Agent Listed</p>
                    <p class="labelb">No</p>
                  </div>

                  <div class="col-12 col-lg px-0">
                    <p class="labela">Mortgage</p>
                    <p class="labelb">No</p>
                  </div>
                
                </div>
                <div class="row px-0 py-2">
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Exterior Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Nothing Major</p>
                  </div>
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Kitchen Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Granite Countertops<br/>Mixed Appliances</p>
                  </div>
                  <div class="col-12 col-lg mt-2 px-0">
                    <p class="labela">Bathroom Cond.</p>
                    <p class="labelb">Average</p>
                    <p class="third-label">Wear &amp; Tear</p>
                  </div>
                  <div class="col-12  col-lg mt-2 px-0">
                    <p class="labela">Yard Cond.</p>
                    <p class="labelb">Lush</p>
                    <p class="third-label">Well Maintained</p>
                  </div>
                </div>

                <div class="lc-prop-pics"><i class="fa-solid fa-images"></i> <span>Property picture(s) available upon purchase</span></div>
              
              </div>
              <div class="col-9 mx-auto mx-lg-0 col-lg-3 px-0 px-lg-0 third-column">
                <div class="items-container">
                  <div class="row px-0">
                    <div class="col-6 px-0 mb-2 item">
                      <div class="labela">Zip Code</div>
                      <div class="labelb">32159</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">House Type</div>
                      <div class="labelb">Duplex</div>
                    </div>
                    <div class="col-6 px-0 mb-2 item">
                      <div class="labela">Sq. Footage</div>
                      <div class="labelb">950</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">Constructed</div>
                      <div class="labelb">1997</div>
                    </div>
                    <div class="col-6 px-0 mb-2 px-0 item">
                      <div class="labela">Bedrooms</div>
                      <div class="labelb">4</div>
                    </div>
                    <div class="col-6 px-0 item">
                      <div class="labela">Bathrooms</div>
                      <div class="labelb">4</div>
                    </div>
                    <div class="col-12 px-0">
                      <div class="pro-status ">
                        <a href="#"><img src="/storage/icons/Pro.png" alt=""> PRO Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

          </div>
       
          <div class="col-12 col-lg-2 fourth-column">

            <div class="heart"> <a href="#" class="btn btn-light showlist-heart"> <i
                  class="bi bi-heart-fill text-danger "></i> </a>
            </div>
            <div class="price-container">
              <span class="price-off">$197</span>
              <span class="price">$99</span>
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
