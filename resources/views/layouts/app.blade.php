<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('developers') }}">Developers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('designations') }}">Designations</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </nav>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
</head>
<body>



</body>
</html>
