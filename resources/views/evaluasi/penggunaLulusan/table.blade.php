@extends('layouts.master')
@section('title', 'Home')


{{-- content --}}
@section('content')

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
                <td>Memiliki kejujuran, etika pergaulan, keramahan dan sikap yang baik</td>
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
                <td>Memiliki kemampuan dan menguasai bidang keilmuannya</td>
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
                <td>Memiliki kemampuan berbahasa asing (inggris/ jepang/ perancis/ cina)</td>
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
                <td>Memiliki kemampuan menggunakan Teknologi Informasi dan Komunikasi</td>
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
                <td>Memiliki kemampuan berkomunikasi</td>
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
                <td>Memiliki kemampuan kerjasama dalam tim</td>
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
                <td>Memiliki kedisiplinan yang baik dalam berbagai aspek</td>
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
                <td>Memiliki rasa percaya diri yang tinggi</td>
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
                <td>Memiliki rasa tanggung jawab</td>
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
                <td>Kemampuan menyampaikan ide pada bidang pekerjaan yang menjadi tanggung jawabnya</td>
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
        </tbody>
    </table>
</div>

@endsection
