
<div class="card text-dark bg-light m-3" >
    <div class="card-header">Praktikum 8</div>
    <div class="card-body">
        <h5 class="card-title">Daftar Matakuliah</h5>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_mk as $mk) {
                ?>
                    <tr>
                        <td class="text-center"><?= $nomor ?></td>
                        <td class="text-center"><?= $mk->kode ?></td>
                        <td class="text-center"><?= $mk->nama ?></td>
                        <td class="text-center"><?= $mk->sks ?></td>
                        
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>

    </div>
</div>