
const searchBar = $(".search-user form input"), searchBtn=$('.search-user form button'), 
userList = $('.online-users'), searchUser = $('.search-input input');


$(function(){
    searchBtn.on('click', (e) =>{
        e.preventDefault();
        searchBar.toggleClass('active');
        searchBar.focus()
        searchBtn.toggleClass('active');
    })

    searchUser.keyup(()=>{
        let searchValue = searchUser.val()
    
        if(searchValue != ''){
            searchUser.addClass('active')
        }else{
            searchUser.removeClass('active');
        }
    
        let request = new XMLHttpRequest;
        request.open('POST', 'php/search.php', true);
            
        request.onreadystatechange = ()=>{
            if(request.readyState == 4 && request.status == 200){
                let data = request.response
                userList.html(data);
            }
        }
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send('searchValue=' + searchValue);
    })
    
    setInterval(()=>{
        let request = new XMLHttpRequest;
        request.open('GET', 'php/getusers.php', true);
        
        request.onreadystatechange = ()=>{
            if(request.readyState == 4 && request.status == 200){
                let data = request.response
                if(!searchUser.hasClass('active')){
                    userList.html(data);
                }
                
            }
        }
        request.send(null);
    }, 1000)

})

