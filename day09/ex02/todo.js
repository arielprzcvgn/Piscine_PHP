var dynamid = 1;
var list = document.getElementById('ft_list');

function getCookie()
{
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookies = decodedCookie.split(';');
    var i = 0;
    while (cookies[i])
    {
        while (cookies[i].charAt(0) == ' ') { cookies[i] = cookies[i].substring(1); }
        var id = cookies[i].substring(0, cookies[i].indexOf('='));
        var todo = cookies[i].substring(cookies[i].indexOf('=') + 1);
        addTodo(id, todo, 0);
        i++;
    }
}

function setCookie(id, todo, del)
{
    var d = new Date();
    if (del)
        d.setTime(0);
    else
        d.setTime(d.getTime() + (30*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = id + "=" + todo + ";" + expires + ";path=/";
}

function newTodo(){
    var todo = prompt("Chose a ''faire'' à ajouter : ", '');
    if (todo !== '') {
        addTodo(dynamid, todo, 1);
    }
}

function addTodo(id, todo, cook) {
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.setAttribute('id', id);
    div.setAttribute("onclick", "delTodo(" + id + ")");
    list.prepend(div);
    if (cook)
        setCookie(id, todo, 0);
    dynamid = Number(id) + 1;
}

function delTodo(nb) {
    var div = document.getElementById(nb);
    if (confirm('Voulez vous vraiment supprimer ce toudou?'))
    {   
        list.removeChild(div);
        setCookie(nb, "", 1);
    }
}