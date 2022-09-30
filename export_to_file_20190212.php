<table border="1px #000 solid">
  <thead>
    <tr>
      <th colspan="9">Summary Premi Tim Panen Periode <?php echo tglIndonesia($data['periode_awal_bayar_timpanen'],'-',' ') . ' s/d ' . tglIndonesia($data['periode_akhir_bayar_timpanen'],'-',' ') ?></th>
    </tr>
    <tr>
      <th rowspan="2">#</th>
      <th rowspan="2" class="col-sm-2">Tim Panen</th>
      <th rowspan="2" class="col-sm-1">NIK</th>
      <th colspan="3" class="col-sm-4">PREMI</th>
      <th rowspan="2" class="col-sm-1">Total Denda</th>
      <th rowspan="2" class="col-sm-1">Total Premi (Rp)</th>
      <th rowspan="2" class="col-sm-1">Status</th>
    </tr>
    <tr>
      <th class="col-sm-1">Jabatan</th>
      <th class="col-sm-1">Premi Panen</th>
      <th class="col-sm-1">Premi koor / Kabag</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; foreach ($data['dDetailBayar'] as $key => $val): ?>
    <?php if ($val['dTimpanen']['nama_timpanen']): ?>
      <tr class="header">
        <td><?php echo $i++ ?></td>
        <td><?php echo $val['dTimpanen']['nama_timpanen'] ?></td>
        <td class="nik"><?php echo $val['nik_detbayar_timpanen'] ?></td>
        <td class="jabatan"><?php echo $val['dTimpanen']['detail'][0]['dJabatan']['deskripsi'] ?></td>
        <td class="premi_panen text-right"><?php echo angkaRibuan($val['premi_detbayar_timpanen']) ?></td>
        <td class="premi_koor_kabag text-right"><?php echo angkaRibuan($val['premi_koka_detbayar_timpanen']) ?></td>
        <td class="denda_panen text-right"><?php echo angkaRibuan(abs($val['denda_detbayar_timpanen'])) ?></td>
        <td class="total_premi text-right"><?php echo angkaRibuan($val['netto_detbayar_timpanen']) ?></td>
        <td><?php echo ucwords($data['status_bayar_timpanen']) ?></td>
      </tr>
    <?php endif; ?>
    <?php endforeach; ?>
  </tbody>
</table>
<br>
<br>
<table>
  <tbody>
    <tr>
      <th>Dipersiapkan Oleh,</th>
      <th>Mengetahui,</th>
      <th colspan="2">Menyetujui,</th>
    </tr>
    <tr>
      <th rowspan="3">Erwien</th>
      <th rowspan="3">Lay Ka Wie</th>
      <th rowspan="3">Djon Veen T</th>
      <th rowspan="3">Jhon Piter Sitorus</th>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <th>PJS. Kabag Administrasi</th>
      <th>Kadep Panen & Ekspedisi</th>
      <th>Kadep Keuangan</th>
      <th>Kadiv MUS</th>
    </tr>
  </tbody>
</table>
