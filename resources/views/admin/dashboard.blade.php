@extends('layouts.admin')

@section('content')
<div class="tw-m-10 tw-w-screen tw-flex">
   <div class="tw-gap-8">

      {{-- title --}}
      <section class="tw-w-full tw-flex tw-mb-8">
         <div class="tw-border-l-8 tw-border-admin-300 tw-h-16 tw-mr-5"></div>
         <div class="tw-flex tw-flex-col">
            <div class="tw-text-3xl tw-font-pop tw-font-bold tw-text-admin-300">Welcome Back, John</div>
            <div class="tw-text-xl tw-font-pop tw-font-normal tw-text-gray-300">what are you going to manage today?</div>
         </div>
      </section>

      {{-- account management --}}
      <section class="tw-w-full tw-flex tw-flex-col">
         <div class="tw-flex">
            <i class="fa-solid fa-user-group tw-text-admin-300 tw-text-xl"></i>
            <div class="tw-text-xl tw-ml-3 tw-font-pop tw-font-semibold tw-text-gray-300">Account Management</div>
         </div>
         <ul class="list-unstyled tw-flex tw-gap-5">
            <li class="card-account">
               <div class="tw-justify-end tw-flex tw-p-2">
                  <a href="/admin/account/create">
                     <i class="fa-solid fa-square-plus tw-text-admin-300 tw-text-2xl"></i>
                  </a>
               </div>
               <div class="tw-justify-center tw-text-center tw-pb-5 tw-px-7 tw-text-admin-300">
                  <i class="fa-solid fa-user tw-text-6xl"></i>
                  <div class="card-account-title">Staff TU</div>
                  <div class="tw-font-ubuntu tw-font-medium tw-text-gray-300 -tw-mt-1">2 account</div>
                  <a href="/show-detail">
                     <div class="card-account-btn">View</div>
                  </a>
               </div>
            </li>
            <li class="card-account">
               <div class="tw-justify-end tw-flex tw-p-2">
                  <a href="/admin/account/create">
                     <i class="fa-solid fa-square-plus tw-text-admin-300 tw-text-2xl"></i>
                  </a>
               </div>
               <div class="tw-justify-center tw-text-center tw-pb-5 tw-px-7 tw-text-salmon-400">
                  <i class="fa-solid fa-user tw-text-6xl"></i>
                  <div class="card-account-title">Kesiswaan</div>
                  <div class="tw-font-ubuntu tw-font-medium tw-text-gray-300 -tw-mt-1">2 account</div>
                  <a href="/show-detail">
                     <div class="card-account-btn">View</div>
                  </a>
               </div>
            </li>
            <li class="card-account">
               <div class="tw-justify-end tw-flex tw-p-2">
                  <a href="/admin/account/create">
                     <i class="fa-solid fa-square-plus tw-text-admin-300 tw-text-2xl"></i>
                  </a>
               </div>
               <div class="tw-justify-center tw-text-center tw-pb-5 tw-px-7 tw-text-oren-400">
                  <i class="fa-solid fa-user tw-text-6xl"></i>
                  <div class="card-account-title">Wali Kelas</div>
                  <div class="tw-font-ubuntu tw-font-medium tw-text-gray-300 -tw-mt-1">2 account</div>
                  <a href="/show-detail">
                     <div class="card-account-btn">View</div>
                  </a>
               </div>
            </li>
            <li class="card-account">
               <div class="tw-justify-end tw-flex tw-p-2">
                  <a href="/admin/account/create">
                     <i class="fa-solid fa-square-plus tw-text-admin-300 tw-text-2xl"></i>
                  </a>
               </div>
               <div class="tw-justify-center tw-text-center tw-pb-5 tw-px-7 tw-text-gray-400">
                  <i class="fa-solid fa-user tw-text-6xl"></i>
                  <div class="card-account-title">Kurikulum</div>
                  <div class="tw-font-ubuntu tw-font-medium tw-text-gray-300 -tw-mt-1">2 account</div>
                  <a href="/show-detail">
                     <div class="card-account-btn">View</div>
                  </a>
               </div>
            </li>
         </ul>
      </section>
      
      {{-- data management --}}
      <section class="shadow-cs tw-bg-white tw-px-8 tw-py-7 tw-w-full">
         <div class="tw-flex">
            <i class="fa-regular fa-sliders tw-text-[#90C2C2] tw-text-xl"></i>
            <div class="tw-text-xl tw-ml-3 tw-font-pop tw-font-semibold tw-text-gray-400">Data Management</div>
         </div>
         <div class="tw-overflow-y-scroll tw-scrollbar-thumb-gray-300 tw-scrollbar-thumb-rounded-lg tw-scrollbar-thin tw-scrollbar-track-gray-100 tw-w-[1200px]">
            <ul class="tw-shadow-inner-r tw-h-fit tw-py-6 tw-mt-7 tw-list-none tw-grid tw-grid-flow-col tw-gap-8">
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Siswa</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/siswa">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Kelas</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/kelas">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Jurusan</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/jurusan">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">MaPel</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/mata-pelajaran">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">MaPel Jurusan</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/mapel-jurusan">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Mutasi</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/mutasi">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Rapor</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/rapor">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
               <li class="card-data">
                  <div class="tw-flex tw-bg-[#90C2C2] tw-font-ubuntu tw-text-white tw-rounded-xl tw-gap-8 tw-py-16 tw-px-12">
                     <div class="tw-flex tw-flex-col">
                        <i class="fa-solid fa-shapes tw-text-5xl tw-mx-auto"></i>
                        <div class="tw-font-medium tw-text-xl tw-text-center">Nilai Mapel</div>
                     </div>
                     <div class="tw-flex tw-items-center">
                        <div class="tw-font-medium tw-text-4xl">20</div>
                        <div class="tw-text-sm tw-ml-2">total <br> data</div>
                     </div>
                  </div>
                  <div class="tw-flex tw-flex-col tw-px-7 tw-py-7">
                     <table>
                        <tbody class="tw-text-left tw-font-ubuntu tw-text-[#B4B8BC] tw-font-bold">
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">latest data created</th>
                           <td class="tw-text-white tw-text-right tw-pl-3">2 days ago</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal tw-pb-1.5">recent activity</th>
                           <td class="tw-text-white tw-text-right">create</td>
                        </tr>
                        <tr>
                           <th class="tw-font-normal">latest data</th>
                           <td class="tw-text-white tw-text-right">TKJ</td>
                        </tr>
                        </tbody>
                     </table>
                     <a href="/admin/nilai-mapel">
                        <div class="card-data-btn">Manage</div>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
      </section>
   </div>
</div>
@endsection