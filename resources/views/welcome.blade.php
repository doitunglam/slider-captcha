<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="/src/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/src/disk/slidercaptcha.min.css" rel="stylesheet" />
    <style>
        .slidercaptcha {
            margin: 0 auto;
            width: 314px;
            height: 286px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.125);
            margin-top: 40px;
        }

        .slidercaptcha .card-body {
            padding: 1rem;
        }

        .slidercaptcha canvas:first-child {
            border-radius: 4px;
            border: 1px solid #e6e8eb;
        }

        .slidercaptcha.card .card-header {
            background-image: none;
            background-color: rgba(0, 0, 0, 0.03);
        }

        .refreshIcon {
            top: -54px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container-fluid">
        <div class="form-row">
            <div class="col-12">
                <div class="slidercaptcha card">
                    <div class="card-header">
                        <span>请完成安全验证!</span>
                    </div>
                    <div class="card-body">
                        <div id="captcha"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/src/disk/longbow.slidercaptcha.min.js"></script>
    <script>
        var captcha = sliderCaptcha({
            id: 'captcha',
            setSrc: function() {
                return 'https://picsum.photos';
            },
            onSuccess: function() { //成功事件
                var handler = setTimeout(function() {
                    window.clearTimeout(handler);
                    captcha.reset();
                }, 500);
            }
        });
    </script>
</body>

</html>
