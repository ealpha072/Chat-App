const form = $('form')[0], submitFormbtn = $('#submit-form'), errorDiv = $('.alert-danger');


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
                if(data){
                    console.log(data)
                    errorDiv.toggleClass('show')
                    errorDiv.html(`<h6>${data}</h6>`);
                }
            }
        }

        let formData = new FormData(form);
        request.send(formData)
    })
})