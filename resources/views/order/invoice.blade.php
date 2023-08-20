<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-3">JAKETERS</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Struk Belanja / INVOICE</h5>
                <table>
                  <tr>
                      <td>Nama</td>
                      <td> : {{$order->nama}}</td>
                  </tr>
                  <tr>
                      <td>Nomor Telepon</td>
                      <td> : {{$order->nomor_telepon}}</td>
                  </tr>
                  <tr>
                      <td>Alamat</td>
                      <td> : {{$order->alamat}}</td>
                  </tr>
                  <tr>
                      <td>Jumlah Pesanan</td>
                      <td> : {{$order->quantity}}</td>
                  </tr>
                  <tr>
                      <td>Total Harga</td>
                      <td> : {{$order->total_price}}</td>
                  </tr>
                  <tr>
                      <td>Status</td>
                      <td> : Pembayaran Sukses</td>
                  </tr>
                </table>
              </div>
          </div>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>