@extends('frontend.layout.master')
@section('content')
    <?php use Carbon\Carbon; ?>
    <style>
        #table_id_wrapper {
            margin-top: 15px;
        }

        .home__content-body.mt30 {

        }
    </style>
    <div style="padding: 0px 40px 40px 40px" id="home__content" class="home__content-body mt30">
        <h1>Danh sách đơn hàng</h1>
        <table style="font-size: 14px;padding-top: 20px;" id="table_id" class="table table-striped table-bordered" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Token</th>
                    <th>Tên tokenn</th>
                    <th>Bắt đầu</th>
                    <th>Kết thúc</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->token }}</td>
                        <td>{{ $item->token_name }}</td>
                        <td>{{ Carbon::parse($item->start)->format('H:i d/m/Y') }}</td>
                        <td>{{ Carbon::parse($item->end)->format('H:i d/m/Y') }}</td>
                        <td>{{ Carbon::parse($item->created_at)->format('H:i d/m/Y') }}</td>
                        <td>
                            <button style="background-color: #887d7c79;padding: 5px 10px;color: red"><a style="color: red" href="{{ route('deleteproject', ['id'=>$item->id]) }}">Xóa dự án</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

        autoopen('td10', 'order');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        function changestatus(id) {
            $(document).ready(function(){
                $.ajax({
                    url:"changestatus",
                    method:'post',
                    data: {
                        id:id,
                    },
                    success: function(data){
                        if (data == 2) {
                            $('#status'+id).html('<span style="color: green">Đã chuyển</span>');
                        }else {
                            $('#status'+id).html('<span style="color: red">Chưa chuyển</span>');
                        }
                    },
                });
            });
        }
    </script>
@endsection