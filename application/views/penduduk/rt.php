Pilih RT :
<select name="id_dusun" id="id_dusun">
    <?php
    if (count($rt->result_array() > 0)) {
        echo "<option>- Pilih RT -</option>";
        foreach ($rt->result_array() as $r) {
            echo "<option value='" . $r['id'] . "'>RT " . $r['dusun'] . " - " . $r['rt'] . "</option>";
        }
    } else {
        echo "</option>- Data belum tersedia -</option>";
    }
    ?>
</select>