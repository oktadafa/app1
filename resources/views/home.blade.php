@extends('layout.main')
@section('container')

<div class="landing w-full bg-body bg-no-repeat bg-right pt-20">
    <div class="text float-left pt-20 px-10">
        <h1 class=" text-white font-bold font-kalam text-5xl">Perpustakaan Sidasari</h1>
        <p class="text-white font-md font-kalam text-xl">Menjadi cerdas dengan membaca buku, <br>
            karena buku merupakan jendela dunia</p>
        </div>
    <div class="img">
        <img src="/img/books.png" alt="" srcset="">
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0A9396" fill-opacity="1" d="M0,224L80,229.3C160,235,320,245,480,250.7C640,256,800,256,960,245.3C1120,235,1280,213,1360,202.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

<div class="store  py-10">
    <h1 class="text-black text-4xl font-george font-semibold text-center">Buku Terbaru</h1>

    <div class="col mt-10">
        <div class="flex flex-wrap px-5">
            <div class="card bg-base-100 w-80 shadow-xl" data-judul="detective conan">
                <figure class="px-10 pt-10">
                        <img src="https://source.unsplash.com/400x570?detective-conan" alt="Shoes" class="rounded-xl w-60 h-80" />
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">Detective Conan</h2>
                  <div class="card-actions mt-2">
                    <button class="show btn btn-primary" onclick="my_modal_4.showModal()">Detail</button>
                  </div>
                </div>
            </div>

            <dialog id="my_modal_4" class="modal">
                <form method="dialog" class="modal-box w-11/12 max-w-5xl">
                    <div class="flex flex-col w-full lg:flex-row pt-10">
                        <div class="grid flex-grow rounded-box place-items-center my-auto">
                            <img src="https://source.unsplash.com/400x570?detective-conan" alt="Shoes" class="rounded-xl w-72 h-96 shadow-xl" />
                        </div>
                        <div class="divider lg:divider-horizontal"></div>
                        <div class="grid flex-grow card rounded-box place-items-center">

                            <div class="overflow-x-auto">
                                <table class="table text-lg">
                                    <!-- head -->
                                    <tbody>
                                        <!-- row 1 -->
                                        <tr>

                                            <td class="font">Judul </td>
                                            <td>: Quality Control Specialist</td>
                                        </tr>
                                        <!-- row 2 -->
                                    <tr>
                                      <td>Penulis </td>
                                      <td>: Desktop Support Technician</td>
                                    </tr>
                                    <!-- row 3 -->
                                    <tr>
                                      <td>Penerbit</td>
                                      <td>: Tax Accountant</td>
                                    </tr>

                                    <tr>
                                        <td>Tahun terbit</td>
                                        <td>: 2023</td>
                                    </tr>

                                    <tr>
                                        <td>Total Halaman</td>
                                        <td>: 3000</td>
                                    </tr>

                                    <tr>
                                      <td>Status</td>
                                      <td>: <div class="badge badge-success gap-2 text-white text-md">
                                        Tersedia
                                    </div></td>
                                </tr>
                                  </tbody>
                                </table>
                              </div>

                        </div>
                    </div>
                    <div class="modal-action">
                    <!-- if there is a button, it will close the modal -->
                    <button class="btn">Close</button>
                  </div>
                </form>
            </dialog>

        </div>
    </div>
</div>

@endsection
