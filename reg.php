<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Регистрация на сайте</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Регистрация на сайте</h1>
      <div class="col-sm-6 mx-auto my-5">
        <form onsubmit="sendForm(this); return false;">
          <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Имя">
          </div>
          <div class="form-group">
            <input name="lastname" type="text" class="form-control" placeholder="Фамилия">
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="E-mail">
            <p id="info" style="color:red;"></p>
          </div>
          <div class="form-group">
            <input name="pass" type="password" class="form-control" placeholder="Пароль">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>
    <script>
      async function sendForm(form){
        let formData = new FormData(form);
        let response = await fetch("addUser",{
          method: "POST",
          body: formData
        });
        let result = await response.text();
        if(result == "success"){
          location.href = "auth.php";
        }else if(result == "exist"){
          info.innerText = `Такой пользователь уже есть!`;
        }else{
          console.log("Неизвестная ошибка!")
        }
      }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>