@extends('layout')

@section('content')
    <div class="container py-md-5 py-4 px-4">
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
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 d-md-block d-none">

            </div>

        </div>
    </div>
@endsection