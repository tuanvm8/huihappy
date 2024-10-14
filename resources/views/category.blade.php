<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh Sách Hụi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <style>
        /* Your existing styles */
        .table-status {
            width: 100%;
        }

        .table-status thead th {
            text-align: center;
            background-color: rgba(216, 235, 242, 255);
        }

        .table-status tbody td {
            vertical-align: middle;
            text-align: center;
        }

        .status-ok {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
        }

        .status-red {
            background-color: #dc3545;
            color: white;
        }

        .btn-custom {
            margin-right: 10px;
        }

        /* Custom styles for modal */
        .modal-lg {
            max-width: 90%;
        }

        .select2-container {
            width: 100% !important;
        }
    </style>
</head>

<body>
    <div class="container container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3"
            style="background-color: rgba(63,107,162,255);">
            <div class="d-flex px-3">
                <button class="btn btn-light btn-custom">Trang chủ</button>
                <button class="btn btn-light btn-custom">Tìm kiếm</button>
                <button class="btn btn-danger btn-custom" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">Tạo dây hụi</button>
                <a href="{{ route('admin.user.report') }}">
                    <button class="btn btn-success btn-custom">Báo cáo</button>
                </a>
            </div>
            <h4 class="text-white">DANH SÁCH HỤI</h4>
        </div>
        <strong class="text-danger" id="totalCount">Hiện tại có 0 dây hụi</strong>
        <table class="table table-bordered table-status mt-2" id="huiTable">
            <thead>
                <tr>
                    <th scope="col">Mã</th>
                    <th scope="col">Ngày mở hụi</th>
                    <th scope="col">Dây hụi</th>
                    <th scope="col">Khui</th>
                    <th scope="col">Số phần</th>
                    <th scope="col">Danh sách hụi viên</th>
                    <th scope="col">Tình Trạng</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Chốt</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- First Modal (Tạo dây hụi) -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo hụi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label class="col-lg-4">Ngày mở hụi:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="openDate" placeholder="Ngày mở hụi"
                                aria-label="Ngày mở hụi" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-4">Số tiền dây hụi:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="huiAmount" placeholder="Số tiền"
                                aria-label="Số tiền" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-4">Khui:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="khoi" placeholder="Khui"
                                aria-label="Khui" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-lg-4">Số phần:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="numberOfParts" placeholder="Số phần"
                                aria-label="Số phần" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-success" id="createHuiBtn">Lưu Phiếu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal mới -->
    <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Danh sách hội viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <select class="form-select" id="mySelect" multiple style="width: 100%;">
                                    <option value="1">Giá trị 1</option>
                                    <option value="2">Giá trị 2</option>
                                </select>
                            </div>
                            <div class="col-lg-2 flex-column align-items-center">
                                <div class="mb-2 d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary">=></button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary">
                                        <= </button>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <select class="form-select" id="mySelect" multiple style="width: 100%;">
                                    <option value="1">Giá trị 1</option>
                                    <option value="2">Giá trị 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-success" id="createHuiBtn">Tạo dây hụi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Đảm bảo jQuery được tải trước các script khác -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            // Khởi tạo Date Picker
            $('#openDate').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });

            // Khởi tạo Select2
            $('#mySelect').select2();

            //load data
            const loadData = () => {
                $.ajax({
                    url: 'http://127.0.0.1:8000/admin/festivals',
                    method: 'GET',
                    success: data => {
                        const rows = data.map(item => `
                            <tr>
                                <td>${item.id}</td>
                                <td>${item.start_date}</td>
                                <td>${item.money}</td>
                                <td>${item.cut_open}</td>
                                <td>${item.part}</td>
                               <td>${item.user ? item.user.name : 'Không có'}</td>
                                <td><span class="status-ok px-3 py-1 rounded">${item.status}</span></td>
                                <td>${item.note}</td>
                                <td><span class="status-red px-3 py-1 rounded">${item.is_supported ? 'OK' : 'Not OK'}</span></td>
                            </tr>
                        `).join('');
                        $('#huiTable tbody').html(rows);
                        $('#totalCount').text(`Hiện tại có ${data.length} dây hụi`);
                    },

                    error: error => console.error('Error fetching data:', error)
                });
            }

            loadData();

            // Xử lý sự kiện nhấn nút "Lưu Phiếu"
            $('#createHuiBtn').on('click', function() {
                const openDate = $('#openDate').val();
                const huiAmount = $('#huiAmount').val();
                const khui = $('#khoi').val();
                const numberOfParts = $('#numberOfParts').val();

                // Đóng modal sau khi lưu
                $('#exampleModalCenter').modal('hide');

                // Mở modal danh sách hội viên
                $('#newModal').modal('show');
            });
        });
    </script>
</body>

</html>
