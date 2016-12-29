<link rel="stylesheet" type="text/css" href="{{asset('DrinkShop/public/css/header.css')}}">

<nav class="nav navbar-default navbar-fixed-top" id = "navbar-spy">    <!-- navbar-fixed-bottom為固定在網頁上不會因為滾動而消失 -->
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{action('HomeController@showHomepage')}}">DrinkShop</a>
        </div>
        <div class = "collapse navbar-collapse" id="myNavbar">    <!-- 底下放要縮放的內容 -->
            <ul class="nav navbar-nav navbar-right">
                @if (\Illuminate\Support\Facades\Session::get('validate') == 'success')
                    <li class="dropdown">
                        <a href="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <strong>account</strong><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ action('LogoutController@getLogout') }}">Log out</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ action('LoginController@showLogIn') }}"><span class="glyphicon glyphicon-log-in"></span><strong>Sign in</strong></a></li>
                @endif
                <li><a href="{{ action('RegisterController@showSignUp') }}"><span class="glyphicon glyphicon-user"></span><strong>Sign up</strong></a></li>
            </ul>
        </div>
    </div>
</nav>
