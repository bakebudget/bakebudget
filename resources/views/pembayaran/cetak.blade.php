<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Laporan Pengeluaran</h2>
            </div>
            <div class="col">
                <table style="border: 1px solid black;">
                    <thead>
                    <tr>
                        <th style="border: 1px solid black ;">
                            #
                        </th>
                        <th style="border: 1px solid black ;">
                            ID
                        </th>
                        <th style="border: 1px solid black ;">
                            Tanggal Pembayaran
                        </th>
                        <th style="border: 1px solid black ;">
                            Metode Pembayaran
                        </th>
                        <th style="border: 1px solid black ;">
                            Nama Penerima
                        </th>
                        <th style="border: 1px solid black ;">
                            Perihal
                        </th>
                        <th style="border: 1px solid black ;">
                            Nominal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    @foreach ($pembayaran as $p)
                    <tr style="border: 1px solid black;">
                        <td style="border: 1px solid black;">
                            {{ $x++ }}
                        </td>
                        <td style="border: 1px solid black;">
                            {{ $p->tanggal_pembayaran }}
                        </td>
                        <td style="border: 1px solid black;">
                            {{ $p->metode_pembayaran->nama_metode }}
                        </td>
                        <td style="border: 1px solid black;">
                            {{ $p->nama_penerima }}
                        </td>
                        <td style="border: 1px solid black;">
                            {{ $p->rencana_pengeluaran->deskripsi }}
                        </td>
                        <td style="border: 1px solid black;">
                            {{ $p->nominal_pembayaran }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>