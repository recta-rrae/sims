@extends('layouts.main')

@section('content')

@if($status == 'error')
<div class="tw-flex tw-justify-center">
    <div class="tw-block tw-my-32">
        <img src="{{asset('assets/img/error_img.svg')}}" alt="error_img">
        <h1 class="tw-flex tw-justify-center tw-font-pop tw-font-bold tw-mt-6 tw-text-sims-400">404 Not Found</h1>
        <p class="tw-flex tw-justify-center tw-font-pop tw-text-md tw-font-semibold tw-text-gray-400 tw-mt-5">{{ $message }}</p>
    </div>
</div>
</div>
@else

<div class="tw-flex tw-justify-center">

    @if(session()->has('error'))
    <div id="popup-modal" class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40">
        <div id="popup-modal" tabindex="-1" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-transform -tw-translate-x-1/2 -tw-translate-y-1/2">
            <div class="tw-relative tw-p-4 tw-w-full tw-max-w-md tw-h-full md:tw-h-auto">
                <div class="tw-relative tw-bg-white tw-rounded-lg tw-shadow dark:tw-bg-slate-100">
                    <div class="tw-p-6">
                        <svg aria-hidden="true" class="tw-mx-auto tw-mb-4 tw-w-14 tw-h-14 tw-text-red-400 dark:tw-text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="tw-mb-5 tw-flex tw-justify-center tw-text-md tw-font-normal tw-text-gray-500 dark:tw-text-gray-400">Siswa dengan NIS tersebut tidak terdaftar</div>
                        <div class="tw-flex tw-justify-center">
                            <button onclick="hidemodal();" id="okbtn" type="button" class="tw-text-gray-500 tw-bg-white hover:tw-bg-gray-100 focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-gray-200 tw-rounded-lg tw-border tw-border-gray-200 tw-text-sm tw-font-medium tw-py-2.5 hover:tw-text-gray-900 focus:tw-z-10 dark:tw-bg-gray-700 dark:tw-text-gray-300 dark:tw-border-gray-500 dark:hover:tw-text-white dark:hover:tw-bg-gray-600 dark:focus:tw-ring-gray-600 tw-px-4">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endif

    <div class="tw-flex  tw-flex-col tw-rounded-[35px] tw-bg-white lg:tw-w-1/2 sm:tw-w-full sm:tw-mx-5 tw-p-8 tw-h-full tw-mx-auto tw-my-10 tw-shadow-lg">
        <a href="/siswa-keluar" class="tw-text-sims-400 sm:tw-text-md md:tw-text-3xl tw-w-min hover:tw-text-sims-500"><i class="fa-solid fa-chevron-left"></i></a>
        <h3 class="tw-font-pop tw-font-semibold tw-mt-6 tw-text-sims-400 tw-text-center tw-mb-14">Edit Data Mutasi Keluar</h3>
    <form action="/api/mutasi-keluar/update/{{ $mutasi->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="tw-flex tw-flex-col tw-space-y-6">
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="nis_siswa">
                NIS
            </label>
            <input value="{{ $mutasi->nis_siswa }}" class="input-data tw-w-full" id="nis_siswa" name="nis_siswa" type="text" maxlength="10">
            @error('nis_siswa')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="nama_siswa">
                Nama Siswa
            </label>
            <input value="{{ $mutasi->nama_siswa }}" class="input-data tw-w-full" id="nama_siswa" name="nama_siswa" type="text">
            @error('nama_siswa')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="jenis_kelamin">
                Jenis Kelamin
            </label>
            <select class="input-data" id="jenis_kelamin" name="jenis_kelamin" value="{{ $mutasi->jenis_kelamin }}">
                @if($mutasi->jenis_kelamin == 'L')
                <option>Pilih</option>
                <option value="L" selected>Laki-laki</option>
                <option value="P">Perempuan</option>
                @elseif($mutasi->jenis_kelamin == 'P')
                <option>Pilih</option>
                <option value="P" selected>Perempuan</option>
                <option value="L">Laki-laki</option>
                @else
                -
                @endif
            </select>
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="alasan_mutasi">
                Alasan Mutasi
            </label>
            <input value="{{ $mutasi->alasan_mutasi }}" class="input-data tw-w-full" id="alasan_mutasi" name="alasan_mutasi" type="text">
            @error('alasan_mutasi')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="keluar_di_kelas">
                Keluar di Kelas
            </label>
            <input value="{{ $mutasi->keluar_di_kelas }}" class="input-data tw-w-full" id="keluar_di_kelas" name="keluar_di_kelas" type="text">
            @error('keluar_di_kelas')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="pindah_ke">
                Pindah Ke
            </label>
            <input value="{{ $mutasi->pindah_ke }}" class="input-data tw-w-full" id="pindah_ke" name="pindah_ke" type="text">
            @error('pindah_ke')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="tgl_mutasi">
                Tanggal Mutasi
            </label>
            <input value="{{ $mutasi->tgl_mutasi }}" class="input-data tw-w-full" id="tgl_mutasi" name="tgl_mutasi" type="date">
            @error('tgl_mutasi')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto md:tw-w-2/3 sm:tw-w-1/2">
            <label class="label-input" for="sk_mutasi">
                Surat Mutasi
            </label>
            <input value="{{ $mutasi->sk_mutasi }}" class="input-data tw-w-full" id="sk_mutasi" name="sk_mutasi" type="text">
            @error('sk_mutasi')
            <small class="tw-text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="tw-mx-auto tw-text-center tw-mt-10">
            <button type="submit" class="tw-bg-sims-400 hover:tw-bg-sims-500 tw-font-medium tw-text-white tw-py-3 tw-transition tw-px-6 tw-rounded-lg">Update</button>
        </div>
    </div>
    </form>
    </div>
</div>
@endif

<script>
    let okbtn = document.getElementById("okbtn");

    const targetModal = document.getElementById("popup-modal");

    function hidemodal() {
        targetModal.style.display = "none";
    }
</script>

@endsection