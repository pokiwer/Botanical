<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortable Index Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Thư viện SortableJS -->

    <!-- Biểu tượng Font Awesome -->
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
        Open Index Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="indexModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="indexModalLabel">Menu Index Management</h5>

                </div>
                <div class="modal-body">
                    <ul class="list-group sortable-list" id="index-list">
                        <li class="list-group-item" data-id="1">
                            <input type="text" class="form-control menu-name-input" value="Home">
                            <i class="bi bi-grab"></i>
                        </li>
                        <li class="list-group-item" data-id="2">
                            <input type="text" class="form-control menu-name-input" value="About">
                            <i class="bi bi-grab"></i>
                        </li>
                        <li class="list-group-item" data-id="2">
                            <input type="text" class="form-control menu-name-input" value="Contact">
                            <i class="bi bi-grab"></i>
                        </li>
                        <li class="list-group-item" data-id="2">
                            <input type="text" class="form-control menu-name-input" value="Shop">
                            <i class="bi bi-grab"></i>
                        </li>
                        <!-- Thêm các mục khác vào đây -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveButton">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS và jQuery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sortable.min.js') }}"></script>

    <script>
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
                        `Item with ID ${item.getAttribute("data-id")} has new name: ${menuNameInput.value}`
                    );
                    // Tại đây bạn có thể cập nhật dữ liệu của menu dựa trên tên mới
                });
                $('#indexModal').modal('hide'); // Đóng modal sau khi lưu
            });
        });
    </script>
</body>

</html>
