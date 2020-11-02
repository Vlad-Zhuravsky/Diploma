<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
      .edit-btn{
        color:blue;
        cursor:pointer;
      }
      .edit-btn:hover{
        color:navy;
      }
      .save-btn{
        color:green;
        cursor:pointer;
      }
      .save-btn:hover{
        color:lime;
      }
      .cancel-btn{
        color:maroon;
        cursor:pointer;
      }
      .cancel-btn:hover{
        color:red;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Профиль</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Настройки профиля</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Подобрать Автомобиль</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row">
              <div class="col-sm-2"><img src="https://cdn.onlinewebfonts.com/svg/img_258083.png" width="100%" alt=""></div>
              <div class="col-sm-10">
                <h1 id="userNameAndLastName"></h1>
                <p>Добро пожаловать на сайт по подбору автомобиля</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <p>
              Имя: <span id="userName"></span> 
              <span class="edit-btn">[Изменить]</span>
              <span class="save-btn" hidden data-item="name">[Сохранить]</span>
              <span class="cancel-btn" hidden>[Отменить]</span>
            </p>
            <p>
              Фамилия: <span id="userLastName"></span> 
              <span class="edit-btn">[Изменить]</span>
              <span class="save-btn" hidden data-item="lastname">[Сохранить]</span>
              <span class="cancel-btn" hidden>[Отменить]</span>
            </p>
            <p>E-mail: <spanid id="userEmail"></span></p>
            <p>ID: <span id="userId"></span></p>
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            
          </div>
      </div>
    </div>
    <script>
      let profileBtn = document.getElementById("v-pills-home-tab");
      let settingsBtn = document.getElementById("v-pills-profile-tab");
      let testBtn = document.getElementById("v-pills-messages-tab");
      profileBtn.addEventListener("click",()=>{
        history.pushState({page:1},"lk", "lk")
      });
      settingsBtn.addEventListener("click",()=>{
        history.pushState({page:1},"settings", "settings")
      });
      testBtn.addEventListener("click",()=>{
        history.pushState({page:1},"test", "test")
      });
    
      fetch("getUser")
      .then(response =>response.json())  
      .then(user=>{
        userNameAndLastName.innerText = `${user.name} ${user.lastname}`;
        userName.innerText = user.name;
        userLastName.innerText = user.lastname;
        userEmail.innerText = user.email;
        userId.innerText = user.id;
      });
    
      let editBtns = document.querySelectorAll('.edit-btn');
      let saveBtns = document.querySelectorAll('.save-btn');
      let cancelBtns = document.querySelectorAll('.cancel-btn');
      
      for(let i=0; i<editBtns.length;i++){
        let value = editBtns[i].previousElementSibling.innerText;
        editBtns[i].addEventListener("click",()=>{
          
          editBtns[i].previousElementSibling.innerHTML = `<input value="${value}">`;
          editBtns[i].hidden = true;
          saveBtns[i].hidden = false;
          cancelBtns[i].hidden = false;
          
          cancelBtns[i].addEventListener("click",()=>{
            editBtns[i].previousElementSibling.innerHTML = `${value}`;
            editBtns[i].hidden = false;
            saveBtns[i].hidden = true;
            cancelBtns[i].hidden = true;
          });
        });
          saveBtns[i].addEventListener("click",()=>{
            value = editBtns[i].previousElementSibling.firstChild.value;
            let formData = new FormData();
            let item = saveBtns[i].dataset.item;
            formData.append("item",item);
            formData.append("value",value);
            fetch("changeUserData",{
              method: "POST",
              body: formData
            })
            editBtns[i].previousElementSibling.innerHTML = value;
            editBtns[i].hidden = false;
            saveBtns[i].hidden = true;
            cancelBtns[i].hidden = true;
          });
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