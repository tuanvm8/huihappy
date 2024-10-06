<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Danh Sách Hụi
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                <button class="btn btn-danger btn-custom">Tạo dây hụi</button>
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
                <tr>
                    <td>15</td>
                    <td>30/04/23</td>
                    <td>1,000,000</td>
                    <td>Ngày 1TR D3</td>
                    <td>22</td>
                    <td>Bé Tý / Bích bự / Bông-1 / LOAN-3 / Lộc</td>
                    <td><span class="status-ok px-3 py-1 rounded">15 / 22</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>30/04/23</td>
                    <td>500,000</td>
                    <td>Ngày 500 D3</td>
                    <td>27</td>
                    <td>LOAN-1 / LOAN-2 / LOAN-3 / Khánh Linh / Kiều-1</td>
                    <td><span class="status-ok px-3 py-1 rounded">15 / 27</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>06/05/23</td>
                    <td>2,000,000</td>
                    <td>Ngày 2TR D3</td>
                    <td>18</td>
                    <td>An / Loan / Bé Thơ / Ngọc Hân / LOAN-1 / LOAN-2</td>
                    <td><span class="status-ok px-3 py-1 rounded">9 / 18</span></td>
                    <td>XXX</td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>11/05/23</td>
                    <td>1,000,000</td>
                    <td>Ngày 1TR D4</td>
                    <td>21</td>
                    <td>Nhật Huỳnh / Chí Anh / Lý / LOAN-1 / Loan / Bông</td>
                    <td><span class="status-ok px-3 py-1 rounded">6 / 21</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>13/05/23</td>
                    <td>1,000,000</td>
                    <td>Ngày 1TR D5</td>
                    <td>26</td>
                    <td>LOAN-1 / LOAN-2 / Bông / LOAN-3 / Nhật Huỳnh</td>
                    <td><span class="status-ok px-3 py-1 rounded">10 / 26</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>27/02/23</td>
                    <td>2,000,000</td>
                    <td>Tuần 2TR T2</td>
                    <td>15</td>
                    <td>Bông / Chí Anh / LOAN-1 / LOAN-2 / Nhật Hoa</td>
                    <td><span class="status-ok px-3 py-1 rounded">11 / 15</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>15/05/23</td>
                    <td>1,000,000</td>
                    <td>Ngày 1TR D5</td>
                    <td>24</td>
                    <td>Hà / Kavi / Loan / Phương Thảo / Ngọc Linh</td>
                    <td><span class="status-ok px-3 py-1 rounded">2 / 24</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>15/05/23</td>
                    <td>2,000,000</td>
                    <td>Tuần 10TR T2</td>
                    <td>12</td>
                    <td>Loan / Bông / Ngọc Linh / Kiều / Candy</td>
                    <td><span class="status-ok px-3 py-1 rounded">7 / 12</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>07/05/23</td>
                    <td>5,000,000</td>
                    <td>Ngày 5TR D1</td>
                    <td>25</td>
                    <td>Nguyen Nga / Loan / Kiều / Phương Thảo</td>
                    <td><span class="status-ok px-3 py-1 rounded">6 / 23</span></td>
                    <td></td>
                    <td><span class="status-red px-3 py-1 rounded">OK</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
