@extends('master')
@section('isi')
<main id="main">
    <section id="users" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="span9">
                    <br>
                <table class="table" id = "tables">
                <thead style="background-color: #FF6D60;">
                    <tr style="text-align: center;">
                    <th scope="col" class="pb-4">Id</th>
                    <th scope="col" class="pb-4">Category_Id</th>
                    <th scope="col" class="pb-4">User_Id</th>
                    <th scope="col" class="pb-4">Name</th>
                    <th scope="col" class="pb-4">Description</th>
                    <th scope="col" class="pb-4">Price</th>
                    <th scope="col" class="pb-4">Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($product as $p)
                    <tr style="text-align: center;">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td></td>
                        <td></td>
                        <td>{{ $p -> name }}</td>
                        <td>{{ $p -> description }}</td>
                        <td>{{ $p -> price }}</td>
                        <td><center>
                            <a href="/edit-product/{{ $p -> id }}" class="btn btn-success">Edit</a>
                            <a href="/delete-product/{{ $p -> id }}" class="btn btn-danger">Delete</a>
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