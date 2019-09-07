<title>Chained dropdown</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>

<style>
    body {
        font-family: Tahoma;
        font-size: 12px;
    }

    select {
        padding: 5px;
        border: 1px solid #666666;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        z-index: 9999;
    }
</style>

<div id="dusun">
    Pilih dusun :
    <select name="id_dusun" id="id_dusun">
        <?php
        echo "<option>- Pilih dusun -</option>";
        foreach ($dusun->result_array() as $k) {
            echo "<option value='" . $k['id_dusun'] . "'>Dusun " . $k['nama_dusun'] . "</option>";
        }
        ?>
    </select>
</div>

<div id="rt">

</div>

<script type="text/javascript">
    $("#id_dusun").change(function() {
        var id_dusun = {
            id_dusun: $("#id_dusun").val()
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>chained_dropdown/getRt",
            data: id_dusun,
            success: function(msg) {
                $('#rt').html(msg);
            }
        });
    });
</script>