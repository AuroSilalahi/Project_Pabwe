<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    {{-- <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/"> --}}
    <title>Home</title>
    
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fa fa-bars" aria-hidden="true" id="sidebar_btn"></i>
        </label>
        <div class="search">
            <input type="text" placeholder="Cari buku...">
            <a href="#"><div class="loop"><i class="fa fa-search" aria-hidden="true"></i></div></a>
        </div>
        <div class="left_area">
            <h3>E<span>Perpus</span></h3>
        </div>
        <div class="right_area">
            <a href="{{url('logout')}}" class="logout_btn">Logout</a>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="img/pendidikan.png" class="profile_image" alt="">
            <h4>{{ Auth::user()->name }}</h4>
            <h5>{{ Auth::user()->role }}</h5>
        </center>
        <a href="/visitor"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-star"></i><span>Favorites</span></a>
        <a href="#"><i class="fas fa-book-open"></i><span>Request Book</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
    </div>

    <div class="content">
        <button onclick = "window.location.href='/visitor'"  type="button" class="btn_top"><img src="img/pendidikan.png"> Pendidikan</button>
        <button type="button" class="btn_top"><img src="img/hiburan.png"> Hiburan</button>
		<button onclick = "window.open('https://epaper.majalahteras.com/', '_blank')" type = "button" class="btn_top"> <img src="img/majalah.png" alt=""> Majalah </button>
		<button onclick = "window.open('https://epaper.hariansib.com/', '_blank')" type = "button" class="btn_top"> <img src="img/koran.png" alt=""> Koran </button>

        <main>
        @foreach($buku as $b)
        <div class="load">
                <div class="foto">
                    <img src="../img/6.png" alt="">
                </div>
                <div style="width: 80%">
                <h3> <a href="/detail/{{$b->id}}">{{$b->judul}} </a></h3>
                <h4>{{$b->penulis}} · {{$b->tahun}}</h4>
                </div>
            </div>
            @endforeach
        </main>
    </div>
    
    
</body>
</html>