<style>
.anggota{
    margin-top: 55px;
}

.anggota h4, .anggota .balloon.right{
    display: inline;
}

.anggota .balloon.right{
    padding: 10px;
    padding-right: 13px;
    margin-left: 40px;
}

.table{
    margin-top: 40px;
}
#peminjaman:before{
    content: "peminjaman";
    margin-top: 50px;
}
</style>

<div class="anggota">
    <h4>ID Anggota</h4><span class="balloon right">
        A17XXXXXXXXXX
    </span>
    
    <br> <br> <br>
    <a class="button">Change Password</a>
</div>

<div  id="peminjaman" class="example">
    <h3>Peminjaman</h3>
    <table class="table hovered">
        <thead>
            <tr>
                <th class="text-left">NIB</th>
                <th class="text-left">Judul</th>
                <th class="text-left">Tanggal Dipinjam</th>
                <th class="text-left">Jatuh Tempo</th>
                <th class="text-left">Tipe Buku</th>
                <th class="text-left">Lokasi</th>
            </tr>
        </thead>
        
        <tbody>
            <tr class="error"><td>B0001</td><td class="right">The Adobe Photoshop Book</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr> <!--TEST-->
            <tr><td>B0003</td><td class="right">Databasa Systems 5th : Connolly&Begg</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr>
            <tr><td>B0305</td><td class="right">Building the Data Warehouse 4th : WH. Inmon</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr>
            <tr class="success"><td>B0088</td><td class="right">Numerical Methods</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr> <!--TEST-->
            <tr><td>B0019</td><td class="right">Application Development</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr>
            <tr><td>B0010</td><td class="right">System Development Life Cycle</td>
                <td class="right">10-10-2014</td><td class="right">16-10-2014</td><td class="right">Buku</td>
                <td>Jakarta Pusat</td>
            </tr>
        </tbody>
    </table>
    
    <h4 style="margin-top:40px">Status</h4>
    <p class="fg-red">Merah = Gagal</p>
    <p class="fg-green">Hijau = Sukses</p>
    
</div>
