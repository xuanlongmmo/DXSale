<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="icon" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDMyMCAzMjAiPgogIDxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgb3BhY2l0eTogMC45OTk7CiAgICAgICAgaXNvbGF0aW9uOiBpc29sYXRlOwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZvbnQtc2l6ZTogMTExcHg7CiAgICAgICAgZm9udC1mYW1pbHk6IEJhaG5zY2hyaWZ0OwogICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgZmlsdGVyOiB1cmwoI1JlY3RhbmdsZV8xKTsKICAgICAgfQogICAgPC9zdHlsZT4KICAgIDxmaWx0ZXIgaWQ9IlJlY3RhbmdsZV8xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgPGZlT2Zmc2V0IGR4PSIzIiBkeT0iMyIgaW5wdXQ9IlNvdXJjZUFscGhhIi8+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjUiIHJlc3VsdD0iYmx1ciIvPgogICAgICA8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwLjE2MSIvPgogICAgICA8ZmVDb21wb3NpdGUgb3BlcmF0b3I9ImluIiBpbjI9ImJsdXIiLz4KICAgICAgPGZlQ29tcG9zaXRlIGluPSJTb3VyY2VHcmFwaGljIi8+CiAgICA8L2ZpbHRlcj4KICA8L2RlZnM+CiAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNSA0KSI+CiAgICA8ZyBjbGFzcz0iY2xzLTQiIHRyYW5zZm9ybT0ibWF0cml4KDEsIDAsIDAsIDEsIC01LCAtNCkiPgogICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgY2xhc3M9ImNscy0xIiB3aWR0aD0iMjkwIiBoZWlnaHQ9IjI5MCIgcng9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMiAxMikiLz4KICAgIDwvZz4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIGNsYXNzPSJjbHMtMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjcuNDQyIDY4LjY1MikiPgogICAgICA8dGV4dCBpZD0iRHgiIGNsYXNzPSJjbHMtMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODQuNTU4IDExNy4zNDgpIj48dHNwYW4geD0iLTU1LjQ0NiIgeT0iMCI+RHg8L3RzcGFuPjwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 450px;
            padding: 16% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background: #76b852; /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #76b852, #8DC26F);
            background: -moz-linear-gradient(right, #76b852, #8DC26F);
            background: -o-linear-gradient(right, #76b852, #8DC26F);
            background: linear-gradient(to left, #76b852, #8DC26F);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;      
        }
    </style>
</head>
<body>
    <div class="login-page">
        <div class="form">
          <form method="POST" action="{{ route('login') }}" class="login-form">
              @csrf
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Mật khẩu"/>
            <button>Đăng nhập</button>
          </form>
        </div>
    </div>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>