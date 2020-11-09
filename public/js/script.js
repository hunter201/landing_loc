

window.onload {
    let input_pass = document.querySelector('#pass');
    input_pass.pattern = "^[A-Za-z0-9!@#$%^&*()_+-~`'.,\";:<>?{}]{8,50}$";
    input_pass.addEventListener("invalid", (event) => {
        input_pass.setCustomValidate("Password is wrong");
    });
}
//блокировка поля ввода пароля при превышении количества разрешенных символов



// let sims = input_pass.value;
// if(sims.length > 12)
// {   
//     input_pass.disabled = true;
// }