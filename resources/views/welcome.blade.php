<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jadwal Masjid</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover
        }

        .rounded100R {
            border-top-right-radius: 40px;
        }

        .rounded100L {
            border-top-left-radius: 40px;
        }
    </style>
</head>

<body style="background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;">
    <div class="container-fluid">
        <div class="row">
            <div class="col bg-dark opacity-75 text-white">
                <p>Sabtu<br>
                    16 November 2022<br>
                    18 Rabi'al-Awal 1441 H</p>
            </div>
            <div class="col-6 bg-primary opacity-50 text-white">
                <div class="row">
                    <div class="col-1">
                        <img src="{{ url('img/logo-masjid-hitam-putih.png') }}" width="100" height="100"
                            alt="">
                    </div>

                    <div class="col ms-4">
                        <div class="row ">
                            <div class="col">
                                <h3>Masjid Al-Hidayah</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Jl. Pajajaran 5 Kel. Pundung Banyak Kab. Bandung Utara</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>No HP : 02171538879</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col bg-dark opacity-75 text-white">
                <div class="d-flex justify-content-center mt-4">
                    <h1>18:22 WIB</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-white opacity-75 rounded100R">
                    <div class="d-flex justify-content-center mt-2">
                        <p class="fs-4 text-dark">Dzuhur - 00:16:23</p>
                    </div>
                </div>
                <div class="col border-5"></div>
                <div class="col-3 bg-white opacity-75 rounded100L">
                    <div class="d-flex justify-content-center mt-2">
                        <p class="fs-4 text-dark">ISRA MI'RAJ 127 HARI LAGI</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <th class="bg-primary opacity-100">IMSAK</th>
                    <th class="bg-secondary">SUBUH</th>
                    <th class="bg-success">MATAHARI TERBIT</th>
                    <th class="bg-danger">DZUHUR</th>
                    <th class="bg-warning">ASHAR</th>
                    <th class="bg-info">MAGRIBH</th>
                    <th class="bg-light">ISYA</th>
                </thead>
                <tbody>
                    <td class="table-primary fs-4">04:10 WIB</td>
                    <td class="table-secondary fs-4">04:10 WIB</td>
                    <td class="table-success fs-4">04:10 WIB</td>
                    <td class="table-danger fs-4">04:10 WIB</td>
                    <td class="table-warning fs-4">04:10 WIB</td>
                    <td class="table-info fs-4">04:10 WIB</td>
                    <td class="table-light opacity-75 fs-4">04:10 WIB</td>
                    <tr class="bg-dark">
                        <td colspan="7">
                            <marquee direction="left" class="fs-4 text-white">Ini Tulisan Berjalan</marquee>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>
<script src="{{ url('js/bootstrap.min.js') }}"></script>

</html>
