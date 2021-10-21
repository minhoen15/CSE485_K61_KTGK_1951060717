<?php
include('header.php');

?>
<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm </h2>
                <form method="POST">
                    <div class="row mb-3">
                        <label for="txtHoTen" class="col-sm-2 col-form-label">Tên người hiến máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtGioiTinh" name="txtGioiTinh">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtSoDT" class="col-sm-2 col-form-label">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtSoDT" name="txtSoDT">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtNhomMau" name="txtNhomMau">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Lưu</button>

                </form>
            </div>

        </div>
    </div>
</main>
<?php
//kiểm tra 
if (isset($_POST['submit'])) {
    // Button Clicked
    //echo "Button Clicked";

    //1. Get the Data from form
    $bd_name = $_POST['txtHoTen'];
    $bd_sex = $_POST['txtGioiTinh'];
    $bd_phno = $_POST['txtSoDT'];
    $bd_bgroup = $_POST['txtNhomMau'];
    require("config/constant.php");
    //2. SQL Query to Save the data into database
    $sql = "INSERT INTO blood_donor(bd_name, bd_sex,bd_bgroup,bd_phno) 
        VALUES ('$bd_name','$bd_sex','$bd_phno','$bd_bgroup')";
    //3. Executing Query and Saving Data into Datbase
    $res = mysqli_query($conn, $sql);

    //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
    if ($res == TRUE) {

        header("location: index.php");
    } else {

        header("location: header.php");
    }
}
?>