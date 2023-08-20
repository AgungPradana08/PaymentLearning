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
    <form action="/checkout/pesanan" method="POST">
        @csrf
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Varsity LA Blue 53</h5>
              <p class="card-text">Jaket diatas adalah pengeluaran terbaru dari brand Loss Andres.</p>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="nama" name="nama" placeholder="Masukkan Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input type="alamat" name="alamat" placeholder="Masukkan Alamat" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                <input type="nomor_telepon" name="nomor_telepon" placeholder="Masukkan Nomor Telepon" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Pesanan</label>
                <input type="number" name="quantity" placeholder="Masukkan Jumlah" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">CHECKOUT</button>
            </div>
          </div>
      </form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>