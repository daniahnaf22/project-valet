@extends('layouts.main')
@section('dani')
    <article>

        <div class="table-responsive-lg">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">No Bp</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($detail_nobp['filter'] as $item)
                        <tr class="">
                           
                            <td>{{ $item['no_bp'] }}</td>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['nilai'] }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td style="text-align: center">
                            Rata-rata nilai :
                        </td>
                        <td colspan="3">
                            {{ $detail_nobp['rata'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
      

    </article>
    <a href="/nilai">Back to Nilai</a>
@endsection
