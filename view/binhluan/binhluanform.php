<?php
    session_start();
if (isset($_REQUEST['idpro'])) {
    $id_pro = $_REQUEST['idpro'];
} else {
    $id_pro = $_POST['id'];
}

include "../../model/pdo.php";
include "../../model/binhluan.php";


if (isset($_POST['submit'])) {
    // lấy id user 

    $id_user = $_SESSION['user']['id'];
    extract($_POST);
    // lấy id sản phẩm
    $id_pro = $id;
    // loại bỏ kí tự trắng thừa
    $content = trim($content);
    // lấy time
    $time = date('s:i:h d/m/y');
    // insert bình luận
    insert_binhluan($id_user, $id_pro, $content, $time);
    header("location:" . $_SERVER["HTTP_REFERER"]);
}
// lấy danh sách bình luận
$list_comment = select_comment_by_product($id_pro);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid wide">
        <div class="row">
            <div class="col l-12">
                <ul class="comments">
                    <?php foreach ($list_comment as $key => $value) : extract($value)  ?>
                        <li class="comment">
                            <span class="comment-user"><?= $name ?></span>
                            <i class="rate-icon fa-solid fa-star"></i><i class="rate-icon fa-solid fa-star"></i><i class="rate-icon fa-solid fa-star"></i><i class="rate-icon fa-solid fa-star"></i><i class="rate-icon fa-solid fa-star"></i>
                            <i class="comment-time"><?= $time ?></i>
                            <p class="comment-content"><?= $content ?></p>
                            <!-- <i class="like-icon fa-regular fa-heart"></i> -->
                        </li>
                    <?php endforeach  ?>
                    <?php if ($list_comment == []) {
                        echo "chưa có bình luận nào";
                    } ?>
                </ul>
                <?php if (isset($_SESSION['user'])) {
                ?>
                    <form class="comment-form" action="view/binhluan/binhluanform.php" method="post">
                        <input type="hidden" value="<?= $id_pro ?>" name="id">
                        <input class="comment-input" name="content" type="text" placeholder="...Viết bình luận..." required>
                        <input class="send-comment" name="submit" type="submit" value="Gửi bình luận">
                    </form>
                <?php } else { ?>
                    <a href="index.php?act=dangnhap" class="my-5 block hover:no-underline text-3xl text-black">Đăng Nhập để bình luận </a>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>