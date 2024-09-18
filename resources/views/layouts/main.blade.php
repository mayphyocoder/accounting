<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />


    <title>May - responsive admin panel</title>

    <link rel="icon" type="image/ico" href="{{ asset('assets/favicon.ico') }}" />

    <link href="{{ asset('assets/css/stylesheets.css') }}" rel="stylesheet" type="text/css" />

    <link rel='stylesheet' type='text/css' href="{{ asset('assets/css/fullcalendar.print.css') }}" media='print' />



</head>

<body>
    <div class="wrapper">

        <div class="header">
            <a class="logo" href="index.html"><img src="{{ asset('assets/img/name.png') }}"
                    alt="" title="May Phyo -  responsive admin panel" style="width:20%;margin-inline:35px;" /></a>
            <ul class="header_menu">
                <li class="list_icon"><a href="#">&nbsp;</a></li>
                <li class="settings_icon">
                    <a href="#" class="link_themeSettings">&nbsp;</a>

                    <div id="themeSettings" class="popup">
                        <div class="head clearfix">
                            <div class="arrow"></div>
                            <span class="isw-settings"></span>
                            <span class="name">Theme settings</span>
                        </div>
                        <div class="body settings">
                            <div class="row">
                                <div class="col-md-3"><strong>Style:</strong></div>
                                <div class="col-md-9">
                                    <a class="styleExample tip active" title="Default style" data-style="">&nbsp;</a>
                                    <a class="styleExample silver tip" title="Silver style"
                                        data-style="silver">&nbsp;</a>
                                    <a class="styleExample dark tip" title="Dark style" data-style="dark">&nbsp;</a>
                                    <a class="styleExample marble tip" title="Marble style"
                                        data-style="marble">&nbsp;</a>
                                    <a class="styleExample red tip" title="Red style" data-style="red">&nbsp;</a>
                                    <a class="styleExample green tip" title="Green style" data-style="green">&nbsp;</a>
                                    <a class="styleExample lime tip" title="Lime style" data-style="lime">&nbsp;</a>
                                    <a class="styleExample purple tip" title="Purple style"
                                        data-style="purple">&nbsp;</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><strong>Background:</strong></div>
                                <div class="col-md-9">
                                    <a class="bgExample tip active" title="Default" data-style="">&nbsp;</a>
                                    <a class="bgExample bgCube tip" title="Cubes" data-style="cube">&nbsp;</a>
                                    <a class="bgExample bghLine tip" title="Horizontal line"
                                        data-style="hline">&nbsp;</a>
                                    <a class="bgExample bgvLine tip" title="Vertical line" data-style="vline">&nbsp;</a>
                                    <a class="bgExample bgDots tip" title="Dots" data-style="dots">&nbsp;</a>
                                    <a class="bgExample bgCrosshatch tip" title="Crosshatch"
                                        data-style="crosshatch">&nbsp;</a>
                                    <a class="bgExample bgbCrosshatch tip" title="Big crosshatch"
                                        data-style="bcrosshatch">&nbsp;</a>
                                    <a class="bgExample bgGrid tip" title="Grid" data-style="grid">&nbsp;</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><strong>Flat style:</strong></div>
                                <div class="col-md-9">
                                    <a class="styleExample flat tip" title="Flat style" data-style="flat">&nbsp;</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><strong>Fixed layout:</strong></div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="settings_fixed" value="1" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><strong>Hide menu:</strong></div>
                                <div class="col-md-9">
                                    <input type="checkbox" name="settings_menu" value="1" />
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-default link_themeSettings" type="button">Close</button>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

        @include('layouts.menu')


        @yield('content')
    </div>
</body>

<script type='text/javascript' src="{{ asset('assets/js/plugins/jquery/jquery-1.10.2.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/jquery/jquery.mousewheel.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/cookie/jquery.cookies.2.2.0.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/charts/excanvas.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/charts/jquery.flot.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/charts/jquery.flot.stack.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/charts/jquery.flot.pie.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/charts/jquery.flot.resize.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/sparklines/jquery.sparkline.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/select2/select2.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/uniform/uniform.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js') }}">
</script>

<script type='text/javascript'
    src="{{ asset('assets/js/plugins/validation/languages/jquery.validationEngine-en.js') }}" charset='utf-8'></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/validation/jquery.validationEngine.js') }}"
    charset='utf-8'></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}">
</script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/animatedprogressbar/animated_progressbar.js') }}">
</script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/cleditor/jquery.cleditor.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/dataTables/jquery.dataTables.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/fancybox/jquery.fancybox.pack.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/pnotify/jquery.pnotify.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins/ibutton/jquery.ibutton.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/plugins/scrollup/jquery.scrollUp.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('assets/js/cookies.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/actions.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/charts.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/plugins.js') }}"></script>
<script type='text/javascript' src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script>
    $('.del_confirm').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((res) => {
            if (res.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@yield('script')

</html>
