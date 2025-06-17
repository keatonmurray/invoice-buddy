<div class="card border-0 shadow-sm">
    <div class="card-body">
        <button class="btn btn-primary float-end">
            <i class="fas fa-file-invoice me-1"></i> Download PDF
        </button>
        <div class="clearfix mb-4"></div>

        <hr />

        <div class="row">
            <div class="col-12 col-md-6 px-4">
                <h4 class="fw-bold">INVOICE</h4>
                <p class="small text-muted fw-bold mt-2">
                    Date: <span class="text-dark">12/12/24</span>
                </p>
                <p class="small text-muted fw-bold mt-1">
                    Invoice Number: <span class="text-dark">#00005</span>
                </p>

                <div class="mt-5">
                    <p class="small fw-bold">From</p>
                    <p class="small fw-bold">Spiky Blooms</p>
                    <p class="small text-muted fw-bold">
                        777 Brockton Avenue, Abington MA 2351
                        <span class="d-block">support@spikyblooms.com</span>
                        <span class="d-block">+1(123)4567890</span>
                        <span class="d-block">Tax ID: 123123123</span>
                    </p>
                </div>
            </div>

            <div class="px-4 col-12 col-md-6 d-flex flex-column align-items-end text-end">
                <figure>
                    <img src="{{asset('img/business-logo.png')}}" class="business-logo" alt="Business Logo">
                </figure>

                <div class="mt-5">
                    <p class="small fw-bold">Bill To</p>
                    <p class="small fw-bold">John Doe</p>
                    <p class="small text-muted fw-bold pt-3">
                        250 Hartford Avenue, Bellingham MA 2019
                    </p>
                </div>
            </div>

            <table class="table mt-4 px-4">
                <thead class="table-white">
                    <tr>
                        <th class="small">Description</th>
                        <th class="small">Hours</th>
                        <th class="small">Rate/Hour</th>
                        <th class="small">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="small">Website Development</td>
                        <td class="small">10</td>
                        <td class="small">$50</td>
                        <td class="small">$500</td>
                    </tr>
                    <tr>
                        <td class="small">Design Mockup</td>
                        <td class="small">5</td>
                        <td class="small">$40</td>
                        <td class="small">$200</td>
                    </tr>
                    <tr>
                        <td class="small">API Integration</td>
                        <td class="small">7</td>
                        <td class="small">$60</td>
                        <td class="small">$420</td>
                    </tr>
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <th colspan="3" class="text-end small">Total</th>
                        <th class="small">$1,120</th>
                    </tr>
                </tfoot>
            </table>

            <p class="small fw-bold px-4">
                Notes
                <span class="d-block text-muted">
                    Here's the breakdown of the payment!
                </span>
            </p>
            

        </div>
    </div>
</div>