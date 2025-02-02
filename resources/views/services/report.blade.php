<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report - {{ $monthName }} {{ $year }}</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        .text-right { text-align: right; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Report for {{ $monthName }} {{ $year }}</h2>
    
    @if($reports->isEmpty())
        <p style="text-align: center; color: red;">No data found for this period.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service ID</th>
                    <th>Tanggal Service</th>
                    <th>Jumlah</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->service_id }}</td>
                        <td>{{ $report->tanggal_service }}</td>
                        <td>{{ number_format($report->jumlah, 2) }}</td>
                        <td>{{ number_format($report->debet, 2) }}</td>
                        <td>{{ number_format($report->kredit, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="border: none"></td>
                    <td class="text-right"><strong>Subtotal</strong></td>
                    <td>{{ number_format($totalDebet, 2) }}</td>
                    <td>{{ number_format($totalKredit, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="border: none"></td>
                    <td class="text-right"><strong>Grand Total</strong></td>
                    <td colspan="2">{{ number_format($totalPendapatan, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
</body>
</html>
