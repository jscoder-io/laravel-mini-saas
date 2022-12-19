<x-app-layout>
<div class="container px-0">    
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="heading mb-40">My Leads</h1>
        </div>        
    </div>


    <div class="row lc-mylead">
        <table class="col-12 table table-hover align-middle mb-0">
        <thead>
            <tr>
                <th>Name/Location</th>
                <th>Lead Date</th>
                <th>Source</th>
                <th class="text-center">Status</th>
                <th class="text-center">Purchase</th>
                <th style="width:100px;">Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr> <!-- data set start -->
                <td>
                    <p class="mb-0 lc-detail-name">Randolph Fonseca</p>
                    <p class="fw-bold mb-0 lc-detail-name">Jacksonville, FL</p>
                </td>
                <td>
                    <p class="mb-0">NOV 14, 2022</p>
                    <p class="mb-0">11:07PM</p>
                </td>
                <td>
                    <p class="mb-0">Google Search SEO</p>
                    <p class="fw-bold mb-0">Cash Offer Requested Lead</p>
                </td>
                <td class="mb-h">
                    <div class="dropdown text-center">
                        <button
                            class="btn btn-light dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            NEW
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">NEW</a></li>
                            <li><a class="dropdown-item" href="#">CALLED</a></li>
                            <li><a class="dropdown-item" href="#">ARCHIVED</a></li>
                        </ul>
                    </div>  
                </td>
                <td class="mb-h">
                    <p class="mb-0 fw-bold text-center">$197</p>
                    <p class="mb-0 text-center">6h ago</p>
                </td>
                <td>
                <div class="dropdown text-center">
                    <button
                            class="btn btn-light dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            NEW
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">NEW</a></li>
                            <li><a class="dropdown-item" href="#">CALLED</a></li>
                            <li><a class="dropdown-item" href="#">ARCHIVED</a></li>
                        </ul>
                    </div>  

                    <a class="btn btn-link btn-sm btn-rounded" href="/my-leads/view">
                        <i class="fa-regular fa-eye mb-h"></i> <span class="lc-clead">See Lead Details</span>
                    </a>
                </td>
            </tr> <!-- data set end -->


            <tr> <!-- data set start -->
            <td>
                <p class="mb-0">Tony Chen</p>
                <p class="fw-bold mb-0">Apopka, FL</p>
            </td>
            <td>
                <p class="mb-0">NOV 14, 2022</p>
                <p class="mb-0">11:07PM</p>
            </td>
            <td>
                <p class="mb-0">Google Search SEO</p>
                <p class="fw-bold mb-0">Cash Offer Requested Lead</p>
            </td>
            <td>
            <div class="dropdown text-center">
                <button
                    class="btn btn-light dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    NEW
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">NEW</a></li>
                    <li><a class="dropdown-item" href="#">CALLED</a></li>
                    <li><a class="dropdown-item" href="#">ARCHIVED</a></li>
                </ul>
                </div>  
            </td>
            <td>
                <p class="mb-0 fw-bold text-center">$197</p>
                <p class="mb-0 text-center">6h ago</p>
            </td>
            <td>
                <a class="btn btn-link btn-sm btn-rounded" href="/my-leads/view">
                    <i class="fa-regular fa-eye"></i>
                </a>
            </td>
            </tr> <!-- data set end -->


            <tr> <!-- data set start -->
            <td>
                <p class="mb-0">Albert Lee</p>
                <p class="fw-bold mb-0">Orlando, FL</p>
            </td>
            <td>
                <p class="mb-0">NOV 14, 2022</p>
                <p class="mb-0">11:07PM</p>
            </td>
            <td>
                <p class="mb-0">Google Search SEO</p>
                <p class="fw-bold mb-0">Cash Offer Requested Lead</p>
            </td>
            <td>
            <div class="dropdown text-center">
                <button
                    class="btn btn-light dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
                    NEW
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">NEW</a></li>
                    <li><a class="dropdown-item" href="#">CALLED</a></li>
                    <li><a class="dropdown-item" href="#">ARCHIVED</a></li>
                </ul>
                </div>  
            </td>
            <td>
                <p class="mb-0 fw-bold text-center">$197</p>
                <p class="mb-0 text-center">6h ago</p>
            </td>
            <td>
                <a class="btn btn-link btn-sm btn-rounded" href="/my-leads/view">
                    <i class="fa-regular fa-eye"></i>
                </a>
            </td>
            </tr> <!-- data set end -->

        </tbody>
        </table>
    </div>
</div>
</x-app-layout>