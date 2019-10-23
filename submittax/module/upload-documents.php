<form method="post" action="../config/function.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Document Name" name="doc-name" required>
    </div>
    <div class="col">
		<div class="custom-file">
<!-- 		  <input type="file" class="custom-file-input" id="customFile" name="file_to_upload1" required>
 -->		 <input type="file" name="file_to_upload" required>
      <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
		</div>
    </div>
    <div class="col">
      <Button type="submit" name="upload_doc" class="btn btn-primary">Upload</Button>
    </div>

  </div>
</form>