<?php
include("connet.php");

$sql = "SELECT p.ID_SP, p.Ten_SP, p.Hinh_Anh_SP, p.Hinh_Anh_SP2, p.Gia_SP, c.Ten_Category
        FROM tbl_product p
        LEFT JOIN tbl_category c ON p.ID_Category = c.ID_Category";
$kq = mysqli_query($conn, $sql);

if (mysqli_num_rows($kq) > 0) {
    while ($row = mysqli_fetch_array($kq)) {
?>
        <li>
            <div class="product-card">
                <div class="card-banner">
                    <div class="like-img">
                        <img src="<?php echo $row['Hinh_Anh_SP']; ?>" />
                    </div>


                    <div class="top-img">
                        <img src="<?php echo $row['Hinh_Anh_SP2']; ?>" alt="Commodo leo sed porta" />
                    </div>


                    <i class="fa-regular fa-heart"></i>
                </div>

                <div class="card-content">
                    <p><?php echo $row['Ten_Category']; ?></p>

                    <a href="#"><?php echo $row['Ten_SP']; ?></a>

                    <bdi><?php echo $row['Gia_SP']; ?></bdi>

                </div>
            </div>
        </li>
<?php
    }
}
?>