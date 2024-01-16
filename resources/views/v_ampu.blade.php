@extends('layouts.index')

@section('content')
    <h1>MATA KULIAH YANG DIAMPU</h1>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
    
        th, td {
            padding: 10px; /* Adjust the padding as needed */
            border: 1px solid #ddd; /* Add border for better visibility */
        }
    </style>
    
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Pengampu Matakuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Liduina asih primandari</td>
                <td>Statistik</td>
                <td>3</td>
            </tr>
            <!-- Add more <tr> elements for additional rows if needed -->
        </tbody>
    </table>
    
@endsection