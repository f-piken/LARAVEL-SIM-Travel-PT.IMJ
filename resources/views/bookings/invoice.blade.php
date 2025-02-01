<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Contract & Invoice</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .container { width: 90%; margin: auto; padding: 20px; }
        h2, h3 { text-align: center; margin: 5px 0; }
        p { text-align: center; margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        td { border: 1px solid black; padding: 5px; }
        .form {border: none; border-top: 1px solid black; border-bottom: 1px solid black; padding: 10px; }
        .detail { display: flex; gap: 10px; }
        .category-row { align-items: center; gap: 20px; }
        .category-title { font-weight: bold; width: 150px; }
        .checkbox-group { display: flex;flex-direction: row; gap: 10px; flex-wrap: wrap; }
        .checkbox-group label { white-space: nowrap; }
        .checkbox-group { display: flex; flex-wrap: wrap; margin-top: 10px; }
        .checkbox-group label { width: 50%; padding: 5px; }
        .signature { display: flex; justify-content: space-between; margin-top: 30px; text-align: center; }
        .signature div { width: 30%; display: inline-block; }
        .title { font-weight: bold; }
        .description-table td { padding: 10px; }
        .isi { width: 100%; height: 200%; border: 1px solid #000; padding: 5px; vertical-align: top; }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td style="border: none;">
                    <img src="{{ $logoBase64 }}" alt="Company Logo" style="width: 100px; height: auto;">
                </td>
                <td style="border: none;">
                    <h2>IKHWANIN MULYO JOYO</h2>
                    <h3>Trans Tour Travel</h3>
                    <p>Janti, Dhomo, Kec. Kraton, Pasuruan, Jawa Timur 67151</p>
                    <h3>Rental Contract & Invoice</h3>
                    <p>Pihak kedua menyewa mobil dari pihak pertama yang disebutkan di bawah ini</p>
                </td>
            </tr>
        </table>
        {{-- <div style="text-align: center; margin-bottom: 10px;"> --}}

        <table>
            <tr>
                <td class="title form">
                    Customer Name :<br>
                    Nama Konsumen :</td><td class="form">{{ $booking->customer->name }}</td>
                <td class="title form">
                    Veicle Type / Nopol :<br>
                    Jenis Kendaraan / Nopol :</td><td class="form">{{ $booking->vehicle->name }} / {{ $booking->vehicle->license_plate }}</td>
            </tr>
            <tr>
                <td class="title form">
                    Address :<br>
                    Alamat</td><td class="form">{{ $booking->customer->address }}</td>
                <td class="title form">
                    Destination :<br>
                    Tujuan</td><td class="form">{{ $booking->destination }}</td>
            </tr>
            <tr>
                <td class="title form">
                    Date Out :<br>
                    Tanggal Keluar</td><td class="form">{{ \Carbon\Carbon::parse($booking->start_date)->format('d F, Y H:i') }}</td>
                <td class="title form">
                    Date In :<br>
                    Tanggal Kembali</td><td class="form">{{ \Carbon\Carbon::parse($booking->end_date)->format('d F, Y H:i') }}</td>
            </tr>
            <tr>
                <td class="title form">
                    Charge :<br>
                    Biaya :</td><td class="form">Rp. {{ number_format($booking->charge, 2) }}</td>
                <td class="title form">
                    Descriptions :<br>
                    Keterangan :</td><td class="form">{{ $booking->description ? $booking->description : '-' }}</td>
            </tr>
            <tr>
                <td class="title form">
                    Deposit :<br>
                    Dp :</td><td class="form">Rp. {{ number_format($booking->deposit, 2) }}</td>
                <td class="title form">
                    Balance :<br>
                    Sisa :</td><td class="form">Rp. {{ number_format($booking->balance, 2) }}</td>
            </tr>
        </table>

        <h4>Cek Kerusakan</h4>
        <div class="detail">
            @php
                $details = $booking->vehicle->details;
                $categories = [
                    'Surat - Surat' => [
                        'stnk' => $details->stnk,
                        'buku_kir' => $details->buku_kir,
                        'kartu_tap_oli' => $details->kartu_tap_oli
                    ],
                    'Peralatan Mobil' => [
                        'dongkrak' => $details->dongkrak,
                        'ban_serep' => $details->ban_serep,
                        'kunci_roda' => $details->kunci_roda
                    ],
                    'BBM' => [
                        'bbm_full' => $details->bbm_full
                    ],
                    'Kelistrikan' => [
                        'lampu_utama' => $details->lampu_utama,
                        'lampu_belakang' => $details->lampu_belakang,
                        'lampu_sein' => $details->lampu_sein,
                        'lampu_dalam' => $details->lampu_dalam,
                        'lcd' => $details->lcd,
                        'ac' => $details->ac
                    ]
                ];
            @endphp
        
            <table class="detail-table">
                <tbody>
                    <tr>
                        @foreach ($categories as $category => $items)
                            <td style="border: none;"><strong>{{ $category }}</strong></td>
                        @endforeach
                    </tr>
                    <tr style="vertical-align: top;">
                        @foreach ($categories as $category => $items)
                        <td style="border: none;">
                            @foreach ($items as $key => $value)
                                <label><input type="checkbox"><input type="checkbox" {{ $value ? 'checked' : '' }}>{{ str_replace('_', ' ', $key) }}</label><br>
                            @endforeach
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>        

        <h4>Deskripsi Kerusakan Body</h4>
        <table class="description-table">
            <tr align="center">
                <td class="title">Sebelum</td>
                <td class="title">Sesudah</td>
            </tr>
            <tr class="isi">
                <td>{{ $booking->details->deskripsi_sebelum }}<br><br><br><br><br><br></td>
                <td>{{ $booking->details->deskripsi_sesudah }}</td>
            </tr>
        </table>

        <h4>Perjanjian:</h4>
        <ol>
            <li>Wajib memiliki SIM untuk mobil yang akan disewa.</li>
            <li>Wajib menyerahkan fotokopi identitas KTP.</li>
            <li>Dalam menggunakan mobil selama waktu sewa, penyewa wajib menjaga kehati-hatian dan mematuhi peraturan lalu lintas.</li>
            <li>
                Dalam penggunaan mobil selama waktu sewa, penyewa dilarang untuk:
                <ul>
                    <li>Menyewakan mobil kembali kepada pihak lain.</li>
                    <li>Merindah tangan kendaraan sewa.</li>
                    <li>Menggunakan mobil untuk tindak kejahatan.</li>
                    <li>Menyuruh orang lain yang tidak memiliki SIM untuk mengemudikan mobil.</li>
                    <li>Menggunakan mobil di bawah pengaruh alkohol atau narkoba.</li>
                </ul>
            </li>
            <li>
                Maksimal pengembalian mobil pukul 00.00 WIB (12 Malam). Jika melebihi waktu tersebut, dikenakan charge Rp 50.000 per jam. 
                Toleransi keterlambatan hingga pukul 01.00 WIB.
            </li>
            <li>Segala kerusakan pada mobil saat pengembalian ditanggung penyewa.</li>
        </ol>

        <div class="signature">
            <div>Penyewa: <br> <br> <br> <br> <br> {{ $booking->customer->name }}</div>
            <div>Checking: <br> <br> <br> <br> <br>____________________</div>
            <div>Pemilik: <br> <br> <br> <br> <br>____________________</div>
        </div>
    </div>
</body>
</html>
