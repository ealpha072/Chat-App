const form = $('form')[0], sendBtn = $('#send-message'), msgField = $('#msg-field'), chatArea=$('.chat-area');

sendBtn.click((e)=>{
    e.preventDefault()
    let request = new XMLHttpRequest;
    request.open('POST', 'php/insertchat.php', true);
    
    request.onreadystatechange = ()=>{
        if(request.readyState == 4 && request.status == 200){
            let data = request.response
            msgField.val('')
            console.log(data)
            scrollBottom()
        }
    }
    let formData = new FormData(form)
    request.send(formData)
})

chatArea.mouseenter(()=>{
    chatArea.addClass('active');
})

chatArea.mouseleave(()=>{
    chatArea.removeClass('active');
})


setInterval(()=>{
    let request = new XMLHttpRequest;
    request.open('POST', 'php/getchat.php', true);
    
    request.onreadystatechange = ()=>{
        if(request.readyState == 4 && request.status == 200){
            let data = request.response
            chatArea.html(data) 
            if(!chatArea.hasClass('active')){
                scrollBottom();
            }
            
        }
    }
    let formData = new FormData(form) 
    request.send(formData)
}, 1000)

function scrollBottom(){
    chatArea.scrollTop(chatArea.prop('scrollHeight'))
}