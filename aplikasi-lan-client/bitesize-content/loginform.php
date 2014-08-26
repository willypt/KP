<h1>Login Akun Perpustakaan</h1>
<p>
    <form id="loginform">
        <fieldset>
            <label>Nomor Anggota</label>
            <div class="input-control text size3">
                <input type="text" name="noang" id="noang" placeholder="No. Anggota">
            </div>
            
            <label>Kata Sandi</label>
            <div class="input-control text size3">
                <input type="text" name="sandi" id="sandi" placeholder="Sandi">
            </div>
            
            <div class="search ">
                <input type="submit" class="buttonlink scaleShow" value="masuk" />  
            </div>
        </fieldset>
    </form>
    <script type="text/javascript">
            $.base64.utf8encode = true;

            $('#loginform').submit(function(e){
                e.preventDefault();
                var no_anggota = $('#noang').val();
                var sandi = $('#sandi').val();
                if( no_anggota == "" || sandi == "" ){
                    var not = $.Notify({
                        caption: "Kesalahan",
                        content: "Nomor Anggota dan Kata Sandi wajib diisi",
                        timeout: 6000 // 10 seconds
                    });
                } else {
                    var t = "./helper/loadpage.php?url=";
                    var x = '<?php echo Config::getHostUrl(); ?>?content=loginprocess';
                    x += '&no_anggota=' + no_anggota + '&sandi=' + sandi;
                    var u =  $.base64.encode(x);
                    var total = t + u;
                    console.log(total);
                    $.ajax({
                        url : total,
                    })
                    .done(function(data){
                        console.log(data);
                        if ( data == "OK" ){
                            //do sth, guide user to dashboard
                            window.location.replace('?content=member-dashboard/dashboard');
                        } else {
                            //do sth when error. WHAT TO DO?
                            var not = $.Notify({
                                caption: "Kesalahan",
                                content: "Cek kembali nomor anggota dan kata sandi yang digunakan",
                                timeout: 6000 // 10 seconds
                            });
                        }
                    });
                }
            });

    </script>
</p>
