const form = $('form')[0], submitFormbtn = $('#submit-form'), errorDiv = $('.alert-danger'), errorList = $('.alert-danger ul');


$(function(){

    form.submit(e=>{
        e.preventDefault()
    })

    submitFormbtn.click((e)=>{
        e.preventDefault()
        let request = new XMLHttpRequest;
        request.open('POST', 'php/procesform.php', true);
        
        request.onreadystatechange = ()=>{
            if(request.readyState == 4 && request.status == 200){
                let data = request.response

                if(data === 'Registered'){
                    location.href = 'user.php';
                }else if(data === 'Empty'){
                    errorDiv.css('display','block')
                    errorList.html(`<li>All fields required</li>`)
                }else{
                    errorDiv.css('display','block')
                    let array = new Array()
                    array = data.split(',')
                    array.pop()
                    array.forEach(item=>{
                       let list =  `<li>${item}</li>`
                       errorList.append(list)
                    })
                }
            }
        }

        let formData = new FormData(form);
        request.send(formData)
    })
})