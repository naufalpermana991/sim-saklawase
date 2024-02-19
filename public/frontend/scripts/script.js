$('#planning-dropdown, #date-dropdown').change(function() {
    var planningId = $('#planning-dropdown').val();
    var startDate = $('#date-dropdown').val();
  
    // Hide semua form group worker
    $('.worker-group').hide();
  
    // Ambil jumlah worker dari database berdasarkan planning_id dan start_date
    // ...
  
    // Tampilkan jumlah form group worker yang diperlukan
    for (var i = 1; i <= jumlahWorker; i++) {
      $('.worker-group[data-worker="' + i + '"]').show();
    }
  });