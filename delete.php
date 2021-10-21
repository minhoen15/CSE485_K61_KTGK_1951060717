<?php
require('config/constant.php');
?>

<?php
$bd_id = $_GET['bd_id'];
$sql = "DELETE FROM blood_donor WHERE blood_donor.bd_id = '$bd_id'";

// echo $sql
$res = mysqli_query($conn, $sql);
if ($res == TRUE) {
    echo "xóa thành công";
} else {

    echo "xóa không thành công";
}
?>