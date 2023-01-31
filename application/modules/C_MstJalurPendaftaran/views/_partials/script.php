<script type="text/javascript">
	$(".btn-add").click(function()
	{
		$('#jalurId').val("")
		$('#jalur_name').val("")
		$('#biaya').val("")
		$("#formProdi").html("Create New Jalur Pendaftaran")

		$("#modalAdd").modal("show");
	});

	

	$(".btn-edit").click(function(){
		var jalurName = $(this).closest("tr").find(".jalur_name").text();
		var jalurId = $(this).closest("tr").find(".jalur_id").text();
		var biaya = $(this).closest("tr").find(".biaya").text();
		var jadwalPendaftaran = $(this).closest("tr").find(".jadwal_pendaftaran").text();
		var jadwalSeleksi = $(this).closest("tr").find(".jadwal_seleksi").text();

		// alert(dateFormat(jadwalPendaftaran))
		$("input[type='checkbox']").prop('checked', false);


		$.post("<?= base_url("C_MstJalurPendaftaran/getDocumentByParamAjax") ?>", { "jalur_id": jalurId }, function( response ) {
			console.log(response)
		  	$.each(response, function( key, value ) {
		  		 $("input[value='" + value.doc_id + "']").prop('checked', true);
			});
		}, "json");

		$('#jalurId').val(jalurId)
		$('#jalur_name').val(jalurName)
		$('#biaya').val(biaya)
		$('#jadwalPendaftaran').val(String(dateFormat(jadwalPendaftaran)))
		$('#jadwalSeleksi').val(String(dateFormat(jadwalSeleksi)))

		$('.btn-save').attr('onClick','update()');

		$("#formProdi").html("Edit Jalur Pendaftaran")

		$("#modalAdd").modal("show");


	})

	function save()
	{
		var data = $("#formJalur").serialize()
		store('<?= base_url("C_MstJalurPendaftaran/save") ?>', 'It will be saved!',data)
	}

	function update()
	{
		var data = $("#formJalur").serialize()

		store('<?= base_url("C_MstJalurPendaftaran/update") ?>', "It will be update!",data)
	}

	function _delete(id)
	{
		var data = { "jalur_id" : id }

		deleted('<?= base_url("C_MstJalurPendaftaran/deleted") ?>', data);
	}

	function dateFormat(dateObject) {
	    var d = new Date(dateObject);
	    var day = d.getDate();
	    var month = d.getMonth() + 1;
	    var year = d.getFullYear();
	    if (day < 10) {
	        day = "0" + day;
	    }
	    if (month < 10) {
	        month = "0" + month;
	    }
	    var date = year + "-" + month + "-" + day;

	    return date;
	};


</script>