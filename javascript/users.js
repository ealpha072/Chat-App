const userList = $('.online-users')

/*setInterval(()=>{
    let request = new XMLHttpRequest;
    request.open('GET', 'php/getusers.php', true);
    
    request.onreadystatechange = ()=>{
        if(request.readyState == 4 && request.status == 200){
            let data = request.response
            console.log(data)
        }
    }
    request.send(null);
}, 1000)*/

let request = new XMLHttpRequest;
    request.open('GET', 'php/getusers.php', true);
    
    request.onreadystatechange = ()=>{
        if(request.readyState == 4 && request.status == 200){
            let data = request.response
            console.log(data)
            userList.append(data);
        }
    }
request.send(null);