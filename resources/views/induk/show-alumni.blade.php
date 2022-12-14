@extends('layouts.main')

@section('content')
<style>
    .no-spin::-webkit-inner-spin-button, .no-spin::-webkit-outer-spin-button {
    -webkit-appearance: none !important;
    margin: 0 !important;
    }
</style>

<div class="tw-mx-10">
    <div class="tw-flex tw-flex-col tw-mt-6">
        <h4 class="title-main tw-mb-0">Data Alumni</h4>
        <div class="tw-font-pop tw-text-gray-400 tw-font-medium tw-my-2">{{ $_GET['jurusan'] }} - Angkatan {{ $_GET['angkatan'] }}</div>
    </div>

        <div class="tw-flex tw-justify-between sm:tw-flex-wrap sm:tw-gap-5">
            <div class="tw-flex">
                <form action="/data-alumni"> 
                    <div class="relative tw-border-2 tw-rounded-lg focus:tw-ring-sims-400">
                        
                        <input name="jurusan" value="{{ $_GET['jurusan'] }}" type="hidden">
                        <input name="angkatan" value="{{ $_GET['angkatan'] }}" type="hidden">
                        <input name="page" value="1" type="hidden">
                        <input name="perPage" value="10" type="hidden">

                        @if(isset($_GET['nis_siswa'])) <input name="nis_siswa" value="{{ $_GET['nis_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['nisn_siswa'])) <input name="nisn_siswa" value="{{ $_GET['nisn_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['nama_siswa'])) <input name="nama_siswa" value="{{ $_GET['nama_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['jenis_kelamin'])) <input name="jenis_kelamin" value="{{ $_GET['jenis_kelamin'] }}" type="hidden"> @endif
                        @if(isset($_GET['KelasId'])) <input name="KelasId" value="{{ $_GET['KelasId'] }}" type="hidden"> @endif
                        @if(isset($_GET['sort_by'])) <input name="sort_by" value="{{ $_GET['sort_by'] }}" type="hidden"> @endif
                        @if(isset($_GET['sort'])) <input name="sort" value="{{ $_GET['sort'] }}" type="hidden"> @endif
                        @if(isset($_GET['dibuatTglDari'])) <input name="dibuatTglDari" value="{{ $_GET['dibuatTglDari'] }}" type="hidden"> @endif
                        @if(isset($_GET['dibuatTglKe'])) <input name="dibuatTglKe" value="{{ $_GET['dibuatTglKe'] }}" type="hidden"> @endif
                        @if(isset($_GET['thn_ajaran'])) <input name="thn_ajaran" value="{{ $_GET['thn_ajaran'] }}" type="hidden"> @endif

                        <input type="text" id="search" name="search" class="tw-py-1 tw-px-5 tw-border-none tw-rounded-md" value="{{ request()->search }}">
                        <i class="fa-solid fa-magnifying-glass tw-pr-5 tw-pl-3 tw-text-slate-600"></i>
                    </div>
                </form>
                <div class="tw-text-base pt-1 tw-text-basic-700 tw-ml-4 tw-mr-2 tw-font-normal tw-font-pop">Show</div>
                <select name="show-data-perpage" id="show-data-perpage" class="tw-bg-gray-300 tw-font-bold tw-px-7 tw-rounded-xl tw-text tw-mb-2 tw-border-none">
                    <option value="/data-alumni?jurusan={{ $_GET['jurusan'] }}&angkatan={{ $_GET['angkatan'] }}&page=@if(!empty($_GET['page'])){{ $_GET['page'] }}@endif&perPage=10&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=@isset($_GET['thn_ajaran']){{ $_GET['thn_ajaran'] }}@endisset" @isset($_GET['perPage']) @if( $_GET['perPage'] === '10') selected @endif @endisset class="tw-bg-white">10</option>
                    <option value="/data-alumni?jurusan={{ $_GET['jurusan'] }}&angkatan={{ $_GET['angkatan'] }}&page=@if(!empty($_GET['page'])){{ $_GET['page'] }}@endif&perPage=25&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=@isset($_GET['thn_ajaran']){{ $_GET['thn_ajaran'] }}@endisset" @isset($_GET['perPage']) @if( $_GET['perPage'] === '25') selected @endif @endisset class="tw-bg-white">25</option>
                    <option value="/data-alumni?jurusan={{ $_GET['jurusan'] }}&angkatan={{ $_GET['angkatan'] }}&page=@if(!empty($_GET['page'])){{ $_GET['page'] }}@endif&perPage=50&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=@isset($_GET['thn_ajaran']){{ $_GET['thn_ajaran'] }}@endisset" @isset($_GET['perPage']) @if( $_GET['perPage'] === '50') selected @endif @endisset class="tw-bg-white">50</option>
                    <option value="/data-alumni?jurusan={{ $_GET['jurusan'] }}&angkatan={{ $_GET['angkatan'] }}&page=@if(!empty($_GET['page'])){{ $_GET['page'] }}@endif&perPage=100&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=@isset($_GET['thn_ajaran']){{ $_GET['thn_ajaran'] }}@endisset" @isset($_GET['perPage']) @if( $_GET['perPage'] === '100') selected @endif @endisset class="tw-bg-white">100</option>
                </select>
                <div class="tw-text-base pt-1 tw-mx-2 tw-font-pop tw-font-normal tw-text-basic-700">Entries</div>

                {{-- FILTER DROPDOWN --}}
                <button id="dropdownToggleButton" data-dropdown-toggle="filter-dd" class="tw-text-sims-500 hover:tw-text-white tw-font-pop focus:tw-ring-0 focus:tw-outline-none tw-font-medium tw-rounded-lg tw-text-sm tw-px-4 tw-py-1 tw-ml-2 tw-text-center tw-inline-flex tw-items-center dark:tw-bg-white dark:hover:tw-bg-sims-500 tw-shadow-md tw-transition-all tw-ease-in-out" type="button">Filters <i class="tw-text-xl tw-ml-5 fa-duotone fa-sliders-simple"></i></button>
                <!-- filter menu -->
                <div id="filter-dd" class="hidden tw-z-10 tw-w-72 tw-bg-white tw-rounded tw-divide-y tw-divide-gray-100 tw-shadow-md">
                    <div class="tw-font-pop tw-text-xs tw-text-gray-400 tw-my-2 tw-mx-5">Cari berdasarkan...</div>
                    <form action="/data-alumni">
                    
                    <input name="jurusan" value="{{ $_GET['jurusan'] }}" type="hidden">
                    <input name="angkatan" value="{{ $_GET['angkatan'] }}" type="hidden">

                    @if(isset($_GET['page']))
                    <input type="hidden" name="page" value="{{ $_GET['page'] }}"> 
                    @endif
                    @if(isset($_GET['perPage']))
                    <input type="hidden" name="perPage" value="{{ $_GET['perPage'] }}"> 
                    @endif
                    @if(isset($_GET['search']))
                    <input type="hidden" name="search" value="{{ $_GET['search'] }}"> 
                    @endif

                    
                    <ul class="tw-p-3 tw-space-y-1 tw-text-sm tw-text-gray-700" aria-labelledby="dropdownToggleButton">
                        <li>
                            <div class="tw-flex tw-p-2 tw-rounded hover:tw-bg-gray-100 tw-transition-all tw-ease-in-out">
                              <label class="tw-inline-flex tw-relative tw-items-center tw-w-full tw-cursor-pointer">
                                <input type="checkbox" value="true" name="nis_siswa" class="tw-sr-only tw-peer focus:tw-ring-0 focus:tw-ring-offset-0" @isset($_GET['nis_siswa']) @if($_GET['nis_siswa'] === "true") checked @endif @endisset>
                                <div class="tw-w-9 tw-h-5 tw-bg-gray-200 peer-focus:tw-outline-none tw-rounded-full tw-peer peer-checked:after:tw-translate-x-full peer-checked:after:tw-border-white after:tw-content-[''] after:tw-absolute after:tw-top-[2px] after:tw-left-[2px] after:tw-bg-white after:tw-border-gray-300 after:tw-border after:tw-rounded-full after:tw-h-4 after:tw-w-4 after:tw-transition-all peer-checked:tw-bg-sims-400"></div>
                                <span class="tw-ml-3 tw-text-xs tw-font-medium tw-text-gray-500 dark:text-gray-300">NIS</span>
                              </label>
                            </div>
                        </li>
                        <li>
                            <div class="tw-flex tw-p-2 tw-rounded hover:tw-bg-gray-100 tw-transition-all tw-ease-in-out">
                              <label class="tw-inline-flex tw-relative tw-items-center tw-w-full tw-cursor-pointer">
                                <input type="checkbox" value="true" name="nisn_siswa" class="tw-sr-only tw-peer focus:tw-ring-0 focus:tw-ring-offset-0" @isset($_GET['nisn_siswa']) @if($_GET['nisn_siswa'] === "true") checked @endif @endisset>
                                <div class="tw-w-9 tw-h-5 tw-bg-gray-200 peer-focus:tw-outline-none tw-rounded-full tw-peer peer-checked:after:tw-translate-x-full peer-checked:after:tw-border-white after:tw-content-[''] after:tw-absolute after:tw-top-[2px] after:tw-left-[2px] after:tw-bg-white after:tw-border-gray-300 after:tw-border after:tw-rounded-full after:tw-h-4 after:tw-w-4 after:tw-transition-all peer-checked:tw-bg-sims-400"></div>
                                <span class="tw-ml-3 tw-text-xs tw-font-medium tw-text-gray-500 dark:text-gray-300">NISN</span>
                              </label>
                            </div>
                        </li>
                        <li>
                            <div class="tw-flex tw-p-2 tw-rounded hover:tw-bg-gray-100 tw-transition-all tw-ease-in-out">
                              <label class="tw-inline-flex tw-relative tw-items-center tw-w-full tw-cursor-pointer">
                                <input type="checkbox" value="true" name="nama_siswa" class="tw-sr-only tw-peer focus:tw-ring-0 focus:tw-ring-offset-0" @isset($_GET['nama_siswa']) @if($_GET['nama_siswa'] === "true") checked @endif @endisset>
                                <div class="tw-w-9 tw-h-5 tw-bg-gray-200 peer-focus:tw-outline-none tw-rounded-full tw-peer peer-checked:after:tw-translate-x-full peer-checked:after:tw-border-white after:tw-content-[''] after:tw-absolute after:tw-top-[2px] after:tw-left-[2px] after:tw-bg-white after:tw-border-gray-300 after:tw-border after:tw-rounded-full after:tw-h-4 after:tw-w-4 after:tw-transition-all peer-checked:tw-bg-sims-400"></div>
                                <span class="tw-ml-3 tw-text-xs tw-font-medium tw-text-gray-500 dark:text-gray-300">Nama Siswa</span>
                              </label>
                            </div>
                        </li>
                        <li>
                            <div class="tw-flex tw-p-2 tw-rounded hover:tw-bg-gray-100 tw-transition-all tw-ease-in-out">
                              <label class="tw-inline-flex tw-relative tw-items-center tw-w-full tw-cursor-pointer">
                                <input type="checkbox" value="true" name="jenis_kelamin" class="tw-sr-only tw-peer focus:tw-ring-0 focus:tw-ring-offset-0" @isset($_GET['jenis_kelamin']) @if($_GET['jenis_kelamin'] === "true") checked @endif @endisset>
                                <div class="tw-w-9 tw-h-5 tw-bg-gray-200 peer-focus:tw-outline-none tw-rounded-full tw-peer peer-checked:after:tw-translate-x-full peer-checked:after:tw-border-white after:tw-content-[''] after:tw-absolute after:tw-top-[2px] after:tw-left-[2px] after:tw-bg-white after:tw-border-gray-300 after:tw-border after:tw-rounded-full after:tw-h-4 after:tw-w-4 after:tw-transition-all peer-checked:tw-bg-sims-400"></div>
                                <span class="tw-ml-3 tw-text-xs tw-font-medium tw-text-gray-500 dark:text-gray-300">Gender</span>
                              </label>
                            </div>
                        </li>
                        <li>
                            <div class="tw-flex tw-p-2 tw-rounded hover:tw-bg-gray-100 tw-transition-all tw-ease-in-out">
                              <label class="tw-inline-flex tw-relative tw-items-center tw-w-full tw-cursor-pointer">
                                <input type="checkbox" value="true" name="KelasId" class="tw-sr-only tw-peer focus:tw-ring-0 focus:tw-ring-offset-0" @isset($_GET['KelasId']) @if($_GET['KelasId'] === "true") checked @endif @endisset>
                                <div class="tw-w-9 tw-h-5 tw-bg-gray-200 peer-focus:tw-outline-none tw-rounded-full tw-peer peer-checked:after:tw-translate-x-full peer-checked:after:tw-border-white after:tw-content-[''] after:tw-absolute after:tw-top-[2px] after:tw-left-[2px] after:tw-bg-white after:tw-border-gray-300 after:tw-border after:tw-rounded-full after:tw-h-4 after:tw-w-4 after:tw-transition-all peer-checked:tw-bg-sims-400"></div>
                                <span class="tw-ml-3 tw-text-xs tw-font-medium tw-text-gray-500 dark:text-gray-300">Kelas</span>
                              </label>
                            </div>
                        </li>
                    </ul>
                    <div class="tw-border-t tw-border-gray-100 tw-mb-3"></div>
                    <div class="tw-font-pop tw-text-xs tw-text-gray-400 tw-my-2 tw-mx-5">Urutkan berdasarkan...</div>
                    <div class="tw-mx-5 tw-flex tw-justify-center">
                        <select class="input-data tw-text-xs" id="sort_by" name="sort_by" required>
                            
                            // tampilkan option yg di select berdasarkan parameter sort_by
                            @if(isset($_GET['sort_by']))
                            <option value="{{ $_GET['sort_by'] }}">
                                @if($_GET['sort_by'] == 'nis_siswa')
                                NIS (selected)
                                @elseif($_GET['sort_by'] == 'nisn_siswa')
                                NISN (selected)
                                @elseif($_GET['sort_by'] == 'nama_siswa')
                                Nama Siswa (selected)
                                @elseif($_GET['sort_by'] == 'jenis_kelamin')
                                Gender (selected)
                                @elseif($_GET['sort_by'] == 'KelasId')
                                Kelas (selected)
                                @endif
                            </option>
                            @endif
                            <option value="nis_siswa">NIS</option>
                            <option value="nisn_siswa">NISN</option>
                            <option value="nama_siswa">Nama Peserta Didik</option>
                            <option value="jenis_kelamin">Gender</option>
                            <option value="KelasId">Kelas</option>
                        </select>
                    </div>
                    <div class="tw-flex tw-my-5 tw-gap-3 tw-justify-center tw-mx-auto">
                        <div class="tw-flex tw-gap-1">
                            <label for="ascending" class="tw-font-pop tw-text-xs tw-text-gray-400">Naik</label>
                            <input class="tw-my-auto tw-bg-gray-200 focus:ring-0 focus:ring-offset-0" style="height:15px; width:15px; border: none" type="radio" id="ascending" name="sort" value="ASC" @isset($_GET['sort']) @if($_GET['sort'] == "ASC") ? checked : @endif @endisset>
                        </div>
                        <div class="tw-flex tw-gap-1">
                            <label for="descending" class="tw-font-pop tw-text-xs tw-text-gray-400">Menurun</label>
                            <input class="tw-my-auto tw-bg-gray-200 focus:ring-0 focus:ring-offset-0" style="height:15px; width:15px; border: none" type="radio" id="descending" name="sort" value="DESC" @isset($_GET['sort']) @if($_GET['sort'] == "DESC") ? checked : @endif @endisset>
                        </div>
                    </div>
                    <div class="tw-flex tw-justify-center">
                        <button type="submit" class="tw-w-full tw-rounded-lg tw-mx-3 tw-font-pop tw-text-white tw-text-sm tw-font-medium tw-mb-2 tw-py-2 tw-bg-sims-400 hover:tw-bg-sims-500 tw-transition-all tw-ease-in-out">Simpan</button>
                    </div>

                    @if(isset($_GET['dibuatTglDari'])) <input name="dibuatTglDari" value="{{ $_GET['dibuatTglDari'] }}" type="hidden"> @endif
                    @if(isset($_GET['dibuatTglKe'])) <input name="dibuatTglKe" value="{{ $_GET['dibuatTglKe'] }}" type="hidden"> @endif
                    @if(isset($_GET['thn_ajaran'])) <input name="thn_ajaran" value="{{ $_GET['thn_ajaran'] }}" type="hidden"> @endif    
                    </form>
                </div>
                <!-- end filter menu -->


                {{-- DATA PERIODIK DROPDOWN --}}
                <button id="dropdownToggleButton" data-dropdown-toggle="periodik-dd" class="tw-text-sims-400 hover:tw-text-white tw-font-pop focus:tw-ring-0 focus:tw-outline-none tw-font-medium tw-rounded-lg tw-text-sm tw-px-4 tw-py-1 tw-ml-4 tw-text-center tw-inline-flex tw-items-center dark:tw-bg-white dark:hover:tw-bg-sims-500 tw-shadow-md tw-transition-all tw-ease-in-out" type="button">Data Periodik <i class="fa-duotone fa-calendar tw-ml-4"></i></button>
            
                <div id="periodik-dd" class="hidden tw-z-10 tw-w-auto tw-bg-white tw-rounded tw-divide-y tw-divide-gray-100 tw-shadow-md">
                    <form action="/data-alumni" class="tw-text-center">
                        
                        <input name="jurusan" value="{{ $_GET['jurusan'] }}" type="hidden">
                        <input name="angkatan" value="{{ $_GET['angkatan'] }}" type="hidden">

                        @if(isset($_GET['perPage']))
                        <input name="perPage" value="{{ $_GET['perPage'] }}" type="hidden">
                        @endif
                        @if(isset($_GET['search']))
                        <input name="search" value="{{ $_GET['search'] }}" type="hidden">
                        @endif
                        @if(isset($_GET['nis_siswa'])) <input name="nis_siswa" value="{{ $_GET['nis_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['nisn_siswa'])) <input name="nisn_siswa" value="{{ $_GET['nisn_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['nama_siswa'])) <input name="nama_siswa" value="{{ $_GET['nama_siswa'] }}" type="hidden"> @endif
                        @if(isset($_GET['jenis_kelamin'])) <input name="jenis_kelamin" value="{{ $_GET['jenis_kelamin'] }}" type="hidden"> @endif
                        @if(isset($_GET['KelasId'])) <input name="KelasId" value="{{ $_GET['KelasId'] }}" type="hidden"> @endif
                        @if(isset($_GET['sort_by'])) <input name="sort_by" value="{{ $_GET['sort_by'] }}" type="hidden"> @endif
                        @if(isset($_GET['sort'])) <input name="sort" value="{{ $_GET['sort'] }}" type="hidden"> @endif
                        
                        <div class="tw-flex tw-gap-3 tw-justify-between tw-mt-5 tw-mx-5">
                            <div class="tw-absolute tw-right-4 tw-top-2">
                                <!--Code Block for white tooltip starts-->
                                <a tabindex="0" role="link" aria-label="tooltip 1" class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-20 md:mt-0" onmouseover="showTooltip(1)" onfocus="showTooltip(1)" onmouseout="hideTooltip(1)">
                                    <div class=" cursor-pointer">
                                        <i data-tooltip-target="tooltip-animation" class="fa-regular fa-circle-question tw-text-md tw-text-sims-400"></i>
                                    </div>
                                    <div id="tooltip1" role="tooltip" class="z-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 rounded hidden">
                                        <p class="text-sm font-bold text-gray-800 pb-1">Data periodik Alumni</p>
                                        <p class="text-xs leading-4 text-gray-600">Data alumni periodik diambil berdasarkan tanggal </p>
                                    </div>
                                </a>
                                <!--Code Block for white tooltip ends-->
                            </div>
                            <div>
                                <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Dari tanggal</div>
                                <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglDari" name="dibuatTglDari" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglDari'])) value="{{ $_GET['dibuatTglDari'] }}" @endif>
                            </div>
                            <div>
                                <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Ke tanggal</div>
                                <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglKe" name="dibuatTglKe" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglKe'])) value="{{ $_GET['dibuatTglKe'] }}" @endif>
                            </div>
                        </div>

                        @if(isset($_GET['thn_ajaran'])) <input name="thn_ajaran" value="{{ $_GET['thn_ajaran'] }}" type="hidden"> @endif

                        <div class="tw-flex tw-justify-center tw-mt-3">
                            <button type="submit" class="tw-w-full tw-rounded-lg tw-mx-3 tw-font-pop tw-text-white tw-text-sm tw-font-medium tw-mb-2 tw-py-2 tw-bg-sims-400 hover:tw-bg-sims-500 tw-transition-all tw-ease-in-out">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- This is an example component -->
                {{-- <div class="tw-mx-5">
                    <select id="show-tahun-ajaran" class="tw-border tw-border-none tw-text-sims-400 hover:tw-text-white tw-font-pop tw-text-sm tw-font-medium tw-rounded-lg tw-h-full tw-pl-5 tw-pr-10 tw-bg-white hover:tw-bg-sims-400 hover:tw-border-sims-400 focus:tw-outline-none tw-appearance-none focus:tw-ring-0 tw-shadow-md tw-transition-all tw-ease-in-out" style="cursor: pointer;">
                    
                      @if(!empty($_GET['thn_ajaran'])) 
                        <option value="/data-alumni?page=1&perPage=10&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=" class="tw-bg-white tw-text-gray-600">- Semua Tahun Ajaran -</option> 
                        <option selected class="tw-bg-white tw-text-gray-600">TA. {{ $_GET['thn_ajaran'] }}</option> 
                      @else
                        <option value="/data-alumni?page=1&perPage=10&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran=" class="tw-bg-white tw-text-gray-600">- Semua Tahun Ajaran -</option> 
                      @endif

                      @php $n = 2000 @endphp
                      @for ($i = \Carbon\Carbon::now()->year; $i > 2000; $i--)
                            @while($i != $n-1)
                                <option value="/data-alumni?page=1&perPage=10&search=@if(isset($_GET['search'])){{ $_GET['search'] }}@endif&nis_siswa=@isset($_GET['nis_siswa']){{ $_GET['nis_siswa'] }}@endisset&nisn_siswa=@isset($_GET['nisn_siswa']){{ $_GET['nisn_siswa'] }}@endisset&nama_siswa=@isset($_GET['nama_siswa']){{ $_GET['nama_siswa'] }}@endisset&jenis_kelamin=@isset($_GET['jenis_kelamin']){{ $_GET['jenis_kelamin'] }}@endisset&KelasId=@isset($_GET['KelasId']){{ $_GET['KelasId'] }}@endisset&sort_by=@isset($_GET['sort_by']){{ $_GET['sort_by'] }}@endisset&sort=@isset($_GET['sort']){{ $_GET['sort'] }}@endisset&dibuatTglDari=@isset($_GET['dibuatTglDari']){{ $_GET['dibuatTglDari'] }}@endisset&dibuatTglKe=@isset($_GET['dibuatTglKe']){{ $_GET['dibuatTglKe'] }}@endisset&thn_ajaran={{ $i }}" class="tw-bg-white tw-text-gray-600">TA. {{ $i-- }}</option>
                            @endwhile
                      @endfor
                    </select>
                </div> --}}
            </div>
           
            @can('rekap-siswa')
            <div class="tw-flex tw-justify-center tw-items-center">
                <button type="button" data-modal-toggle="export-print" title="Export ke print"><i class="fa-solid fa-print btn-export"></i></button>
                    
                <div id="export-print" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed  z-50 md:tw-inset-0 h-modal md:h-full">
                    <div class="tw-relative tw-p-4 tw-w-full tw-max-w-md tw-h-full md:tw-h-auto">
                        <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow dark:tw-bg-slate-100">
                            <button type="button"
                                class="tw-absolute tw-top-3 tw-right-2.5 tw-text-gray-400 tw-bg-transparent hover:tw-bg-gray-200 hover:tw-text-gray-900 tw-rounded-lg tw-text-sm tw-p-1.5 tw-ml-auto tw-inline-flex tw-items-center dark:hover:tw-bg-gray-800 dark:hover:tw-text-white"
                                data-modal-toggle="export-print">
                                <svg aria-hidden="true" class="tw-w-5 tw-h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="tw-sr-only">Close modal</span>
                            </button>
                            <form action="/alumni-print" method="">
                                @csrf
                                <div class="tw-p-6">
                                    <div class="tw-text-gray-400 tw-font-pop tw-text-center tw-font-semibold tw-text-lg">Print Data</div>
                                    <div class="tw-flex tw-gap-3 tw-justify-between tw-mt-5 tw-mx-5">
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Dari tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglDari" name="dibuatTglDari" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglDari'])) value="{{ $_GET['dibuatTglDari'] }}" @endif>
                                        </div>
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Ke tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglKe" name="dibuatTglKe" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglKe'])) value="{{ $_GET['dibuatTglKe'] }}" @endif>
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-justify-center tw-mt-3">
                                        <button type="submit" class="tw-w-full tw-rounded-lg tw-mx-3 tw-font-pop tw-text-white tw-text-sm tw-font-medium tw-mb-2 tw-py-2 tw-bg-sims-400 hover:tw-bg-sims-500 tw-transition-all tw-ease-in-out">Print</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <button id="copy_btn" title="Copy Data" type="button" value="copy"><i class="fa-solid fa-copy btn-export"></i></button> --}}

                <button type="button" data-modal-toggle="export-excel" title="Export ke excel"><i class="fa-solid fa-file-excel btn-export"></i></button>
                    
                <div id="export-excel" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed  z-50 md:tw-inset-0 h-modal md:h-full">
                    <div class="tw-relative tw-p-4 tw-w-full tw-max-w-md tw-h-full md:tw-h-auto">
                        <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow dark:tw-bg-slate-100">
                            <button type="button"
                                class="tw-absolute tw-top-3 tw-right-2.5 tw-text-gray-400 tw-bg-transparent hover:tw-bg-gray-200 hover:tw-text-gray-900 tw-rounded-lg tw-text-sm tw-p-1.5 tw-ml-auto tw-inline-flex tw-items-center dark:hover:tw-bg-gray-800 dark:hover:tw-text-white"
                                data-modal-toggle="export-excel">
                                <svg aria-hidden="true" class="tw-w-5 tw-h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="tw-sr-only">Close modal</span>
                            </button>
                            <form action="/alumni-excel" method="">
                                @csrf
                                <div class="tw-p-6">
                                    <div class="tw-text-gray-400 tw-font-pop tw-text-center tw-font-semibold tw-text-lg">Export Data Excel</div>
                                    <div class="tw-flex tw-gap-3 tw-justify-between tw-mt-5 tw-mx-5">
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Dari tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglDari" name="dibuatTglDari" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglDari'])) value="{{ $_GET['dibuatTglDari'] }}" @endif>
                                        </div>
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Ke tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglKe" name="dibuatTglKe" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglKe'])) value="{{ $_GET['dibuatTglKe'] }}" @endif>
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-justify-center tw-mt-3">
                                        <button type="submit" class="tw-w-full tw-rounded-lg tw-mx-3 tw-font-pop tw-text-white tw-text-sm tw-font-medium tw-mb-2 tw-py-2 tw-bg-sims-400 hover:tw-bg-sims-500 tw-transition-all tw-ease-in-out">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <button type="button" data-modal-toggle="export-pdf" title="Export ke PDF"><i class="fa-solid fa-file-pdf btn-export"></i></button>
                    
                <div id="export-pdf" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed  z-50 md:tw-inset-0 h-modal md:h-full">
                    <div class="tw-relative tw-p-4 tw-w-full tw-max-w-md tw-h-full md:tw-h-auto">
                        <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow dark:tw-bg-slate-100">
                            <button type="button"
                                class="tw-absolute tw-top-3 tw-right-2.5 tw-text-gray-400 tw-bg-transparent hover:tw-bg-gray-200 hover:tw-text-gray-900 tw-rounded-lg tw-text-sm tw-p-1.5 tw-ml-auto tw-inline-flex tw-items-center dark:hover:tw-bg-gray-800 dark:hover:tw-text-white"
                                data-modal-toggle="export-pdf">
                                <svg aria-hidden="true" class="tw-w-5 tw-h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="tw-sr-only">Close modal</span>
                            </button>
                            <form action="/alumni-pdf" method="">
                                @csrf
                                <div class="tw-p-6">
                                    <div class="tw-text-gray-400 tw-font-pop tw-text-center tw-font-semibold tw-text-lg">Export Data PDF</div>
                                    <div class="tw-flex tw-gap-3 tw-justify-between tw-mt-5 tw-mx-5">
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Dari tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglDari" name="dibuatTglDari" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglDari'])) value="{{ $_GET['dibuatTglDari'] }}" @endif>
                                        </div>
                                        <div>
                                            <div class="tw-text-xs tw-mb-2 tw-font-pop tw-font-normal tw-text-gray-400">Ke tanggal</div>
                                            <input class="input-data tw-text-xs tw-font-pop" id="dibuatTglKe" name="dibuatTglKe" type="date" placeholder="dd/mm/yyyy" @if(isset($_GET['dibuatTglKe'])) value="{{ $_GET['dibuatTglKe'] }}" @endif>
                                        </div>
                                    </div>
                                    <div class="tw-flex tw-justify-center tw-mt-3">
                                        <button type="submit" class="tw-w-full tw-rounded-lg tw-mx-3 tw-font-pop tw-text-white tw-text-sm tw-font-medium tw-mb-2 tw-py-2 tw-bg-sims-400 hover:tw-bg-sims-500 tw-transition-all tw-ease-in-out">Export</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endcan
        </div>

        @if(isset($alumni))
        <div class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mt-5">
            <table class="tw-w-full tw-text-sm tw-text-center">
                <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                    <tr>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">NIS</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">NISN</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">NAMA PESERTA DIDIK</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">GENDER</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">KELAS</th>
                        <th scope="col" class="tw-py-3 tw-px-6">AKSI</th>
                    </tr>
                </thead>
                <tbody class="tw-text-base">
                    @foreach ($alumni as $key => $a)
                    <tr class="tw-bg-white tw-border">
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $a->nis_siswa }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $a->nisn_siswa }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $a->nama_siswa }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $a->jenis_kelamin }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $a->KelasId }}</td>
                        <td>
                            <a href="/edit-siswa/{{ $a->nis_siswa }}" class="tw-text-kuning-500  hover:tw-text-white hover:tw-bg-kuning-500 hover:tw-shadow-md tw-transition-all tw-rounded-lg tw-text-xl tw-py-2 tw-px-3">
                                <i class="fa-solid fa-pen-to-square"></i></a>
                            </a>
                            <a href="/detail/{{ $a->nis_siswa }}" class="tw-text-gray-400  hover:tw-text-white hover:tw-bg-gray-400 hover:tw-shadow-md tw-transition-all tw-rounded-lg tw-text-xl tw-py-2 tw-px-3">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        {{-- pagination --}}
        <div class="tw-flex tw-justify-center tw-rounded-b-lg">
            
            @if($response->prev_page_url)
            <div class="tw-float-right tw-py-5">
                <a href="{{ $response->prev_page_url }}" class="tw-transition-all tw-text-sims-400 hover:tw-bg-sims-400 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            @else
            <div class="tw-float-right tw-py-5">
                <a class="tw-text-sims-600 hover:tw-text-sims-600 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            @endif

            <div class="tw-py-3 tw-my-auto tw-h-min tw-flex tw-justify-center">
                <form action="/data-alumni" class="tw-text-center">

                    <input name="jurusan" value="{{ $_GET['jurusan'] }}" type="hidden">
                    <input name="angkatan" value="{{ $_GET['angkatan'] }}" type="hidden">

                    <input type="number" name="page" class="tw-bg-white tw-border tw-border-slate-200 tw-w-1/2 tw-font-pop tw-font-medium tw-text-slate-500 tw-rounded-md tw-text-center focus:tw-ring-gray-200 focus:tw-border-gray-200 no-spin" min="1" @if(isset($_GET['page'])) value="{{ $_GET['page'] }}" @else  @endif>

                    @if(isset($_GET['perPage']))
                    <input name="perPage" value="{{ $_GET['perPage'] }}" type="hidden">
                    @endif

                    @if(isset($_GET['search']))
                    <input name="search" value="{{ $_GET['search'] }}" type="hidden">
                    @endif

                    @if(isset($_GET['nis_siswa'])) <input name="nis_siswa" value="{{ $_GET['nis_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['nisn_siswa'])) <input name="nisn_siswa" value="{{ $_GET['nisn_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['nama_siswa'])) <input name="nama_siswa" value="{{ $_GET['nama_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['jenis_kelamin'])) <input name="jenis_kelamin" value="{{ $_GET['jenis_kelamin'] }}" type="hidden"> @endif
                    @if(isset($_GET['KelasId'])) <input name="KelasId" value="{{ $_GET['KelasId'] }}" type="hidden"> @endif
                    @if(isset($_GET['sort_by'])) <input name="sort_by" value="{{ $_GET['sort_by'] }}" type="hidden"> @endif
                    @if(isset($_GET['sort'])) <input name="sort" value="{{ $_GET['sort'] }}" type="hidden"> @endif
                    @if(isset($_GET['dibuatTglDari'])) <input name="dibuatTglDari" value="{{ $_GET['dibuatTglDari'] }}" type="hidden"> @endif
                    @if(isset($_GET['dibuatTglKe'])) <input name="dibuatTglKe" value="{{ $_GET['dibuatTglKe'] }}" type="hidden"> @endif
                    @if(isset($_GET['thn_ajaran'])) <input name="thn_ajaran" value="{{ $_GET['thn_ajaran'] }}" type="hidden"> @endif

                </form>
            </div>
            
            <div class="tw-float-right tw-py-5">
            @if($response->to >= $total)
            <a class="tw-text-sims-600 hover:tw-text-sims-600 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-right"></i></a>
            @else
            <a href="{{ $response->next_page_url }}" class="tw-transition-all tw-text-sims-400 hover:tw-bg-sims-400 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-right"></i></a>
            @endif
            </div>
        </div>
        @else
        <div class="tw-flex tw-justify-center">
            <div class="tw-w-1/3 tw-my-28">
                <img src="{{ URL::asset('assets/img/search-not-found.png') }}" class="-tw-mb-1" alt="g ada dek">
                <div class="tw-font-pop tw-text-sims-500 tw-font-bold tw-text-3xl tw-text-center tw-mt-8">
                    Data tidak dapat ditemukan.
                </div>
            </div>
        </div>
        {{-- pagination --}}
        <div class="tw-flex tw-justify-center tw-rounded-b-lg">
            
            @if($response->prev_page_url)
            <div class="tw-float-right tw-py-5">
                <a href="{{ $response->prev_page_url }}" class="tw-transition-all tw-text-sims-400 hover:tw-bg-sims-400 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            @else
            <div class="tw-float-right tw-py-5">
                <a class="tw-text-sims-600 hover:tw-text-sims-600 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-left"></i></a>
            </div>
            @endif

            <div class="tw-py-3 tw-my-auto tw-h-min tw-flex tw-justify-center">
                <form action="/data-alumni" class="tw-text-center">
                    
                    <input name="jurusan" value="{{ $_GET['jurusan'] }}" type="hidden">
                    <input name="angkatan" value="{{ $_GET['angkatan'] }}" type="hidden">

                    <input type="number" name="page" class="tw-bg-white tw-border tw-border-slate-200 tw-w-1/2 tw-font-pop tw-font-medium tw-text-slate-500 tw-rounded-md tw-text-center focus:tw-ring-gray-200 focus:tw-border-gray-200 no-spin" min="1" @if(isset($_GET['page'])) value="{{ $_GET['page'] }}" @endif>
                    
                    @if(isset($_GET['perPage']))
                    <input name="perPage" value="{{ $_GET['perPage'] }}" type="hidden">
                    @endif

                    @if(isset($_GET['search']))
                    <input name="search" value="{{ $_GET['search'] }}" type="hidden">
                    @endif

                    @if(isset($_GET['nis_siswa'])) <input name="nis_siswa" value="{{ $_GET['nis_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['nisn_siswa'])) <input name="nisn_siswa" value="{{ $_GET['nisn_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['nama_siswa'])) <input name="nama_siswa" value="{{ $_GET['nama_siswa'] }}" type="hidden"> @endif
                    @if(isset($_GET['jenis_kelamin'])) <input name="jenis_kelamin" value="{{ $_GET['jenis_kelamin'] }}" type="hidden"> @endif
                    @if(isset($_GET['KelasId'])) <input name="KelasId" value="{{ $_GET['KelasId'] }}" type="hidden"> @endif
                    @if(isset($_GET['sort_by'])) <input name="sort_by" value="{{ $_GET['sort_by'] }}" type="hidden"> @endif
                    @if(isset($_GET['sort'])) <input name="sort" value="{{ $_GET['sort'] }}" type="hidden"> @endif
                    @if(isset($_GET['dibuatTglDari'])) <input name="dibuatTglDari" value="{{ $_GET['dibuatTglDari'] }}" type="hidden"> @endif
                    @if(isset($_GET['dibuatTglKe'])) <input name="dibuatTglKe" value="{{ $_GET['dibuatTglKe'] }}" type="hidden"> @endif
                    @if(isset($_GET['thn_ajaran'])) <input name="thn_ajaran" value="{{ $_GET['thn_ajaran'] }}" type="hidden"> @endif

                </form>
            </div>
            
            <div class="tw-float-right tw-py-5">
            @if($response->to >= $total)
            <a class="tw-text-sims-600 hover:tw-text-sims-600 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-right"></i></a>
            @else
            <a href="{{ $response->next_page_url }}" class="tw-transition-all tw-text-sims-400 hover:tw-bg-sims-400 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-solid fa-chevron-right"></i></a>
            @endif
            </div>
        </div>
        @endif
    </div>

    <script>
        $(function(){
          // bind change event to select
          $('#show-data-perpage').on('change', function () {
              var url = $(this).val(); // get selected value
              if (url) { // require a URL
                  window.location = url; // redirect
              }
              return false;
          });
        });

        $(function(){
          // bind change event to select
          $('#show-tahun-ajaran').on('change', function () {
              var url = $(this).val(); // get selected value
              if (url) { // require a URL
                  window.location = url; // redirect
              }
              return false;
          });
        });
    </script>

    <script src="index.js"></script>
    <script>function showTooltip(flag) {
        switch (flag) {
            case 1:
                document.getElementById("tooltip1").classList.remove("hidden");
                break;
            case 2:
                document.getElementById("tooltip2").classList.remove("hidden");
                break;
            case 3:
                document.getElementById("tooltip3").classList.remove("hidden");
                break;
            }
        }
        function hideTooltip(flag) {
            switch (flag) {
                case 1:
                    document.getElementById("tooltip1").classList.add("hidden");
                    break;
                case 2:
                    document.getElementById("tooltip2").classList.add("hidden");
                    break;
                case 3:
                    document.getElementById("tooltip3").classList.add("hidden");
                break;
            }
        }
    </script>
@endsection