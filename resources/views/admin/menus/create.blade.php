@extends('admin.dashboard')
@section('title', 'Add menu')
@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form action="/admin/menu" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tên menu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Vi trí</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="{{ $menu + 1 }}" name="menuindex">
                                </div>
                            </div>
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Trạng thái</label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                    name="menustatus" checked>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Thêm menu</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
