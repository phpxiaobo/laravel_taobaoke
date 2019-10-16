<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @section('title')
    @show

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/admin/style/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/admin/style/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/admin/style/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/admin/style/css/animate.min.css" rel="stylesheet">
    <link href="/admin/style/css/style.min.css?v=4.0.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">

    @section('content')
    @show

    </div>
    <script src="/admin/style/js/jquery.min.js?v=2.1.4"></script>
    <script src="/admin/style/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/admin/style/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/admin/style/js/content.min.js?v=1.0.0"></script>
    <script src="/admin/style/js/plugins/iCheck/icheck.min.js"></script>
    <script src="/admin/style/js/demo/peity-demo.min.js"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>