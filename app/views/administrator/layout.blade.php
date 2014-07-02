<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    {{ HTML::style('assets/framework/css/semantic.css') }}
    {{ HTML::style('assets/framework/css/administrator.css') }}

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    {{ HTML::script('assets/framework/javascript/semantic.js') }}

</head>
<body>

<div class="container">
    <div></div>
    <div class="ui menu">
        @if(isset($dashboard_active) && $dashboard_active == true)
        <a class="active item" href="/admin">
            <i class="dashboard icon"></i> Dashboard
        </a>
        @else
        <a class="item" href="/admin">
            <i class="dashboard icon"></i> Dashboard
        </a>
        @endif
        @if(isset($magazine_active) && $magazine_active == true)
            <a class="active item" href="/admin/magazine">
                <i class="bolt icon"></i> Magazine
            </a>
        @else
            <a class="item" href="/admin/magazine">
                <i class="bolt icon"></i> Magazine
            </a>
        @endif

        @if(isset($settings_active) && $settings_active == true)
            <a class="active item" href="/admin/settings">
                <i class="settings icon"></i> Settings
            </a>
        @else
            <a class="item" href="/admin/settings">
                <i class="settings icon"></i> Settings
            </a>
        @endif
        @if ($user->hasAccess('developer'))
        <a class="item">
            <i class="doctor icon"></i> Development
        </a>
        @endif
        <div class="ui dropdown">
            <div class="text">Select</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                <div class="item">Edit</div>
                <div class="item">Remove</div>
                <div class="item">Hide</div>
            </div>
        </div>
        <div class="right menu">

            <a class="item">
                <i class="user icon"></i> Logout
            </a>
        </div>
    </div>

    <!-- BREADCRUMBS

    <div class="ui breadcrumb">
        <a class="section">Prev active</a>
        <i class="right arrow icon divider"></i>
        <div class="active section">Active</div>
    </div>-->
    <div class="ui segment">
        @yield('content')
    </div>
</div>

</body>

</html>
