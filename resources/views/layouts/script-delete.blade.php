<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkAllCheckbox = document.getElementById('checkAll');
        const bulkDeleteForm = document.getElementById('bulkDeleteForm');
        const bulkDeleteButton = document.querySelector('.btn-bulk-delete');

        // Select all checkbox functionality
        checkAllCheckbox.addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('input[name="ids[]"]');
            checkboxes.forEach((checkbox) => {
                checkbox.checked = checkAllCheckbox.checked;
            });
        });
    
        // Bulk delete functionality
        bulkDeleteButton.addEventListener('click', function (e) {
            e.preventDefault();
            const selectedCheckboxes = document.querySelectorAll('input[name="ids[]"]:checked');
            if (selectedCheckboxes.length === 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'No Customers Selected',
                    text: 'Please select at least one customer to delete.',
                });
                return;
            }
        
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    bulkDeleteForm.submit();
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Tangkap semua tombol dengan class btn-delete
        const deleteButtons = document.querySelectorAll('.btn-delete');
        deleteButtons.forEach((button) => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
            
                const deleteForm = this.closest('.delete-form');
            
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        deleteForm.submit();
                    }
                });
            });
        });
    });

    document.addEventListener('click', function (e) {
        if (e.target.closest('[data-dismiss="alert"]')) {
            // Find the closest alert div and remove it
            const alert = e.target.closest('#alert');
            if (alert) {
                alert.remove();
            }
        }
    });
    @if (session('success'))
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonColor: '#3085d6'
        });
    @endif
</script>