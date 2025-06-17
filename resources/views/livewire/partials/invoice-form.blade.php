<div class="card border-0 shadow-sm">
    <div class="card-body py-4">
        <form action="#">
            <div class="mb-4">
                <label for="from_details" class="form-label fw-bold">
                    From Details
                </label>
                <input wire:model.live="from_details" type="text" class="form-control text-muted small" name="from_details" id="from_details">
            </div>
            <div class="mb-4">
                <label for="bill_to" class="form-label fw-bold">
                    Bill To
                </label>
                <input wire:model.live="bill_to" type="text" class="form-control text-muted small" id="bill_to">
            </div>
            <div class="mb-4">
                <label for="invoice_details" class="form-label fw-bold">
                    Invoice Details
                </label>
                <input wire:model.live="invoice_details" type="text" class="form-control text-muted small" id="invoice_details">
            </div>
            <div class="mb-4">
                <label for="invoice_items" class="form-label fw-bold">
                    Invoice Items
                </label>
                <input wire:model.live="invoice_items" type="text" class="form-control text-muted small" id="invoice_items">
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label fw-bold">
                    Comments
                </label>
                <textarea wire:model.live="comments" type="text" class="form-control text-muted small" id="comments" col="4" rows="4"></textarea>
            </div>
            <button class="btn btn-primary float-end d-md-none d-block">
                <i class="fas fa-file-invoice me-1"></i>
                Download PDF
            </button>
        </form>
    </div>
</div>