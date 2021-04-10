<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- As link Google-fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" type="image/png">

    <!-- As link bootstrap 5 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- end link -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo - Простой ежедневник на каждый день!</title>
</head>
<body>

<!-- \* Header *\ -->
<header>
<!-- As a heading -->
<nav class="navbar navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ Route('home') }}" style="font-family: 'Dela Gothic One', cursive; color: white;">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      My ToDo-list
    </a>
  </div>
</nav>
<header>
<!-- \* End header*\ -->


<!-- \* Content *\ -->
<content>
<div class='container p-3'>
    <!-- \* Text-section *\ -->
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="font-weight-light">Привет, это мой тестовый сайт!</h1>
        <p class="lead text-muted">Если коротко, то я обычный программист на django, мне было не сложно перейти на Laravel, все Framework-и похоже друг на друга :)</p>
        <p>
          <a href="{{ Route('add') }}" class="btn btn-info my-2">Создать задачу</a>
        </p>
      </div>
    </div>
  </section>
    <!-- \* End-text *\ -->
    <div class="container">
      @include('inc.message')
    </div>
  <table class="table">
  <h1 class="text-center">Список напомнинаний</h1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Напоминание</th>
      <th scope="col">Содержание</th>
      <th scope="col">Место</th>
      <th scope="col">Дата</th>
    </tr>
  </thead>
  <tbody>
        @foreach($data as $el)
    <tr>
      <th scope="row">{{ $el->id }}</th>
      <td>{{ $el->name }}</td>
      <td>{{ $el->body }}</td>
      <td>{{ $el->locate }}</td>
      <td>{{ $el->created_at}}</td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>

</content>
<!-- \* End content *\ -->

<div class="container">
<!-- \* Footer *\ -->
<footer class="d-block p-3 bg-white text-muted">
  <div class="container">
    <p class="float-right mb-1">
    <p class="mb-1">Сайт создан с помощью - © Bootstrap, разработчиком @SBXDEV!</p>
    <p class="mb-0">Желаете поговорить со мной лично? <a href="https://vk.com/id490149419" target="_blank" style="color: black;">Поседите мою страницу</a> буду рад с вами пообщаться :)</a>.</p>
  </div>
</footer>
</div>
<!-- \* End Footer *\ -->

<!-- Import script for bs5 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
