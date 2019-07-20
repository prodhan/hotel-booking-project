<?php include('header.php'); ?>

 <div class="row">
            <div class="col-xs-12 col-md-12">
                <div>
                    <h2 class="text-center">jQuery Invoice Plugin Demo</h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            Likhon Likh<br>
                            122, Dhaka, Bangladesh<br>
                        </address>
                    </div>
                    <div class="col-xs-6 col-md-6 text-right">
                        <address>
                            <strong>Shipped To:</strong><br>
                            Shishir<br>
                            56, Dhaka, Bangladesh<br>
                        </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <address>
                            <strong>Payment Method:</strong><br>
                            Visa ending **** 1234<br>
                            likh.deshi@gmail.com
                        </address>
                    </div>
                    <div class="col-xs-6 col-md-6 text-right">
                        <address>
                            <strong>Order Date:</strong><br>
                            Jan 05, 2017<br><br>
                            Order No: <strong>1234</strong>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="item-row">
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr id="hiderow">
                            <td colspan="4">
                                <a id="addRow" href="javascript:;" title="Add a row" class="btn btn-primary">Add a row</a>
                            </td>
                        </tr>
                        <!-- Here should be the item row -->
                        <!--<tr class="item-row">
                            <td><input class="form-control item" placeholder="Item" type="text"></td>
                            <td><input class="form-control price" placeholder="Price" type="text"></td>
                            <td><input class="form-control qty" placeholder="Quantity" type="text"></td>
                            <td><span class="total">0.00</span></td>
                        </tr>-->
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Sub Total</strong></td>
                            <td><span id="subtotal">0.00</span></td>
                        </tr>
                        <tr>
                            <td><strong>Total Quantity: </strong><span id="totalQty" style="color: red; font-weight: bold">0</span> Units</td>
                            <td></td>
                            <td class="text-right"><strong>Discount</strong></td>
                            <td><input class="form-control" id="discount" value="0" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Shipping</strong></td>
                            <td><input class="form-control" id="shipping" value="0" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Grand Total</strong></td>
                            <td><span id="grandTotal">0</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/inv/js/jquery.invoice.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                addRow : "#addRow",
                delete : ".delete",
                parentClass : ".item-row",

                price : ".price",
                qty : ".qty",
                total : ".total",
                totalQty: "#totalQty",

                subtotal : "#subtotal",
                discount: "#discount",
                shipping : "#shipping",
                grandTotal : "#grandTotal"
            });
        });
    </script>
<?php include('footer.php'); ?>