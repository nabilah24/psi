@extends('layout.masterAdmin')

@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Menu List</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="user-data">
            <div class="user">
                <div class="head">
                    <a href="{{ route('adminMenu.create') }}"><i class='bx bx-plus'></i></a>
                    <i class='bx bx-filter'></i>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        <p>{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table menu-list" id="menusTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Item</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $menu->nama_item }}</td>
                                <td>Rp{{ $menu->harga }}</td>
                                <td>{{ $menu->stok }}</td>
                                <td>
                                    <img src="{{ asset('/storage/gambar/' . $menu->gambar) }}" width="80" height="80"
                                        class="img img-responsive">
                                </td>
                                <td>{{ $menu->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('adminMenu.show', $menu->id) }}" class="btn btn-info" style="font-size: 12px; font-weight:bold;"><i class='bx bxs-show'></i>&nbsp;Detail</a>
                                    <a href="{{ route('adminMenu.edit', $menu->id) }}" class="btn btn-warning" style="font-size: 12px; font-weight:bold;"><i class='bx bxs-edit'></i>&nbsp;Edit</a>
                                    <button type="button" onclick="handleDelete({{ $menu->id }})"
                                        class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="font-size: 12px; font-weight:bold;"><i class='bx bxs-trash'></i>&nbsp;Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        @empty($menus)
                            <div class="text-center" colspan="4">Data tidak tersedia...</div>
                        @endempty
                    </tbody>
                </table>
                {{ $menus->links() }}
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
                        class="bi bi-exclamation-circle" viewBox="0 0 16 16" style="color: #ffcc00">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    <br><br>
                    <h1><strong>HAPUS</strong></h1>
                    <h5>Apakah anda yakin?</h5><br>
                    <form action="{{ route('adminMenu.destroy', $menu->id ?? '') }}" method="POST">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Ya! hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            $('#deleteModal').modal('show')
        }
    </script>
@endsection
