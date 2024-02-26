<?php
include("connet.php");

// Loại sản phẩm bạn muốn hiển thị
$product_type = "Giày Adidas"; // Ví dụ: loại phụ kiện

$sql = "SELECT p.ID_SP, p.Ten_SP, p.Hinh_Anh_SP, p.Hinh_Anh_SP2, p.Gia_SP, c.Ten_Category
        FROM tbl_product p
        LEFT JOIN tbl_category c ON p.ID_Category = c.ID_Category
        WHERE c.Ten_Category = '$product_type'";
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
                    <!-- Bạn có thể muốn thay đổi src của hình ảnh này thành 'Hinh_Anh_SP' nếu đúng với cơ sở dữ liệu của bạn -->

                    <div class="top-img">
                        <img src="<?php echo $row['Hinh_Anh_SP2']; ?>" alt="Commodo leo sed porta" />
                    </div>
                    <!-- Tương tự, bạn cũng có thể muốn thay đổi src của hình ảnh này thành 'Hinh_Anh_SP2' nếu đúng với cơ sở dữ liệu của bạn -->

                    <i class="fa-regular fa-heart"></i>
                </div>

                <div class="card-content">
                    <p><?php echo $row['Ten_Category']; ?></p>
                    <!-- Thay vì 'ID_Category', bạn cần sử dụng 'Ten_Category' -->
                    <a href="#"><?php echo $row['Ten_SP']; ?></a>
                    <!-- Thay vì 'Ten_SP', bạn cần sử dụng 'Ten_SP' -->
                    <bdi><?php echo $row['Gia_SP']; ?></bdi>
                    <!-- Thay vì 'Gia_SP', bạn cần sử dụng 'Gia_SP' -->
                </div>
            </div>
        </li>
<?php
    }
} else {
    echo "Không có sản phẩm nào thuộc loại $product_type trong cơ sở dữ liệu.";
}
?>