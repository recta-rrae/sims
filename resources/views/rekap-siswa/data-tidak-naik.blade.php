@extends('layouts.main')

@section('content')
<div class="tw-mx-10">
    <div class="tw-flex tw-mt-8">
        <h4 class="title-main">Data Siswa Tidak Naik Kelas</h4>
    </div>
        <div class="tw-flex tw-justify-between tw-mt-3 sm:tw-flex-wrap sm:tw-gap-5">
            <div class="tw-flex">
                <form action="/data-tidak-naik"> 
                    <div class="relative tw-border-2 tw-rounded-lg focus:tw-ring-sims-400">
                        
                        <input name="page" value="1" type="hidden">
                        <input name="perPage" value="10" type="hidden">

                        <input type="text" id="search" name="search" class="tw-py-1 tw-px-5 tw-border-none tw-rounded-md" value="{{ request()->search }}">
                        <i class="fa-solid fa-magnifying-glass tw-pr-5 tw-pl-3 tw-text-slate-600"></i>
                    </div>
                </form>
                <div class="tw-text-base pt-1 tw-text-basic-700 tw-ml-4 tw-mr-2 tw-font-normal tw-font-pop">Show</div>
                <select name="show-data-perpage" id="show-data-perpage" class="tw-bg-gray-300 tw-font-bold tw-px-7 tw-rounded-xl tw-text tw-mb-2 tw-border-none">
                    @if(!empty($_GET['page']))
                        @if(isset($_GET['search']))
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=10&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '10') selected @endif @endisset class="tw-bg-white">10</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=25&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '25') selected @endif @endisset class="tw-bg-white">25</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=50&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '50') selected @endif @endisset class="tw-bg-white">50</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=100&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '100') selected @endif @endisset class="tw-bg-white">100</option>
                        @else
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=10&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '10') selected @endif @endisset class="tw-bg-white">10</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=25&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '25') selected @endif @endisset class="tw-bg-white">25</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=50&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '50') selected @endif @endisset class="tw-bg-white">50</option>
                        <option value="/data-tidak-naik?page={{ $_GET['page'] }}&perPage=100&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '100') selected @endif @endisset class="tw-bg-white">100</option>
                        @endif
                    @else
                        @if(isset($_GET['search']))
                        <option value="/data-tidak-naik?perPage=10&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '10') selected @endif @endisset class="tw-bg-white">10</option>
                        <option value="/data-tidak-naik?perPage=25&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '25') selected @endif @endisset class="tw-bg-white">25</option>
                        <option value="/data-tidak-naik?perPage=50&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '50') selected @endif @endisset class="tw-bg-white">50</option>
                        <option value="/data-tidak-naik?perPage=100&search={{ $_GET['search'] }}" @isset($_GET['perPage']) @if( $_GET['perPage'] === '100') selected @endif @endisset class="tw-bg-white">100</option>
                        @else
                        <option value="/data-tidak-naik?perPage=10&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '10') selected @endif @endisset class="tw-bg-white">10</option>
                        <option value="/data-tidak-naik?perPage=25&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '25') selected @endif @endisset class="tw-bg-white">25</option>
                        <option value="/data-tidak-naik?perPage=50&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '50') selected @endif @endisset class="tw-bg-white">50</option>
                        <option value="/data-tidak-naik?perPage=100&search=" @isset($_GET['perPage']) @if( $_GET['perPage'] === '100') selected @endif @endisset class="tw-bg-white">100</option>
                        @endif
                    @endif
                </select>
                <div class="tw-text-base pt-1 tw-mx-2 tw-font-pop tw-font-normal tw-text-basic-700">Entries</div>
            </div>
            <div class="tw-flex md:tw-justify-center tw-items-center md:-tw-mb-8">
                <a href="" title="Print"><i class="fa-solid fa-print btn-export"></i></a>
                <button id="copy_btn" type="button" value="copy"><i class="fa-solid fa-copy btn-export"></i></button>
                <a href="" title="Export ke Excel"><i class="fa-solid fa-file-excel btn-export"></i></a>
                <a href="" title="Export ke PDF"><i class="fa-solid fa-file-pdf btn-export"></i></a>
            </div>
        </div>

        @if(isset($siswa))
        <div class="tw-overflow-x-auto tw-relative tw-shadow-md sm:tw-rounded-xl tw-mt-5">
            <table class="tw-w-full tw-text-sm tw-text-center">
                <thead class="tw-text-md tw-bg-gray-100 tw-text-basic-700 tw-border tw-font-pop">
                    <tr>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">NO</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">NAMA PESERTA DIDIK</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">TEMPAT TANGGAL LAHIR</th>
                        <th scope="col" class="tw-py-3 tw-px-6 tw-border-r">TINGGAL DI KELAS</th>
                        <th scope="col" class="tw-py-3 tw-px-6">ALASAN</th>
                    </tr>
                </thead>
                <tbody class="tw-text-base">
                    @foreach ($siswa as $s)
                    <tr class="tw-bg-white tw-border">
                        <td class="tw-py-4 tw-px-6 tw-border">-</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $s->nama_siswa }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $s->tmp_lahir }}, {{ $s->tgl_lahir }}</td>
                        @foreach($s->raport as $r)
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $r->tinggal_di_Kelas }}</td>
                        <td class="tw-py-4 tw-px-6 tw-border">{{ $r->alasan_tidak_naik }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- pagination --}}
        <div class="tw-float-right tw-py-5 tw-px-3">
            @if($response->to >= $total)
            <a class="tw-text-gray-300 tw-bg-[#2f5555] hover:tw-text-gray-300 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-regular fa-arrow-right"></i></a>
            @else
            <a href="{{ $response->next_page_url }}" class="tw-text-white tw-bg-sims-400 hover:tw-bg-sims-600 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-regular fa-arrow-right"></i></a>
            @endif
          </div>

          @if($response->prev_page_url)
          <div class="tw-float-right tw-py-5">
            <a href="{{ $response->prev_page_url }}" class="tw-text-white tw-bg-sims-400 hover:tw-bg-sims-600 hover:tw-text-white tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-regular fa-arrow-left"></i></a>
          </div>
          @else
          <div class="tw-float-right tw-py-5">
            <a class="tw-text-gray-300 tw-bg-[#2f5555] hover:tw-text-gray-300 tw-rounded-lg tw-text-xl tw-py-2 tw-px-3"><i class="fa-regular fa-arrow-left"></i></a>
          </div>
          @endif
        @else
            <div class="tw-flex tw-justify-center">
                <div class="tw-w-1/3 tw-my-28">
                    <img src="{{ URL::asset('assets/img/search-not-found.png') }}" class="-tw-mb-1" alt="g ada dek">
                    <div class="tw-font-pop tw-text-sims-500 tw-font-bold tw-text-3xl tw-text-center tw-mt-8">
                        Data tidak dapat ditemukan.
                    </div>
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
    </script>
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
