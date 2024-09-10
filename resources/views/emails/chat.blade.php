<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet" />
    <style>
        h5 {
            font-size: 20px;
        }

        .row {
            width: 100%;
            display: inline-block;
        }

        .text-center {
            text-align: center;
        }

        .title {
            line-height: 45%;
        }

        .title-left {
            width: 40%;
            float: left;
            text-align: center;
        }

        .title-right {
            width: 60%;
            float: right;
            text-align: center;
        }

        .decoration {
            text-decoration: underline;
        }
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif">
    <div>
        <div class="row">
            <div class="info-conter">
                <p>Thông báo: <b>{{ $data['message'] }}</b></p>
            </div>
        </div>
        <br>
        <p>Email được gửi tự động bởi phần mềm xét nghiệm tại nhà. Vui lòng kiểm phản hồi liên hệ khách hàng.
        </p>
    </div>

</body>

</html>
