<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>
<h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'] ?></h3>
                <ul class="produce_list">
                    <?php
                    while($row = mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                            <img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" >
                            <p class="title_produce">Tên sản phẩm : <?php echo $row['tensanpham']?></p>
                            <P class="price_produce">Giá : <?php echo number_format($row['giasp'],0,',','.').'VND' ?></P>
                            <p style="text-align:center; color:#d1d1d1"><?php echo $row['tendanhmuc']?></p>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>