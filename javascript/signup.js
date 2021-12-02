const signupForm = $('form'), submitForm = $('form #submit-form');
console.log(submitForm)

signupForm.on('submit', e=>{
    e.preventDefault();
})

submitForm.on('click', () => {
    let request = new XMLHttpRequest()
    request.open("POST", 'javascript/response.php', true);

    request.onreadystatechange = ()=>{
        if(request.readyState == 4 && request.status == 200){
            
            console.log(request.responseText)
        }
    }

    request.send('name')
})

