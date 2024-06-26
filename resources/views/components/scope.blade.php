@props(['title'=>''])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .none{
        display: none !important;
      }
      #preloader{
        position: fixed;
        z-index: 999999;
        background-color: #252525;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
      }
    </style>
</head>
<body>
  <div class="d-flex align-items-center justify-content-center" id="preloader">
    <img src="{{asset('gif/preloader.gif')}}" width="100px">
  </div>
    <div class="w-100">
      <nav class="navbar navbar-expand-lg border-bottom border-body" style="background-color: #e3f2fd;">
        <div class="container">
          <h1 class="navbar-brand">CRUD</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/all-posts">All posts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container" style="min-height: calc(100vh - 58px)">
        {{$slot}}
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

    let loader = document.querySelector('#preloader');
    window.addEventListener('load', () => {
      loader.classList.add("none");
    });


      let links = document.querySelectorAll('.nav-link')
      links.forEach(element => {
        element.pathname == window.location.pathname?
        element.classList.add("active"):
        element.classList.remove("active")
      });
    </script>
</body>
</html>