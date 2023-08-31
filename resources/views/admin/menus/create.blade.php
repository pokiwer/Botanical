<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Add new menu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <form action="/admin/menu" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-2 col-form-label">Tên menu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>

                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Trạng thái</label>
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            name="menustatus" checked>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Thêm
                                                menu</button>
                                        </div>
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
