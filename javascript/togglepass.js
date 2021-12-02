const togglePassVisibility = $('#show-hide-pass'), passwordInput = $(".user-pass");


$(function(){
    togglePassVisibility.on('click', (e)=>{
        e.preventDefault()
        if(passwordInput.attr('type') === 'password'){
            passwordInput.attr('type', 'text')
        }else{
            passwordInput.attr('type', 'password');
        }
    })
})