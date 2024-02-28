@extends('layouts.master')
@section('title', 'Evaluasi -> Dosen')
@section('page', 'Evaluasi -> Dosen')


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
                <td>Kebersihan dan kenyamanan laboratorium</td>
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
                <td>Sarana / prasarana laboratorium terawat dan berfungsi baik</td>
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
                <td>Ketua dan staf laboratorium/bengkel/studio mampu memberikan pelayanan sesuai dengan kebutuhan pengguna</td>
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
                <td>Ketua dan staf laboratorium/ bengkel/ studio terbuka dengan kritik dan saran terkait pelayanan yang diberikan</td>
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
                <td>Ketua dan staf laboratorium/ bengkel/ studio dapat menyelesaikan persoalan secara cepat dan tepat</td>
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
                <td>Tersedia manual untuk setiap peralatan</td>
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
                <td>Staf laboratorium/bengkel/studio trampil mengoperasikan peralatan yang dimiliki</td>
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

            <tr>
                <td>Hasil analisis/produk dapat dipertanggungjawabkan</td>
                <td>{{ $percentages9['persen4'] }}%</td>
                <td>{{ $percentages9['persen3'] }}%</td>
                <td>{{ $percentages9['persen2'] }}%</td>
                <td>{{ $percentages9['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages9['persen4']*4 + $percentages9['persen3']*3 + $percentages9['persen2']*2 + $percentages9['persen1']*1) / 
                            ($percentages9['persen4'] + $percentages9['persen3'] + $percentages9['persen2'] + $percentages9['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages9['persen4']*4 + $percentages9['persen3']*3 + $percentages9['persen2']*2 + $percentages9['persen1']) / 
                            ($percentages9['persen4'] + $percentages9['persen3'] + $percentages9['persen2'] + $percentages9['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Ketua dan staf laboratorium/bengkel/studio mudah ditemui/dihubungi</td>
                <td>{{ $percentages10['persen4'] }}%</td>
                <td>{{ $percentages10['persen3'] }}%</td>
                <td>{{ $percentages10['persen2'] }}%</td>
                <td>{{ $percentages10['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages10['persen4']*4 + $percentages10['persen3']*3 + $percentages10['persen2']*2 + $percentages10['persen1']*1) / 
                            ($percentages10['persen4'] + $percentages10['persen3'] + $percentages10['persen2'] + $percentages10['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages10['persen4']*4 + $percentages10['persen3']*3 + $percentages10['persen2']*2 + $percentages10['persen1']) / 
                            ($percentages10['persen4'] + $percentages10['persen3'] + $percentages10['persen2'] + $percentages10['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Ketua dan staf laboratorium/bengkel/studio menunjukkan sikap peduli dan responsif terhadap kebutuhan/ keluhan pengguna</td>
                <td>{{ $percentages11['persen4'] }}%</td>
                <td>{{ $percentages11['persen3'] }}%</td>
                <td>{{ $percentages11['persen2'] }}%</td>
                <td>{{ $percentages11['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages11['persen4']*4 + $percentages11['persen3']*3 + $percentages11['persen2']*2 + $percentages11['persen1']*1) / 
                            ($percentages11['persen4'] + $percentages11['persen3'] + $percentages11['persen2'] + $percentages11['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages11['persen4']*4 + $percentages11['persen3']*3 + $percentages11['persen2']*2 + $percentages11['persen1']) / 
                            ($percentages11['persen4'] + $percentages11['persen3'] + $percentages11['persen2'] + $percentages11['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Sarana/prasarana laboratorium/bengkel/studio lengkap dan nyaman</td>
                <td>{{ $percentages12['persen4'] }}%</td>
                <td>{{ $percentages12['persen3'] }}%</td>
                <td>{{ $percentages12['persen2'] }}%</td>
                <td>{{ $percentages12['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages12['persen4']*4 + $percentages12['persen3']*3 + $percentages12['persen2']*2 + $percentages12['persen1']*1) / 
                            ($percentages12['persen4'] + $percentages12['persen3'] + $percentages12['persen2'] + $percentages12['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages12['persen4']*4 + $percentages12['persen3']*3 + $percentages12['persen2']*2 + $percentages12['persen1']) / 
                            ($percentages12['persen4'] + $percentages12['persen3'] + $percentages12['persen2'] + $percentages12['persen1']);
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
