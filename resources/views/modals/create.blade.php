<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    @section('title')
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                @section('content')
                                @show
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div><!-- End Basic Modal-->
