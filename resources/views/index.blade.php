<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Phần mềm tính Hụi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        body {
            color: white;
            text-align: center;
        }

        .header-title {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .btn-custom {
            width: 100%;
            padding: 20px;
            font-size: 24px;
            margin: 10px 0;
        }

        .btn-huivien {
            background-color: #4faac5;
            border-color: #4faac5;
            color: white;
        }

        .btn-lamviec {
            background-color: #29a746;
            border-color: #29a746;
            color: white;
        }

        .btn-huivien:hover,
        .btn-lamviec:hover {
            background-color: #4faac5;
            border-color: #4faac5;
            color: white;
        }

        .btn-lamviec:hover {
            background-color: #29a746;
            border-color: #29a746;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container container-sm mt-5">
        <!-- Header -->
        <div class="header-title" style="background-color: rgba(64, 64, 64, 255)">
            PHẦN MỀM TÍNH HỤI 3.2 <span style="color: #8bc34a">TVSOFT</span>
        </div>
        <div class="container" style="background-color: rgba(88,88,88,255);">
            <div class="row justify-content-center">
                <div class="col-sm-10 text-center button-container">
                    <a href="{{ route('admin.user.createCategory') }}">
                        <button class="btn btn-custom btn-huivien"> DANH SÁCH HỤI VIÊN </button>
                    </a>
                    <a href="{{ route('admin.user.bill') }}">
                        <button class="btn btn-custom btn-lamviec">BẮT ĐẦU LÀM VIỆC</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
