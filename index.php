<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon/icon.png">
    <title>Undangan Surabaya</title>
    <link rel="stylesheet" href="src/css/style.css">

    <!-- montserrat font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- animated on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<style>
    @media (max-width:768px){
        #user{
                display: none;
            }
        }
</style>
<body>
    <div id="home"></div>
    <div class="navbar">
        <div class="menu">
            <img src="icon/menu.svg" alt="#" class="icon">
        </div>
        <div class="brand">
            <h1>Undangan Surabaya</h1>
        </div>
        <div class="nav">
            <li><a href="#abs">Produk</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contak">Contact Us</a></li>
            <li><a href="">Feedback</a></li>
        </div>
        <div class="cart">
            <a href="keranjang.php">
                <img src="icon/cart.svg" alt="#" class="icon">
            </a>
            <a href="login.php">
                <img src="icon/user.svg" alt="#" class="icon" id="user">
            </a>
        </div>
    </div>
    <div class="dropdown">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <hr>
        <li><a href="#abs" class="bro">Produk</a></li>
        <li><a href="#about" class="ab">About Us</a></li>
        <li><a href="">Contact Us</a></li>
        <li><a href="">Feedback</a></li>
        <hr>
        <li><a href="" id="mode">Mode : Light</a></li>
    </div>

    <section>
        <img src="banner/banner.png" alt="banner">
    </section>

    <div class="aboutus" id="about">
        <h1 data-aos="fade-up" data-aos-duration="500">Undangan Surabaya</h1>
        <div class="deskripsi" data-aos="fade-up" data-aos-duration="1000">
            <p>Untuk Sementara Website Undangan Surabaya Ini Merupakan Sebuah projek untuk pembelajaran. 
                di website ini kami memberikan user interface yang kami buat sedemikian rupa agar dapat 
                mempermudah dalam proses jual beli. pada fase ini saya masih dalam proses pembelajaran untuk 
                membuat dan merawat website.
            </p>
            <p>perkenalkan nama saya ardiansyah, seorang siswa smk jurusan software engineering. pada tahun 2023 ini saya
                masih berusia 16 tahun dan masih duduk di kelas 2 smk. tujuan saya membuat website ini adalah untuk melatih
                apa yang sudah saya pelajari saat masih kelas 1 smk. fyi website ini dibuat menggunakan kombinasi dari php dan js.
            </p>
        </div>
        <div class="navhome" data-aos="fade-up" data-aos-duration="1000" ><a href="#home"><img src="icon/home.svg" alt="^" class="icon"></a></div>
    </div>

    <style>
        .navhome{
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            padding: 10px;
            width: 50px;
            height: 50px;
            background-color: whitesmoke;
            box-shadow: 3px 3px 3px #999;
            transition: 0.3s;
            z-index: 999;
        }

        .navhome:hover{
            cursor: pointer;
            background-color: white;
            transition: 0.3s;
        }

        @media (max-width:768px) {
            .navhome{
                display: none;
            }
        }
    </style>

    <div class="belanja" id="abs">
        <h1 data-aos="fade-up" data-aos-duration="1000">Produk Kami</h1>
        <div class="produk" data-aos="fade-up" data-aos-duration="1000">
            <div class="card">
                <img src="img/undangan.png" alt="undangan" width="150px" height="150px">
                <div class="produkh"><h1>Undangan</h1><h3>Rp. 500,00 / lembar</h3></div>
                <div><p>Undangan pernikahan, minimal order 500 lembar.
                    kirim format nama mempelai, lokasi, waktu, dll.
                </p></div>
                <div class="order 1"><img src="icon/cartadd.svg" alt="+" width="30px" height="30px"></div>
            </div>
            <div class="card">
                <img src="img/banner.jpg" alt="banner" width="300px" height="150px">
                <div class="produkh"><h1>Banner</h1><h3>Rp. 40.000,00 / M</h3></div>
                <div><p>Cetak Banner dengan permeter dengan atau tanpa mata ayam, kirim desain atau request desain via chat.
                </p></div>
                <div class="order 2"><img src="icon/cartadd.svg" alt="+" width="30px" height="30px"></div>
            </div>
            <div class="card">
                <img src="img/yasin.jpg" alt="yasin" width="150px" height="150px">
                <div class="produkh"><h1>Yasin</h1><h3>Rp. 6.000,00 / Buku</h3></div>
                <div><p>Pesan buku yasin dengan custom cover, kirim format nama, jumlah buku, kata pengantar, foto, dll.
                </p></div>
                <div class="order 3"><img src="icon/cartadd.svg" alt="+" width="30px" height="30px"></div>
            </div>
        </div>
    </div>

    <div class="checkout" style="display: none;">
        <div class="closebutton">X</div>
        <div class="checkproduk" style="display: flex; gap: 30px;  align-items: center;">
            <img src="img/undangan.png" alt="produk" id="imageproduk" width="100px" height="100px" style="border-radius: 25px;">
            <div>
                <h1 id="namaprodcheck">Undangan</h1>
                <h3 style="font-weight: lighter; margin-bottom: 10px;" id="deskprodcheck">Rp. 500,00 / lembar</h3>
                <div class="counter" style="display: flex;">
                    <button id="minusprod">-</button>
                    <p id="hsr">1</p>
                    <button style="margin-right: 10px;" id="plusprod">+</button>
                    <h4 style="margin: auto;" id="hargabarang">Rp. 500,00</h4>
                </div>

                <script>
                    const plusprod = document.querySelector("#plusprod");
                    const minusprod = document.querySelector("#minusprod");
                    const hsr = document.querySelector("#hsr");
                    let yoi = 1;

                    plusprod.addEventListener("click", ()=>{
                        yoi = yoi + 1;
                        hsr.innerHTML = `${yoi}`;
                    });
                    minusprod.addEventListener("click", ()=>{
                        if(yoi>0){
                            yoi = yoi - 1;
                            hsr.innerHTML = `${yoi}`;
                        }
                    });

                    const closebutton = document.querySelector(".closebutton");
                    closebutton.addEventListener("click", ()=>{
                        const checkout = document.querySelector(".checkout");
                        checkout.style.display = "none";
                        yoi = 1;
                        hsr.innerHTML = `${yoi}`;
                        return yoi;
                        
                    });

                    const order = document.querySelectorAll(".order");
                    order.forEach(el => {
                        el.addEventListener("click", (e)=>{
                            const checkout = document.querySelector(".checkout");
                            checkout.style.display = "flex";
                            checkout.style.animation =  "topdown 0.5s forwards";
                        });
                    });
                </script>    
                <style>
                    .counter button,.counter p{
                        width: 30px;
                        height: 30px;
                        border: none;
                        outline: none;
                        background-color: white;
                        font-weight: bold;
                        font-size: 25px;
                        text-align: center;
                    }
                    .counter button{
                        border: 1px solid black;
                    }
                    .counter button:hover{
                        cursor: pointer;
                    }
                </style>
            </div>
        </div>
        <button id="co"><img src="icon/cartadd.svg" alt="+" width="30px" height="30px"></button>
        <style>
            #co{
                margin: 20px;
                border: none;
                outline: none;
                width: 300px;
                height: 45px;
                border-radius: 25px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                background-color: #34b233;
                transition: 0.3s;
            }
            #co:hover{
                opacity: 50%;
                transition: 0.3s;
                cursor: pointer;
            }
        </style>
    </div>
    <style>
        .checkout{
            width: 100%;
            height: 50vh;
            background-color: whitesmoke;
            position: fixed;
            bottom: 0;
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 3px 3px 3px 3px #999;
        }

        .closebutton{
            position: absolute;
            right: 0;
            top: 0;
            font-weight: bolder;
            font-size: 30px;
            margin: 20px;
            transition: 0.3s;
        }

        .closebutton:hover{
            cursor: pointer;
            transform: scale(1.1);
            transition: 0.3s;
        }

        @keyframes topdown {
            from{
                position: relative;
                bottom: -200%;
            }
            to{
                bottom: 0;
            }
        }
    </style>

    <script src="src/js/co.js"></script>

    <footer style="width: 100%; height: 300px; 
    background-color: whitesmoke; box-shadow: 3px    3px 3px 3px #999;
    display: flex; flex-direction: column;
    justify-content: center; align-items: center;
    gap: 10px;">
        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
            <img src="icon/media/fb.svg" alt="" width="30px" height="30px">
            <img src="icon/media/ig.svg" alt="" width="30px" height="30px">
            <img src="icon/media/li.svg" alt="" width="30px" height="30px">
            <img src="icon/media/gh.svg" alt="" width="30px" height="30px">
        </div>
        <div>+62 857-3088-0526 | dhevasm2019@gmail.com</div>
        <div>Terms of Use | Privacy Policy | Aos</div>
        <p>Jl. Simojawar VA3</p>
        <p>@2023 Undangan Surabaya</p>
    </footer>

    <script>
        AOS.init();
    </script>
    <script src="src/js/script.js"></script>
</body>
</html>