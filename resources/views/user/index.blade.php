<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>

    <a href="{{ route('user.create') }}" class="btn btn-primary p-2 m-2">create user</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($user as $val)
                <tr class="@if ($loop->first) bg @endif">
                    <td>{{ $val->id }} </td>
                    <td>{{ $val->name }} </td>
                    <td>{{ $val->email }} </td>
                    <td>{{ $val->password }} </td>
                    <td>
                        <form action="{{ route('user.show', $val->id) }}">
                            <button type="submit">show</button>
                        </form>

                        <form action="{{ route('user.destroy', $val->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                        <form action="{{ route('user.edit', $val->id) }}">
                            <button type="submit">update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



    {{ $user->links() }}

</body>

</html>
