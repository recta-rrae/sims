@extends('layouts.main')

@section('content')
    <div class="tw-mx-10">
        <div class="tw-flex tw-justify-between tw-gap-5 tw-mt-8">
            <div class="tw-flex tw-flex-col">
                <h4 class="title-main">Data Rekap Jumlah Siswa</h4>
            </div>
        </div>

        <div x-data="{
            openTab: 1,
            activeClasses: 'tw-bg-white tw-border tw-border-b-white',
            inactiveClasses: 'tw-bg-gray-200 tw-border'
            }" class="">
            <div class="tw-float-right">
                @can('rekap-siswa')
                <div class="tw-flex tw-items-center -tw-mt-4">
                    <a href="/rekap-jumlah-siswa-print" target="__blank" title="Print"><i class="fa-solid fa-print btn-export"></i></a>
                    <button id="copy_btn" type="button" value="copy"><i class="fa-solid fa-copy btn-export"></i></button>
                    <a href="/rekap-jumlah-siswa-excel" target="__blank" title="Export ke Excel" target="__blank" title="Export ke Excel"><i class="fa-solid fa-file-excel btn-export"></i></a>
                    <a href="/rekap-jumlah-siswa-pdf" target="__blank" title="Export ke PDF"><i class="fa-solid fa-file-pdf btn-export"></i></a>
                </div>
                @endcan
                {{-- <a href="" class="tw-bg-sims-400 tw-text-white hover:tw-text-white tw-font-pop hover:tw-bg-sims-600 tw-px-5 tw-py-2 tw-rounded-lg tw-mr-5">Ekspor</a> --}}
            </div>
            <ul class="tw-flex mb-0 mt-4 tw--ml-6 tw-font-pop tw-text-xl">
                <li @click="openTab = 1" :class="{ 'tw--mb-px': openTab === 1 }">
                    <button :class="openTab === 1 ? activeClasses : inactiveClasses"
                        class="tw-rounded-t-2xl tw-text-gray-500 hover:tw-text-sims-400 tw-inline-block tw-py-2 tw-px-10 tw-font-semibold">
                        Semua Kelas
                    </button>
                </li>
                <li @click="openTab = 2" :class="{ 'tw--mb-px': openTab === 2 }">
                    <button :class="openTab === 2 ? activeClasses : inactiveClasses"
                        class="tw-rounded-t-2xl tw-text-gray-500 hover:tw-text-sims-400 tw-inline-block tw-py-2 tw-px-10 tw-font-semibold">
                        X
                    </button>
                </li>
                <li @click="openTab = 3" :class="{ 'tw--mb-px': openTab === 3 }">
                    <button :class="openTab === 3 ? activeClasses : inactiveClasses"
                        class="tw-rounded-t-2xl tw-text-gray-500 hover:tw-text-sims-400 tw-inline-block tw-py-2 tw-px-10 tw-font-semibold">
                        XI
                    </button>
                </li>
                <li @click="openTab = 4" :class="{ 'tw--mb-px': openTab === 4 }">
                    <button :class="openTab === 4 ? activeClasses : inactiveClasses"
                        class="tw-rounded-t-2xl tw-text-gray-500 hover:tw-text-sims-400 tw-inline-block tw-py-2 tw-px-10 tw-font-semibold">
                        XII
                    </button>
                </li>
            </ul>
            <div x-show="openTab === 1" class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mb-20">
                <table class="tw-w-full tw-text-sm tw-text-center">
                    <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                        <tr>
                            <th scope="col" rowspan="2" class="tw-py-3 tw-px-6 tw-border">KELAS</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA AWAL BULAN</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA KELUAR</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA MASUK</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA AKHIR BULAN</th>
                        </tr>
                        <tr>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                        </tr>
                    </thead>
                    <tbody class="tw-text-base">

                        <?php $sum_total_siswa_p = 0; ?>
                        <?php $sum_total_siswa_l = 0; ?>
                        <?php $sum_total_siswa = 0; ?>

                        <?php $sum_total_siswa_p_keluar = 0; ?>
                        <?php $sum_total_siswa_l_keluar = 0; ?>
                        <?php $sum_total_siswa_keluar = 0; ?>

                        <?php $sum_total_siswa_p_masuk = 0; ?>
                        <?php $sum_total_siswa_l_masuk = 0; ?>
                        <?php $sum_total_siswa_masuk = 0; ?>

                        <?php $sum_total_siswa_p_akhir = 0; ?>
                        <?php $sum_total_siswa_l_akhir = 0; ?>
                        <?php $sum_total_siswa_akhir = 0; ?>


                        <!-- buat ganti bgcolor perbaris -->
                        @php
                            
                            $lastid = null;
                            $rowclass = '';
                            
                        @endphp
                        <!-- ---------------------------- -->

                        @foreach ($semua_kelas as $k)
                            <!-- buat ganti bgcolor perbaris -->
                            @php
                                if ($lastid !== $k->id) {
                                    $lastid = $k->id;
                                    if ($rowclass == 'tw-bg-slate-50') {
                                        $rowclass = 'tw-bg-white';
                                    } else {
                                        $rowclass = 'tw-bg-slate-50';
                                    }
                                }
                            @endphp
                            <!-- ---------------------------- -->

                            <tr class="tw-bg-white tw-border {{ $rowclass }}">
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->id }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->jumlahSiswaPerempuan }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->jumlahSiswaLaki }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->jumlahSiswa }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->siswaPerempuanKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->siswaLakiKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->jumlahSiswaKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->siswaPerempuanMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k->jumlahSiswaMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k->jumlahSiswaPerempuan - $k->siswaPerempuanKeluar + $k->siswaPerempuanMasuk }}
                                </td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k->jumlahSiswaLaki - $k->siswaLakiKeluar + $k->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k->jumlahSiswaPerempuan - $k->siswaPerempuanKeluar + $k->siswaPerempuanMasuk + $k->jumlahSiswaLaki - $k->siswaLakiKeluar + $k->siswaLakiMasuk }}
                                </td>
                            </tr>
                            <?php $sum_total_siswa_p += $k->jumlahSiswaPerempuan; ?>
                            <?php $sum_total_siswa_l += $k->jumlahSiswaLaki; ?>
                            <?php $sum_total_siswa += $k->jumlahSiswa; ?>

                            <?php $sum_total_siswa_p_keluar += $k->siswaPerempuanKeluar; ?>
                            <?php $sum_total_siswa_l_keluar += $k->siswaLakiKeluar; ?>
                            <?php $sum_total_siswa_keluar += $k->jumlahSiswaKeluar; ?>

                            <?php $sum_total_siswa_p_masuk += $k->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_masuk += $k->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_masuk += $k->jumlahSiswaMasuk; ?>

                            <?php $sum_total_siswa_p_akhir += $k->jumlahSiswaPerempuan - $k->siswaPerempuanKeluar + $k->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_akhir += $k->jumlahSiswaLaki - $k->siswaLakiKeluar + $k->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_akhir += $k->jumlahSiswaPerempuan - $k->siswaPerempuanKeluar + $k->siswaPerempuanMasuk + $k->jumlahSiswaLaki - $k->siswaLakiKeluar + $k->siswaLakiMasuk; ?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th class="tw-border">JUMLAH SISWA</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_keluar }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_keluar }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_keluar }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_masuk }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_masuk }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_masuk }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_akhir }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_akhir }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_akhir }}</th>
                    </tfoot>
                </table>
            </div>
            <div x-show="openTab === 2" class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mb-20">
                <table class="tw-w-full tw-text-sm tw-text-center">
                    <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                        <tr>
                            <th scope="col" rowspan="2" class="tw-py-3 tw-px-6 tw-border-r">KELAS</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA AWAL BULAN</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA KELUAR</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA MASUK</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA AKHIR BULAN</th>
                        </tr>
                        <tr>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                        </tr>
                    </thead>
                    <tbody class="tw-text-base">

                        <?php $sum_total_siswa_p_X = 0; ?>
                        <?php $sum_total_siswa_l_X = 0; ?>
                        <?php $sum_total_siswa_X = 0; ?>

                        <?php $sum_total_siswa_p_keluar_X = 0; ?>
                        <?php $sum_total_siswa_l_keluar_X = 0; ?>
                        <?php $sum_total_siswa_keluar_X = 0; ?>

                        <?php $sum_total_siswa_p_masuk_X = 0; ?>
                        <?php $sum_total_siswa_l_masuk_X = 0; ?>
                        <?php $sum_total_siswa_masuk_X = 0; ?>

                        <?php $sum_total_siswa_p_akhir_X = 0; ?>
                        <?php $sum_total_siswa_l_akhir_X = 0; ?>
                        <?php $sum_total_siswa_akhir_X = 0; ?>

                        @foreach ($kelas10 as $k10)
                            <!-- buat ganti bgcolor perbaris -->
                            @php
                                if ($lastid !== $k10->id) {
                                    $lastid = $k10->id;
                                    if ($rowclass == 'tw-bg-slate-50') {
                                        $rowclass = 'tw-bg-white';
                                    } else {
                                        $rowclass = 'tw-bg-slate-50';
                                    }
                                }
                            @endphp
                            <!-- ---------------------------- -->

                            <tr class="tw-bg-white tw-border {{ $rowclass }}">
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->id }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->jumlahSiswaPerempuan }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->jumlahSiswaLaki }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->jumlahSiswa }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->siswaPerempuanKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->siswaLakiKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->jumlahSiswaKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->siswaPerempuanMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k10->jumlahSiswaMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k10->jumlahSiswaPerempuan - $k10->siswaPerempuanKeluar + $k10->siswaPerempuanMasuk }}
                                </td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k10->jumlahSiswaLaki - $k10->siswaLakiKeluar + $k10->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k10->jumlahSiswaPerempuan - $k10->siswaPerempuanKeluar + $k10->siswaPerempuanMasuk + $k10->jumlahSiswaLaki - $k10->siswaLakiKeluar + $k10->siswaLakiMasuk }}
                                </td>
                            </tr>
                            <?php $sum_total_siswa_p_X += $k10->jumlahSiswaPerempuan; ?>
                            <?php $sum_total_siswa_l_X += $k10->jumlahSiswaLaki; ?>
                            <?php $sum_total_siswa_X += $k10->jumlahSiswa; ?>

                            <?php $sum_total_siswa_p_keluar_X += $k10->siswaPerempuanKeluar; ?>
                            <?php $sum_total_siswa_l_keluar_X += $k10->siswaLakiKeluar; ?>
                            <?php $sum_total_siswa_keluar_X += $k10->jumlahSiswaKeluar; ?>

                            <?php $sum_total_siswa_p_masuk_X += $k10->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_masuk_X += $k10->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_masuk_X += $k10->jumlahSiswaMasuk; ?>

                            <?php $sum_total_siswa_p_akhir_X += $k10->jumlahSiswaPerempuan - $k10->siswaPerempuanKeluar + $k10->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_akhir_X += $k10->jumlahSiswaLaki - $k10->siswaLakiKeluar + $k10->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_akhir_X += $k10->jumlahSiswaPerempuan - $k10->siswaPerempuanKeluar + $k10->siswaPerempuanMasuk + $k10->jumlahSiswaLaki - $k10->siswaLakiKeluar + $k10->siswaLakiMasuk; ?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th class="tw-border">JUMLAH SISWA</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_keluar_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_keluar_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_keluar_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_masuk_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_masuk_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_masuk_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_akhir_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_akhir_X }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_akhir_X }}</th>
                    </tfoot>
                </table>
            </div>
            <div x-show="openTab === 3" class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mb-20">
                <table class="tw-w-full tw-text-sm tw-text-center">
                    <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                        <tr>
                            <th scope="col" rowspan="2" class="tw-py-3 tw-px-6 tw-border-r">KELAS</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA AWAL BULAN</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA KELUAR</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA MASUK</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border-r">JUMLAH SISWA AKHIR BULAN</th>
                        </tr>
                        <tr>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                        </tr>
                    </thead>
                    <tbody class="tw-text-base">
                        <?php $sum_total_siswa_p_XI = 0; ?>
                        <?php $sum_total_siswa_l_XI = 0; ?>
                        <?php $sum_total_siswa_XI = 0; ?>

                        <?php $sum_total_siswa_p_keluar_XI = 0; ?>
                        <?php $sum_total_siswa_l_keluar_XI = 0; ?>
                        <?php $sum_total_siswa_keluar_XI = 0; ?>

                        <?php $sum_total_siswa_p_masuk_XI = 0; ?>
                        <?php $sum_total_siswa_l_masuk_XI = 0; ?>
                        <?php $sum_total_siswa_masuk_XI = 0; ?>
                        <?php $sum_total_siswa_p_akhir_XI = 0; ?>
                        <?php $sum_total_siswa_l_akhir_XI = 0; ?>
                        <?php $sum_total_siswa_akhir_XI = 0; ?>

                        @foreach ($kelas11 as $k11)
                            <!-- buat ganti bgcolor perbaris -->
                            @php
                                if ($lastid !== $k11->id) {
                                    $lastid = $k11->id;
                                    if ($rowclass == 'tw-bg-slate-50') {
                                        $rowclass = 'tw-bg-white';
                                    } else {
                                        $rowclass = 'tw-bg-slate-50';
                                    }
                                }
                            @endphp
                            <!-- ---------------------------- -->

                            <tr class="tw-bg-white tw-border {{ $rowclass }}">
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->id }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->jumlahSiswaPerempuan }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->jumlahSiswaLaki }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->jumlahSiswa }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->siswaPerempuanKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->siswaLakiKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->jumlahSiswaKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->siswaPerempuanMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k11->jumlahSiswaMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k11->jumlahSiswaPerempuan - $k11->siswaPerempuanKeluar + $k11->siswaPerempuanMasuk }}
                                </td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k11->jumlahSiswaLaki - $k11->siswaLakiKeluar + $k11->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k11->jumlahSiswaPerempuan - $k11->siswaPerempuanKeluar + $k11->siswaPerempuanMasuk + $k11->jumlahSiswaLaki - $k11->siswaLakiKeluar + $k11->siswaLakiMasuk }}
                                </td>
                            </tr>
                            <?php $sum_total_siswa_p_XI += $k11->jumlahSiswaPerempuan; ?>
                            <?php $sum_total_siswa_l_XI += $k11->jumlahSiswaLaki; ?>
                            <?php $sum_total_siswa_XI += $k11->jumlahSiswa; ?>

                            <?php $sum_total_siswa_p_keluar_XI += $k11->siswaPerempuanKeluar; ?>
                            <?php $sum_total_siswa_l_keluar_XI += $k11->siswaLakiKeluar; ?>
                            <?php $sum_total_siswa_keluar_XI += $k11->jumlahSiswaKeluar; ?>

                            <?php $sum_total_siswa_p_masuk_XI += $k11->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_masuk_XI += $k11->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_masuk_XI += $k11->jumlahSiswaMasuk; ?>

                            <?php $sum_total_siswa_p_akhir_XI += $k11->jumlahSiswaPerempuan - $k11->siswaPerempuanKeluar + $k11->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_akhir_XI += $k11->jumlahSiswaLaki - $k11->siswaLakiKeluar + $k11->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_akhir_XI += $k11->jumlahSiswaPerempuan - $k11->siswaPerempuanKeluar + $k11->siswaPerempuanMasuk + $k11->jumlahSiswaLaki - $k11->siswaLakiKeluar + $k11->siswaLakiMasuk; ?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th class="tw-border">JUMLAH SISWA</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_keluar_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_keluar_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_keluar_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_masuk_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_masuk_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_masuk_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_akhir_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_akhir_XI }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_akhir_XI }}</th>
                    </tfoot>
                </table>
            </div>
            <div x-show="openTab === 4" class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mb-20">
                <table class="tw-w-full tw-text-sm tw-text-center">
                    <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                        <tr>
                            <th scope="col" rowspan="2" class="tw-py-3 tw-px-6 tw-border">KELAS</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA AWAL BULAN</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA KELUAR</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA MASUK</th>
                            <th scope="col" colspan="3" class="tw-py-3 tw-px-6 tw-border">JUMLAH SISWA AKHIR BULAN</th>
                        </tr>
                        <tr>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                            <th class="tw-border tw-py-3 tw-px-6">P</th>
                            <th class="tw-border tw-py-3 tw-px-6">L</th>
                            <th class="tw-border tw-py-3 tw-px-6">JML</th>
                        </tr>
                    </thead>
                    <tbody class="tw-text-base">

                        <?php $sum_total_siswa_p_XII = 0; ?>
                        <?php $sum_total_siswa_l_XII = 0; ?>
                        <?php $sum_total_siswa_XII = 0; ?>

                        <?php $sum_total_siswa_p_keluar_XII = 0; ?>
                        <?php $sum_total_siswa_l_keluar_XII = 0; ?>
                        <?php $sum_total_siswa_keluar_XII = 0; ?>

                        <?php $sum_total_siswa_p_masuk_XII = 0; ?>
                        <?php $sum_total_siswa_l_masuk_XII = 0; ?>
                        <?php $sum_total_siswa_masuk_XII = 0; ?>

                        <?php $sum_total_siswa_p_akhir_XII = 0; ?>
                        <?php $sum_total_siswa_l_akhir_XII = 0; ?>
                        <?php $sum_total_siswa_akhir_XII = 0; ?>

                        @foreach ($kelas12 as $k12)
                            <!-- buat ganti bgcolor perbaris -->
                            @php
                                if ($lastid !== $k12->id) {
                                    $lastid = $k12->id;
                                    if ($rowclass == 'tw-bg-slate-50') {
                                        $rowclass = 'tw-bg-white';
                                    } else {
                                        $rowclass = 'tw-bg-slate-50';
                                    }
                                }
                            @endphp
                            <!-- ---------------------------- -->

                            <tr class="tw-bg-white tw-border {{ $rowclass }}">
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->id }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->jumlahSiswaPerempuan }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->jumlahSiswaLaki }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->jumlahSiswa }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->siswaPerempuanKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->siswaLakiKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->jumlahSiswaKeluar }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->siswaPerempuanMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">{{ $k12->jumlahSiswaMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k12->jumlahSiswaPerempuan - $k12->siswaPerempuanKeluar + $k12->siswaPerempuanMasuk }}
                                </td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k12->jumlahSiswaLaki - $k12->siswaLakiKeluar + $k12->siswaLakiMasuk }}</td>
                                <td class="tw-py-4 tw-px-6 tw-border">
                                    {{ $k12->jumlahSiswaPerempuan - $k12->siswaPerempuanKeluar + $k12->siswaPerempuanMasuk + $k12->jumlahSiswaLaki - $k12->siswaLakiKeluar + $k12->siswaLakiMasuk }}
                                </td>
                            </tr>
                            <?php $sum_total_siswa_p_XII += $k12->jumlahSiswaPerempuan; ?>
                            <?php $sum_total_siswa_l_XII += $k12->jumlahSiswaLaki; ?>
                            <?php $sum_total_siswa_XII += $k12->jumlahSiswa; ?>

                            <?php $sum_total_siswa_p_keluar_XII += $k12->siswaPerempuanKeluar; ?>
                            <?php $sum_total_siswa_l_keluar_XII += $k12->siswaLakiKeluar; ?>
                            <?php $sum_total_siswa_keluar_XII += $k12->jumlahSiswaKeluar; ?>

                            <?php $sum_total_siswa_p_masuk_XII += $k12->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_masuk_XII += $k12->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_masuk_XII += $k12->jumlahSiswaMasuk; ?>

                            <?php $sum_total_siswa_p_akhir_XII += $k12->jumlahSiswaPerempuan - $k12->siswaPerempuanKeluar + $k12->siswaPerempuanMasuk; ?>
                            <?php $sum_total_siswa_l_akhir_XII += $k12->jumlahSiswaLaki - $k12->siswaLakiKeluar + $k12->siswaLakiMasuk; ?>
                            <?php $sum_total_siswa_akhir_XII += $k12->jumlahSiswaPerempuan - $k12->siswaPerempuanKeluar + $k12->siswaPerempuanMasuk + $k12->jumlahSiswaLaki - $k12->siswaLakiKeluar + $k12->siswaLakiMasuk; ?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <th class="tw-border">JUMLAH SISWA</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_keluar_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_keluar_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_keluar_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_masuk_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_masuk_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_masuk_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_p_akhir_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_l_akhir_XII }}</th>
                        <th class="tw-border tw-py-3 tw-px-6">{{ $sum_total_siswa_akhir_XII }}</th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var copyBtn = document.querySelector('#copy_btn');
    
        copyBtn.addEventListener('click', function () {

        var urlField = document.querySelector('table');
        
        var range = document.createRange();  

        range.selectNode(urlField);

        window.getSelection().addRange(range);
        
        document.execCommand('copy');
    }, 
    false);
    </script>
@endpush
