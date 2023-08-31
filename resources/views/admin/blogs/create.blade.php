<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- General Form Elements -->
                                <form action="/admin/blog" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Tiêu đề</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                                        <div class="col-sm-10">
                                            <textarea name="content" id="summernote" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="val-area" class="form-label">Poster<span
                                                class="text-danger">*</span></label>
                                        <select name="admin_id" class="form-control" id="admin_id">
                                            @foreach ($posters as $poster)
                                                <option value="{{ $poster->id }}">
                                                    {{ $poster->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Trạng thái</label>
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            name="blogstatus" checked>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>

                                </form><!-- End General Form Elements -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
