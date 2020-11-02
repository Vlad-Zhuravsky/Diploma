<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Профиль</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Настройки профиля</a>
          <a class="nav-link" id="v-pills-test-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Пройти тест</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row">
              <div class="col-sm-2"><img src="https://cdn.onlinewebfonts.com/svg/img_258083.png" width="100%" alt=""></div>
              <div class="col-sm-10">
                <h1 id="userNameAndLastName"></h1>
                <p>Добро пожаловать на сайт</p>
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
          <h3>Узнайте как хорошо вы знаете города.<br></h3>
          <form name="quiz">
              <br>
          		<p>
          		Вопрос № 1: Столица Великобритании:
          		</p>
          		<input type="radio" name="q1" value="1" > Лондон.
          		<br>
          		<input type="radio" name="q1" value="2" > Перу.
          		<br>
          		<input type="radio" name="q1" value="3" > Анкара.
          		<br>
          		<input type="radio" name="q1" value="4" > Уэльс.
          		<br>
          		<hr>
          		<p>
          		Вопрос № 2: Столица Франции:
          		</p>
          		<input type="radio" name="q2" value="1" > Берлин.
          		<br>
          		<input type="radio" name="q2" value="2" > Прага.
          		<br>
          		<input type="radio" name="q2" value="3" > Париж.
          		<br>
          		<input type="radio" name="q2" value="4" > Мадрид.
          		<br>
          		<hr>
          		<p>
          		Вопрос № 3: Столица России:
          		</p>
          		<input type="radio" name="q3" value="1" > Владимир.
          		<br>
          		<input type="radio" name="q3" value="2" > Хабаровск.
          		<br>
          		<input type="radio" name="q3" value="3" > Чита.
          		<br>
          		<input type="radio" name="q3" value="4" > Москва.
          		<br>
          		<hr>
          		<p>
          		Вопрос № 4: Столица Украины:
          		</p>
          		<input type="radio" name="q4" value="1" > Харьков.
          		<br>
          		<input type="radio" name="q4" value="2" > Киев.
          		<br>
          		<input type="radio" name="q4" value="3" > Донбас.
          		<br>
          		<input type="radio" name="q4" value="4" > Львов.
          		<br>
          		<hr>
          		<p>
          		Вопрос № 5: Столица Бразилии:
          		</p>
          		<input type="radio" name="q5" value="1" > Бразилиа.
          		<br>
          		<input type="radio" name="q5" value="2" > Аддис-Абеба.
          		<br>
          		<input type="radio" name="q5" value="3" > Кейптаун.
          		<br>
          		<input type="radio" name="q5" value="4" > Лисабон.
          		<br>
          		<hr>
          		<p>
          		Вопрос № 6: Столица Австралии:
          		</p>
          		<input type="radio" name="q6" value="1" > Сидней.
          		<br>
          		<input type="radio" name="q6" value="2" > Веллингтон.
          		<br>
          		<input type="radio" name="q6" value="3" > Канберра.
          		<br>
          		<input type="radio" name="q6" value="4" > Хельсинки. 
          		<hr>
          		<p>
          		Вопрос № 7: Столица Австрии:
          		</p>
          		<input type="radio" name="q7" value="1" > Вена.
          		<br>
          		<input type="radio" name="q7" value="2" > Бейрут.
          		<br>
          		<input type="radio" name="q7" value="3" > Дамаск.
          		<br>
          		<input type="radio" name="q7" value="4" > Рига.
          		<br>
          		<hr>
          		<p>
          		<input type="button" class="btn btn-primary" value="Узнать Результат" onclick="check()">
          	</form>
          </div>
      </div>
    </div>
    <script>
      function check(){
        let answer1 = document.quiz.q1.value;
        let answer2 = document.quiz.q2.value;
        let answer3 = document.quiz.q3.value;
        let answer4 = document.quiz.q4.value;
        let answer5 = document.quiz.q5.value;
        let answer6 = document.quiz.q6.value;
        let answer7 = document.quiz.q7.value;
        let count =0;
        
        if(answer1 == "1"){
          count++
        }
        if(answer2 == "3"){
          count++
        }
        if(answer3 == "4"){
          count++
        }
        if(answer4 == "2"){
          count++
        }
        if(answer5 == "1"){
          count++
        }
        if(answer6 == "3"){
          count++
        }
        if(answer7 == "1"){
          count++
        }
        document.write(`Правильных ответов: ${count} `);
      }
      
      
      
    
      let profileBtn = document.getElementById("v-pills-profile-tab");
      let settingsBtn = document.getElementById("v-pills-settings-tab");
      let testBtn = document.getElementById("v-pills-test-tab");
      let endPath = location.pathname.split("/")[2];
      profileBtn.addEventListener("click",()=>{
        history.pushState({page:1},"lk", "lk");
      });
      settingsBtn.addEventListener("click",()=>{
        history.pushState({page:1},"settings", "settings");
      });
      testBtn.addEventListener("click",()=>{
        history.pushState({page:1},"test", "test");
      });
      
      if(endPath == "lk"){
        $('#v-pills-home').tab('show')
        profileBtn.classList.add("active");
      }else if(endPath == "settings"){
        $('#v-pills-profile').tab('show')
        settingsBtn.classList.add("active");
      }else if(endPath == "test"){
        $('#v-pills-messages').tab('show')
        testBtn.classList.add("active");
      }
    
      fetch("/getUser")
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
        let value;
        editBtns[i].addEventListener("click",()=>{
          value = editBtns[i].previousElementSibling.innerText;
          editBtns[i].previousElementSibling.innerHTML = `<input value="${value}">`;
          editBtns[i].hidden = true;
          saveBtns[i].hidden = false;
          cancelBtns[i].hidden = false;
          
          saveBtns[i].addEventListener("click",()=>{
            value = editBtns[i].previousElementSibling.getElementsByTagName("input")[0].value;
            let formData = new FormData();
            let item = saveBtns[i].dataset.item;
            formData.append("item",item);
            formData.append("value",value);
            fetch("/changeUserData",{
              method: "POST",
              body: formData
            }).then(response=>response.text());
            editBtns[i].previousElementSibling.innerHTML = value;
            editBtns[i].hidden = false;
            saveBtns[i].hidden = true;
            cancelBtns[i].hidden = true;
          });
          
          cancelBtns[i].addEventListener("click",()=>{
            editBtns[i].previousElementSibling.innerHTML = value;
            editBtns[i].hidden = false;
            saveBtns[i].hidden = true;
            cancelBtns[i].hidden = true;
          });
        })
      }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>