<?php
include("connet.php");
$sql = "SELECT * FROM tbl_brand";
$kq = mysqli_query($conn, $sql);
if (mysqli_num_rows($kq) > 0) {
    while ($row = mysqli_fetch_array($kq)) {

?>
        <div class="bran__item">
            <div class="bran__top">
                <div class="bran__image">
                    <img src="<?php echo $row['Hinh_Anh_Brand']; ?>" alt />
                </div>
            </div>
            <h3 class="bran__name"><?php echo $row['Ten_Brand']; ?></h3>
        </div>
<?php
    }
}




?>