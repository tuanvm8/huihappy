<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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

        /* Responsive text */
        @media (max-width: 576px) {
            .info-table td,
            .payment-table td {
                font-size: 12px; /* Giảm kích thước chữ */
            }

            .table th, .table td {
                padding: 0.3rem; /* Giảm padding */
            }
        }
    </style>
</head>

<body>
    <div class="container" style="background-color: #ececec;">
        <div class="row pt-3">
            <div class="col-sm-3">
                <span><b>Chủ hụi: Quỳnh Helen</b></span>
            </div>
            <div class="col-sm-5">
                <span><b>SĐT: 0982.434.123</b></span>
            </div>
            <div class="col-sm-4 d-flex justify-content-end">
                <p><b>VIB - </b><span class="text-danger" style="font-weight: bold;"> 0388451657 </span><b> - Lê Thị
                        Phúc Tâm Quỳnh</b></p>
            </div>
        </div>

        <!-- Responsive table -->
        <div class="table-responsive">
            <table class="table table-bordered table-status mt-2" style="border: 1px solid #111010;">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #fffeb9; text-align: center;">Hụi viên</th>
                        <th scope="col" style="background-color: #fffeb9; text-align: center">Hụi chết</th>
                        <th scope="col" style="background-color: #fffeb9; text-align: center">Hụi sống</th>
                        <th scope="col" style="background-color: #fffeb9; text-align: center">Âm / Dương</th>
                        <th scope="col" style="background-color: #fffeb9; text-align: center">Lợi nhuận</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4 class="text-danger" style="text-align: center;">Vân Anh</h4>
                        </td>
                        <td style="text-align: center;">72,000,000</td>
                        <td style="text-align: center;">11,400,000</td>
                        <td style="text-align: center;" class="text-danger">~60,600,000</td>
                        <td class="text-danger" style="text-align: center;">~30,600,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <h5 style="color: #655ee8;">5 Dòng, 4 Dây</h5>
            </div>

            <div class="col-sm-4 d-flex justify-content-center">
                <h4>BILL ĐÓNG HỤI</h4>
            </div>

            <div class="col-sm-4 d-flex justify-content-end">
                <h6>In lúc: 28/01/2024 09:20</h6>
            </div>
        </div>

        <!-- Responsive table -->
        <div class="table-responsive">
            <table class="table table-bordered table-status mt-2" style="border: 1px solid #111010;">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center;">Mã</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Ngày mở
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Dây hụi
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Kỳ</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Ngày tạo
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Khui</th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Hụi viên
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Tiền hốt
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Tiền đóng
                        </th>
                        <th scope="col" style="background-color: rgba(216, 235, 242, 255); text-align: center">Ghi chú
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">12</td>
                        <td style="text-align: center;">14/09/2024</td>
                        <td style="text-align: center;">2.000.000</td>
                        <td style="text-align: center;">9 /18</td>
                        <td style="text-align: center;">15/05/2023</td>
                        <td style="text-align: center; font-weight: 500;">Ngày 2TR D3</td>
                        <td style="text-align: center;">Hụi viên</td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;">Đã TT: 20.000.000</td>
                        <td style="text-align: center;"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 d-flex justify-content-center">
                <span>Tổng tiền đóng: ...........13,400,000</span>
                <div class="px-5">(1)</div>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 d-flex justify-content-center">
                <span>Tổng tiền hốt: ...........16,800,000</span>
                <div class="px-5">(2)</div>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 d-flex justify-content-center">
                <span>Tổng còn lại phải giao : ...........3,400,000</span>
                <div class="px-5">(2) - (1)</div>
            </div>
        </div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7 w-100 text-end">
                <button type="button" class="btn btn-success" style="width: 53%;"> Chủ hụi phải Chi tiền cho hụi
                    viên</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
