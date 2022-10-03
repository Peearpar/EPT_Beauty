function validateAdminPermission(user_email, token) {
    $.post("/EPT_Beauty/back_end/validate_api/validate_permission.php", {
        user_email: user_email,
        token: token
    }).done(function (data) {
        console.log('permission = ' + data.is_complete);
        if (!data.is_complete) {
            window.location.href = "/EPT_Beauty/front_end/"
        }
    }).fail(function (data) {
        console.log(data);

        deleteCookie('token', '/');
        deleteCookie('name', '/');
        deleteCookie('email', '/');
        deleteCookie('credit', '/');
        window.location.href = "/EPT_Beauty/front_end/login";
    });
}

function setInitPriceAndItem() {
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

function sumItem() {
    let sum = 0;
    $('.product-count').each(function (index) {
        let temp = parseInt($(this).text());
        sum += temp;
    });

    return sum;
}

function sumAmount() {
    let sum = 0;
    $('.price_sum').each(function (index) {
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
        // console.log(fixed);
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

/////เป็นfunction ที่หั่น cookie เป็น key และ value แล้วค่อยแบ่ง value ออกมาตาม key อีกที
function getCookie(name) { 
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

function logout() {
    $('#logout').click(async () => { ////ถ้าเกิดการคลิก Selector ตัว logout ให้ทำการลบคุกกี้ทิ้ง แล้ว reload หน้่าใหม่ (Jquery)
        await $.post("/EPT_Beauty/back_end/logout_api/logout.php", {
            user_email: getCookie('email')
        })
        .done(function (data) {
            console.log(data.data.is_complete);
            deleteCookie('token', '/');
            deleteCookie('name', '/');
            deleteCookie('email', '/');
            deleteCookie('credit', '/');
            location.reload();
        })
        .fail(function (data) {
            console.log(data);
        })
    });
}

async function hardLogout() {
    await $.post("/EPT_Beauty/back_end/logout_api/logout.php", {
        user_email: getCookie('email')
    })
    .done(function (data) {
        console.log(data.data.is_complete);
        deleteCookie('token', '/');
        deleteCookie('name', '/');
        deleteCookie('email', '/');
        deleteCookie('credit', '/');
        location.reload();
    })
    .fail(function (data) {
        console.log(data);
    });
}

function alertlogin() {
    Swal.fire({
    title: 'Can not buy.',
    text: "You need to login before buying.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Go to login.'
    }).then((result) => {
    if (result.isConfirmed) {
        window.location.href = "/EPT_Beauty/front_end/login";
    }
    })


}

function searchSubmitEvent(pageStart, perPage, isSearchPage = false) {
    $('#search-form').submit(function(e) {
        e.preventDefault();
        const search_text = $('#search_text').val();
        const page = pageStart;
        const pageSize = perPage;

        if(!isSearchPage) {
            window.location.href = `/EPT_Beauty/front_end/search?search_text=${search_text}&page=${page}&pageSize=${pageSize}`;
        }

        if(isSearchPage) {
            getSearchProduct(search_text, page, pageSize);
        }
    });
}

function getSearchProduct(search_text, page, pageSize) {
    $.get(`/EPT_Beauty/back_end/products_api/search_product.php?search_text=${search_text}&page=${page}&pageSize=${pageSize}`
    ).done(function(data) {
        console.log(data);

        if (!data.is_complete) {
            let status = 'error';
            let message = data.message;

            Toast.fire(
                'Error!',
                message,
                status
            ).then(() => {
                // window.location.href = "../";
            })
        }

        if (data.is_complete) { 
            let tmp = `<li class="page-item ${data.data.hasPrev ? "" : "disabled"}">
                        <a class="page-link" href="../search?search_text=${search_text}&page=${data.data.page - 1}&pageSize=${pageSize}" tabindex="-1">Previous</a>
                    </li>`;
            for (let i = 1; i <= data.data.last_page; i++) {
                tmp += `<li class="page-item ${data.data.page === i ? 'active' : ''}">
                            <a class="page-link" href="../search?search_text=${search_text}&page=${i}&pageSize=${pageSize}">${i} 
                            ${data.data.page === i ? '<span class="sr-only">(current)</span>' : ''}</a>
                        </li>`;
            }
            tmp += `<li class="page-item ${data.data.hasNext ? "" : "disabled"}">
                        <a class="page-link" href="../search?search_text=${search_text}&page=${data.data.page + 1}&pageSize=${pageSize}">Next</a>
                    </li>`;

            $('.pagination').append(tmp);

            data.data.resuslt_list.map((value) => {
                if (value.is_active === 1) {
                    let real_price = (100 - value.discount) * 0.01 * value.price;
                    let tmp = `
                    <div class="card mt-4" style="width: 14rem;">
                        <div class="ribbon-wrapper ribbon-lg">
                            ${value.discount > 0 ?
                            `<div class="ribbon bg-danger">
                                Discount
                            </div>` :
                            `<div class="ribbon bg-warning">
                                Best Seller
                            </div>`}
    
                        </div>
                        <img src="${value.path_img}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text-price"">฿${numberFormat(real_price)}</p>
                            <p class="card-text-name">${value.name}</p>
                            <p class="card-description">${value.description}</p>
                        </div>
                        <div class="card-footer">
                            <button class="buy-btn btn btn-block btn-outline-dark" product-id='${value.id}'>Buy</button>
                        </div>
                    </div>
                    `;
                    $('#card-items').append(tmp);
                }
            });

            buyClickEventSearch();
        }


    }).fail(function(data) {
        console.log(data);
    });
 }

 function buyClickEventSearch() {
    $('.buy-btn').click(function(index) {
        // console.log($(this).attr('product-id'));
        $.post("/EPT_Beauty/back_end/cart_api/add_cart.php", {
            user_email: getCookie('email'),
            product_id: $(this).attr('product-id')
        }).done(function(data) {
            // console.log(data.is_complete);

            if (!data.is_complete) {
                let status = 'error';
                let message = data.message;

                Toast.fire(
                    'Error!',
                    message,
                    status
                ).then(() => {
                    window.location.href = "../";
                })
            }
            loadCart();

        }).fail(function(data) {
            alertlogin();
        });
    });
}


