<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="/shop" class="navbar-brand">Chi da</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar5">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Link <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <form action="{{URL::to('shop/search')}}" class="mx-2 my-auto d-inline w-100">

            <div class="input-group">
                <input type="text" class="form-control border border-right-0" name="searchData" placeholder="Search...">
                <span class="input-group-append">
                <button class="btn btn-outline-secondary border border-left-0" type="submit">
                    Search</i>
                </button>
              </span>
            </div>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog fa-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>