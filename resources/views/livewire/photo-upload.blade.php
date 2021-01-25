<div class="container">
    <div>
        <div>
            <div class="row">
                <div class="col>">
                    <form wire:submit.prevent="submitForm" method="post" action="/admin/upload" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <input type="file" name="photo" id="photo"/>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</div>