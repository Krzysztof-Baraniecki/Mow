<?php
$template_start = '
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Leyout MOW</title>
</head>
<body>
';
		
$template_end = '<!--start Bootstrap JS, Popper.js, and jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--end Bootstrap js-->
</body>
</html>

<li title="#233656" style="background: #233656; border-top: 2px solid #000"></li>
<li title="#415B76" style="background: #415B76"></li>
<li title="#7B9BA6" style="background: #7B9BA6"></li>
<li title="#CDD6D5" style="background: #CDD6D5"></li>
<li title="#EEF4F2" style="background: rgb(206, 206, 206)"></li>';	

$template_footer = '
<footer><h5>&copy;2018 - Projekt oraz realizacja serwisu Krzysztof Baraniecki. webyou.krzysztof@gmail.com</h5></footer>
';

$template_nav = '
<nav>
<div class="logo"><a href="index.php"><h2>{LOGO}Reso24</h2></a>
    <ul class="user">
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 17 2 C 14.238281 2 12 4.238281 12 7 C 12 9.761719 14.238281 12 17 12 C 19.761719 12 22 9.761719 22 7 C 22 4.238281 19.761719 2 17 2 Z M 32.8125 2 C 30.050781 2 27.8125 4.238281 27.8125 7 C 27.8125 9.761719 30.050781 12 32.8125 12 C 35.574219 12 37.8125 9.761719 37.8125 7 C 37.8125 4.238281 35.574219 2 32.8125 2 Z M 17 13 C 15.886719 13 14.855469 13.257813 13.9375 13.71875 C 15.8125 15.183594 17.03125 17.472656 17.03125 20.03125 C 17.03125 22.535156 15.871094 24.78125 14.0625 26.25 C 15.519531 27.007813 16.792969 28.058594 17.78125 29.375 C 17.304688 28.351563 17.03125 27.230469 17.03125 26.03125 C 17.03125 22.058594 19.949219 18.742188 23.75 18.125 C 22.945313 15.148438 20.253906 13 17 13 Z M 32.8125 13 C 29.574219 13 26.878906 15.132813 26.0625 18.09375 C 29.980469 18.609375 33.03125 21.972656 33.03125 26.03125 C 33.03125 27.152344 32.792969 28.21875 32.375 29.1875 C 33.351563 27.953125 34.574219 26.9375 35.96875 26.21875 C 34.171875 24.75 33.03125 22.527344 33.03125 20.03125 C 33.03125 17.519531 34.183594 15.28125 36 13.8125 C 35.042969 13.300781 33.984375 13 32.8125 13 Z M 9.03125 14.03125 C 5.71875 14.03125 3.03125 16.71875 3.03125 20.03125 C 3.03125 23.34375 5.71875 26.03125 9.03125 26.03125 C 12.34375 26.03125 15.03125 23.34375 15.03125 20.03125 C 15.03125 16.71875 12.34375 14.03125 9.03125 14.03125 Z M 41.03125 14.03125 C 37.71875 14.03125 35.03125 16.71875 35.03125 20.03125 C 35.03125 23.34375 37.71875 26.03125 41.03125 26.03125 C 44.34375 26.03125 47.03125 23.34375 47.03125 20.03125 C 47.03125 16.71875 44.34375 14.03125 41.03125 14.03125 Z M 25.03125 20.03125 C 21.71875 20.03125 19.03125 22.71875 19.03125 26.03125 C 19.03125 29.34375 21.71875 32.03125 25.03125 32.03125 C 28.34375 32.03125 31.03125 29.34375 31.03125 26.03125 C 31.03125 22.71875 28.34375 20.03125 25.03125 20.03125 Z M 9 27 C 4.039063 27 0 31.035156 0 36 L 0 39.5 C 0 39.8125 0.152344 40.125 0.40625 40.3125 C 0.636719 40.488281 2.84375 42 9 42 C 11.132813 42 12.792969 41.808594 14.0625 41.5625 C 14.191406 38.488281 15.566406 35.734375 17.71875 33.8125 C 16.742188 29.898438 13.210938 27 9 27 Z M 41 27 C 36.804688 27 33.273438 29.886719 32.28125 33.78125 C 34.464844 35.707031 35.875 38.492188 36 41.59375 C 37.261719 41.835938 38.898438 42 41 42 C 47.15625 42 49.363281 40.488281 49.59375 40.3125 C 49.847656 40.125 50 39.816406 50 39.5 L 50 36 C 50 31.035156 45.964844 27 41 27 Z M 25.03125 33.03125 C 20.070313 33.03125 16.03125 37.066406 16.03125 42.03125 L 16.03125 45.53125 C 16.03125 45.847656 16.183594 46.125 16.4375 46.3125 C 16.667969 46.488281 18.875 48.03125 25.03125 48.03125 C 31.1875 48.03125 33.394531 46.488281 33.625 46.3125 C 33.878906 46.125 34.03125 45.84375 34.03125 45.53125 L 34.03125 42.03125 C 34.03125 37.066406 29.996094 33.03125 25.03125 33.03125 Z "></path>
            </g>
            </svg>Lista Podopiecznych</li></a>
        <a href="add_students.php"><li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <path d="M25,2C12.317,2,2,12.317,2,25s10.317,23,23,23s23-10.317,23-23S37.683,2,25,2z M37,26H26v11h-2V26H13v-2h11V13h2v11h11V26z"></path>
        </svg>Dodaj Podopiecznego</li></a>
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 46.574219 3.425781 C 45.625 2.476563 44.378906 2 43.132813 2 C 41.886719 2 40.640625 2.476563 39.691406 3.425781 C 39.691406 3.425781 39.621094 3.492188 39.53125 3.585938 C 39.523438 3.59375 39.511719 3.597656 39.503906 3.605469 L 4.300781 38.804688 C 4.179688 38.929688 4.089844 39.082031 4.042969 39.253906 L 2.035156 46.742188 C 1.941406 47.085938 2.039063 47.453125 2.292969 47.707031 C 2.484375 47.898438 2.738281 48 3 48 C 3.085938 48 3.171875 47.988281 3.257813 47.964844 L 10.746094 45.957031 C 10.917969 45.910156 11.070313 45.820313 11.195313 45.695313 L 46.394531 10.5 C 46.40625 10.488281 46.410156 10.472656 46.417969 10.460938 C 46.507813 10.371094 46.570313 10.308594 46.570313 10.308594 C 48.476563 8.40625 48.476563 5.324219 46.574219 3.425781 Z M 45.160156 4.839844 C 46.277344 5.957031 46.277344 7.777344 45.160156 8.894531 C 44.828125 9.222656 44.546875 9.507813 44.304688 9.75 L 40.25 5.695313 C 40.710938 5.234375 41.105469 4.839844 41.105469 4.839844 C 41.644531 4.296875 42.367188 4 43.132813 4 C 43.898438 4 44.617188 4.300781 45.160156 4.839844 Z M 5.605469 41.152344 L 8.847656 44.394531 L 4.414063 45.585938 Z "></path>
            </g>
            </svg>Edytuj Podopiecznego</li></a>
    </ul>
    <ul class="admin">
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 21.980469 2 C 18.136719 2.085938 15.375 3.199219 13.765625 5.3125 C 11.949219 7.703125 11.632813 11.265625 12.796875 16.195313 C 12.386719 16.726563 12.011719 17.574219 12.109375 18.734375 C 12.402344 20.898438 13.230469 21.789063 13.898438 22.152344 C 14.234375 23.953125 15.21875 25.863281 16.101563 26.765625 C 16.105469 26.988281 16.109375 27.203125 16.113281 27.417969 C 16.132813 28.375 16.144531 29.203125 16.019531 30.265625 C 15.816406 30.792969 15.402344 31.234375 14.839844 31.632813 L 17.984375 35.421875 L 20.921875 31.773438 C 21.1875 31.445313 21.617188 31.140625 22 31.257813 C 22.378906 31.140625 22.8125 31.445313 23.078125 31.773438 L 23.742188 32.597656 C 23.9375 32.800781 24.132813 33.039063 24.316406 33.3125 L 26.234375 35.632813 C 26.082031 36.398438 26 37.191406 26 38 L 25.992188 38 C 25.691406 37.996094 25.410156 37.859375 25.21875 37.625 L 23.234375 35.15625 L 22.5 35.800781 C 22.5 35.800781 24.269531 38.757813 24.765625 42 L 19.238281 42 C 19.742188 38.8125 21.5 35.800781 21.5 35.800781 L 20.742188 35.1875 L 18.78125 37.625 C 18.589844 37.859375 18.308594 37.996094 18.007813 38 L 18 38 C 17.703125 38 17.421875 37.867188 17.230469 37.640625 L 13.042969 32.597656 C 12.4375 32.871094 11.78125 33.132813 11.09375 33.40625 C 7.191406 34.949219 2.335938 36.875 2 42.945313 L 1.945313 44 L 27.628906 44 C 29.710938 47.578125 33.578125 50 38 50 C 44.609375 50 50 44.605469 50 38 C 50 31.394531 44.609375 26 38 26 C 34.039063 26 30.527344 27.945313 28.339844 30.921875 C 28.183594 30.738281 28.050781 30.546875 27.960938 30.339844 C 27.902344 29.128906 27.800781 27.191406 27.800781 26.753906 C 28.667969 25.839844 29.585938 23.925781 29.96875 22.191406 C 30.6875 21.851563 31.589844 20.96875 31.796875 18.683594 C 31.890625 17.558594 31.582031 16.734375 31.15625 16.199219 C 31.816406 14.128906 32.9375 9.535156 31.09375 6.488281 C 30.253906 5.101563 28.941406 4.230469 27.183594 3.882813 C 26.214844 2.664063 24.398438 2 21.980469 2 Z M 22 4 C 23.890625 4 25.253906 4.476563 25.734375 5.304688 L 25.980469 5.722656 L 26.457031 5.789063 C 27.835938 5.984375 28.792969 6.550781 29.378906 7.523438 C 30.664063 9.640625 30.007813 13.5 29.058594 16.160156 L 28.742188 16.984375 L 29.535156 17.382813 C 29.625 17.445313 29.863281 17.789063 29.804688 18.507813 C 29.667969 19.988281 29.199219 20.382813 29.097656 20.402344 L 28.234375 20.402344 L 28.109375 21.261719 C 27.835938 23.183594 26.683594 25.15625 26.304688 25.433594 L 25.800781 25.71875 L 25.800781 26.300781 C 25.800781 27.335938 25.804688 28.183594 25.832031 29.125 L 22 31.253906 L 18.109375 29.09375 C 18.128906 28.503906 18.121094 27.945313 18.109375 27.378906 C 18.105469 27.035156 18.097656 26.679688 18.097656 26.296875 L 18.035156 25.734375 L 17.609375 25.4375 C 17.214844 25.167969 15.972656 23.171875 15.796875 21.304688 L 15.78125 20.40625 L 14.875 20.40625 C 14.730469 20.351563 14.285156 19.878906 14.09375 18.515625 C 14.027344 17.679688 14.453125 17.332031 14.453125 17.332031 L 15.046875 16.9375 L 14.871094 16.253906 C 13.707031 11.667969 13.867188 8.484375 15.359375 6.523438 C 16.578125 4.921875 18.820313 4.070313 22 4 Z M 38 28 C 43.523438 28 48 32.476563 48 38 C 48 43.523438 43.523438 48 38 48 C 32.476563 48 28 43.523438 28 38 C 28 32.476563 32.476563 28 38 28 Z M 37 32 L 37 37 L 32 37 L 32 39 L 37 39 L 37 44 L 39 44 L 39 39 L 44 39 L 44 37 L 39 37 L 39 32 Z "></path>
            </g>
            </svg>Dodaj Nowego Użytkownika</li></a>
        <a href="edit_user.php"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 24.9375 3 C 21.25 3.082031 18.558594 4.210938 16.933594 6.351563 C 15.003906 8.882813 14.554688 13.066406 15.765625 18.199219 C 15.351563 18.726563 14.980469 19.578125 15.078125 20.734375 C 15.375 22.898438 16.195313 23.789063 16.863281 24.152344 C 17.183594 25.871094 18.171875 27.824219 19.058594 28.753906 L 19.058594 32.308594 C 19.042969 32.34375 19.023438 32.375 19.007813 32.40625 C 18.957031 32.515625 18.898438 32.621094 18.828125 32.722656 C 18.804688 32.75 18.78125 32.78125 18.761719 32.808594 C 18.675781 32.921875 18.582031 33.035156 18.472656 33.140625 C 18.308594 33.304688 18.132813 33.460938 17.925781 33.609375 L 21.050781 37.414063 L 23.28125 34.640625 L 23.285156 34.644531 L 24.558594 33.074219 L 21.140625 31.042969 C 21.117188 31.027344 21.085938 31.027344 21.058594 31.015625 L 21.058594 28.300781 L 21.074219 27.730469 L 20.566406 27.441406 C 20.203125 27.179688 18.945313 25.195313 18.765625 23.308594 L 18.75 22.410156 L 17.84375 22.410156 C 17.703125 22.355469 17.253906 21.878906 17.066406 20.515625 C 16.996094 19.675781 17.425781 19.328125 17.421875 19.328125 L 18.011719 18.9375 L 17.839844 18.253906 C 16.625 13.46875 16.914063 9.671875 18.523438 7.558594 C 19.761719 5.929688 21.933594 5.066406 24.957031 5 C 26.847656 5 28.210938 5.476563 28.691406 6.304688 L 28.9375 6.71875 L 29.421875 6.789063 C 30.75 6.976563 31.425781 7.5625 32.03125 8.5625 C 33.480469 10.960938 33.226563 15.734375 32.359375 18.160156 L 32.042969 18.984375 L 32.835938 19.378906 C 32.925781 19.445313 33.164063 19.789063 33.105469 20.503906 C 32.96875 21.988281 32.5 22.382813 32.402344 22.402344 L 31.53125 22.402344 L 31.410156 23.257813 C 31.121094 25.269531 29.878906 27.179688 29.5625 27.433594 L 29.058594 27.71875 L 29.058594 30.570313 L 31.546875 28.082031 C 32.195313 27.058594 32.996094 25.550781 33.277344 24.1875 C 33.992188 23.847656 34.890625 22.960938 35.09375 20.683594 C 35.191406 19.558594 34.878906 18.730469 34.453125 18.195313 C 35.300781 15.46875 35.542969 10.503906 33.746094 7.53125 C 32.890625 6.121094 31.855469 5.226563 30.140625 4.882813 C 29.175781 3.664063 27.355469 3 24.9375 3 Z M 36.902344 28 L 36.402344 31.199219 C 36.101563 31.300781 35.699219 31.5 35.402344 31.597656 L 32.699219 29.699219 L 29.699219 32.699219 L 31.5 35.199219 C 31.300781 35.5 31.199219 35.902344 31.097656 36.300781 L 28 36.800781 L 28 41 L 31.097656 41.5 C 31.199219 41.800781 31.398438 42.199219 31.5 42.5 L 29.699219 45.199219 L 32.699219 48.199219 L 35.402344 46.402344 C 35.800781 46.601563 36.101563 46.699219 36.5 46.800781 L 36.902344 50 L 41.097656 50 L 41.597656 46.800781 C 41.898438 46.699219 42.300781 46.5 42.597656 46.402344 L 45.300781 48.199219 L 48.300781 45.199219 L 46.402344 42.597656 C 46.601563 42.300781 46.699219 41.898438 46.800781 41.597656 L 50 41 L 50 36.800781 L 46.800781 36.300781 C 46.699219 36 46.5 35.601563 46.402344 35.300781 L 48.199219 32.597656 L 45.300781 29.699219 L 42.699219 31.597656 C 42.398438 31.398438 42 31.300781 41.699219 31.199219 L 41.097656 28 Z M 16.140625 34.582031 C 15.523438 34.855469 14.855469 35.125 14.152344 35.40625 C 10.25 36.949219 5.394531 38.875 5.0625 44.945313 L 5 46 L 22.15625 46 L 22.15625 45.597656 C 22.15625 41.902344 24.558594 37.800781 24.558594 37.800781 L 23.800781 37.1875 L 21.839844 39.625 C 21.648438 39.859375 21.363281 39.996094 21.0625 40 L 21.058594 40 C 20.757813 40 20.476563 39.867188 20.285156 39.636719 Z M 39 36 C 40.699219 36 42 37.300781 42 39 C 42 40.699219 40.699219 42 39 42 C 37.300781 42 36 40.699219 36 39 C 36 37.300781 37.300781 36 39 36 Z "></path>
            </g>
            </svg>Edytuj Użytkownika</li></a>
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 1 39 L 11 39 L 11 49 L 9 49 L 9 42.414063 L 1.605469 49.808594 L 0.191406 48.394531 L 7.585938 41 L 1 41 Z M 49 9 L 42.414063 9 L 49.808594 1.605469 L 48.394531 0.191406 L 41 7.585938 L 41 1 L 39 1 L 39 11 L 49 11 Z M 1 9 L 1 11 L 11 11 L 11 1 L 9 1 L 9 7.585938 L 1.605469 0.191406 L 0.191406 1.605469 L 7.585938 9 Z M 49 41 L 49 39 L 39 39 L 39 49 L 41 49 L 41 42.414063 L 48.394531 49.808594 L 49.808594 48.394531 L 42.414063 41 Z M 25 19 C 27.757813 19 30 16.757813 30 14 C 30 11.242188 27.757813 9 25 9 C 22.242188 9 20 11.242188 20 14 C 20 16.757813 22.242188 19 25 19 Z M 35 25 C 37.757813 25 40 22.757813 40 20 C 40 17.242188 37.757813 15 35 15 C 32.242188 15 30 17.242188 30 20 C 30 22.757813 32.242188 25 35 25 Z M 15 25 C 17.757813 25 20 22.757813 20 20 C 20 17.242188 17.757813 15 15 15 C 12.242188 15 10 17.242188 10 20 C 10 22.757813 12.242188 25 15 25 Z M 20 25 C 20 27.757813 22.242188 30 25 30 C 27.757813 30 30 27.757813 30 25 C 30 22.242188 27.757813 20 25 20 C 22.242188 20 20 22.242188 20 25 Z M 25 31 C 20.738281 31 17 33.429688 17 36.199219 L 17 39 L 33 39 L 33 36.199219 C 33 33.429688 29.261719 31 25 31 Z M 20.078125 29.972656 C 19.132813 29.035156 18.449219 27.824219 18.160156 26.476563 C 18.117188 26.460938 18.074219 26.4375 18.035156 26.421875 C 16.992188 26.144531 15.972656 26 15 26 C 10.738281 26 7 28.429688 7 31.199219 L 7 34 L 15.519531 34 C 16.308594 32.304688 17.953125 30.863281 20.078125 29.972656 Z M 43 31.199219 C 43 28.480469 39.1875 26 35 26 C 33.957031 26 32.921875 26.144531 31.964844 26.414063 C 31.925781 26.425781 31.886719 26.441406 31.847656 26.457031 C 31.558594 27.8125 30.871094 29.027344 29.921875 29.972656 C 32.046875 30.863281 33.691406 32.304688 34.480469 34 L 43 34 Z "></path>
            </g>
            </svg>Edytuj grupy</li></a>
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 25 7 C 22.792969 7 21 8.792969 21 11 C 21 13.207031 22.792969 15 25 15 C 27.207031 15 29 13.207031 29 11 C 29 8.792969 27.207031 7 25 7 Z M 3 10 C 2.449219 10 2 10.449219 2 11 C 2 11.550781 2.449219 12 3 12 L 19.089844 12 C 19.035156 11.675781 19 11.339844 19 11 C 19 10.660156 19.035156 10.324219 19.089844 10 Z M 30.910156 10 C 30.964844 10.324219 31 10.660156 31 11 C 31 11.339844 30.964844 11.675781 30.910156 12 L 47 12 C 47.554688 12 48 11.550781 48 11 C 48 10.449219 47.554688 10 47 10 Z M 39 21 C 36.792969 21 35 22.792969 35 25 C 35 27.207031 36.792969 29 39 29 C 41.207031 29 43 27.207031 43 25 C 43 22.792969 41.207031 21 39 21 Z M 3 24 C 2.449219 24 2 24.449219 2 25 C 2 25.550781 2.449219 26 3 26 L 33.089844 26 C 33.035156 25.675781 33 25.339844 33 25 C 33 24.660156 33.035156 24.324219 33.089844 24 Z M 44.910156 24 C 44.964844 24.324219 45 24.660156 45 25 C 45 25.339844 44.964844 25.675781 44.910156 26 L 47 26 C 47.554688 26 48 25.550781 48 25 C 48 24.449219 47.554688 24 47 24 Z M 14 35 C 11.792969 35 10 36.792969 10 39 C 10 41.207031 11.792969 43 14 43 C 16.207031 43 18 41.207031 18 39 C 18 36.792969 16.207031 35 14 35 Z M 3 38 C 2.449219 38 2 38.445313 2 39 C 2 39.554688 2.449219 40 3 40 L 8.089844 40 C 8.035156 39.675781 8 39.34375 8 39 C 8 38.65625 8.035156 38.324219 8.089844 38 Z M 19.910156 38 C 19.964844 38.324219 20 38.65625 20 39 C 20 39.34375 19.964844 39.675781 19.910156 40 L 47 40 C 47.554688 40 48 39.554688 48 39 C 48 38.445313 47.554688 38 47 38 Z "></path>
            </g>
            </svg>Program24</li></a>
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 27.5 2 C 27.039063 2 26.644531 2.304688 26.53125 2.75 L 26.125 4.4375 C 24.648438 4.882813 23.285156 5.65625 22.15625 6.71875 L 20.5 6.25 C 20.058594 6.125 19.574219 6.289063 19.34375 6.6875 L 17.84375 9.3125 C 17.613281 9.710938 17.703125 10.210938 18.03125 10.53125 L 19.25 11.71875 C 19.074219 12.464844 19 13.226563 19 14 C 19 14.773438 19.074219 15.535156 19.25 16.28125 L 18.03125 17.46875 C 17.703125 17.789063 17.613281 18.289063 17.84375 18.6875 L 19.34375 21.3125 C 19.574219 21.710938 20.058594 21.871094 20.5 21.75 L 22.15625 21.28125 C 23.285156 22.34375 24.648438 23.117188 26.125 23.5625 L 26.53125 25.25 C 26.640625 25.695313 27.039063 26 27.5 26 L 30.5 26 C 30.960938 26 31.355469 25.695313 31.46875 25.25 L 31.875 23.5625 C 33.351563 23.117188 34.714844 22.34375 35.84375 21.28125 L 37.5 21.75 C 37.9375 21.878906 38.425781 21.710938 38.65625 21.3125 L 40.15625 18.6875 C 40.386719 18.289063 40.296875 17.789063 39.96875 17.46875 L 38.75 16.28125 C 38.925781 15.53125 39 14.773438 39 14 C 39 13.226563 38.925781 12.46875 38.75 11.71875 L 39.96875 10.53125 C 40.296875 10.210938 40.386719 9.710938 40.15625 9.3125 L 38.65625 6.6875 C 38.425781 6.289063 37.9375 6.125 37.5 6.25 L 35.84375 6.71875 C 34.714844 5.65625 33.351563 4.882813 31.875 4.4375 L 31.46875 2.75 C 31.355469 2.304688 30.960938 2 30.5 2 Z M 29 11 C 30.667969 11 32 12.332031 32 14 C 32 15.667969 30.667969 17 29 17 C 27.332031 17 26 15.667969 26 14 C 26 12.332031 27.332031 11 29 11 Z M 11.5 20 C 11.039063 20 10.644531 20.304688 10.53125 20.75 L 10.125 22.4375 C 8.648438 22.882813 7.285156 23.65625 6.15625 24.71875 L 4.5 24.25 C 4.058594 24.125 3.574219 24.289063 3.34375 24.6875 L 1.84375 27.3125 C 1.613281 27.710938 1.703125 28.210938 2.03125 28.53125 L 3.25 29.71875 C 3.074219 30.464844 3 31.226563 3 32 C 3 32.773438 3.074219 33.535156 3.25 34.28125 L 2.03125 35.46875 C 1.703125 35.789063 1.613281 36.289063 1.84375 36.6875 L 3.34375 39.3125 C 3.574219 39.710938 4.058594 39.871094 4.5 39.75 L 6.15625 39.28125 C 7.285156 40.34375 8.648438 41.117188 10.125 41.5625 L 10.53125 43.25 C 10.640625 43.695313 11.039063 44 11.5 44 L 14.5 44 C 14.960938 44 15.355469 43.695313 15.46875 43.25 L 15.875 41.5625 C 17.351563 41.117188 18.714844 40.34375 19.84375 39.28125 L 21.5 39.75 C 21.9375 39.878906 22.425781 39.710938 22.65625 39.3125 L 24.15625 36.6875 C 24.386719 36.289063 24.296875 35.789063 23.96875 35.46875 L 22.75 34.28125 C 22.925781 33.53125 23 32.773438 23 32 C 23 31.226563 22.925781 30.46875 22.75 29.71875 L 23.96875 28.53125 C 24.296875 28.210938 24.386719 27.710938 24.15625 27.3125 L 22.65625 24.6875 C 22.425781 24.289063 21.9375 24.125 21.5 24.25 L 19.84375 24.71875 C 18.714844 23.65625 17.351563 22.882813 15.875 22.4375 L 15.46875 20.75 C 15.359375 20.304688 14.960938 20 14.5 20 Z M 34.5 25 C 34.039063 25 33.644531 25.304688 33.53125 25.75 L 33.125 27.4375 C 31.648438 27.882813 30.285156 28.65625 29.15625 29.71875 L 27.5 29.25 C 27.058594 29.125 26.574219 29.289063 26.34375 29.6875 L 24.84375 32.3125 C 24.613281 32.710938 24.703125 33.210938 25.03125 33.53125 L 26.25 34.71875 C 26.074219 35.464844 26 36.226563 26 37 C 26 37.773438 26.074219 38.535156 26.25 39.28125 L 25.03125 40.46875 C 24.703125 40.789063 24.613281 41.289063 24.84375 41.6875 L 26.34375 44.3125 C 26.574219 44.710938 27.058594 44.871094 27.5 44.75 L 29.15625 44.28125 C 30.285156 45.34375 31.648438 46.117188 33.125 46.5625 L 33.53125 48.25 C 33.640625 48.695313 34.039063 49 34.5 49 L 37.5 49 C 37.960938 49 38.355469 48.695313 38.46875 48.25 L 38.875 46.5625 C 40.351563 46.117188 41.714844 45.34375 42.84375 44.28125 L 44.5 44.75 C 44.9375 44.878906 45.425781 44.710938 45.65625 44.3125 L 47.15625 41.6875 C 47.386719 41.289063 47.296875 40.789063 46.96875 40.46875 L 45.75 39.28125 C 45.925781 38.53125 46 37.773438 46 37 C 46 36.226563 45.925781 35.46875 45.75 34.71875 L 46.96875 33.53125 C 47.296875 33.210938 47.386719 32.710938 47.15625 32.3125 L 45.65625 29.6875 C 45.425781 29.289063 44.9375 29.125 44.5 29.25 L 42.84375 29.71875 C 41.714844 28.65625 40.351563 27.882813 38.875 27.4375 L 38.46875 25.75 C 38.359375 25.304688 37.960938 25 37.5 25 Z M 13 29 C 14.667969 29 16 30.332031 16 32 C 16 33.667969 14.667969 35 13 35 C 11.332031 35 10 33.667969 10 32 C 10 30.332031 11.332031 29 13 29 Z M 36 33 C 38.210938 33 40 34.789063 40 37 C 40 39.210938 38.210938 41 36 41 C 33.789063 41 32 39.210938 32 37 C 32 34.789063 33.789063 33 36 33 Z "></path>
            </g>
            </svg>Edytuj Program24</li></a>
    </ul>
