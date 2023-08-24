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
                                <!-- <div class="datatable-search">
                                                                                                              <input
                                                                                                                class="datatable-input"
                                                                                                                placeholder="Search..."
                                                                                                                type="search"
                                                                                                                title="Search within table"
                                                                                                              />
                                                                                                            </div> -->
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
                                                    <a href="google.com"><button class="btn btn-primary btn-sm me-2">
                                                            <i class="bi bi-eye"></i>
                                                        </button></a>

                                                    <button class="btn btn-danger btn-sm me-2">
                                                        <i class="bi bi-trash"></i>
                                                    </button>

                                                    <button class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil"></i>
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
@endsection
