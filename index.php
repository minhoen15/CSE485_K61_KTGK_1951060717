<?php
include('header.php');


?>
<div class="row">
    <div class="col-md-12 ">
        Trang chủ sẽ hiển thị như thế nào?Tất cả danh bạ người dùng(dưới dạng BẢNG) và có phân trang
        <div>
            <a href="add-member.php" class="btn btn-success">Thêm</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Mã số</th>
                    <th scope="col">Tên người hiến máu</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Năm sinh</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày đăng kí hiến máu</th>
                    <th scope="col">số điện thoại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'blood_donor');
                if (!$conn) {
                    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                }
                $sql = "SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno FROM blood_donor order by bd_id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <tr>
                            <td><?php echo $row['bd_id']; ?> </td>
                            <td><?php echo $row['bd_name']; ?> </td>
                            <td><?php echo $row['bd_sex']; ?> </td>
                            <td><?php echo $row['bd_age']; ?> </td>
                            <td><?php echo $row['bd_bgroup']; ?> </td>
                            <td><?php echo $row['bd_reg_date']; ?> </td>
                            <td><?php echo $row['bd_phno']; ?> </td>
                            <td><a href="update-member.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>

</html>