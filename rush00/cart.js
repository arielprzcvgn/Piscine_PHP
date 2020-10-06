function update_price()
{
    cart = document.getElementById("cart_parent");
    max = cart.childElementCount;
    list_prod = cart.children;
    price = document.getElementById("cart_price");
    tmp = 0;
    for (i = 0; i != max - 2; i++)
    {
        tmp += list_prod[i].getAttribute("price") * list_prod[i].getAttribute("Qty");
    }
    price.removeAttribute("value");
    price.setAttribute("value", tmp);
    price.innerHTML = tmp + "€";
}

function update_cart()
{
    cart = document.getElementById("cart_parent");
    max = cart.childElementCount;
    list_prod = cart.children;
    cookie_str = "";
    for (i = 0; i != max - 2; i++)
    {
        prod_name = list_prod[i].getAttribute("id");
        qty = list_prod[i].getAttribute("qty");
        price = list_prod[i].getAttribute("price");
        cookie_str += prod_name + ":" + qty + ":" + price + "/";
    }
    document.cookie = "cart=" + cookie_str;
}

window.onload   =   function()
{
    if (document.cookie)
    {
        cookie_str = document.cookie.split("=");
        num = cookie_str.length
        list_prod = cookie_str[num - 1].split('/');
        for (i = 0; i != list_prod.length; i++)
        {
            elem = list_prod[i].split(":")
            if (elem.length == 3)
                cookie_add(elem);
        }
        update_price();
    }
}

function cookie_add(elem)
{
    id = elem[0];
    qty = elem[1];
    price = elem[2];
    prod = document.createElement("a");
    prod.setAttribute("id", id);
    prod.setAttribute("qty", qty);
    prod.setAttribute("price", price);
    prod.setAttribute("onclick", "delete_prod(this)");
    prod.innerHTML = id + " : " + prod.getAttribute("price") + "€ x " + prod.getAttribute("qty");
    cart_parent.insertBefore(prod, cart_total);
}