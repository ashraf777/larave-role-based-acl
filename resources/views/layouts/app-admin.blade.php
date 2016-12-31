<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" type="text/css" href="/admin-layout/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/admin-layout/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/admin-layout/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/admin-layout/plugins/pace/pace.min.css">
  <link rel="stylesheet" href="/admin-layout/plugins/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue">
<!-- Site wrapper -->
<div class="wrapper">

<!-- @yield('content') -->

Hello Admin - U r an Auth. User

</div>
<!-- ./wrapper -->

<script src="/admin-layout/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/admin-layout/js/bootstrap.min.js"></script> 
<script src="/admin-layout/plugins/pace/pace.min.js"></script>
<script src="/admin-layout/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/admin-layout/plugins/fastclick/fastclick.js"></script>
<script src="/admin-layout/js/app.min.js"></script>
<script src="/admin-layout/js/demo.js"></script>
<script src="/admin-layout/plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });
</script>

</body>
</html>
