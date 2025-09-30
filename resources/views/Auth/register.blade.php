<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    form{
        width: 400px;
        padding: 30px;
        border-radius: 10px;
        margin: 80px auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
</style>
<body>
    <div class="container">
        <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Register Form</h3>
            <div class="form-group">
                <label for="" class="form-label">Username</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Profile</label>
                <input type="file" name="profile" id="" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-center mt-2">
                <a href="{{route('login')}}">Already have account?</a>
            </div>
            <div class="form-group mt-3 d-flex justify-content-end">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
