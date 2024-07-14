document.getElementById('planning-dropdown').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var mop = selectedOption.getAttribute('data-mop');
    var workerGroup = document.querySelectorAll('.worker-group');

    // Sembunyikan semua form pekerja dan responsibilitas
    workerGroup.forEach(function(group) {
        group.style.display = 'none';
    });

    // Tampilkan form pekerja dan responsibilitas sesuai dengan jumlah MOP
    for (var i = 1; i <= mop; i++) {
        var workerForm = document.querySelector('.worker-group[data-worker="' + i + '"]');
        var responsibilityForm = document.querySelector('.worker-group[data-responsibility="' + i + '"]');
        if (workerForm && responsibilityForm) {
            workerForm.style.display = 'block';
            responsibilityForm.style.display = 'block';
        }
    }
});