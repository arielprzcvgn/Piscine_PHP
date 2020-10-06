function add_product(product)
{
    var prod_name = product.parentNode.id;
    var check_child = cart_parent.children;
    var tmp = 0;
    for(i = 0; i != cart_parent.childElementCount; i++)
    {
        if (check_child[i].id == prod_name)
        {
            tmp = 1;
        }
    }
    if (tmp == 1)
        add_qty(prod_name);
    else
        add_line(prod_name);
    update_price();
    update_cart();
}

function add_line(name)
{
    new_prod = document.createElement("a");
    new_prod.setAttribute("id", name);
    new_prod.setAttribute("qty", 1);
    new_prod.setAttribute("price", document.getElementById(name).getAttribute("value"));
    new_prod.setAttribute("onclick", "delete_prod(this)");
    new_prod.innerHTML = name + " : " + new_prod.getAttribute("price") + "€ x " + new_prod.getAttribute("qty");
    cart_parent.insertBefore(new_prod, cart_total);
}

function add_qty(name)
{
    curr = document.getElementById(name)
    qty = parseInt(curr.getAttribute("qty")) + 1;
    curr.removeAttribute("qty");
    curr.setAttribute("qty", qty);
    curr.innerHTML = name + " : " + curr.getAttribute("price") + "€ x " + qty;
}

function del_qty(name)
{
    curr = document.getElementById(name)
    qty = parseInt(curr.getAttribute("qty")) - 1;
    curr.removeAttribute("qty");
    curr.setAttribute("qty", qty);
    curr.innerHTML = name + " : " + curr.getAttribute("price") + "€ x " + qty;
}

function delete_prod(name)
{

    if (name.getAttribute("qty") > 1)
        del_qty(name.getAttribute("id"));
    else   
        if (confirm("Are you sure you want to remove this product from your cart ?") === true)
        {
            list = document.getElementById("cart_parent");
            list.removeChild(name);
        }
    update_price();    
    update_cart();
}