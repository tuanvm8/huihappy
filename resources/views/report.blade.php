<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Báo cáo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .table-status {
            width: 100%;
            overflow-x: auto; /* Allow horizontal scrolling for small screens */
        }

        .table-status thead .custom-text th {
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

        /* Responsive CSS */
        @media (max-width: 576px) {
            .btn-custom {
                font-size: 12px; /* Decrease button font size on small screens */
                margin-right: 5px; /* Reduce spacing between buttons */
            }

            .table-status th,
            .table-status td {
                padding: 0.3rem; /* Decrease padding for th and td */
            }

            .table-status {
                display: block; /* Switch to block display for scrolling */
                overflow-x: auto; /* Enable horizontal scrolling for the table */
            }
        }

        @media (max-width: 320px) {
            /* Additional styles for very small screens */
            .btn-custom {
                width: 100%; /* Make buttons full width */
                margin-bottom: 5px; /* Add space between buttons */
            }

            .table-status th,
            .table-status td {
                font-size: 12px; /* Decrease font size further for very small screens */
            }

            h4 {
                font-size: 16px; /* Adjust heading size for better visibility */
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <!-- Buttons Section -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3" style="background-color: rgba(63, 107, 162, 255); padding: 10px;">
            <div class="d-flex flex-wrap">
                <button class="btn btn-light btn-custom" style="border: 1px solid #473d3d;">Trang chủ</button>
                <button class="btn btn-light btn-custom" style="border: 1px solid #473d3d;">Tìm kiếm</button>
                <button class="btn btn-danger btn-custom">Lọc chốt</button>
                <a href="{{ route('user.listYinHui') }}">
                    <button class="btn btn-info btn-custom">In phiếu</button>
                </a>
            </div>
            <h4 class="text-white pt-1 text-center flex-grow-1">DANH SÁCH TẤT CẢ HỤI VIÊN</h4>
        </div>

        <!-- Table Section -->
        <div class="table-responsive">
            <table class="table table-bordered table-status mt-2">
                <thead>
                    <tr class="total-row">
                        <th colspan="2" class="text-center">Tất cả</th>
                        <th class="text-danger text-center">494,300,000</th>
                        <th class="text-danger text-center">7,400,000</th>
                        <th class="text-danger text-center">497,100,000</th>
                        <th class="text-danger text-center">15,400,000</th>
                        <th class="text-danger text-center">481,700,000</th>
                        <th class="text-center" style="color:blue">1,788,000,000</th>
                        <th class="text-center" style="color:blue">1,431,600,000</th>
                        <th class="text-danger text-center">-356,400,000</th>
                    </tr>
                    <tr class="custom-text">
                        <th scope="col">STT</th>
                        <th scope="col">Hụi Viên</th>
                        <th scope="col">Tổng tiền đóng</th>
                        <th scope="col">Tổng Thăm</th>
                        <th scope="col">Tổng tiền hụi</th>
                        <th scope="col">Tổng tiền Thảo</th>
                        <th scope="col">Tổng đã giao</th>
                        <th scope="col">Tổng hụi chết</th>
                        <th scope="col">Tổng hụi sống</th>
                        <th scope="col">Âm / Dương</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td style="cursor: pointer;color:blue">
                            <a href="{{ route('user.detail') }}">LOAN</a>
                        </td>
                        <td class="text-danger">69,400,000</td>
                        <td>1,400,000</td>
                        <td>72,400,000</td>
                        <td>2,800,000</td>
                        <td>69,600,000</td>
                        <td style="color:blue">503,000,000</td>
                        <td style="color:blue">47,600,000</td>
                        <td class="text-white" style="background-color: red;">~455,400,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td style="cursor: pointer;color:blue">
                            <a href="{{ route('user.detail') }}">CANY</a>
                        </td>
                        <td class="text-danger">69,400,000</td>
                        <td>1,400,000</td>
                        <td>72,400,000</td>
                        <td>2,800,000</td>
                        <td>69,600,000</td>
                        <td style="color:blue">503,000,000</td>
                        <td style="color:blue">47,600,000</td>
                        <td class="text-white" style="background-color: #28a745;">~455,400,000</td>
                    </tr>
                    <!-- More rows can be added here -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
