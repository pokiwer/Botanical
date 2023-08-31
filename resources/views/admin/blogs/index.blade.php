@extends('admin.dashboard')
@section('title', 'Blogs')
@section('content')


    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#addModal">
                                    <i class="bi bi-plus"></i> Add new blog
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
                                                <a href="#" class="datatable-sorter">Title</a>
                                            </th>

                                            <th data-sortable="true" style="width: 19.328703703703702%">
                                                <a href="#" class="datatable-sorter">Poster</a>
                                            </th>

                                            <th data-sortable="true" style="width: 19.328703703703702%">
                                                <a href="#" class="datatable-sorter">Last edited</a>
                                            </th>

                                            <th data-sortable="true" style="width: 19.328703703703702%">
                                                <a href="#" class="datatable-sorter">Status</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->admin->name }}</td>
                                                <td>{{ $blog->updated_at }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        @if ($blog->blogstatus == 1)
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" value="1" checked>
                                                        @else
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" value="0">
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm show-btn" data-bs-toggle="modal"
                                                        value="{{ $blog }}">
                                                        <i class="bi bi-eye-fill"></i></i>
                                                    </button>
                                                    <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                        value="{{ $blog }}">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm me-2 delete-btn"
                                                        data-bs-toggle="modal" value="{{ $blog->id }}">
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
    @include('admin.blogs.create')
    @include('admin.blogs.edit')
    @include('modals.delete')
    @include('admin.blogs.show')
@endsection
@section('script')
    <link rel="stylesheet" href="{{ asset('summernote\summernote-bs4.min.css') }}">
    <script src="{{ asset('summernote\summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $(document).on('click', '.edit-btn', function(event) {
            //     event.preventDefault();
            //     var blog = $(this).val();
            //     var treetypeValue = JSON.parse(treetype);
            //     $('#id').val(treetypeValue.id);
            //     $('#name').val(treetypeValue.name);
            //     $('#editForm').attr('action', '/admin/tree_type/' + id);
            //     $('#editTreeType').modal('show');

            // });
            $(document).on('click', '.show-btn', function(event) {
                event.preventDefault();
                var blog = $(this).val();
                var blogdetail = JSON.parse(blog);
                var updated = new Date(blogdetail.updated_at);
                var formatted = updated.toLocaleString();
                console.log(blogdetail);
                $('#title').text(blogdetail.title);
                $('#poster').text(blogdetail.admin.name);
                $('#created_at').text(formatted);
                $('#content').html(blogdetail.content);
                $('#showModal').modal('show');
            });


            $(document).on('click', '.delete-btn', function(event) {
                event.preventDefault();
                var id = $(this).val();
                $('#id').val(id);
                $('#deleteForm').attr('action', '/admin/blog/' + id);
                $('#deleteModal').modal('show');
            });

            $('#summernote').summernote({
                placeholder: 'Write content here....',
                tabsize: 2,
                height: 400
            });
        });
    </script>

@endsection
