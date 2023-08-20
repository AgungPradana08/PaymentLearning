<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-3">DETAIL PESANAN</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('img/jaket.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Detail Pesanan</h5>
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
              </table>
              <button class="btn btn-primary" id="pay-button">BAYAR SEKARANG</button>
              
            </div>
          </div>
    </div>

    

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
            //   alert("payment success!");
            window.location.href = '/invoice/{{$order->id}}'
                console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>