@extends('layout')

@section('content')
    <div class="container=luid py-md-5 py-4 px-md-5 px-4">
        <h2 class="fw-bold">Create Invoice</h2>
        <p class="text-muted fw-bold small">Generate professional invoices in seconds. No signup required</p>
    
        <div class="row">
            <div class="col-12 col-md-6 mt-md-1 mt-4 mb-md-auto mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <form action="#">
                            <div class="mb-4">
                                <label for="from_details" class="form-label fw-bold">
                                    From Details
                                </label>
                                <input type="text" class="form-control text-muted small" name="bill_to" id="bill_to">
                            </div>
                            <div class="mb-4">
                                <label for="bill_to" class="form-label fw-bold">
                                    Bill To
                                </label>
                                <input type="text" class="form-control text-muted small" name="bill_to" id="bill_to">
                            </div>
                            <div class="mb-4">
                                <label for="comments" class="form-label fw-bold">
                                    Invoice Details
                                </label>
                                <input type="text" class="form-control text-muted small" name="invoice_details" id="invoice_details">
                            </div>
                            <div class="mb-4">
                                <label for="invoice_items" class="form-label fw-bold">
                                    Invoice Items
                                </label>
                                <input type="text" class="form-control text-muted small" name="invoice_items" id="invoice_items">
                            </div>
                            <div class="mb-4">
                                <label for="comments" class="form-label fw-bold">
                                    Comments
                                </label>
                                <textarea type="text" class="form-control text-muted small" name="comments" id="comments" col="4" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="footer_text" class="form-label fw-bold">
                                    Footer Text
                                </label>
                                <textarea type="text" class="form-control text-muted small" name="footer_text" id="footer_text" col="4" rows="4"></textarea>
                            </div>
                            <button class="btn btn-primary float-end d-md-none d-block">
                                <i class="fas fa-file-invoice me-1"></i>
                                Download PDF
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 d-md-block d-none">
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

                            <div class="px-4">
                                <table class="table mt-4">
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
                            </div>

                            <p class="small fw-bold px-4">
                                Notes
                                <span class="d-block text-muted">
                                    Here's the breakdown of the payment!
                                </span>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection