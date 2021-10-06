@extends('frontend.layout.master')
@section('content')
    <style>
        .home__content-body.mt30 {
            font-size: 13px;
        }

        .labeltext {
            font-size: 15px;
            margin-bottom: 5px
        }
        
        .inputtext {
            border: 1px solid #9d8c8c;
            width: 500px;
            height: 30px;
            padding: 5px 10px;
        }

        .buttonok {
            border: 1px solid #2198dd;
            background: #2198dd;
            padding: 5px 15px;
            color: #fff;
        }

        .buttonok:hover {
            background-color: #fff;
            color: #2198dd;
        }
    </style>
    <div style="padding: 0px 40px 40px 40px" id="home__content" class="home__content-body mt30">
        @if ($errors->any())
            <div style="margin-bottom: 0" class="alert alert-danger">
                <ul style="margin-bottom: 0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Cài đặt website</h1>
        <form method="POST" style="margin: 20px 0 30px" action="{{ route('psetting') }}">
            @csrf
            <input type="text" hidden name="check" value="1">
            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Họ tên</label><br>
                <input class="inputtext" type="text" name="name" placeholder="Họ tên" value="{{ Auth::user()->name }}">
            </div>

            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Email</label><br>
                <input class="inputtext" type="text" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
            </div>

            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Địa chỉ ví nhận tiền</label><br>
                <input class="inputtext" type="text" name="address_admin" placeholder="Địa chỉ nhận tiền" value="{{ Auth::user()->address_admin }}">
            </div>

            <button class="buttonok">Cập nhật</button>
        </form>

        <h1>Đổi mật khẩu</h1>
        <form style="margin: 20px 0" method="POST" action="{{ route('changepass') }}">
            @csrf
            <input type="text" hidden name="check" value="2">
            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Mật khẩu cũ</label><br>
                <input class="inputtext" type="password" name="oldpass" placeholder="Mật khẩu cũ">
            </div>

            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Mật khẩu mới</label><br>
                <input class="inputtext" type="password" name="password" placeholder="Mật khẩu mới">
            </div>

            <div style="margin-bottom: 20px">
                <label class="labeltext" for="">Nhập lại mật khẩu mới</label><br>
                <input class="inputtext" type="password" name="repassword" placeholder="Nhập lại mật khẩu mới">
            </div>

            <button class="buttonok">Đổi mật khẩu</button>
        </form>
    </div>
@endsection

@section('script')
    <script>
        autoopen('td10', 'setting');
    </script>
@endsection