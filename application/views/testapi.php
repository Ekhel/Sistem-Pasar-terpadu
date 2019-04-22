<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>SKPD</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($hasil as $item){?>
          <tr>
            <td><?php echo $item['id_skpd'] ?></td>
            <td><?php echo $item['skpd'] ?></td>
          </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>
