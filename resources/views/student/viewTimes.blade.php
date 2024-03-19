@extends("layouts.Dashboard")
@section("script")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>



<script>

    document.addEventListener('DOMContentLoaded', function() {
       
        let formulario = document.querySelector("form");
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

            locale:"es",

            headerToolbar:{
                left: 'prev,next today',
                center: 'title',
                right:'dayGridMonth, timeGridWeek, listWeek'
            },
            events: "http://127.0.0.1:8000/viewtimes/show"
            
        });

        calendar.render();
        






    });



</script>
@stop
@section('content')
<div class="container">
    <div id="calendar">

    </div>
   
</div>


@endsection

