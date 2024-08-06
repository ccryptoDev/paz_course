try {
    /* show/hide password */
    document.querySelectorAll('.login__form__password__show').forEach((el) => {
        const passShow = el;
        passShow.addEventListener('click',()=>{
            if(passShow.classList.contains('login__form__password__show_hide')){
               el.closest('.login__form__password').querySelector('.login__form__input_password').type = 'password';
               passShow.classList.remove('login__form__password__show_hide');
            }else{
                el.closest('.login__form__password').querySelector('.login__form__input_password').type = 'text';
                passShow.classList.add('login__form__password__show_hide');
            } 
        })
    })

} catch (error) {
    console.log(error)
}

// Form validation code will come here.
function validate() {
    if( document.loginForm.login.value == "" ) {
        document.querySelector('.login__form__login').classList.add('login__form__error');
        document.loginForm.login.focus() ;
        return false;
    }else if(document.querySelector('.login__form__login').classList.contains('login__form__error')){
        document.querySelector('.login__form__login').classList.remove('login__form__error');
    }
    if( document.loginForm.password.value == "" ) {
        document.querySelector('.login__form__password').classList.add('login__form__error');
        document.loginForm.password.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password').classList.contains('login__form__error')){
        document.querySelector('.login__form__password').classList.remove('login__form__error');
    }
    if(document.querySelector('.login__form__wrapper input').checked != true ) {
        document.querySelector('.login__form__wrapper .checkbox').classList.add('login__form__error');
        return false;
    }else if(document.querySelector('.login__form__wrapper .checkbox').classList.contains('login__form__error')){
        document.querySelector('.login__form__wrapper .checkbox').classList.remove('login__form__error');
    }
    return( true );
}
function signUp() {
    if( document.loginForm.login.value == "" ) {
        document.querySelector('.login__form__login').classList.add('login__form__error');
        document.loginForm.login.focus() ;
        return false;
    }else if(document.querySelector('.login__form__login').classList.contains('login__form__error')){
        document.querySelector('.login__form__login').classList.remove('login__form__error');
    }
    if( document.loginForm.password.value == "") {
        document.querySelector('.login__form__password1').classList.add('login__form__error');
        document.loginForm.password.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password1').classList.contains('login__form__error')){
        document.querySelector('.login__form__password1').classList.remove('login__form__error');
    }
    if( document.loginForm.password2.value == "" ) {
        document.querySelector('.login__form__password2').classList.add('login__form__error');
        document.loginForm.password2.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password2').classList.contains('login__form__error')){
        document.querySelector('.login__form__password2').classList.remove('login__form__error');
    }

    if( document.loginForm.password.value != document.loginForm.password2.value) {
        document.querySelector('.login__form__password1').classList.add('login__form__error');
        document.querySelector('.login__form__password2').classList.add('login__form__error');
        document.loginForm.password2.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password1').classList.contains('login__form__error') || document.querySelector('.login__form__password2').classList.contains('login__form__error')){
        document.querySelector('.login__form__password1').classList.remove('login__form__error');
        document.querySelector('.login__form__password2').classList.remove('login__form__error');
    }

    return( true );
}
function password1() {
    if( document.loginForm.login.value == "" ) {
        document.querySelector('.login__form__login').classList.add('login__form__error');
        document.loginForm.login.focus() ;
        return false;
    }else if(document.querySelector('.login__form__login').classList.contains('login__form__error')){
        document.querySelector('.login__form__login').classList.remove('login__form__error');
    }
    
    return( true );
}
function password3() {
    if( document.loginForm.password.value == "") {
        document.querySelector('.login__form__password1').classList.add('login__form__error');
        document.loginForm.password.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password1').classList.contains('login__form__error')){
        document.querySelector('.login__form__password1').classList.remove('login__form__error');
    }
    if( document.loginForm.password2.value == "" ) {
        document.querySelector('.login__form__password2').classList.add('login__form__error');
        document.loginForm.password2.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password2').classList.contains('login__form__error')){
        document.querySelector('.login__form__password2').classList.remove('login__form__error');
    }

    if( document.loginForm.password.value != document.loginForm.password2.value) {
        document.querySelector('.login__form__password1').classList.add('login__form__error');
        document.querySelector('.login__form__password2').classList.add('login__form__error');
        document.loginForm.password2.focus() ;
        return false;
    }else if(document.querySelector('.login__form__password1').classList.contains('login__form__error') || document.querySelector('.login__form__password2').classList.contains('login__form__error')){
        document.querySelector('.login__form__password1').classList.remove('login__form__error');
        document.querySelector('.login__form__password2').classList.remove('login__form__error');
    }

    return( true );
}