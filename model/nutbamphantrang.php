<?php 
// biến khi chọn page nút sẽ có màu sanh
$focus=" bg-blue-500 hover:bg-blue-500";
?>
<div class="mb-10">
            <!-- nếu page <= 1 ẩn đi nút lùi  -->
            <?php if ($page > 1) { ?>
                <a href="<?=$href?>">
                <button class="p-3 w-[40px] hover:bg-stone-200 border border-stone-500"><<</button>
                </a>
                <a href="<?=$href?>&page=<?=$page-1?>">
                <button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><</button>
                </a>
                <a href="<?=$href?>&page=<?= $page - 2 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" <?= ($page - 2)< 1 ? "hidden" : "" ?> ><?= $page - 2 ?></button></a>
                <a href="<?=$href?>&page=<?= $page - 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><?= $page - 1 ?></button></a>
            
            <?php } ?>
            <a href="<?=$href?>&page=<?= $page ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500 <?= $focus ?>"><?= $page ?></button></a>
            
            <!-- nếu max page thì ẩn đi nút tiến -->
            <?php if ($page < $number_page) { ?>
                <a href="<?=$href?>&page=<?= $page + 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500"><?= $page + 1 ?></button></a>
                <a href="<?=$href?>&page=<?= $page + 2 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" <?= ($page + 2) > $number_page ? "hidden" : "" ?>><?= $page + 2 ?></button></a>
                <a href="<?=$href?>&page=<?= $page + 1 ?>"><button class="p-3 w-[40px]  hover:bg-stone-200 border border-stone-500" >></button></a>
                <a href="<?=$href?>&page=<?= $number_page ?>"><button class="p-3 w-[40px] hover:bg-stone-200 border border-stone-500" >>></button></a>
            <?php } ?>
</div>



