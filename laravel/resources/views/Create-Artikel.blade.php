<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>Create-Artikel</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    <div class="NavBar sticky-top">
        <div class="row g-0">
            <div class="col-6" >
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <a href="Dashboard.html"><img src="./Image/HealthSIs.jpg" alt="Logo HealthSIs" id="LogoHS" style="width: 45px;"></a>
                    </div>
                    <div class="p-2" id="ProfBar"><a href="Profile.html" class="form-text" style="color: white;">Profile</a></div>
                    <div class="p-2"><a href="Menu Diet.html" class="form-text" style="color: white;">Menu Diet</a></div>
                    <div class="p-2"><a href="Artikel.html" class="form-text" style="color: white;">Artikel</a></div>
                    <div class="p-2"><a href="Timeline.html" class="form-text" style="color: white;">Timeline</a></div>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2" id="LoginBar"><a href="/Login.html" class="form-text" style="color: white;">Login</a></div>
                    <div class="p-2" id="SignUpBar"><a href="/SignUp.html" class="form-text" style="color: white;">Register</a></div>
                    <div class="p-2" id="ProfileBar"><a href="/Profile.html" class="form-text" style="color: white;">Iqnaz</a></div>
                    <div class="p-2" id="SignOutBar"><a href="/Dashboard.html" class="form-text" onclick="LogOut()" style="color: white;">SignOut</a></div>
                </div>      
            </div>
        </div>
    </div>

    <!--Konten-->
    <div class="container mt-5">
        <div class="card" style="background-color: #DCD0FF;">
            <div class="card-body">
                <form class="form-group" method="post">
                    <div class="mb-3">
                        <label for="title">Judul:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul artikel">
                    </div>
                    <div class="row mb-3">
                        <label for="file" style="cursor: pointer;">
                            <div class="card" style="background-color: #DCD0FF; border: 2px dashed #000;">
                                <div class="card-body">
                                    <center>
                                        <img src="./Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload Gambar" style="width: 50px; height: 50px;"><br>
                                        <p>Upload Gambar</p>
                                        <input type="file" id="file" style="display: none;">
                                    </center>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="content">Isi Artikel:</label>
                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="Tulis artikel Anda di sini"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div> 
    </div>
</body>


<script src="/Default.js"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>