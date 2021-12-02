const searchBar = $(".search-user form input"), searchBtn=$('.search-user form button')


$(function(){
    searchBtn.on('click', (e) =>{
        e.preventDefault();
        searchBar.toggleClass('active');
        searchBar.focus()
        searchBtn.toggleClass('active');
    })
})