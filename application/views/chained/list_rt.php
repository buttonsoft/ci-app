Pilih RT :
<select name="id_rt" id="id_rt">
    <?php
    if (count($rt->result_array()) > 0) {
        echo "<option>- Pilih RT -</option>";
        foreach ($rt->result_array() as $k) {
            echo "<option value='" . $k['id_rt'] . "'>RT " . $k['nama_rt'] . "</option>";
        }
    } else {
        echo "<option>- Data Belum Tersedia -</option>";
    }
    ?>
</select>