<form>
    <div class="col-md-12">
        <div class="row">
            <input type="hidden" name="id" id="id" value="0">

            <div class="col-md-12 form-group">
                <label for="countryName">Country</label>
                <input type="text" name="countryName" id="countryName" class="form-control req" value="">
            </div>
			<!-- <div class="col-md-12 form-group">
                <label for="countryName">Country</label>
                <select name="countryName" id="countryName" class="form-control select2 req">
					<option value="">Select Country</option>
					<option value="test 1">Afganistan</option>
					<option value="test 2">US</option>
					<option value="test 3">India</option>
				</select>
            </div> -->
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
    $('#countryForm').validate({
		rules: {
			countryName: {
				required: true
			}
		},
		messages: {
			countryName: {
				required: "Country Name is required."
			}
		},
		errorElement: 'div',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
});
</script>