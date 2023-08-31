@php
    $menus = App\Models\Menu::where('menustatus', 1)
        ->orderBy('menuindex')
        ->get();
@endphp

<style>
    /* Tùy chỉnh giao diện */
    .sortable-list {
        list-style: none;
        padding: 0;
    }

    .sortable-list li {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        margin-bottom: 8px;
        padding: 10px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        transition: background-color 0.2s ease-in-out, transform 0.2s ease-in-out;
    }

    .sortable-list li:hover {
        background-color: #f1f1f1;
    }

    .sortable-list li:active {
        transform: translateY(2px);
    }

    .sortable-list li i {
        cursor: move;
    }

    .menu-name-input {
        width: 100%;
        border: none;
        background-color: transparent;
        outline: none;
    }
</style>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="indexModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="indexModalLabel">Menu Index Management</h5>

            </div>
            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <ul class="list-group sortable-list" id="index-list">
                        @foreach ($menus as $menu)
                            <li class="list-group-item" data-id="{{ $menu->menuindex }}">
                                <input type="text" class="form-control menu-name-input" value="{{ $menu->name }}">
                                <i class="bi bi-border-width"></i>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveButton">Save</button>
            </div>
        </div>
    </div>
</div>
