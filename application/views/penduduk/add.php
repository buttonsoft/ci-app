<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
<main role="main" class="container">

    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Input nik">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Input nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" Alamat3"></textarea>
                </div>
                <div class="form-group" id="dusun">
                    <label for="dusun">Dusun</label>
                    <!-- <select class="form-control" id="dusun">
                        <option>Ngapaompu</option>
                        <option>Wapulaka</option>
                    </select> -->
                    <select name="id" id="id">
                        <?php
                        echo "<option>- Pilih Dusun -</option>";
                        foreach ($dusun->result_array() as $d) {
                            echo "<option value='" . $d['id'] . "'>Dusun " . $d['dusun'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group" id="rt">
                    <!-- <label for="rt">RT</label>
                    <select multiple class="form-control" id="rt">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select> -->

                    <script type="text/javascript">
                        $("#id").change(function() {
                            var id = {
                                id: $("#id").val()
                            };
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url(); ?>penduduk/listRt",
                                data: id,
                                success: function(msg) {
                                    $('#rt').html(msg);
                                }
                            });
                        });
                    </script>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

</main><!-- /.container -->