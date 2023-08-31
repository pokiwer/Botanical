<div class="modal fade" id="editTreeType" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit tree type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <!-- General Form Elements -->
                                <form id="editForm" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="treetypeid" name="id">
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Tên loại
                                            cây</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" value=""
                                                id="name">
                                        </div>
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
</div><!-- End Basic Modal-->
