function setInitPriceAndItem(){
    console.log(sumAmount());
    $('#amount').html(sumAmount());
    $('#count-item').html(sumItem());
}

function toNumber(str) {
    const paragraph = str;
    const regex = /\d/g;
    const number = paragraph.match(regex);

    return parseInt(number.join(''));
}

function sumItem(){
    let sum = 0;
    $('.product-count').each(function(index) {
        let temp = parseInt($(this).text());
        sum += temp;
    });

    return sum;
}

function sumAmount(){
    let sum = 0;
    $('.price_sum').each(function(index) {
        let temp = parseInt(toNumber($(this).text()));
        sum += temp;
    });
    return '฿' + numberFormat(sum);
}

/////function fix nav bar ให้ตามลงมาด้านล่างเสมอ
function myFunction() {
    var nav = document.getElementsByClassName('main-header')[0];
    var contentHeader = document.getElementsByClassName('content-header')[0];
    var fixed = contentHeader.offsetTop + contentHeader.offsetHeight;

    if (window.pageYOffset >= fixed) {
        console.log(fixed);
        nav.classList.add("fixed-top")
    } else {
        nav.classList.remove("fixed-top");
    }
}

///// ทำการเชคcookie ก่อน ว่ามีมั้ย และลบทิ้ง
function deleteCookie(name, path, domain) {
    if (getCookie(name)) {
        document.cookie = name + "=" +
            ((path) ? ";path=" + path : "") +
            ((domain) ? ";domain=" + domain : "") +
            ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }
}

function getCookie(name) { /////เป็นfunction ที่หั่น cookie เป็น key และ value แล้วค่อยแบ่ง value ออกมาตาม key อีกที
    const cookieValue = document.cookie
        .split('; ')
        .find((row) => row.startsWith(name + '='))
        ?.split('=')[1];

    return cookieValue
}

////// ใส่ comma ให้ตัวเลข
function numberFormat(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}