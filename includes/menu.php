<label for="customer-select">Customer:</label>
<select name="customer" id="customer-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
	<option value="">--Please choose an option--</option>
	<option value=$_SERVER['DOCUMENT_ROOT']."/client-1/index.php">Client 1</option>
	<option value=$_SERVER['DOCUMENT_ROOT']."/client-2/index.php">Client 2</option>
	<option value=$_SERVER['DOCUMENT_ROOT']."/client-3/index.php">Client 3</option>
</select>

<br /><br />