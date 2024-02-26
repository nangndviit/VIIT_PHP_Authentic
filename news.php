<?php
include("connet.php");

$sql = "SELECT * FROM tbl_new";

$kq = mysqli_query($conn, $sql);

if (mysqli_num_rows($kq) > 0) {
    while ($row = mysqli_fetch_array($kq)) {
?>
        <div class="new__item">
            <div class="new__top">
                <div class="new__image">
                    <img src="<?php echo $row['Hinh_Anh_New']; ?>" alt />
                </div>
            </div>
            <h5 class="new__name">
                <p>
                    <b><?php echo $row['Ten_New']; ?></b>
                </p>
            </h5>
        </div>
<?php
    }
}
?>