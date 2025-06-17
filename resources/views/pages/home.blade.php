@extends('layout')

@section('content')
    <div class="container-fluid py-md-5 py-4 px-md-5 px-4">
        <h2 class="fw-bold">Create Invoice</h2>
        <p class="text-muted fw-bold small">Generate professional invoices in seconds. No signup required</p>
        <livewire:invoice-editor />
        <div class="row">
            <div class="col-12 col-md-6 mt-md-1 mt-4 mb-md-auto mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <livewire:invoice-form />
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 d-md-block d-none">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <livewire:invoice-pdf />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection