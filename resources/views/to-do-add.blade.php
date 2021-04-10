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
    <title>todo-list</title>
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
@if($errors->any())
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
</div>
@endif

    <form method="post" action=" {{ Route('contact-form') }} ">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Напоминание</label>
            <input type="text" class="form-control" name='name' id="exampleFormControlInput1" placeholder="Например cходить в магазин">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Введите содержание задачи</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Например купить корм..." name="body" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="locate" class="form-label">Место</label>
            <input type="text" class="form-control" name='locate' id="exampleFormControlInput1" placeholder="Например Лента, Гулливер ...">
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>

</content>
<!-- \* End content *\ -->


<!-- \* Footer *\ -->
<footer class="text-muted py-5 fixed-bottom">
  <div class="container">
    <p class="float-right mb-1">
    <p class="mb-1">Сайт создан с помощью - © Bootstrap, разработчиком @SBXDEV!</p>
    <p class="mb-0">Желаете поговорить со мной лично? <a href="https://vk.com/id490149419" target="_blank">Поседите мою страницу</a> буду рад с вами пообщаться :)</a>.</p>
  </div>
</footer>
<!-- \* End Footer *\ -->


<!-- Import script for bs5 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
