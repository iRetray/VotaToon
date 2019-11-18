<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilosCrono.css">

    <title>CALENDARIO</title>
</head>
<body>

<h1 class="title">CRONOGRAMA VOTACIONES</h1>
<table id="estiloSombratransparente">
	<div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>
</table>

<table id="estiloSombratransparente">
    <div class="calendar__week">
        <div class="calendar__day calendar__item">Lunes</div>
        <div class="calendar__day calendar__item">Martes</div>
        <div class="calendar__day calendar__item">Miercoles</div>
        <div class="calendar__day calendar__item">Jueves</div>
        <div class="calendar__day calendar__item">Viernes</div>
        <div class="calendar__day calendar__item">Sábado</div>
        <div class="calendar__day calendar__item">Domingo</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</table>
<script src="crono.js"></script>
</body>
</html>
