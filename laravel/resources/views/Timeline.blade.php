<!DOCTYPE html>

<head>
    <!--BOOTSTRAP 5--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CODE-->
    <title>Timeline</title>
    <!--CSS-->
    <link rel="stylesheet" href="./Component/NavBar.css">
</head>

<body style="background-color: #C394E8;">
    <!--NAVBAR-->
    @component('Component.Navbar')
    @endcomponent

    <!--Konten-->
    <div class="container" style="margin-top:6%;">
        <div class="container text-center">
                <div class="row items-center">
                    <div class="col-2" style="background-color: aqua;">
                        <img src="./Image/BigMan.jpg" alt="BigMan" class="rounded-circle"
                            style="width: 100%; position: relative;">
                    </div>
                    <div class="col" style="background-color: aqua;">
                        <label for="Name" class="float-start"
                            style="background-color: white; position: relative;">BigMan</label>
                        <p class="float-end text-start" style="background-color: aqua; position: relative;">
                            jadi inget pas dulu, badan masih bagus muka
                            masih cantik. banyak boti deket, lah sekarang
                            badan udah ga keurus gini. semoga tetep sehat
                            terus deh nih badan. xixixixi. #ayotetepsehat#kitaharuspanjangumur#pilpres2024
                            #allinprabowo
                        </p>
                    </div>
                </div>    
        </div>
    </div>
</body>

<footer>
    <!--UPLOAD BUTTON-->
    <div class="position-relative">
        <a href="./Upload-Timeline.html" onclick="return AlertLogin();"><img src="./Image/Timeline/UploadIcon-removebg-preview.png" alt="Upload" class="rounded-circle position-fixed bottom-0 end-0"></a>
    </div>

</footer>

<script src="{{ asset('Default.js') }}"></script>
<script>
    window.onload = function() {
        cekLogin();
        cekAdmin();
    };
</script>