<?php
include('header.php');
include('connection.php');
?>
<script src="assets/inv/js/auto.js"></script>
    <script src="assets/inv/js/jquery.min.js"></script>
    <script src="assets/inv/js/jquery-ui.min.js"></script>
    <script src="assets/inv/js/bootstrap.min.js"></script>
    <script src="assets/inv/js/bootstrap-datepicker.js"></script>
<form action="insert-invoice.php" method="post">
    <div class="container content">
    	
      
      	<div class='row'>
      		<div class='col-xs-12 col-sm-4  col-lg-4'>
      			<div class="form-group">
				<p>Customer Name or ID</p>
				<input type="text" class="form-control" name="customer_name" value="walking">
					
				</div>
				<div class="form-group">
				<p>Receipt By </p>
					<select name="recptBy" class="form-control">
<?php 
$sql = mysqli_query($conn, "SELECT * FROM users ");
while ($row = mysqli_fetch_array($sql)){
echo "<option value=". $row['name'] . ">" . $row['name'] . "</option>";
}
?>
</select>
				</div>
				</div>
				
      		
      		<div class='col-xs-12 col-sm-4  col-lg-4'>
      			<div class="form-group">
				
				<?php 
$sql = mysqli_query($conn, "SELECT id FROM hotel_invoice ORDER BY id DESC LIMIT 1");
while ($row = mysqli_fetch_array($sql)){
$suffix = $row['id'];
$sl= "H2018".$suffix;

}
?>
<p>Invoice ID</p>
					<input type="text" class="form-control" name="invoiceNo" id="invoiceNo" value="<?php echo $sl; ?>" >
				</div>
				<div class="form-group">
					<input type="date" class="form-control" name="invoiceDate" placeholder="Invoice Date">
				</div>
				<div class="form-group">
					<input type="number" class="form-control amountDue" name="due" id="amountDueTop" placeholder="Amount Due">
				</div>
      		</div>
      	</div>
      	<h2>&nbsp;</h2>
      	<div class='row'>
      		<div class='col-xs-8 col-sm-10 col-md-9 col-lg-10'>
      			<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
							<th width="15%">Item No</th>
							<th width="38%">Item Name</th>
							<th width="15%">Price</th>
							<th width="15%">Quantity</th>
							<th width="15%">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input class="case" type="checkbox"/></td>
							
							
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							
							<td><input type="text" data-type="productName" name="itemName[]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
							
							<td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							
							<td><input type="number" name="quantity[]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							
							<td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
							
						</tr>
					</tbody>
				</table>
      		</div>
      	</div>
      	<div class='row'>
      		<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3'>
      			<button class="btn btn-danger delete" type="button">- Delete</button>
      			<button class="btn btn-success addmore" type="button">+ Add More</button>
      		</div>
			
      		

      	<div class='col-xs-12 col-sm-8  col-lg-10'>
		
      		<div class='col-xs-12 col-sm-4  col-lg-4'>
			<h4 style="padding:2px">Subtotal: &nbsp;</h4> 
			<h4 style="padding:2px">Discount: &nbsp;</h4> 
			
			<h4 style="padding:2px">Total: &nbsp;</h4> 
			
			
			
			 
			<h4 style="padding:2px">Amount Due: &nbsp;</h4>  
			
			</div>
      		<div class='col-xs-12 col-sm-4  col-lg-4'>
				
					
						
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" class="form-control" id="subTotal"name="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
				
					
						
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" class="form-control" name="discount" id="tax" placeholder="Discount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					
				
						
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" class="form-control" id="totalAftertax" placeholder="Total" name="total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					
			
					
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" class="form-control" id="amountPaid" name="commission" placeholder="Commission" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
						
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input type="number" class="form-control amountDue" id="amountDue" name="netAmount" placeholder="Net Amount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
						</div>
					
				
			</div>
			</div>
      	</div>
      		
    </div>

	<h2>&nbsp;</h2>
	<p align="center"><input type="submit" name="submit" class="btn btn-success" value="Save and Print"   /></p>
	<br />
	<br />
	<br />
	
    </form>
    
    

    

<?php include('footer.php');