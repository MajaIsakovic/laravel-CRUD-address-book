<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /* align-items: center;
                display: flex;
                justify-content: center; */
                padding-top: 3rem;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
                padding-left: 50px;
            }

            .title {
                font-size: 34px;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* my styles (form, update) */

            .form-title{
                font-size: 30px;
            }

            .input-label{
                font-size: 20px;
            }

            .input{
                padding: 5px;
                border-radius: 3px;
                width: 40%;
            }

            .submit-wrapper{
                text-align: left;
                margin-top: 10px;
            }

            .submit{
                border-radius: 3px;
                width: 10%;
                cursor: pointer;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: rgb(36, 41, 46);
                outline: none;
                border: none;
                color: #f4f4f4;
            }

            .back{
                padding-top: 17px;
            }

            .btn-back{
                text-decoration: none;
                color: gray;
            }

            .btn-back:hover{
                color: #4f4f4f;
            }

            .success-message{
                color: greenyellow;
                padding: 20px;
                background-color: #4f4f4f;
            }

            /* My styles (list */
            .person-detail{
                font-size: 24px;
            }

            .heading-tertiary{
                color: blue;
                background-color: #f4f4f4;
                padding: 10px;
            }

            .update, .delete{
                display: inline-block;
            }

            .btn-delete{
                display: inline-block;
                font-size: 14px;
                text-decoration: none;
                color: pink;
            }

            .btn-delete:hover{
                color: red;
            }

            .btn-update{
                display: inline-block;
                font-size: 14px;
                text-decoration: none;
                color: lightseagreen;
            }

            .btn-update:hover{
                color: green;
            }

        </style>
    </head>
    <body>
        @if(Session::has('success'))
            <div class="success-message" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                        @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
