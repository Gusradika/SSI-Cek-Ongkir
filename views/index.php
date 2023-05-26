<?php

require('rajaongkir.php');




function api($url)
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);

    curl_close($curl);

    return $result = json_decode($result, true);
}

$key = 'd71533af9cbd0a51005282dd79741f1a';
$url = 'https://api.rajaongkir.com/starter/province?key=' . $key;
$province = api($url);
$province = $province['rajaongkir']['results'];
var_dump($province);

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3rd Meet SSI Academy - Tracking System</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/my-css.css">
</head>

<body>
    <div class="container">
        <div class="row content">
            <div class="col">
                <p class="heading-s mb-2">Periksa Ongkos Kirim</p>
                <div class="form-cek">
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <p class="font-l-sb mb-3">Data Asal</p>
                                <div class="mb-3">
                                    <p class="font-m-m mb-2">Provinsi</p>
                                    <select class="form-select" id="origin-province" name="asalProvinsi" aria-label="Default select example">
                                        <option selected>Pilih Provinsi</option>
                                        <?php foreach ($province as $x) : ?>
                                            <option selected value="<?= $x['province_id'] ?>"><?= $x['province'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div> <!-- option asal provinsi -->
                                <div class="mb-3">
                                    <p class="font-m-m mb-2">Kota</p>
                                    <select class="form-select" id="origin-cities" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">Surabaya</option>
                                    </select>
                                </div> <!-- opstion asal kota -->
                            </div> <!-- col -->
                            <div class="col">
                                <p class="font-l-sb mb-3">Data Tujuan</p>
                                <div class="mb-3">
                                    <p class="font-m-m mb-2">Provinsi</p>
                                    <select class="form-select" id="detination-province" name="tujuanProvinsi" aria-label="Default select example">
                                        <option selected>Pilih Provinsi</option>
                                        <?php foreach ($province as $x) : ?>
                                            <option selected value="<?= $x['province_id'] ?>"><?= $x['province'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><!-- option tujuan provinsi -->
                                <div class="mb-3">
                                    <p class="font-m-m mb-2">Kota</p>
                                    <select class="form-select" id="destination-cities" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">Surabaya</option>
                                    </select>
                                </div><!-- opstion tujuan kota -->
                            </div> <!-- col -->

                            <div class="mb-3">
                                <p class="font-l-sb mb-2">Berat (Gram)</p>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Berat Barang">
                                </select>
                            </div><!-- option tujuan provinsi -->

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" id="check-postage" type="button">Cek</button>
                            </div>
                            <!--button cek-->
                        </div> <!-- row -->
                    </form> <!-- form -->
                </div> <!-- form-cek -->
            </div><!-- col -->

            <div class="col">
                <p class="heading-s mb-2">Opsi Kurir</p>
                <div class="opsi-kurir">
                    <div class="d-flex flex-direction-row gap-2">
                        <div class="border-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    JNE
                                </label>
                            </div>
                        </div>
                        <!--checkbox 1-->
                        <div class="border-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    TIKI
                                </label>
                            </div>
                        </div>
                        <!--checkbox 1-->
                        <div class="border-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    POS
                                </label>
                            </div>
                        </div>
                        <!--checkbox 1-->
                    </div>
                </div>
                <!--opsi kurir-->

                <p class="heading-s mb-2 mt-3">Hasil Ongkos Kirim</p>
                <div class="hasil">
                    <div class="JNE">
                        <p class="font-m-sb" id="title">JNE</p>
                        <!--kurir title-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between mb-2">
                            <div>
                                <p class="font-m-sb">JNE OKE</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between">
                            <div>
                                <p class="font-m-sb">JNE Reguler</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                    </div>
                    <div class="TIKI mt-3 d-none">
                        <p class="font-m-sb" id="title">TIKI</p>
                        <!--kurir title-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between mb-2">
                            <div>
                                <p class="font-m-sb">TIKI OKE</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between">
                            <div>
                                <p class="font-m-sb">TIKI Reguler</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                    </div>
                    <div class="POS mt-3 d-none">
                        <p class="font-m-sb" id="title">POS</p>
                        <!--kurir title-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between mb-2">
                            <div>
                                <p class="font-m-sb">POS OKE</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                        <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between">
                            <div>
                                <p class="font-m-sb">POS Reguler</p>
                                <p class="font-m-r">Ongkos Kirim Ekonomis</p>
                            </div>
                            <div>
                                <p class="font-l-sb">Rp 170.0000</p>
                            </div>
                        </div>
                        <!--detail hasil-->
                    </div>
                </div>

            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        // $('#origin-province').on('change', function() {
        //     const province = $('#origin-province').val();
        //     console.log(province);
        //     $.ajax({
        //         url: "https://api.rajaongkir.com/starter/city",
        //         type: 'get',
        //         dataType: 'json',
        //         data: {
        //             key: 'd71533af9cbd0a51005282dd79741f1a',
        //             province: 15
        //         },
        //         success: function($result) {
        //             console.log($result)

        //             if (result.Response == "True") {}
        //         }
        //     })
        // });

        $('#detination-province').on('change', function() {
            const province = $('#origin-province').val();
            console.log(province);

            $.ajax({
                url: "rajaongkir.php",
                type: 'get',
                data: {
                    'type': 'city',
                    'province': province
                },
                success: function(response) {

                    console.log(response);
                    $('#destination-cities').html(null);
                    const data = JSON.parse(response).rajaongkir
                    const result = data.results
                    $('#destination-cities').append(`
                        <option selected>Pilih Kota Asal...</option>
                        `);
                    let jneList = ''
                    $.each(result, function(i, result) {
                        $('#destination-cities').append(`
                        <option values="${result.city_id}">${result.city_name}</option>
                        `);
                    });

                    $('#result-jne-list').html(jneList)
                },
                complete: function() {
                    $('#check-postage').attr('disabled', false)
                    $('#check-postage').text('Cek')
                }
            })
        })

        $('#origin-province').on('change', function() {
            const province = $('#origin-province').val();
            console.log(province);

            $.ajax({
                url: "rajaongkir.php",
                type: 'get',
                data: {
                    'type': 'city',
                    'province': province
                },
                success: function(response) {

                    console.log(response);
                    $('#origin-cities').html(null);
                    const data = JSON.parse(response).rajaongkir
                    const result = data.results
                    $('#origin-cities').append(`
                        <option selected>Pilih Kota Asal...</option>
                        `);
                    let jneList = ''
                    $.each(result, function(i, result) {
                        $('#origin-cities').append(`
                        <option values="${result.city_id}">${result.city_name}</option>
                        `);
                    });

                    $('#result-jne-list').html(jneList)
                },
                complete: function() {
                    $('#check-postage').attr('disabled', false)
                    $('#check-postage').text('Cek')
                }
            })
        })

        $('#check-postage').on('click', function() {
            const origin = $('#origin-cities').val()
            const destination = $('#destination-cities').val()
            const weight = $('#weight').val()
            const courier = 'jne'

            $.ajax({
                url: "rajaongkir.php",
                type: 'POST',
                data: {
                    'type': 'postage',
                    'origin': origin,
                    'destination': destination,
                    'weight': weight,
                    'courier': courier,
                },
                success: function(response) {
                    const data = JSON.parse(response).rajaongkir
                    const courier = data.query.courier
                    const results = data.results

                    let jneList = ''
                    results.forEach(result => {
                        result.costs.forEach(cost => {
                            jneList += `
                            <div class="card-hasil d-flex flex-direction-row align-items-center justify-content-between mb-2">
                                <div>
                                    <p class="font-m-sb">${cost.service}</p>
                                    <p class="font-m-r">${cost.description}</p>
                                </div>
                                <div>
                                    <p class="font-l-sb">${cost.cost[0].value}</p>
                                </div>
                            </div>
                            `
                        });
                    })

                    $('#result-jne-list').html(jneList)
                },
                complete: function() {
                    $('#check-postage').attr('disabled', false)
                    $('#check-postage').text('Cek')
                }
            })
        })
    </script>
</body>

</html>