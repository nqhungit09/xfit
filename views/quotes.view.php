<?php require'sidebar.php'; ?>

<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<!--Page Container--> 
<section class="page-container">
    <div class="page-content-wrapper">

        

        <!--Main Content-->

 <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h5>Quotes</h5>
                        </div>
                    </div>

<div class="col-12">
                        <div class="block table-block mb-4" style="margin-top: 20px;">

                            <div class="row">
                                <div class="table-responsive">
<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%" style="border-radius: 5px;">
    <thead>
            <tr>
              <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Id</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </tfoot>

        <tbody>
        <?php foreach($quotes as $quote): ?>
            <tr>
              <td><?php echo $quote['quote_id']; ?></td>
                <td><?php echo $quote['quote_title']; ?></td>
                <td>
                <a href="../controller/edit_quote.php?id=<?php echo $quote['quote_id']; ?>" style="font-size: 14px;color: #000000;"><i class="fa fa-cog"></i></a>
          <a onclick="alertdelete_<?php echo $quote['quote_id']; ?>();" style="cursor: pointer;font-size: 14px;color: #000000;"><i class="fa fa-trash-o"></i></a>
              <script type="text/javascript">
  function alertdelete_<?php echo $quote['quote_id']; ?>() {
  swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_quote.php?id=<?php echo $quote['quote_id']; ?>" });}
  </script>
          </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
