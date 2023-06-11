
<style>

</style>
    <nav class="navbar fixed-top navbar-expand-sm
    navbar-light bg-light">
        <div class="container">
        <a
        href="/" class="navbar-brand mb-0 h1">
            <img class="d-inline-block align-top" src="7866229_Mesa de trabajo 1.png" width="40" height="40">SmartSpec</a>
            @if(Auth::check())
    <button
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    class="navbar-toggler"
    aria-controls="'navbarNav"
     aria-expanded="false"
     aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">Compare</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link
                     dropdown-toggle"
                     id="navbarDropdown"
                     role="button"
                      data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >Language
                </a>
                    <ul class="dropdown-menu"
                    aria-labelledby="navbarDropdown">
                        <li><a href="#"
                            class="dropdown-item">English</a></li>
                        <li><a href="#"
                             class="dropdown-item">Chinese</a></li>
                        <li><a href="#"
                            class="dropdown-item">Nepali</a></li>
                        <li><a href="#"
                            class="dropdown-item">Korean</a></li>
                     </ul>
                </li>
            </ul>
            </div>
            @else
            <form class="d-flex" role="search">
                    <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
              </form>
            @endif
            <div>
                @if(Auth::check())
                <button class="btn btn-outline-danger" type="submit">Logout</button>
                @else
                <a class="btn btn-outline-info" type="submit" href="/login.html">Login</a>

                @endif
            </div>
        </div>
    </nav>

