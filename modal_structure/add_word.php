
<div class ="boxes bg-transparent bg-gradient p-2 mt-1">
        <p>
            Adding new Word
        </p>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="tagalog" name="tagalog"
              placeholder="Tagalog"required >
                <label for="tagalog" required>Tagalog Word</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="ilocano" name="ilocano"
              placeholder="Ilocano"required >
                <label for="ilocano" required>Ilocano Word</label>
            </div>
                <div class="mb-3">
                    <label for="upload_file" class="form-label"> Image File</label>
                    <input class="form-control" type="file" 
                     name = "upload_file" accept = "image/jpg, image/jpeg, image/png" id="upload_file">
                </div>
                <div class = "form-group mb-3" id = "preview" style="text-align:center">
                    <i id = "preview" width = "100px" height = "300px"></i>
                </div>
</div>
