<?php

namespace App\Livewire;

use Livewire\Component;

class InvoiceEditor extends Component
{

    public $from_details = '';
    public $bill_to = '';
    public $invoice_details = '';
    public $invoice_items = '';
    public $comments = '';

    public function render()
    {
        return view('livewire.invoice-editor');    
    }
}
