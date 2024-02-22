@extends('layouts.master')
@section('title', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian TURTP')
@section('page', 'Evaluasi -> Pengguna Terhadap Kinerja Layanan Subbagian TURTP')


{{-- content --}}
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3 text-center">
        <h6 class="m-0 font-weight-bold text-primary">Penjelasan Tiap Butir Pertanyaan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
                <th>Item Pertanyaan</th>
                <th>Sangat Baik</th>
                <th>Baik</th>
                <th>Cukup</th>
                <th>Kurang</th>
                <th>Rata Rata</th>
                <th>Kinerja</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Item Pertanyaan</th>
                <th>Sangat Baik</th>
                <th>Baik</th>
                <th>Cukup</th>
                <th>Kurang</th>
                <th>Rata Rata</th>
                <th>Kinerja</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Ketersediaan, kejelasan dan kemudahan memperoleh informasi layanan</td>
                <td>{{ $percentages1['persen4'] }}%</td>
                <td>{{ $percentages1['persen3'] }}%</td>
                <td>{{ $percentages1['persen2'] }}%</td>
                <td>{{ $percentages1['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages1['persen4']*4 + $percentages1['persen3']*3 + $percentages1['persen2']*2 + $percentages1['persen1']*1) / 
                            ($percentages1['persen4'] + $percentages1['persen3'] + $percentages1['persen2'] + $percentages1['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages1['persen4']*4 + $percentages1['persen3']*3 + $percentages1['persen2']*2 + $percentages1['persen1']) / 
                            ($percentages1['persen4'] + $percentages1['persen3'] + $percentages1['persen2'] + $percentages1['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>
            <tr>
                <td>Suasana ruangan yang bersih dan nyaman</td>
                <td>{{ $percentages2['persen4'] }}%</td>
                <td>{{ $percentages2['persen3'] }}%</td>
                <td>{{ $percentages2['persen2'] }}%</td>
                <td>{{ $percentages2['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages2['persen4']*4 + $percentages2['persen3']*3 + $percentages2['persen2']*2 + $percentages2['persen1']*1) / 
                            ($percentages2['persen4'] + $percentages2['persen3'] + $percentages2['persen2'] + $percentages2['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages2['persen4']*4 + $percentages2['persen3']*3 + $percentages2['persen2']*2 + $percentages2['persen1']) / 
                            ($percentages2['persen4'] + $percentages2['persen3'] + $percentages2['persen2'] + $percentages2['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Staff berpenampilan bersih dan rapih serta berperilaku sopan dan ramah</td>
                <td>{{ $percentages3['persen4'] }}%</td>
                <td>{{ $percentages3['persen3'] }}%</td>
                <td>{{ $percentages3['persen2'] }}%</td>
                <td>{{ $percentages3['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages3['persen4']*4 + $percentages3['persen3']*3 + $percentages3['persen2']*2 + $percentages3['persen1']*1) / 
                            ($percentages3['persen4'] + $percentages3['persen3'] + $percentages3['persen2'] + $percentages3['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages3['persen4']*4 + $percentages3['persen3']*3 + $percentages3['persen2']*2 + $percentages3['persen1']) / 
                            ($percentages3['persen4'] + $percentages3['persen3'] + $percentages3['persen2'] + $percentages3['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>
            
            <tr>
                <td>Staf memiliki pengetahuan yang baik tentang layanan yang dibutuhkan</td>
                <td>{{ $percentages4['persen4'] }}%</td>
                <td>{{ $percentages4['persen3'] }}%</td>
                <td>{{ $percentages4['persen2'] }}%</td>
                <td>{{ $percentages4['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages4['persen4']*4 + $percentages4['persen3']*3 + $percentages4['persen2']*2 + $percentages4['persen1']*1) / 
                            ($percentages4['persen4'] + $percentages4['persen3'] + $percentages4['persen2'] + $percentages4['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages4['persen4']*4 + $percentages4['persen3']*3 + $percentages4['persen2']*2 + $percentages4['persen1']) / 
                            ($percentages4['persen4'] + $percentages4['persen3'] + $percentages4['persen2'] + $percentages4['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Staf mampu memberikan pelayanan sesuai dengan Standar Operasional Procedure (SOP)</td>
                <td>{{ $percentages5['persen4'] }}%</td>
                <td>{{ $percentages5['persen3'] }}%</td>
                <td>{{ $percentages5['persen2'] }}%</td>
                <td>{{ $percentages5['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages5['persen4']*4 + $percentages5['persen3']*3 + $percentages5['persen2']*2 + $percentages5['persen1']*1) / 
                            ($percentages5['persen4'] + $percentages5['persen3'] + $percentages5['persen2'] + $percentages5['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages5['persen4']*4 + $percentages5['persen3']*3 + $percentages5['persen2']*2 + $percentages5['persen1']) / 
                            ($percentages5['persen4'] + $percentages5['persen3'] + $percentages5['persen2'] + $percentages5['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>
            
            <tr>
                <td>Staf menunjukkan sikap responsive dan bertanggung jawab terhadap kebutuhan pengguna</td>
                <td>{{ $percentages6['persen4'] }}%</td>
                <td>{{ $percentages6['persen3'] }}%</td>
                <td>{{ $percentages6['persen2'] }}%</td>
                <td>{{ $percentages6['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages6['persen4']*4 + $percentages6['persen3']*3 + $percentages6['persen2']*2 + $percentages6['persen1']*1) / 
                            ($percentages6['persen4'] + $percentages6['persen3'] + $percentages6['persen2'] + $percentages6['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages6['persen4']*4 + $percentages6['persen3']*3 + $percentages6['persen2']*2 + $percentages6['persen1']) / 
                            ($percentages6['persen4'] + $percentages6['persen3'] + $percentages6['persen2'] + $percentages6['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Staf dapat ditemui/dihubungi dengan mudah</td>
                <td>{{ $percentages7['persen4'] }}%</td>
                <td>{{ $percentages7['persen3'] }}%</td>
                <td>{{ $percentages7['persen2'] }}%</td>
                <td>{{ $percentages7['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages7['persen4']*4 + $percentages7['persen3']*3 + $percentages7['persen2']*2 + $percentages7['persen1']*1) / 
                            ($percentages7['persen4'] + $percentages7['persen3'] + $percentages7['persen2'] + $percentages7['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages7['persen4']*4 + $percentages7['persen3']*3 + $percentages7['persen2']*2 + $percentages7['persen1']) / 
                            ($percentages7['persen4'] + $percentages7['persen3'] + $percentages7['persen2'] + $percentages7['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Staf terbuka dengan kritik/saran yang di sampaikan</td>
                <td>{{ $percentages8['persen4'] }}%</td>
                <td>{{ $percentages8['persen3'] }}%</td>
                <td>{{ $percentages8['persen2'] }}%</td>
                <td>{{ $percentages8['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages8['persen4']*4 + $percentages8['persen3']*3 + $percentages8['persen2']*2 + $percentages8['persen1']*1) / 
                            ($percentages8['persen4'] + $percentages8['persen3'] + $percentages8['persen2'] + $percentages8['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages8['persen4']*4 + $percentages8['persen3']*3 + $percentages8['persen2']*2 + $percentages8['persen1']) / 
                            ($percentages8['persen4'] + $percentages8['persen3'] + $percentages8['persen2'] + $percentages8['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>
        </tbody>
    </table>
   </div>
  </div>
</div>

@endsection
