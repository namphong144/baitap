<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Contacts</h1>

        <form method="GET">
            <input type="text" name="q" class="form-control" placeholder="Nhap tu khoa">
            <button type="submit" hidden></button>
        </form>

        <table class="table table-hover table-bordered text-center">
            <tr class="table-primary">
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>

{{--            in ra danh sach--}}
            @forelse($contacts as $contacts)
                <tr>
                    <td>{{ $contacts->id }}</td>
                    <td>
                        <img style ="width: 100px" src="{{ $contacts->avatar}}">
                    </td>
                    <td>{{ $contacts->name }}</td>
                    <td>{{ $contacts->phone }}</td>
                </tr>
            @empty
                <tr>
                    <td>
                        Không có dữ liệu
                    </td>
                </tr>
            @endforelse
        </table>
    </div>
</body>
</html>
