<script type="text/javascript">
	$(".btn-add").click(function()
	{
		$('#faculty').val("")
		$('#prodiName').val("")
		$('#prodiId').val("")
		$("#formProdi").html("Create Program Studi")

		$("#modalAddProdi").modal("show");
	});

	

	$(".btn-edit").click(function(){
		var prodiId = $(this).closest("tr").find(".id").text();
		var faculty = $(this).closest("tr").find(".faculty").text();
		var prodiName = $(this).closest("tr").find(".prodi_name").text();

		$('#faculty').val(faculty)
		$('#prodiName').val(prodiName)
		$('#prodiId').val(prodiId)

		$('.btn-save').attr('onClick','update()');

		$("#formProdi").html("Edit Program Studi")

		$("#modalAddProdi").modal("show");


	})

	function savePersonalData()
	{
		var data = $(".form-personal-data").serialize()


		Swal.fire({
        title: 'Are you sure?',
        text: 'It will be saved!',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, save it!',
        showLoaderOnConfirm: true,
			preConfirm: function() {
				return new Promise(function(resolve) {
					$.ajax({
						type:'post',
						data:data,
						url:'<?= base_url("C_Profile/update/personal-data") ?>',
						dataType : "json",
						beforeSend: function() {
							// $('#spinnerSave').attr('class', 'spinner-border spinner-border-sm')
							$('.btn-save').html('Loading...');
						},
						success: function(response) {
							console.log(response)
							setTimeout(() => {
								if (response.code == 200) {
									sw_alert("Success", String(response.message), "success");
									$("#dataPersonal").removeClass('active');
									$("#dataAlamat").addClass('active');
									$("#personal").removeClass('active');
									$("#alamat").addClass('active');
									// setTimeout(() => {
									//     location.reload()
									// }, 1000);
								} else {
									sw_alert("Error", String(response.message), "error");
									$('.btn-save').html('Save');
								}
							}, 1000);
						}
					});
				});
			},
		});
	}

	function saveAlamat()
	{
		var data = $(".form-alamat-data").serialize()


		Swal.fire({
        title: 'Are you sure?',
        text: 'It will be saved!',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, save it!',
        showLoaderOnConfirm: true,
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                    type:'post',
                    data:data,
                    url:'<?= base_url("C_Profile/update/alamat-data") ?>',
                    dataType : "json",
                    beforeSend: function() {
                        // $('#spinnerSave').attr('class', 'spinner-border spinner-border-sm')
                        $('.btn-save').html('Loading...');
                    },
                    success: function(response) {
                        console.log(response)
                        setTimeout(() => {
                            if (response.code == 200) {
                                sw_alert("Success", String(response.message), "success");
								$("#dataAlamat").removeClass('active');
								$("#dataSekolah").addClass('active');
								$("#alamat").removeClass('active');
								$("#sekolah").addClass('active');
                                // setTimeout(() => {
                                //     location.reload()
                                // }, 1000);
                            } else {
                                sw_alert("Error", String(response.message), "error");
                                $('.btn-save').html('Save');
                            }
                        }, 1000);
                    },
					error: function(error, errors)
					{
						console.log(error)
						console.log(errors)
					}
                });
            });
        },
    });
}


	// function update()
	// {
	// 	var data = $("#formFaculty").serialize()

	// 	store('<?= base_url("C_MstProdi/update") ?>', "It will be update!",data)
	// }

	// function _delete(id)
	// {
	// 	var data = { "prodi_id" : id }

	// 	deleted('<?= base_url("C_MstProdi/deleted") ?>', data);
	// }


</script>