<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Code-->
    <title>Artikel</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Dashboard.css">
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body>
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent
    <!--KONTEN-->
    <div class="container">
        <!--ITEM 1-->
        <div class="card mt-5 mb-3">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="/Image/MenuDiet/Food_1.jpg" alt="Food-1" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex flex-row-reverse">
                            <div class="ml-auto dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" aria-controls="artikel-menu">'''</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-controls="artikel-menu" id="artikel-menu" style="will-change: transform; position: absolute; transform: translate3d(-147px, 34px, 0px); top: 0px; left: 0px;">
                                    <a href="#" class="dropdown-item menu-action">Delete</a>
                                    <a href="#" class="dropdown-item">Modify</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">5 Makanan yang cocok untuk diet bagi mahasiswa</h5>
                        <p class="card-text">Berikut merupakan beberapa makanan diet untuk mahasiswa</p>
                        <a href="/Artikel/Artikel-1.html"><input type="button" value="More" class="card-text btn btn-info"></a>
                    </div>  
                </div>
            </div>
        </div>
        <!--ITEM 2-->
        <div class="card mb-3">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="/Image/MenuDiet/Food_6.jpg" alt="Food-1" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex flex-row-reverse">
                            <div class="ml-auto dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" aria-controls="artikel-menu">'''</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-controls="artikel-menu" id="artikel-menu" style="will-change: transform; position: absolute; transform: translate3d(-147px, 34px, 0px); top: 0px; left: 0px;">
                                    <a href="#" class="dropdown-item menu-action">Delete</a>
                                    <a href="#" class="dropdown-item">Modify</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">5 Makanan yang Enak dan Murah untuk Diet</h5>
                        <p class="card-text">Berikut merupakan beberapa makanan diet yang murah dan enak</p>
                        <a href="/Artikel/Artikel-2.html"><input type="button" value="More" class="card-text btn btn-info"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--ITEM 3-->
        <div class="card mb-3">
            <div class="row mb-2">
                <div class="col-md-4">
                    <img src="/Image/MenuDiet/Food_1.jpg" alt="Food-1" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="d-flex flex-row-reverse">
                            <div class="ml-auto dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown">'''</a>
                                <div class="dropdown-menu dropdown-menu-right" style="will-change: transform; position: absolute; transform: translate3d(-147px, 34px, 0px); top: 0px; left: 0px;">
                                    <a href="#" class="dropdown-item menu-action">Delete</a>
                                    <a href="#" class="dropdown-item">Modify</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">5 Makanan Diet yang cocok untuk Wanita Pasca Melahirkan</h5>
                        <p class="card-text">Berikut merupakan beberapa makanan diet yang cocok untuk wanita setelah melahirkan</p>
                        <a href="/Artikel/Artikel-3.html"><input type="button" value="More" class="card-text btn btn-info"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3 items-center">
            <input type="button" value="More" class="btn btn-primary">
        </div>
        <div class="row mb-5 items-center">
            <input type="button" value="Create" class="btn btn-primary" id="CreateArtikel" onclick="return AlertLogin();">
        </div>
        <!--ITEM 4-->
    </div>
</body>

<script src="/Default.js"></script>

<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>