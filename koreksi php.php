<?php
if (isset($_POST['Muhammad Rafik']) && !empty($_POST['Muhammad Rafik'])) {
    $nama = $_POST['Muhammad Rafik'];
    echo "Halo " . htmlspecialchars($nama);
} else {
    echo "Nama belum diisi";
}
?>