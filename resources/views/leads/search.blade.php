<div class="row leads-list">
    @foreach ($leads as $lead)
    <div class="card px-0 my-2">
        <div class="row px-0 lc-card-row" style="height: auto;">
            <div class="col-12 col-lg-2 px-0  img-container">
                <img class="map" src="/storage/maps-image.png" alt="">
                <img class="gps-location" src="/storage/icons/gps-location.png" alt="">
                <img class="new-label" src="/storage/icons/new-label.png" alt="">
            </div>
            <div class="col-12 col-lg-2 first-col position-relative">
                <h3>{{ $lead->county->county }}, {{ $lead->county->state->code }}</h3>
                <p class="city">County Pop. {{ number_format($lead->county->population) }} <!--<br/>State Pop. 1,096,496--></p>

                <div class="phone-status"><i class="fa-solid fa-circle-check"></i> <span>PHONE NUMBER VERIFIED</span></div>

                <div class="position-absolute">
                    <div class="date"><i class="fa-regular fa-calendar-check"></i> <span>{{ $lead->created_at }}</span></div>
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
                <div class="row px-0 justify-content-between motivate-container dont-collapse-sm" id="collapseExample">
                    <div class="col-11 px-0 col-lg-9 ">
                        <div class="row px-0">
                            <div class="col-12 col-lg-3 px-0 d-lg-none">
                                <p class="labela">Pictures labelb</p>
                                <p class="labelb">Yes. Included.</p>
                            </div>
                            <div class="col-12 col-lg px-0">
                                <p class="labela">Seller Motivation</p>
                                <p class="labelb ">{{ $lead->seller_motivation }}</p>
                            </div>
                            <div class="col-12 col-lg px-0">
                                <p class="labela">Selling Timeframe</p>
                                <p class="labelb">{{ $lead->selling_timeframe }}</p>
                            </div>
                            <div class="col-12 col-lg px-0">
                                <p class="labela">Agent Listed</p>
                                <p class="labelb">{{ $lead->agent_listed }}</p>
                            </div>
                            <div class="col-12 col-lg px-0">
                                <p class="labela">Mortgage</p>
                                <p class="labelb">{{ $lead->mortgage }}</p>
                            </div>
                        </div>
                        <div class="row px-0 py-2">
                            <div class="col-12 col-lg mt-2 px-0">
                                <p class="labela">Exterior Cond.</p>
                                <p class="labelb">{{ $lead->exterior_cond }}</p>
                                <!--<p class="third-label">Nothing Major</p>-->
                            </div>
                            <div class="col-12 col-lg mt-2 px-0">
                                <p class="labela">Kitchen Cond.</p>
                                <p class="labelb">{{ $lead->kitchen_cond }}</p>
                                <!--<p class="third-label">Granite Countertops<br/>Mixed Appliances</p>-->
                            </div>
                            <div class="col-12 col-lg mt-2 px-0">
                                <p class="labela">Bathroom Cond.</p>
                                <p class="labelb">{{ $lead->bathroom_cond }}</p>
                                <!--<p class="third-label">Wear &amp; Tear</p>-->
                            </div>
                            <div class="col-12  col-lg mt-2 px-0">
                                <p class="labela">Yard Cond.</p>
                                <p class="labelb">{{ $lead->yard_cond }}</p>
                                <!--<p class="third-label">Well Maintained</p>-->
                            </div>
                        </div>
                        <div class="lc-prop-pics"><i class="fa-solid fa-images"></i> <span>Property picture(s) available upon purchase</span></div>
                    </div>
                    <div class="col-9 mx-auto mx-lg-0 col-lg-3 px-0 px-lg-0 third-column">
                        <div class="items-container">
                            <div class="row px-0">
                                <div class="col-6 px-0 mb-2 item">
                                    <div class="labela">Zip Code</div>
                                    <div class="labelb">•••••</div>
                                </div>
                                <div class="col-6 px-0 item">
                                    <div class="labela">House Type</div>
                                    <div class="labelb">•••••</div>
                                </div>
                                <div class="col-6 px-0 mb-2 item">
                                    <div class="labela">Sq. Footage</div>
                                    <div class="labelb">•••</div>
                                </div>
                                <div class="col-6 px-0 item">
                                    <div class="labela">Constructed</div>
                                    <div class="labelb">••••</div>
                                </div>
                                <div class="col-6 px-0 mb-2 px-0 item">
                                    <div class="labela">Bedrooms</div>
                                    <div class="labelb">••</div>
                                </div>
                                <div class="col-6 px-0 item">
                                    <div class="labela">Bathrooms</div>
                                    <div class="labelb">••</div>
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
                <div class="heart">
                    <a href="#" class="btn btn-light showlist-heart">
                        <i class="bi bi-heart-fill text-danger "></i>
                    </a>
                </div>
                <div class="price-container">
                    @if ($lead->clearance_price)
                    <span class="price-off">$197</span>
                    <span class="price">${{ $lead->clearance_price }}</span>
                    @else
                    <span class="price">$197</span>
                    @endif
                </div>
                <div class="buy-leads">
                    <a href="#" class="btn btn-primary">Buy Leads</a>
                    <p>Off Market Guarantee</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@if ($leads->isNotEmpty())
<div class="row pagination" style="text-align:center">
    <div class="pagination-buttons " style="margin-left: auto;">
        @if ($leads->onFirstPage())
        <div class="btn btn-primary prev"><img src="/storage/icons/prev.png" alt=""></div>
        @else
        <a href="{{ $leads->withQueryString()->previousPageUrl() }}" id="filter-prev-page" class="btn btn-primary prev"><img src="/storage/icons/prev.png" alt=""></a>
        @endif
        <span class="page">{{ $leads->currentPage() }}/{{ $leads->lastPage() }}</span>
        @if ($leads->onLastPage())
        <div class="btn btn-primary next"><img src="/storage/icons/next.png" alt=""></div>
        @else
        <a href="{{ $leads->withQueryString()->nextPageUrl() }}" id="filter-next-page" class="btn btn-primary next"><img src="/storage/icons/next.png" alt=""></a>
        @endif
    </div>
</div>
@endif

<script>
    $(function() {
        $( '#filter-prev-page, #filter-next-page' ).click(function( event ) {
            let url = $( this ).attr('href');

            $.post( url, $( '#search' ).serialize(), null, 'html' )
                .done(function( html ) {
                    $( '#lead-list' ).html(html);
                });

            event.preventDefault();
        });
    });
</script>
