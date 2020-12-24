<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/detail.css" />
    
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
            <img src="../img/pendidikan.png" class="profile_image" alt="">
            <h4>{{ Auth::user()->name }}</h4>
            <h5 style="text-transform: capitalize">{{ Auth::user()->role }}</h5>
        </center>
        <a href="/visitor"><i class="fas fa-home"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-star"></i><span>Favorites</span></a>
        <a href="#"><i class="fas fa-book-open"></i><span>Request Book</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
    </div>
    <div class="content">
        <main>
            <div class="load">
                <div>
                    <table style="width:20%">
                        <th><img src="../img/pendidikan.png" class="foto" alt=""></th>
                        <th><h2>{{$buku->judul}}</h2></th>
                    </table>
                    <table>
                        <tr>
                          <th>Pengarang</th>
                          <td>:</td>
                          <td>{{$buku->penulis}}</td>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <td>:</td>
                            <td>{{$buku->penerbit}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Terbit</th>
                            <td>:</td>
                            <td>{{$buku->tahun}}</td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td>:</td>
                            <td>{{$buku->isbn}}</td>
                        </tr>
                        <tr>
                            <th>Tebal</th>
                            <td>:</td>
                            <td>{{$buku->halaman}}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>:</td>
                        </tr>
                      </table>
                      <br>
                        {{$buku->deskripsi}}<br>

                        <center style="margin-top: 50px">
                            <button type="button" class="btn view"><i class="far fa-file-alt"></i> View</button>
                            <button type="button" class="btn download"><i class="fas fa-download"></i> Download</button>
                        </center>
                    </div>
            </div>
        </main>
       
    </div>
</body>
</html>