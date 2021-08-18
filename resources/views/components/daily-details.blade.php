<x-app-layout>
    <x-slot name="header_content">
        <h1>Daily Detailed Sales</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Daile Detailed Sales</div>
        </div>
    </x-slot>
    <div>
        <x-daily-details-table :datas="$datas"></x-daily-details-table>
    </div>
</x-app-layout>

<script>

    $(document).ready(function () {
    
        $("#table-2").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
        });

        $('#exampleModal').on('show.bs.modal', function(e) {

            var cust_name = $(e.relatedTarget).data('cust_name');
            var date = $(e.relatedTarget).data('date');
            var merchant_name = $(e.relatedTarget).data('merchant_name');
            var store_name = $(e.relatedTarget).data('store_name');
            var sub_total = $(e.relatedTarget).data('sub_total');
            var total = $(e.relatedTarget).data('total');
            var service_charge = $(e.relatedTarget).data('service_charge');
            var delivery_charge = $(e.relatedTarget).data('delivery_charge');
            var order_status = $(e.relatedTarget).data('order_status');
            var delivery_status = $(e.relatedTarget).data('delivery_status');
            var commision = $(e.relatedTarget).data('commision');

            var cust_name = (cust_name!= null) ? $('#cust_name').val(cust_name) : $('#cust_name').val('N/A');
            var date = (date!= null) ? $('#date').val(date) : $('#date').val('N/A');
            var merchant_name = (merchant_name!= null) ? $('#merchant_name').val(merchant_name) : $('#merchant_name').val('N/A');
            var store_name = (store_name!= null) ? $('#store_name').val(store_name) : $('#store_name').val('N/A');
            var sub_total = (sub_total!= null) ? $('#sub_total').val(sub_total) : $('#sub_total').val('N/A');
            var total = (total!= null) ? $('#total').val(total) : $('#total').val('N/A');
            var service_charge = (service_charge!= null) ? $('#service_charge').val(service_charge) : $('#service_charge').val('N/A');
            var delivery_charge = (delivery_charge!= null) ? $('#delivery_charge').val(delivery_charge) : $('#delivery_charge').val('N/A');
            var order_status = (order_status!= null) ? $('#order_status').val(order_status) : $('#order_status').val('N/A');
            var delivery_status = (delivery_status!= null) ? $('#delivery_status').val(delivery_status) : $('#delivery_status').val('N/A');
            var commision = (commision!= null) ? $('#commision').val(commision) : $('#commision').val('N/A');

        });
        
    });
    
</script>