@extends('admin.dashboard')
@section('title', 'Tree Types')
@section('content')


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                    data-bs-target="#addTreeType">
                                    <i class="bi bi-plus"></i> Add Tree Type
                                </button>
                            </div>
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 5.671296296296297%">
                                                <a href="#" class="datatable-sorter">#</a>
                                            </th>
                                            <th data-sortable="true" style="width: 28.009259259259263%">
                                                <a href="#" class="datatable-sorter">Tên loại cây</a>
                                            </th>

                                            <th data-sortable="true" style="width: 19.328703703703702%">
                                                <a href="#" class="datatable-sorter">Thao tác</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($treetypes as $treetype)
                                            <tr>
                                                <td>{{ $treetype->id }}</td>
                                                <td>{{ $treetype->name }}</td>
                                                <td>

                                                    <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                        value="{{ $treetype }}">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm me-2 delete-btn"
                                                        data-bs-toggle="modal" value="{{ $treetype->id }}">
                                                        <i class="bi bi-trash"></i>
                                                    </button>



                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('admin.tree_types.create')
    @include('admin.tree_types.edit')
    @include('modals.delete')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-btn', function(event) {
                event.preventDefault();
                var treetype = $(this).val();
                var treetypeValue = JSON.parse(treetype);
                $('#id').val(treetypeValue.id);
                $('#name').val(treetypeValue.name);
                $('#editForm').attr('action', '/admin/tree_type/' + id);
                $('#editTreeType').modal('show');

            });

            $(document).on('click', '.delete-btn', function(event) {
                event.preventDefault();
                var id = $(this).val();
                $('#treetype_id').val(id);
                $('#deleteForm').attr('action', '/admin/tree_type/' + id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection
