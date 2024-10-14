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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tạo hụi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="datePicker">Ngày mở hụi:</label>
                        <input type="text" class="form-control" id="datePicker" placeholder="Ngày mở hụi">
                    </div>
                    <div class="mb-3">
                        <label for="moneyInput">Số tiền dây hụi:</label>
                        <input type="text" class="form-control" id="moneyInput" placeholder="Số tiền">
                    </div>
                    <div class="mb-3">
                        <label for="cutInput">Khui:</label>
                        <input type="text" class="form-control" id="cutInput" placeholder="Khui">
                    </div>
                    <div class="mb-3">
                        <label for="partInput">Số phần:</label>
                        <input type="text" class="form-control" id="partInput" placeholder="Số phần">
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-success" id="createHuiBtn">Lưu Phiếu</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(function() {
            $('#datePicker').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true
            });

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

            $('#createHuiBtn').on('click', function() {
                $('#exampleModalCenter').modal('hide');
                // Add code to send a POST request to create the new hui
                // Call loadData() again to refresh the data after creation
            });
        });
    </script>
</body>

</html>
