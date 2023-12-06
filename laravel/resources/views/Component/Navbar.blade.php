<!DOCTYPE html>
<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--AJAX-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="./NavBar.css">
</head>
<body>
    <!--Code-->
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
</body>

<script src="/Default.js"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>