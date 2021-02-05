function hideString(idProduct, i) {
    fetch("hideString.php?id=" + idProduct);
    document.getElementById(i).style.display = 'none';
}

function quantityIncrease(idProduct, i) {
    fetch("quantityIncrease.php?id=" + idProduct);
    let td = document.getElementById(i).getElementsByTagName("td");
    let value = parseInt(td[5].innerHTML) + 1;
    td[5].innerHTML = value;
}

function quantityDecrease(idProduct, i) {
    fetch("quantityDecrease.php?id=" + idProduct);
    let td = document.getElementById(i).getElementsByTagName("td");
    if(parseInt(td[5].innerHTML) > 0) {
    let value = parseInt(td[5].innerHTML) - 1;
    td[5].innerHTML = value;
    }
}
