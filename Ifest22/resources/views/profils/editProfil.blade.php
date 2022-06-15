<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
</head>

<body>
    <p>Halaman Edit Profil</p>
    <form class="user-data mt-4" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="data-item">
            <h2>Email</h2>
            <input type="email" disabled value="{{ $data->email }}">
        </div>
        <div class="data-item">
            <h2>Full Name</h2>
            <input type="text" value="{{ $data->name }}" name="name">
            @error('name')
            <div class="alert alert-danger mt-1 d-flex align-items-center" role="alert">
                <span class="iconify me-1" data-icon="akar-icons:circle-alert" data-inline="false" style="color: #842029;"></span>
                {{ $message }}
            </div>
            @enderror
        </div>
        <input type="submit" class="mt-5" value="Save Changes"></input>
    </form>
</body>

</html>