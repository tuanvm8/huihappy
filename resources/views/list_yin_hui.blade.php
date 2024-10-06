<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giấy Giao Hủy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .info-table,
        .payment-table {
            margin-bottom: 20px;
        }

        .info-table td,
        .payment-table td {
            vertical-align: top;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
        }

        /* Responsive styles */
        @media (max-width: 576px) {
            .info-table td,
            .payment-table td {
                padding: 5px;
                font-size: 12px;
            }

            .header h4 {
                font-size: 14px;
            }

            .table th,
            .table td {
                font-size: 12px;
                white-space: nowrap; /* Prevent text from wrapping */
            }

            .btn {
                font-size: 12px;
                padding: 5px 10px;
            }

            .total-row th {
                font-size: 12px;
            }
        }

        /* Styles for screens 320px and up */
        @media (min-width: 320px) {
            .header h4 {
                font-size: 16px;
            }

            .table {
                width: 100%; /* Ensure table takes full width */
            }

            .table th,
            .table td {
                font-size: 14px;
                white-space: nowrap; /* Prevent text from wrapping */
            }

            .total-row th {
                font-size: 14px;
            }

            .btn {
                font-size: 14px;
                padding: 7px 12px;
            }
        }

        /* Styles for screens larger than 576px */
        @media (min-width: 577px) {
            .table th,
            .table td {
                font-size: 16px; /* Adjust font size for larger screens */
            }
        }

        /* Prevent table overflow */
        .table-responsive {
            overflow-x: auto; /* Enable horizontal scrolling */
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="background-color: #ececec;">
        <div class="row pt-3">
            <div class="col-sm-3 col-md-3 ">
                <span><b>Chủ hụi: Quỳnh Helen</b></span>
            </div>
            <div class="col-sm-3 col-md-3 ">
                <span><b>SĐT: 0982.434.123</b></span>
            </div>
            <div class="col-sm-3 col-md-3  d-flex justify-content-sm-end justify-content-md-center ">
                <span style="color: #655ee8;">Tất cả dây hụi</span>
            </div>
            <div class="col-sm-3 col-md-3  d-flex justify-content-sm-end justify-content-md-center">
                <span><b>In lúc: 28/01/2024</b></span>
            </div>
        </div>
        <hr style="border: 2px solid #070707;">
        <div class="row">
            <div class="col-sm-12 col-md-12 d-flex justify-content-center">
                <h4 class="text-danger">BÁO CÁO DANH SÁCH HỤI VIÊN ÂM HỤI</h4>
            </div>
            <div class="col-sm-12 col-md-12 d-flex justify-content-center">
                <h4 class="text-danger">2 người</h4>
            </div>
        </div>

        <!-- Start of responsive table -->
        <div class="table-responsive">
            <table class="table table-bordered table-status mt-2">
                <thead>
                    <tr class="total-row">
                        <th colspan="2" class="text-center">Tổng cộng:</th>
                        <th class="text-danger text-center">494,300,000</th>
                        <th class="text-danger text-center">7,400,000</th>
                        <th class="text-danger text-center">497,100,000</th>
                        <th class="text-danger text-center">15,400,000</th>
                        <th class="text-danger text-center">481,700,000</th>
                        <th class="text-center" style="color:blue">1,788,000,000</th>
                        <th class="text-center" style="color:blue">1,431,600,000</th>
                        <th class="text-danger text-center">-356,400,000</th>
                    </tr>
                    <tr>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">STT</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Hụi Viên</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng tiền đóng</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng Thăm</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng tiền hụi</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng tiền Thảo</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng đã giao</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng hụi chết</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Tổng hụi sống</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255);">Âm / Dương</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td style="cursor: pointer;color:blue"><a href="{{ route('user.detail') }}">LOAN</a></td>
                        <td class="text-danger">69,400,000</td>
                        <td>1,400,000</td>
                        <td>72,400,000</td>
                        <td>2,800,000</td>
                        <td>69,600,000</td>
                        <td style="color:blue">503,000,000</td>
                        <td style="color:blue">47,600,000</td>
                        <td class="text-danger">~455,400,000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td style="cursor: pointer;color:blue"><a href="{{ route('user.detail') }}">CANY</a></td>
                        <td class="text-danger">69,400,000</td>
                        <td>1,400,000</td>
                        <td>72,400,000</td>
                        <td>2,800,000</td>
                        <td>69,600,000</td>
                        <td style="color:blue">503,000,000</td>
                        <td style="color:blue">47,600,000</td>
                        <td class="text-danger">~455,400,000</td>
                    </tr>
                    <!-- More rows can be added here -->
                </tbody>
            </table>
        </div>
        <!-- End of responsive table -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
