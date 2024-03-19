@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=".../">

<header class="text-center">
    <h2>Teams Progress</h2>
</header>

<section class="main_container">
    <div class="content">
        <div class="text-white m-5 row body_main">
            <div class="step-progress">
                <span class="text-black">dawda</span>
                <ul>
                    <li class="progress-box">
                        <div class="progress one">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress two">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress three">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress four">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress five">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress six">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress seven">
                        </div>
                    </li>
                </ul>

            </div>
            <script src="{{ asset('js/progress.js') }}"></script>

        </div>
    </div>
</section>

@endsection