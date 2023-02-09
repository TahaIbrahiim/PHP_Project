<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="row m-50 m-auto">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="col-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="col-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="">

            </div>
            <div class="col-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" name="password" id="" >
            </div>
            <input type="submit" class="form-action">
        </form>
    </div>

</body>

</html>
