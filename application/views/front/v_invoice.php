<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>

    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }

        html {
            min-height: 100%;
            max-width: 100%;
            position: relative;
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2em;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Caveat Brush', cursive;
        }

        .right-align {
            text-align: right;
        }

        p {
            margin: 0;
        }

        table {
            width: 100%;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table, th, td {
            border: none;
        }

        td, th {
            padding: 15px 5px;
            display: table-cell;
            text-align: left;
            vertical-align: middle;
            border-radius: 2px;
        }

        tr {
            border-bottom: 1px solid rgba(0,0,0,0.12);
        }

        #invoice {
            max-width: 800px;
            margin: 0 auto; 
            border: 1px solid #ea5210;
            margin-top: 10px;
            font-size: .95em;
        }

        #invoice > div {
            padding: 20px 30px;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            background-color: #ea5210;
            color: white;
            align-items: center;
        }

        .invoice-header > div:first-child {
            display: flex;
            align-items: center;
        }

        .invoice-header > div:first-child > img {
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .invoice-header > div:first-child > p {
            font-size: 2em;
            margin: 0;
            line-height: 1;
        }

        .invoice-header > div {
            display: flex;
            justify-content: space-between;
        }

        .invoice-header > div > div {
            padding-left: 20px;
        }

        .invoice-header > div > div > p {
            line-height: 1.5;
            margin: 0;
            font-size: .9em;
            font-weight: 200;
        }

        .info-pemesan {
            display: flex;
            justify-content: space-between;
        }

        p.info-judul {
            color: rgb(143, 143, 143);
            margin-bottom: 3px;
        }

        .info-pemesan p {
            font-size: .9em;
        }

        .info-pemesan > div:first-child {
            display: flex;
        }

        .info-pemesan > div > div {
            max-width: 200px;
            margin-right: 30px;
        }

        .info-pemesan > div > div > div:first-child {
            margin-bottom: 10px;
        }

        p.status-pembayaran {
            text-align: center;
            padding: 5px 10px;
            color: white;
            border-radius: 5px;
            margin-top: 5px;
        }

        p.waiting {
            background-color: red;
        }

        p.success {
            background-color: green;
        }

        p.biaya-total {
            font-size: 2em;
            color: #1d98fd;
            margin-top: 0px;
        }

        .detail-tiket-pesanan > div {
            border-top: 2px solid #ea5210;
        }

        #invoice .pesan-invoice {
            padding-top: 0;
            font-size: .6em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pesan-invoice > div:first-child {
            max-width: 70%;
        }

        #invoice .pesan-invoice .cetak-kartu {
            font-size: 1.5em;
            background-color: #1d98fd;
            color: white;
            outline: none;
            box-shadow: 1px 1px 1px 1px rgb(92, 92, 92);
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
    
</head>

<body>
    <div id="invoice">
        <div class="invoice-header">
            <div>
                <img src="<?php echo base_url(); ?>assets/img/logo-digidang-background.png" alt="logo">
                <p>DIGIDANG</p>
            </div>
            <div>
                <div class="right-align">
                    <p>021-002-883</p>
                    <p>cs@digidang.com</p>
                    <p>https://www.digidang.com</p>
                </div>
                <div class="right-align">
                    <p>Alamat</p>
                    <p>Yogyakarta, Indonesia</p>
                    <p>Kode Pos</p>
                </div>
            </div>
        </div>
        <div class="info-pemesan">
            <div>
                <div>
                    <div>
                        <p class="info-judul">Kode Order</p>
                        <p><?php echo $or['order_code']; ?></p>
                    </div>
                    <div>
                        <p class="info-judul">Pemesan</p>
                        <p><?php echo $cust['nama']; ?></p>
                        <p><?php echo $cust['email']; ?></p>
                        <p><?php echo $cust['phone']; ?></p>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="info-judul">Tanggal Pemesanan</p>
                        <p>27 Mei 2018</p>
                    </div>
                </div>
            </div>
            <?php 
            $cart = $this->cart->contents();
            $grand_total = 0;
            foreach ($cart as $it) {
                $grand_total += $it['subtotal']; 
            } 
            ?>
            <div>
                <p class="right-align info-judul">Total</p>
                <p class="biaya-total">Rp<span><?php echo number_format($grand_total, 0,",","."); ?></span></p>
                <p class="status-pembayaran waiting">Belum Dibayar</p>
            </div>
        </div>
        <div class="detail-tiket-pesanan">
            <div>
                <table>
                    <tr>
                        <th>Nama Paket</th>
                        <th>Harga Satuan</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                    </tr>
                    <?php foreach ($cart as $it) { ?>
                    <tr>
                        <td><?php echo $it['name']; ?></td>
                        <td>Rp. <?php echo number_format($it['price'],0,",","."); ?></td>
                        <td><?php echo $it['qty']; ?></td>
                        <td>Rp. <?php echo number_format($it['subtotal'],0,",","."); ?></td>
                    </tr>
                    <?php } $this->cart->destroy(); ?>
                </table>
            </div>
        </div>
        <div class="pesan-invoice">
            <div>
                <p>Pembayaran belum dilakukan</p>
                <p>Mohon melakukan pembayaran terlebih dahulu untuk mencetak kartu</p>
            </div>
            <div>
                <button class="cetak-kartu">Cetak</button>
            </div>
        </div>
    </div>
</body>

</html>