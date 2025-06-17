<div class="card-body">
    <button class="btn btn-primary float-end">
        <i class="fas fa-file-invoice me-1"></i> Download PDF
    </button>

    <div class="clearfix mb-4"></div>
    <hr />

    <div class="row">
        <div class="col-12 col-md-6 px-4">
            <h4 class="fw-bold">INVOICE</h4>
            <p class="text-muted fw-bold mt-2">
                Date: <span class="text-dark">12/12/24</span>
            </p>
            <p class="text-muted fw-bold mt-1">
                Invoice Number: <span class="text-dark">#00005</span>
            </p>

            <div class="mt-4">
                <p class="fw-bold">From</p>
                <p class="fw-bold">{{ $from_details }}</p>
                <p class="text-muted fw-bold">
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
                <p class="fw-bold">Bill To</p>
                <p class="fw-bold">{{$bill_to}}</p>
                <p class="text-muted fw-bold pt-3">
                    13th Street. 47 W 13th St, New York, NY 10011, USA.
                </p>
            </div>
        </div>

        <div class="px-4 mt-4">
            <table class="table">
                <thead class="table-white">
                    <tr>
                        <th>Description</th>
                        <th>Hours</th>
                        <th>Rate/Hour</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website Development</td>
                        <td>10</td>
                        <td>$50</td>
                        <td>$500</td>
                    </tr>
                </tbody>
                <tfoot class="table-white">
                    <tr>
                        <th colspan="3" class="text-end small">Total</th>
                        <th>$1,120</th>
                    </tr>
                </tfoot>
            </table>
        </div>

       @if($comments)
         <p class="fw-bold px-4">
            Notes
            <span class="d-block text-muted">
                {{$comments }}
            </span>
        </p>
       @endif

    </div>
</div>