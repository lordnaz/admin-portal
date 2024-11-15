<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sales Order Details</h5>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- <a href="#" class="btn btn-icon btn-sm btn-danger" data-dismiss="modal" aria-label="Close" style="border-radius: 100px;"><i class="fas fa-times"></i></a> --}}
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Date</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="date">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Customer Name</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="cust_name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Store Name</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="store_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Store Owner</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="merchant_name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Sub-Total (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="sub_total">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Total (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="total">
                    </div>
                </div>
                    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Service Charge (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="service_charge">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Delivery Charge (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="delivery_charge">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Commision (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="commision">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Order Status</label>
                    <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="order_status">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Delivery Status</label>
                    <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="delivery_status">
                    </div>
                </div>

                <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="dailySalesModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daily Sales Summary</h5>
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{-- <a href="#" class="btn btn-icon btn-sm btn-danger" data-dismiss="modal" aria-label="Close" style="border-radius: 100px;"><i class="fas fa-times"></i></a> --}}
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Date</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="date2">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Settlement Ref ID</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="settlement_id2">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Total Order</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="total_order2">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Commision</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="commision2">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Successful Order</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="success_order2">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Canceled Order</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="cancel_order2">
                    </div>
                </div>
                    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-primary">Total Amount (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="total_amount2">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-primary">Earning (RM)</label>
                        <input type="text" class="form-control-plaintext font-weight-bold" readonly="" id="amount_earn2">
                    </div>
                </div>

                <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>