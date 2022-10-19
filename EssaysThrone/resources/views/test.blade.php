<form method="post" action="{{ route('frontend.test_file') }}" enctype="multipart/form-data">
	@csrf
	<input type="file" name="files[]" multiple><br><br>
	<button type="submit">Upload</button>
</form>