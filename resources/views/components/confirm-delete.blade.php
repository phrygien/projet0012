<div
    x-data="{open: false}"
    x-show="open"
    @confirm-delete.window="

        const get_id = event.detail.get_id

        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: 'Vous ne pourrez pas revenir en arrière !',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimez-la !'
            }).then((result) => {
                if (result.isConfirmed) {

                    $wire.confirmDelete(get_id).then(result => {

                        Swal.fire(
                            'Supprimé!',
                            'Votre client a été supprimé.',
                            'success'
                        )

                    })
                } else if (result.dismiss === Swal.DismissReason.cancel) {

                    Swal.fire(
                        'Annulé',
                        'Votre client imaginaire est en sécurité :)',
                        'error'
                    )

                }
        })
    "
>

</div>