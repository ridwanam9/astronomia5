@extends('layouts.main')

@section('container1')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:100vh; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed; background: rgba(0, 0, 0, 0.5);">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Pertanyaan Anda</h1>
        <br>
        <br>
        <p class="masthead-subheading font-weight-light mb-0">Halaman ini untuk menampilkan semua pertanyaan yang anda
            ajukan melalui halaman

            @auth
            @if(!auth()->user()->is_admin)
            <a class="text-warning" href="/tanya">Tanya</a></big>.
            @else
            Tanya.
            @endelse
            @endif
            @else
            <a class="text-warning" href="/login">Tanya</a></big>.
            @endauth

            Adapun Status untuk melihat pertanyaan anda sudah Terjawab atau belum. Jika sudah terjwab anda hanya perlu
            masuk ke halaman Kak Astro. Di sana anda hanya perlu mencari judul sesuai dengan pertanyaan anda.
        </p>
        <br>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('danger'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('danger')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="{{ route('tanya.indexperuser') }}" method="GET">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                            <input type="text" name="search" placeholder="Cari..." class="form-control" aria-label=""
                                aria-describedby="basic-addon1" value="{{ session('last_search') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <table class="table bg-secondary rounded" style="color: white;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pertanyaan</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tanyas as $tanya)
                        @php $loopIndex = $loop->index + 1; @endphp
                        <tr class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                            <th scope="row">{{ $loopIndex }}</th>
                            <td>{{ $tanya->judul }}</td>
                            <td>
                                <div class="flex space-x-3">
                                    <form action="{{ route('tanyas.destroy', $tanya->id) }}" method="Post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-600 dark:text-red-400 whitespace-nowrap"
                                            onclick="return confirm('Apakah anda ingin menghapus pertanyaan ini?')">
                                            Delete
                                        </button>
                                    </form>
                                    @if(!$tanya->kakastro)
                                    <a href="{{ route('tanya.edit', $tanya->id) }}"
                                        class="text-red-600 dark:text-red-400 whitespace-nowrap">
                                        Update
                                    </a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                @if($tanya->kakastro)
                                Terjawab
                                @else
                                Belum Terjawab
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center;">Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <br>
    </div>
</header>

@endsection