@extends('layouts.Dashboard')

@section('content')
<style>
        .iframe-container {
            display: flex;
            justify-content: space-around; 
            align-items: center; 
           
        }

        iframe {
            border: none;
            overflow: hidden;
            width: 860px;
            height: 314px;
            padding: 30px;
        }
    </style>

<div class="container">

    <div class="row justify-content">
        <div class="col-md-8">
            <h1>VIDEOS</h1>
        </div>
    </div>

    <div class="iframe-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/riDnshOZMLQ?si=KSXZnOOK28KtRGnK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
            <iframe src="https://www.youtube.com/embed/_7ejFAb6VN8?si=dJpPrzyGkQL4SatK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AxiE31JCP4g?si=kORsFhhSwdFC6r8J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <hr style="border-top: 1px solid #000;">

    <div class="card-body" >
    <div class="iframe-container">
         <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100086191247435%2Fvideos%2F1270221323679979%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100086191247435%2Fvideos%2F650990800348924%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100086191247435%2Fvideos%2F885280509114432%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

           
    </div> 

@endsection