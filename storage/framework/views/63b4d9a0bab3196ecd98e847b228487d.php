<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Modal -->
<div class="modal fade" id="empModal">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Man of Power Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <table class="w-100" id="tblempinfo">
                    <tbody></tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- Script -->
<script type='text/javascript'>
    $(document).ready(function() {

        $('#empTable').on('click', '.viewdetails', function() {
            var empid = $(this).attr('data-id');

            if (empid > 0) {

                // AJAX request
                var url = "<?php echo e(route('getEmployeeDetails', [':empid'])); ?>";
                url = url.replace(':empid', empid);

                // Empty modal data
                $('#tblempinfo tbody').empty();

                $.ajax({
                    url: url,
                    dataType: 'json',
                    success: function(response) {

                        // Add employee details
                        $('#tblempinfo tbody').html(response.html);

                        // Display Modal
                        $('#empModal').modal('show');
                    }
                });
            }
        });

    });
</script>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/modal.blade.php ENDPATH**/ ?>