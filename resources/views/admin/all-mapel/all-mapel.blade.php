@extends('layouts.admin')

@section('content')
    <div class="tw-mx-10 tw-w-screen">
        <section class="tw-flex tw-gap-3 mt-8">
            <a href="/admin/database">
              <i class="fa-solid fa-chevron-left tw-text-gray-400 tw-text-2xl"></i>
            </a>
            <i class="fa-solid fa-shapes tw-text-sims-300 tw-text-2xl"></i>
            <div class="tw-text-2xl tw-font-pop tw-font-semibold tw-text-gray-300">Mata Pelajaran</div>
          </section>
        <div class="tw-flex tw-flex-col tw-bg-white shadow-cs tw-py-8 tw-px-16 tw-rounded-xl tw-w-full tw-mb-8 tw-mt-10">
            <div class="tw-flex tw-justify-between tw-mb-8">
                <div class="tw-flex">
                    <input type="text" class="tw-px-4 tw-rounded-xl tw-border tw-border-gray-300 tw-py-2 tw-w-80">
                    <button class="tw-px-5 -tw-ml-4 tw-rounded-xl tw-text-white tw-bg-admin-300">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="tw-flex ">
                    <a href="/admin/mata-pelajaran/create"
                        class="tw-bg-admin-300 tw-text-white hover:tw-text-white hover:tw-bg-admin-600  tw-font-ubuntu tw-font-bold tw-rounded-lg tw-px-5 tw-py-2">
                        <i class="fa-solid fa-circle-plus tw-pr-3"></i>
                        Add New Mapel
                    </a>
                </div>
            </div>
            <div
                class="tw-overflow-y-scroll tw-h-[500px] tw-scrollbar-thumb-gray-300 tw-scrollbar-thumb-rounded-lg tw-scrollbar-thin tw-scrollbar-track-gray-100">
                <table class="tw-mt-10 tw-w-full tw-text-sm tw-text-center">
                    <thead class="tw-text-lg tw-font-pop tw-text-admin-300">
                        <tr>
                            <th scope="col" class="tw-pb-6 tw-px-5">ID MAPEL</th>
                            <th scope="col" class="tw-pb-6 tw-px-5">NAMA MAPEL</th>                            
                            <th scope="col" class="tw-pb-6 tw-px-5">CREATED</th>
                            <th scope="col" class="tw-pb-6 tw-px-5">UPDATED</th>
                            <th scope="col" class="tw-pb-6 tw-px-5">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">PPKN</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Matematika</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Bahasa Indonesia</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Bahasa Inggris</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Bahasa Sunda</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Bahasa Jepang</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Bahasa Mandarin</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Sejarah</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Kimia</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">Fisika</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">PAI</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr class="tw-bg-white tw-text-[#B4B8BC] tw-font-bold text-lg tw-font-ubuntu">
                            <td class="tw-py-6 tw-px-5 tw-border-b"></td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">PJOK</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">10 Oktober 2023, 09:00</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">27 Januari 2024, 23:44</td>
                            <td class="tw-py-6 tw-px-5 tw-border-b">
                                <a href="/admin/detail-mata-pelajaran"
                                    class="tw-bg-admin-300 hover:tw-bg-admin-600 tw-text-white tw-px-7 tw-py-3 tw-rounded-lg">
                                    View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
