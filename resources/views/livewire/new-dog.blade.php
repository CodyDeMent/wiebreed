<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/admin/dog/new" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Dog Name</label>
                        <input  name="name" type="text" class="form-control" id="name" aria-describedby="dogHelp">
                        <div id="dogHelp" class="form-text">This will allow you to easily identify them on the site</div>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control" id="birthdate">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label><br />
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mother" class="form-label">Mother's ID</label>
                        <input type="number" name="mother" class="form-control" id="mother" value=0>
                    </div>
                    <div class="mb-3">
                        <label for="father" class="form-label">Father's ID</label>
                        <input type="number" name="father" class="form-control" id="father" value=0>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="parent">Is this dog a parent?</label>
                        <select name="parent" id="parent" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="picture" name="picture" class="form-label">Picture ID</label>
                        <input name="picture" type="number" class="form-control" id="picture">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="adoptable">Adoptable?</label>
                        <select name="adoptable" id="adoptable" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
