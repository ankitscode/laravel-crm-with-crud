<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('layouts.header');
    <style>
        .cb {
            margin-bottom: 0px !important;
            width: 75%;
            margin-left: 10%;
            margin-right: 10%; 
            margin-top: 3%; 
            margin-bottom: 10%; 
        }
    </style>
</head>
<body>
    <div id="layout-wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                    <div class="card cb">
                        <div class="card header  cb">
                            <div class="d-flex justify-content-between my-3">
                                <div class="h2">View</div>
                                <a href="" class="btn btn-primary btn-lg">Back</a>
                            </div>
                            <div class="card body cb">
                                    <form action="{{ route('profile.user', ['id' => $users->id]) }}" method="GET">
                                        @csrf
                                        <div class="py-3">
                                            <label for="" class="from-label">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $users->name }}" readonly>
                                        </div>
                                        <div class="py-3">
                                            <label for="" class="from-label">Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ $users->email }}" readonly>                                            
                                        </div>
                                        <div class="py-3">
                                            <label for="phone_number" class="from-label">Phone Number</label>
                                            <input type="number" class="form-control"
                                                name="phone_number"value="{{ $users->phone_number }}" readonly>                                          
                                    </form>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                    </div>   
            </div>
        </div>
        @include('layouts.footer')
       
        <footer>
        <p>Author: Hege Refsnes<br>
        <a href="mailto:hege@example.com">hege@example.com</a></p>
      </footer>
      
</body>

</html>
