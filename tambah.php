<?php include './component/header.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if (createData($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Tidak berhasil di tambah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<div class="container">
    <form action="" method="post">
        <table border="1" class="table table-striped">
            <tr>
                <th>
                    <label for="nama">Name : </label>
                    <input type="text" name="nama" id="nama" required>
                </th>

            </tr>
            <tr>

                <th>
                    <label for="email">email : </label>
                    <input type="text" name="email" id="email" required>
                </th>
            </tr>
            <tr>
                <th>
                    <label for="ukm">UKM : </label>
                    <select class="form-control mb-3" type="text" name="ukm" required>
                        <option value="ECSI" selected>ECSI</option>
                        <option value="IDC">IDC</option>
                        <option value="BEM">BEM</option>


                    </select>
                </th>
            </tr>
        </table>
        <tr>
            <button type="submit" name="submit">Cetak</button>
        </tr>
    </form>
</div>

<?php include './component/footer.php'; ?>