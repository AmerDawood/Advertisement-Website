<script src="{{ asset('admin/js/jquery.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




@if (session('msg'))
<script>
    Swal.fire(
    'Good job!',
    '{{ session("msg") }}',
    'success'
    )
</script>
@endif

<script>
    $('.btn-delete').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this).closest('form');

        Swal.fire({
            title: 'هل انت متاكد من حذف السؤال',
            text: "الحذف نهائي لا رجعة فية",
            icon: 'warning',
            // showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'حذف نهائي'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit the form when the user confirms
            } else {
                // If the user cancels, set the background color to black
                $('body').css('background-color', 'black');
            }
        });
    });
 </script>



<script>
    $('.btn-confirm').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let form = $(this).closest('form');

        Swal.fire({
            title: 'هل أنت متأكد؟',
            text: "",
            icon: 'warning',
            // showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم، أضفه'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit(); // Submit the form when the user confirms
            }
        });
    });
 </script>


