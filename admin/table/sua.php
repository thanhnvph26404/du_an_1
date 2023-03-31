<?php 
$id_table = $_GET['id'];


$listtable = loadall_table();
if (isset($_POST['submit'])) {
    $thucthi=true;
    extract($_POST);
    // check tên không được để trống
    if ($name == "") {
        $error_name = "Trường Này Không Được Để trống";
        $thucthi = false;
    }
    // check số lượng bàn không được để trống
    if ($amount == "") {
        $error_amount = "Trường Này Không Được Để trống";
        $thucthi = false;
    }
    // check xem tên bàn đã tồn tại chưa
    foreach ($listtable as $key => $value) {
        if ($value['name'] == $name) {
            $error_name =  "Tên Bàn Này Đã Tồn Tại";
            $thucthi = false;
        }
    }

    if ($thucthi) {
        update_table($id_table,$name,$amount);
        $messenger = "Bạn Đã Sửa bàn thành công";
    
    }
}

$table = loadone_table($id_table);
extract($table);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<script>
    (function($) {
  $.fn.inputFilter = function(callback, errMsg) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
      if (callback(this.value)) {
        // Accepted value
        if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
          $(this).removeClass("input-error");
          this.setCustomValidity("");
        }
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        // Rejected value - restore the previous one
        $(this).addClass("input-error");
        this.setCustomValidity(errMsg);
        this.reportValidity();
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        // Rejected value - nothing to restore
        this.value = "";
      }
    });
  };
}(jQuery));


$(document).ready(function() {
  $("#myinput").inputFilter(function(value) {
    return /^\d*$/.test(value);    // Allow digits only, using a RegExp
  },"Only digits allowed");
});

</script>
<div class="row frmtitle p-2 mt-5">
        <h1>Thêm Bàn </h1>
</div>
    <h1 class="text-green-500 text-xl"><?= isset($messenger) ? $messenger : "" ?></h1>
<form action="index.php?act=suatable&id=<?=$id_table?>"   method="post">
            
            <input class="w-full text-xl p-2 text-black my-3 border border-gray-500 rounded-md" type="text" placeholder="Tên Bàn" name="name" value="<?= isset($name) ? $name : "" ?>">
            <p class=" text-red-500">
                <?= isset($error_name) ? $error_name : "" ?>
            </p>
            <!-- tel  -->
            <input class="w-full text-xl p-2 text-black my-3 border border-gray-500 rounded-md" type="text" placeholder="Số Lượng Bàn" name="amount" id="myinput" value="<?= isset($amount) ? $amount : "" ?>">
            <p class=" text-red-500">
                <?= isset($error_amount) ? $error_amount : "" ?>
            </p>
            <input class=" mt-5 text-xl p-3 mb-[15px] w-[150px] text-white bg-blue-500 rounded-2xl delay-100 hover:bg-blue-600" type="submit" name="submit" value="Cập Nhật">
</form>
<a class=" my-5 text-xl p-4 mb-[15px] w-[150px] text-white bg-yellow-500 rounded-2xl delay-100 hover:bg-yellow-600" href="index.php?act=table"><button>Danh Sách bàn</button></a>