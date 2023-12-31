const form = document.getElementById("form");
form.addEventListener("submit", formSend);
async function formSend(event) {
  event.preventDefault();
  let error = formValidate(form);
  let formData=new FormData(form);
  
  if(error==0){
      form.classList.add('_sending');
      let response=await fetch('https://www.testsitesergey.ru/sendmail.php',{
      method:'POST',
      body:formData,
      });
      if(response.ok){
      let result=await response.json();
      alert(result.message);
      // formPreview.innerHTML='';
      form.reset();
      form.classList.remove('_sending');
      }
      else{
      alert("Ошибка HTTP: " + response.status);
      form.classList.remove('_sending');
      }
      
  }
  else{
  alert('заполните обязательные поля');
  }
}

function formValidate(form) {
  let error = 0;
  let formReq = document.querySelectorAll(".req");
  for (let i = 0; i < formReq.length; i++) {
    const input = formReq[i];
    formRemoveError(input);
    if (input.classList.contains("_email")) {
      if (emailTest(input)) {
        formAddError(input);
        error++;
      }
    } 
  //   else {
      if (input.value == "") {
        formAddError(input);
        error++;
      }
    }
  // }
  return error;
}

function formAddError(input) {
  // input.parentElement.classList.add("_error");
  input.classList.add("_error");
}
function formRemoveError(input) {
  // input.parentElement.classList.remove("_error");
  input.classList.remove("_error");
}
function emailTest(input) {
  return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(
    input.value
  );
}