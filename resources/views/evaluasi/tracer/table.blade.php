@extends('layouts.master')
@section('title', 'Evaluasi -> Mahasiswa')
@section('page', 'Evaluasi -> Mahasiswa')


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
                <td>Prodi menetapkan dosen pembimbing akademik bagi mahasiswa</td>
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
                <td>Prodi menetapkan dosen pembina/pembimbing kegiatan kemahasiswaan di bidang akademik dan non akademik</td>
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
                <td>Prodi menyediakan layanan bimbingan dan konseling/ pengembangan karir/ kesehatan bagi mahasiswa</td>
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
                <td>Prodi menyediakan reward/ apresiasi/ beasiswa bagi mahasiswa</td>
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
                <td>Dosen memberikan materi kuliah dengan jelas</td>
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
                <td>Dosen yang ramah, empati, responsif, datang tepat waktu dan mudah ditemui</td>
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
                <td>Kemampuan staf akademik untuk melayani administrasi kemahasiswaan</td>
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
                <td>Ruang kuliah tertata bersih, rapi dan nyaman</td>
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
                <td>Ruang laboratorium dan peralatannya menunjang proses belajar mahasiswa</td>
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
                <td>Koleksi dan akses perpustakaan melengkapi sumber belajar mahasiswa</td>
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
                <td>Fasilitas ibadah/ olahraga/ kantin/ klinik/ toilet/ jalan dan akses transportasi tersedia untuk digunakan mahasiswa</td>
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
                <td>Prodi memberikan fasilitas internet (website, media sosial dan poster) untuk kegiatan mahasiswa</td>
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

            <tr>
                <td>Prodi memberikan fasilitas untuk organisasi kemahasiswaan</td>
                <td>{{ $percentages13['persen4'] }}%</td>
                <td>{{ $percentages13['persen3'] }}%</td>
                <td>{{ $percentages13['persen2'] }}%</td>
                <td>{{ $percentages13['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages13['persen4']*4 + $percentages13['persen3']*3 + $percentages13['persen2']*2 + $percentages13['persen1']*1) / 
                            ($percentages13['persen4'] + $percentages13['persen3'] + $percentages13['persen2'] + $percentages13['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages13['persen4']*4 + $percentages13['persen3']*3 + $percentages13['persen2']*2 + $percentages13['persen1']) / 
                            ($percentages13['persen4'] + $percentages13['persen3'] + $percentages13['persen2'] + $percentages13['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Prodi memberikan keamanan kampus bagi mahasiswa</td>
                <td>{{ $percentages14['persen4'] }}%</td>
                <td>{{ $percentages14['persen3'] }}%</td>
                <td>{{ $percentages14['persen2'] }}%</td>
                <td>{{ $percentages14['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages14['persen4']*4 + $percentages14['persen3']*3 + $percentages14['persen2']*2 + $percentages14['persen1']*1) / 
                            ($percentages14['persen4'] + $percentages14['persen3'] + $percentages14['persen2'] + $percentages14['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages14['persen4']*4 + $percentages14['persen3']*3 + $percentages14['persen2']*2 + $percentages14['persen1']) / 
                            ($percentages14['persen4'] + $percentages14['persen3'] + $percentages14['persen2'] + $percentages14['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Prodi menangani keluhan mahasiswa melalui dosen wali</td>
                <td>{{ $percentages15['persen4'] }}%</td>
                <td>{{ $percentages15['persen3'] }}%</td>
                <td>{{ $percentages15['persen2'] }}%</td>
                <td>{{ $percentages15['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages15['persen4']*4 + $percentages15['persen3']*3 + $percentages15['persen2']*2 + $percentages15['persen1']*1) / 
                            ($percentages15['persen4'] + $percentages15['persen3'] + $percentages15['persen2'] + $percentages15['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages15['persen4']*4 + $percentages15['persen3']*3 + $percentages15['persen2']*2 + $percentages15['persen1']) / 
                            ($percentages15['persen4'] + $percentages15['persen3'] + $percentages15['persen2'] + $percentages15['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Prodi memberikan sanksi bagi mahasiswa yang melanggar peraturan</td>
                <td>{{ $percentages16['persen4'] }}%</td>
                <td>{{ $percentages16['persen3'] }}%</td>
                <td>{{ $percentages16['persen2'] }}%</td>
                <td>{{ $percentages16['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages16['persen4']*4 + $percentages16['persen3']*3 + $percentages16['persen2']*2 + $percentages16['persen1']*1) / 
                            ($percentages16['persen4'] + $percentages16['persen3'] + $percentages16['persen2'] + $percentages16['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages16['persen4']*4 + $percentages16['persen3']*3 + $percentages16['persen2']*2 + $percentages16['persen1']) / 
                            ($percentages16['persen4'] + $percentages16['persen3'] + $percentages16['persen2'] + $percentages16['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Kejelasan rencana pembelajaran/ kontrak perkuliahan</td>
                <td>{{ $percentages17['persen4'] }}%</td>
                <td>{{ $percentages17['persen3'] }}%</td>
                <td>{{ $percentages17['persen2'] }}%</td>
                <td>{{ $percentages17['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages17['persen4']*4 + $percentages17['persen3']*3 + $percentages17['persen2']*2 + $percentages17['persen1']*1) / 
                            ($percentages17['persen4'] + $percentages17['persen3'] + $percentages17['persen2'] + $percentages17['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages17['persen4']*4 + $percentages17['persen3']*3 + $percentages17['persen2']*2 + $percentages17['persen1']) / 
                            ($percentages17['persen4'] + $percentages17['persen3'] + $percentages17['persen2'] + $percentages17['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Setiap pekerjaan/ tugas selalu dikembalikan kepada mahasiswa</td>
                <td>{{ $percentages18['persen4'] }}%</td>
                <td>{{ $percentages18['persen3'] }}%</td>
                <td>{{ $percentages18['persen2'] }}%</td>
                <td>{{ $percentages18['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages18['persen4']*4 + $percentages18['persen3']*3 + $percentages18['persen2']*2 + $percentages18['persen1']*1) / 
                            ($percentages18['persen4'] + $percentages18['persen3'] + $percentages18['persen2'] + $percentages18['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages18['persen4']*4 + $percentages18['persen3']*3 + $percentages18['persen2']*2 + $percentages18['persen1']) / 
                            ($percentages18['persen4'] + $percentages18['persen3'] + $percentages18['persen2'] + $percentages18['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Sistem penilaian dan evaluasi (UAS/ UTS/ Ujian modul/ Tugas terstruktur) yang diberikan kepada mahasiswa</td>
                <td>{{ $percentages19['persen4'] }}%</td>
                <td>{{ $percentages19['persen3'] }}%</td>
                <td>{{ $percentages19['persen2'] }}%</td>
                <td>{{ $percentages19['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages19['persen4']*4 + $percentages19['persen3']*3 + $percentages19['persen2']*2 + $percentages19['persen1']*1) / 
                            ($percentages19['persen4'] + $percentages19['persen3'] + $percentages19['persen2'] + $percentages19['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages19['persen4']*4 + $percentages19['persen3']*3 + $percentages19['persen2']*2 + $percentages19['persen1']) / 
                            ($percentages19['persen4'] + $percentages19['persen3'] + $percentages19['persen2'] + $percentages19['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Suasana akademik yang mendukung pengembangan kompetensi mahasiswa</td>
                <td>{{ $percentages20['persen4'] }}%</td>
                <td>{{ $percentages20['persen3'] }}%</td>
                <td>{{ $percentages20['persen2'] }}%</td>
                <td>{{ $percentages20['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages20['persen4']*4 + $percentages20['persen3']*3 + $percentages20['persen2']*2 + $percentages20['persen1']*1) / 
                            ($percentages20['persen4'] + $percentages20['persen3'] + $percentages20['persen2'] + $percentages20['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages20['persen4']*4 + $percentages20['persen3']*3 + $percentages20['persen2']*2 + $percentages20['persen1']) / 
                            ($percentages20['persen4'] + $percentages20['persen3'] + $percentages20['persen2'] + $percentages20['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Prodi memonitor terhadap kemajuan mahasiswa melalui dosen pembimbing akademik dan dosen pembimbing tugas akhir</td>
                <td>{{ $percentages21['persen4'] }}%</td>
                <td>{{ $percentages21['persen3'] }}%</td>
                <td>{{ $percentages21['persen2'] }}%</td>
                <td>{{ $percentages21['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages21['persen4']*4 + $percentages21['persen3']*3 + $percentages21['persen2']*2 + $percentages21['persen1']*1) / 
                            ($percentages21['persen4'] + $percentages21['persen3'] + $percentages21['persen2'] + $percentages21['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages21['persen4']*4 + $percentages21['persen3']*3 + $percentages21['persen2']*2 + $percentages21['persen1']) / 
                            ($percentages21['persen4'] + $percentages21['persen3'] + $percentages21['persen2'] + $percentages21['persen1']);
                        $kinerja = $average > 3.5 ? 'Sangat Baik' :
                                    ($average > 2.5 ? 'Baik' :
                                    ($average > 1.5 ? 'Cukup' : 'Kurang'));
                    @endphp
                    {{ $kinerja }}
                </td>
            </tr>

            <tr>
                <td>Prodi memahami minat/ bakat/ keluhan/ kepentingan/ kesulitan mahasiswa</td>
                <td>{{ $percentages22['persen4'] }}%</td>
                <td>{{ $percentages22['persen3'] }}%</td>
                <td>{{ $percentages22['persen2'] }}%</td>
                <td>{{ $percentages22['persen1'] }}%</td>
                <td>
                    {{
                        number_format(
                            ($percentages22['persen4']*4 + $percentages22['persen3']*3 + $percentages22['persen2']*2 + $percentages22['persen1']*1) / 
                            ($percentages22['persen4'] + $percentages22['persen3'] + $percentages22['persen2'] + $percentages22['persen1']),
                        2)
                    }}
                </td>
                <td>
                    @php
                        $average = 
                            ($percentages22['persen4']*4 + $percentages22['persen3']*3 + $percentages22['persen2']*2 + $percentages22['persen1']) / 
                            ($percentages22['persen4'] + $percentages22['persen3'] + $percentages22['persen2'] + $percentages22['persen1']);
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
