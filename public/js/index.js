function validate() {
    
    if( document.loginForm.email.value == "" ) {

        alert( "Veuillez fournir votre email !" );
        document.myForm.EMail.focus() ;
        return false;
    }

    if( document.loginForm.password.value == "" ) {

        alert( "Veuillez fournir votre Mot de passe !" );
        document.myForm.Name.focus() ;
        return false;
    }

    
}