<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid   ">
        <a class="navbar-brand" href="index.php">
            <img src="../assets/images/beta-logo.jpg" alt="logo" width="30" height="30" class="d-inline-block align-text-top">
            One HRMS
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#profileCollapse" aria-controls="profileCollapse" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- dropdown -->
        <div class="collapse navbar-collapse justify-content-end" id="profileCollapse">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>