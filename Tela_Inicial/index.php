<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

<body>

<div class="container-fluid">
        <div class="row justify-content-around gx-0">
            <nav class="navbar bg-light">
                <div class="col-12 col-lg-4  text-center">
                    <a class="navbar-brand" href="../php/index.php">
                        <img src="framework/images/logo.jpg" alt="exemplo de logo" width= "250px">
                    </a>
                </div>
        
                <div class="col-12 col-lg-6  text-center">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
        
                <div class="col-6 col-lg-2  text-center">
                    <div class="btn-group dropend">
                        <button type="button" class="btn btn-secondary">Menu</button>
                        <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" type="button" id="dropdownMenuClickableOutside" 
                        data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                            <li><a class="dropdown-item" href="#">Filtros</a></li>
                            <li><a class="dropdown-item" href="#">Ranking</a></li>
                            <li><a class="dropdown-item" href="#">Contados</a></li>
                        </ul>
                    </div>
                </div>
        
                <div class="col-6 col-lg-1  text-center">
                    <a href="../php/login.php"><img src="../images/perfil.png" alt="exemplo de login" width="50px"></a>
                </div>
            </nav>
        </div>
    </div>

</body>
</html>