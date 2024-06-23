@extends('layouts.main')

@section('container1')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:100vh; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed; background: rgba(0, 0, 0, 0.5);">
    <div class="container d-flex align-items-center flex-column">


        {{-- <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/assets/img/avataaars.svg" alt="..." /> --}}


        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Daftar Pengguna</h1>

        {{-- <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> --}}
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
        <br>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="{{ route('user.index') }}" method="GET">
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col" style="text-align : center;">Pertanyaan</th>
                            <th scope="col" style="text-align : center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        @php $loopIndex = $loop->index + 1; @endphp
                        <tr class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap dark:text-white">
                            <th scope="row">{{ $loopIndex }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->handphone }}</td>
                            <td style="text-align : center;">{{ $user->tanyas->count() }}</td>
                            <td style="text-align : center;">
                                <div class="flex space-x-3">
                                    <form action="{{ route('user.destroy', $user) }}" method="Post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-600 dark:text-red-400 whitespace-nowrap"
                                            onclick="return confirm('Apakah anda ingin menghapus pengguna ini?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
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
        <!-- Masthead Subheading-->
        <!-- <p class="masthead-subheading font-weight-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reiciendis assumenda, excepturi, recusandae quibusdam natus voluptatum nemo necessitatibus fugiat dicta ratione quas illum soluta. Quae, eligendi cupiditate consequatur ipsam unde ducimus iusto tempore cum sint perferendis! Cupiditate, quam dolores? Omnis accusamus et error. Est eaque assumenda porro cupiditate et! Eligendi voluptas nihil omnis ab? Blanditiis velit perspiciatis assumenda dolorem voluptatem! In adipisci nostrum possimus laudantium totam tenetur provident veniam minus officia. Iste iusto in voluptatibus dolor? Quae nam fuga ipsum nesciunt tenetur reiciendis, eum incidunt voluptas earum praesentium, hic perferendis quasi pariatur odio repellat exercitationem aperiam sit. Aliquam, iusto mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto officia harum asperiores alias, molestiae aperiam quibusdam nemo dignissimos omnis! Quas saepe officia voluptates itaque esse numquam aut recusandae impedit voluptate aliquam excepturi illo, debitis reprehenderit similique expedita deleniti earum totam cumque facilis enim natus molestias amet sequi. Voluptatum enim vel, molestias, expedita, dolor mollitia quae maxime maiores adipisci non possimus praesentium est? Ratione quisquam iste at itaque, rerum excepturi ullam autem aut fuga, delectus vel in cupiditate inventore accusamus eligendi nobis recusandae tempora asperiores deserunt veritatis sint vero maxime facilis iure? Ducimus ab mollitia dolor, dicta nostrum neque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos maxime eum iure magnam tenetur quo alias, expedita sequi beatae quidem reprehenderit labore cupiditate nostrum tempora perferendis ducimus obcaecati. Quod harum possimus officia nam, porro consequuntur necessitatibus quae repudiandae repellendus obcaecati et beatae eum autem ex repellat debitis aliquid cum aliquam dolorum blanditiis ut? Beatae unde eveniet natus rerum vitae inventore, exercitationem soluta vero atque laborum dolore maxime iste quibusdam iusto animi quidem laboriosam at necessitatibus, nesciunt suscipit. Facere doloremque velit mollitia veritatis possimus labore, unde numquam! Vitae quibusdam voluptate totam, culpa cum commodi explicabo odit nesciunt facilis suscipit iure temporibus?</p> -->
    </div>
</header>

@endsection