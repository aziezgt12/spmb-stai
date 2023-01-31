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

	function save()
	{
		var data = $("#formFaculty").serialize()
		store('<?= base_url("C_MstProdi/save") ?>', 'It will be saved!',data)
	}

	function update()
	{
		var data = $("#formFaculty").serialize()

		store('<?= base_url("C_MstProdi/update") ?>', "It will be update!",data)
	}

	function _delete(id)
	{
		var data = { "prodi_id" : id }

		deleted('<?= base_url("C_MstProdi/deleted") ?>', data);
	}


</script>