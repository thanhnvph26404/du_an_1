// khai báo trang đầu
console.log(1254);

var page = 1;
$(function (){
    // gọi hàm getcontacts để hiển thị dữ liệu
    getcontact();

});

$("#back").click(function () {
    page--;
    getcontact(page);
})

$("#next").click(function () {
    page++;
    getcontact(page);
})

// hàm getcontacts lấy dữ liệu từ trang list.php su dung ajax jquery

function getcontact(page=1) {
    $.ajax({
        type : "GET",
        url : "index.php?act=lienhe&page="+ page,
        datatype : "json",
        succsess : function(contact){
            // ẩn nút khi xem hết dữ liệu
            if (contact.length < 10) {
                $("#next").fadeout(500);
            }
            // hiển thị sản phẩm
            viewcontact(contact)
            console.log(contact);
        },
    })
}


function viewcontact(data){
     html = `<table>
     <thead>
     <tr>
         <th>STT</th>
         <th>Email</th>
         <th>Tên</th>       
         <th>Mục Đính</th>
         <th>Mô Tả</th>
         <th>Số Điện Thoại</th>
         <th>thao Tác</th>
     </tr>
     </thead>
     <tbody>
     `;


    $.each(data, function (key,value) {
        html += `
    <tr>
        <td>${value.key+1}</td>
        <td>${value.email}</td>
        <td>${value.name}</td>
        <td>${value.purpose}</td>
        <td>${value.description}</td>
        <td>${value.tel}</td>
        <td><a href="lienhe/xoa.php?id=${value.id}"><button>Xóa</button></a></td>
    </tr>
    
        `;

        html += `</tbody>
        </table>`;
        console.log(html);
        $(".content").appand(html);
    })
}
console.log($contact);
console.log( $("#content"));
getcontact()






