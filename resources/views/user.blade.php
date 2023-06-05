@extends('master')
@section('isi')
<main id="main">
    <!-- ======= Users Section ======= -->
    <section id="users" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="span9">
                <br>
            <table class="table" id = "tables">
            <thead style="background-color: #FF6D60;">
                <tr style="text-align: center;">
                <th scope="col" class="pb-4">Id</th>
                <th scope="col" class="pb-4">Avatar</th>
                <th scope="col" class="pb-4">Name</th>
                <th scope="col" class="pb-4">Email</th>
                <th scope="col" class="pb-4">Phone</th>
                <th scope="col" class="pb-4">Address</th>
                <th scope="col" class="pb-4">Role</th>
                <th scope="col" class="pb-4">Menu</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $u)
                <tr style="text-align: center;">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td><img src=""></td>
                    <td>{{ $u -> name }}</td>
                    <td>{{ $u -> email }}</td>
                    <td>{{ $u -> phone }}</td>
                    <td>{{ $u -> address }}</td>
                    <td></td>
                    <td><center>
                        <a href="/edit/{{ $u->id }}" class="btn btn-success">Edit</a>
                        <a href="/delete/{{ $u->id }}" class="btn btn-danger">Delete</a>
                        </center>
                    </td>
                </tr>
                @empty
                    <td colspan="6"> <center>Data Tidak Tersedia</center> </td>
                @endforelse
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>
@endsection