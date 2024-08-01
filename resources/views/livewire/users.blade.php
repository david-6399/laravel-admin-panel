<div>
    <button wire:click.prevent='test'>test</button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('testclick', event => {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Your work has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        @this.testfromswal()
                    }
                    });
            });
        });
    </script>
</div>
