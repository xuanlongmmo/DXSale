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
                    <th>Dự án</th>
                    <th>Địa chỉ chuyển tiền</th>
                    <th>Tổng tiền</th>
                    <th>Tổng số token</th>
                    <th>Trạng thái</th>
                    <th>Ngày chuyển</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transactions as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->dxlaunch->token_name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->amount_eth }}</td>
                        <td>{{ $item->amount_token }}</td>
                        <td id="status{{ $item->id }}">
                            @if ($item->status == 1)
                                <span style="color: red">Chưa chuyển</span>
                            @else
                                <span style="color: green">Đã chuyển</span>
                            @endif
                        </td>
                        <td>{{ Carbon::parse($item->created_at)->format('H:i d/m/Y') }}</td>
                        <td>
                            <button style="background-color: #8da58d7a;padding: 5px 10px;" onclick="return changestatus({{ $item->id }})">Chuyển trạng thái</button>
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