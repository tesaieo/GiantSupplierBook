<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-top: 0; padding-top: 0;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
                @for($i=1; $i<=4; $i++)
                    <li><a class="dropdown-item" href="/category/{{ $i }}">Category {{ $i }}</a></li>
                @endfor
          </ul>

          <li class="nav-item">
            <a class="nav-link active" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/contact">Contact</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>