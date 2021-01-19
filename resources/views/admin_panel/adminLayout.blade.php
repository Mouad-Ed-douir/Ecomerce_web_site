<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Dashboard</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    
    
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                    <img src="/img/logo.png" alt="" width="30" height="24">
                    Dashboard
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="{{route('admin.products')}}">Products</a>
                  <a class="nav-link" href="{{route('admin.categories')}}">Categories</a>
                  <a class="nav-link" href="{{route('admin.orderManagement')}}">Order Management</a>
                </div>
                <div class="navbar-nav ml-auto">
                  <a class="nav-link" href="{{route('admin.logout')}}"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
                </div>
              </div>
            </div>
        </nav>
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                   
                </footer>
            </div>
         
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{mix('/js/scripts.js')}}">></script>
</body>

</html>