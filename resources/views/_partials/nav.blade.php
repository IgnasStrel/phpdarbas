<nav class="navbar navbar-expand-lg p-2 nav-border ">
    <div class="container-fluid">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
                <img src="https://www.logopik.com/wp-content/uploads/edd/2018/09/Skateboard-Logo-Vector.png" class="logo" alt="logo" width=100px height=100px>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-center" id="myNavbar7">
            <ul class="navbar-nav hover ms-auto flex-nowrap">
                <li class="nav-item">
                    <a href="/" class="nav-link">Pradinis</a>
                </li>
                <li class="nav-item">
                    <a href="/skateboardForm" class="nav-link">Forma</a>
                </li> 
                <li class="nav-item">
                    <a href="/categories" class="nav-link">Kategorijos</a>
                </li> 
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li> 
                @endguest
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Skateboards</a>
                </li> 
                @endauth
            </ul>
        </div>
    </div>
</nav>