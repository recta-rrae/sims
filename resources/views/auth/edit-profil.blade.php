@extends('layouts.main')

@section('content')
<div class="tw-m-10">
    <div x-data="{ openTab: 1, activeClasses: 'tw-text-sims-400', inactiveClasses: 'tw-text-gray-500'}" class="tw-flex lg:tw-flex-row sm:tw-flex-col tw-gap-5">
        <div class="lg:tw-w-1/5 sm:tw-w-full tw-bg-white tw-py-20 tw-px-10 tw-shadow-md tw-flex tw-flex-col">
            <ul class="tw-flex lg:tw-flex-col sm:tw-flex-row tw-text-left mb-0 mt-3 tw--ml-6">
                <li @click="openTab = 1" :class="{ 'tw--mb-px': openTab === 1 }" class="tw--mb-px tw-mr-1">
                    <button :class="openTab === 1 ? activeClasses : inactiveClasses" class="hover:tw-text-sims-400 tw-text-lg tw-inline-block tw-py-2 tw-px-4 tw-font-semibold tw-font-pop" href="#">
                        <i class="fa-solid fa-address-card tw-mr-3 tw-text-lg"></i>Edit Profil
                    </button>
                </li>
                <li @click="openTab = 2" :class="{ 'tw--mb-px': openTab === 2 }" class="tw--mb-px tw-mr-1">
                    <button :class="openTab === 2 ? activeClasses : inactiveClasses" class="tw-text-left tw-text-lg hover:tw-text-sims-400 tw-inline-block tw-py-2 tw-px-4 tw-font-semibold tw-font-pop" href="#">
                        <i class="fa-solid fa-shield-check tw-mr-3 tw-text-lg"></i>Ubah Kata Sandi
                    </button>
                </li>
            </ul>
        </div>

    {{-- edit profil --}}
    <div x-show="openTab === 1" class="lg:tw-w-3/5 sm:tw-w-full tw-flex tw-flex-col tw-bg-white tw-shadow-md tw-px-20 tw-py-16">
        <h4 class="title-main tw-mb-8">Edit Profil</h4>
        <form action="/update-profile/{{$user->id}}" method="POST">
            @csrf
            <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
                <div class="tw-w-full tw-px-3">
                    <label class="label-input" for="nama">
                        Nama
                    </label>
                    <input class="input-data" id="nama" @error('nama') is-invalid @enderror type="text" name="nama" value="{{ auth()->user()->nama }}">
                    @error('nama')
                        <div class="tw-text-sm tw-text-pink-700 tw-mt-1 tw-font-ubuntu">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
                <div class="tw-w-full tw-px-3">
                    <label class="label-input" for="nip">
                        NIP
                    </label>
                    <input class="input-data" id="nip" @error('nip') is-invalid @enderror type="number" name="nip" value="{{ auth()->user()->nip }}">
                    @error('nip')
                        <div class="tw-text-sm tw-text-pink-700 tw-mt-1 tw-font-ubuntu">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
                <div class="tw-w-full tw-px-3">
                    <label class="label-input" for="email">Email</label>
                    <input class="input-data" id="email" @error('email') is-invalid @enderror type="email" name="email" value="{{ auth()->user()->email }}">
                    @error('email')
                        <div class="tw-text-sm tw-text-pink-700 tw-mt-1 tw-font-ubuntu">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="tw-mx-auto tw-text-center tw-mt-10 ">
                <button type="submit" class="tw-bg-sims-400 tw-font-medium tw-font-pop tw-text-white tw-py-3 tw-px-6 tw-rounded-lg">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    {{-- change password --}}
    <div x-show="openTab === 2" class="lg:tw-w-3/5 sm:tw-w-full tw-flex tw-flex-col tw-bg-white tw-shadow-md tw-px-20 tw-py-16">
      <h4 class="title-main tw-mb-8">Ubah Kata Sandi</h4>
      <form action="/change-password" method="POST">
        @csrf
        <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
          <div class="tw-w-full tw-px-3">
            <label class="label-input" for="old_password">
              kata sandi lama
            </label>
            <input class="input-data" id="old_password" type="password" name="old_password">
          </div>
        </div>
        <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
          <div class="tw-w-full tw-px-3">
            <label class="label-input" for="new_password">
              kata sandi baru
            </label>
            <input class="input-data" id="new_password" type="password" name="new_password">
          </div>
        </div>
        <div class="tw-flex tw-flex-wrap tw--mx-3 tw-mb-6">
          <div class="tw-w-full tw-px-3">
            <label class="label-input" for="new_password_confirmation">
              Ulangi Kata Sandi baru
            </label>
            <input class="input-data" id="new_password_confirmation" type="password" name="new_password_confirmation">
          </div>
        </div>
        <div class="tw-mx-auto tw-text-center tw-mt-10 ">
          <button type="submit" class="tw-bg-sims-400 tw-font-medium tw-font-pop tw-text-white tw-py-3 tw-px-6 tw-rounded-lg">Ubah Kata Sandi</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection