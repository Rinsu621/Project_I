
<div>
<nav class="navbar  bg-body-tertiary navbar-expand-sm
navbar-light bg-light">
{{-- <nav class="navbar bg-body-tertiary bg-light"> --}}
    <div class="container-fluid">
    <a
    href="/spec" class="navbar-brand mb-0 h1">
        <img class="d-inline-block align-top" src="{{asset('7866229_Mesa de trabajo 1.png')}}" width="40" height="40">SmartSpec</a>
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
                <a href="/spec/create" class="nav-link active">Add Detail</a>
            </li>
            <li class="nav-item ">
                <a href="/brand" class="nav-link">Brand</a>
            </li>

        </ul>
        </div>
        <form class="d-flex" role="search">
                <input type="search" class="form-control me-2" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
          </form>
        <div class="m-3">
            <form action="{{route('logout')}}" method="POST">
                @csrf
            <div class="form-button ">
                <button id="submit" type="submit" class="btn btn-outline-danger">Logout</button>
            </div>
            </form>

        </div>
    </div>
</nav>
</div>

