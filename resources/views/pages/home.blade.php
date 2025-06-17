@extends('layout')

@section('content')
    <div class="container-fluid py-md-5 py-4 px-md-5 px-4">
        <h2 class="fw-bold">Create Invoice</h2>
        <p class="text-muted fw-bold small">Generate professional invoices in seconds. No signup required.</p>
        <livewire:invoice-editor />
    </div>
@endsection