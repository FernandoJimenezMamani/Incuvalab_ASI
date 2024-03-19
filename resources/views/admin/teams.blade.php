@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=".../">

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            </div>
        </div>
    </div>
</div> -->

<header class="text-center">
    <h2>Teams</h2>
</header>

<section class="main_container bg-dark border-top border-white">
    <div class="content bg-white">
        <div class="text-white m-5 row body_main">
            
            <div class="p-4 mt-3 rounded-4 body_card">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team Name</th>
                            <th scope="col" class="col-md-3">Team Members</th>
                            <th scope="col" class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-light">Edit</a>
                                <a class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection