@extends('admin.dashboard')
@section('title', 'Menu')
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
                                    <i class="bi bi-plus"></i> Add new menu
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
                                                <a href="#" class="datatable-sorter">Tên menu</a>
                                            </th>
                                            <th data-sortable="true" style="width: 37.73148148148148%">
                                                <a href="#" class="datatable-sorter">Vị trí</a>
                                            </th>
                                            <th data-sortable="true" style="width: 9.25925925925926%">
                                                <a href="#" class="datatable-sorter">Trạng thái</a>
                                            </th>
                                            <th data-sortable="true" style="width: 19.328703703703702%">
                                                <a href="#" class="datatable-sorter">Thao tác</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->id }}</td>
                                                <td>{{ $menu->name }}</td>
                                                <td>{{ $menu->menuindex }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        @if ($menu->menustatus == 1)
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" value="1" checked>
                                                        @else
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" value="0">
                                                        @endif
                                                    </div>
                                                </td>

                                                <td>
                                                    <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="modal"
                                                        value="{{ $menu->id }} ">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm me-2 delete-btn"
                                                        value="{{ $menu->id }}">
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
    @include('admin.menus.create')
    @include('modals.delete')
    @include('admin.menus.edit')
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-btn', function(event) {
                event.preventDefault();
                var id = $(this).val();
                $('#editModal').modal('show');
                $.ajax({
                    type: 'GET',
                    url: '/admin/menu/' + id + '/edit',
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const indexList = document.getElementById("index-list");
            const sortable = new Sortable(indexList, {
                animation: 150,
                ghostClass: "sortable-ghost",
            });

            const saveButton = document.getElementById("saveButton");
            saveButton.addEventListener("click", function() {
                const listItems = indexList.querySelectorAll("li");
                listItems.forEach((item, index) => {
                    const menuNameInput = item.querySelector(".menu-name-input");
                    console.log(
                        `Item with ID ${item.getAttribute("data-id")} with index ${index} has new name: ${menuNameInput.value}`
                    );
                    // Tại đây bạn có thể cập nhật dữ liệu của menu dựa trên tên mới
                });
                $('#editModal').modal('hide'); // Đóng modal sau khi lưu
            });
        });
    </script>

@endsection