</div>
<div class="myAccount">
    <ul>
        <a href="#!"><li><svg xmlns="http://www.w3.>org/2000/svg" viewBox="0 0 50 50">
            <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 25 2.0078125 C 12.309296 2.0078125 2.0000002 12.317108 2 25.007812 C 2 37.112262 11.38131 47.043195 23.259766 47.935547 C 23.283185 47.93745 23.306613 47.939576 23.330078 47.941406 C 23.882405 47.981205 24.437631 48.007812 25 48.007812 C 25.562369 48.007812 26.117595 47.981205 26.669922 47.941406 C 26.693387 47.939576 26.716815 47.93745 26.740234 47.935547 C 38.61869 47.043195 48 37.112262 48 25.007812 C 48 12.317108 37.690704 2.0078125 25 2.0078125 z M 25 4.0078125 C 36.609824 4.0078125 46 13.397988 46 25.007812 C 46 30.739515 43.704813 35.924072 39.990234 39.710938 C 38.401074 38.55372 36.437194 37.863387 34.677734 37.246094 C 32.593734 36.516094 30.622172 35.824094 30.076172 34.621094 C 29.990172 33.594094 29.997859 32.792094 30.005859 31.871094 L 30.007812 31.480469 C 30.895813 30.635469 32.012531 28.852078 32.394531 27.205078 C 33.054531 26.853078 33.861516 26.009281 34.103516 23.988281 C 34.224516 22.985281 33.939062 22.2085 33.539062 21.6875 C 34.079062 19.8325 35.153484 15.136469 33.271484 12.105469 C 32.475484 10.824469 31.274313 10.016266 29.695312 9.6972656 C 28.808312 8.5992656 27.134484 8 24.896484 8 C 21.495484 8.063 19.002234 9.1047031 17.490234 11.095703 C 15.707234 13.445703 15.370328 16.996297 16.486328 21.654297 C 16.073328 22.175297 15.775438 22.963328 15.898438 23.986328 C 16.141438 26.007328 16.945469 26.851125 17.605469 27.203125 C 17.987469 28.852125 19.103188 30.635469 19.992188 31.480469 L 19.994141 31.861328 C 20.002141 32.786328 20.009828 33.590094 19.923828 34.621094 C 19.375828 35.827094 17.394781 36.526625 15.300781 37.265625 C 13.551886 37.88319 11.599631 38.574586 10.013672 39.716797 C 6.2962191 35.929504 4 30.742023 4 25.007812 C 4.0000002 13.397989 13.390176 4.0078125 25 4.0078125 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"></path>
        </svg>Edytuj Konto</li></a>
        <a href="#!"><li><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
            <g id="surface1">
            <path style=" " d="M 3 0 C 1.347656 0 0 1.347656 0 3 L 0 47 C 0 48.652344 1.347656 50 3 50 L 37 50 C 38.652344 50 40 48.652344 40 47 L 40 38.15625 C 39.457031 38.625 38.785156 38.90625 38.0625 38.90625 C 37.261719 38.90625 36.503906 38.566406 35.9375 38 C 34.765625 36.828125 34.765625 34.953125 35.9375 33.78125 L 40 29.6875 L 40 28 L 17 28 C 15.347656 28 14 26.652344 14 25 C 14 23.347656 15.347656 22 17 22 L 40 22 L 40 20.3125 L 35.9375 16.21875 C 35.371094 15.652344 35.0625 14.925781 35.0625 14.125 C 35.0625 13.324219 35.371094 12.566406 35.9375 12 C 36.503906 11.433594 37.261719 11.125 38.0625 11.125 C 38.785156 11.125 39.457031 11.375 40 11.84375 L 40 3 C 40 1.347656 38.652344 0 37 0 Z M 38.0625 13.125 C 37.808594 13.125 37.539063 13.210938 37.34375 13.40625 C 36.953125 13.796875 36.953125 14.421875 37.34375 14.8125 L 46.53125 24 L 17 24 C 16.449219 24 16 24.449219 16 25 C 16 25.550781 16.449219 26 17 26 L 46.53125 26 L 37.34375 35.1875 C 36.953125 35.578125 36.953125 36.203125 37.34375 36.59375 C 37.539063 36.789063 37.804688 36.90625 38.0625 36.90625 C 38.320313 36.90625 38.554688 36.789063 38.75 36.59375 L 50.34375 25 L 38.75 13.40625 C 38.554688 13.210938 38.316406 13.125 38.0625 13.125 Z "></path>
            </g>
            </svg>Wyloguj</li></a>
    </ul>
</div>
</nav>
';
?>


