<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Bảng cửu chương</h2>

@if(isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@else
    @for($i = 1; $i <= 10; $i++)
        <p>{{ $n }} x {{ $i }} = {{ $n * $i }}</p>
    @endfor
@endif

</body>
</html>