<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Danh Sách Hụi
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <style>
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
            /* Adjust width for large modals */
        }

        .select2-container {
            width: 100% !important;
            /* Ensure select2 takes full width */
        }
    </style>
</head>

<body>
    <div class="container container-fluid mt-4">
        <!-- Buttons Section -->
        <div class="d-flex justify-content-between align-items-center mb-3"
            style="background-color: rgba(63,107,162,255);">
            <div class="d-flex px-3">
                <button class="btn btn-light btn-custom" style="border: 1px solid #473d3d;">Trang chủ</button>
                <button class="btn btn-light btn-custom" style="border: 1px solid #473d3d;">Tìm kiếm</button>
                <button class="btn btn-danger btn-custom" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">Tạo dây hụi</button>
                <a href="{{ route('user.report') }}">
                    <button class="btn btn-success btn-custom">Báo cáo</button>
                </a>
            </div>
            <div class="flex-grow-1 px-5">
                <h4 class="text-white">
                    DANH SÁCH HỤI
                </h4>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <strong class="text-danger">
                Hiện tại có 16 dây hụi
            </strong>
        </div>
        <!-- Table Section -->
        <table class="table table-bordered table-status mt-2">
            <thead>
                <tr>
                    <th scope="col">
                        Mã
                    </th>
                    <th scope="col">
                        Ngày mở hụi
                    </th>
                    <th scope="col">
                        Dây hụi
                    </th>
                    <th scope="col">
                        Khui
                    </th>
                    <th scope="col">
                        Số phần
                    </th>
                    <th scope="col">
                        Danh sách hụi viên
                    </th>
                    <th scope="col">
                        Tình Trạng
                    </th>
                    <th scope="col">
                        Ghi chú
                    </th>
                    <th scope="col">
                        Chốt
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>16</td>
                    <td>03/05/23</td>
                    <td>3,000,000</td>
                    <td>Ngày 3TR</td>
                    <td>17</td>
                    <td>Bông / Chính-1 / Chinh-2 / Kiều-2 / LOAN-1 / LOAN-2</td>
                    <td><span class="status-ok px-3 py-1 rounded">13 / 17</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
            </tbody>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <span> Ngày mở hụi: </span>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Ngày mở hụi" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <span> Số tiền dây hụi: </span>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Số tiền" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <span> Khui: </span>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Khui" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="row">
                        <div class="col-lg-4">
                            <span> Số phần: </span>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Số phần" aria-label="Username"
                                aria-describedby="basic-addon1">
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
                    <h5 class="modal-title">TDanh sách hội viên</h5>
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

    <script>
        document.getElementById('createHuiBtn').addEventListener('click', function() {
            var exampleModal = bootstrap.Modal.getInstance(document.getElementById('exampleModalCenter'));
            exampleModal.hide();
            var newModal = new bootstrap.Modal(document.getElementById('newModal'));
            newModal.show();
        });

        $(document).ready(function() {
            $('#mySelect').select2();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</body>

</html>
