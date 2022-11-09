$(document).ready(function () {

	// preparing canvas variables
	var $canvas = $('#canvas'),
		context = $canvas.get(0).getContext('2d');

	// waiting for a file to be selected
	$('#pro_img').on('change', function () {

		if (this.files && this.files[0]) {
			// checking if a file is selected

			if (this.files[0].type.match(/^image\//)) {
				// valid image file is selected

				// $('#file_name').attr('value', this.files[0].name);
				document.querySelector(".crop_img").style.display = "block";

				// process the image
				var reader = new FileReader();

				reader.onload = function (e) {
					var img = new Image();
					img.onload = function () {
						context.canvas.width = img.width;
						context.canvas.height = img.height;
						context.drawImage(img, 0, 0);

						// instantiate cropper
						var cropper = $canvas.cropper({
							aspectRatio: 1
						});
					};
					img.src = e.target.result;
				};

				$('#crop_btn').click(function () {
					var croppedImage = $canvas.cropper('getCroppedCanvas').toDataURL('image/jpg');
					$('.display_pro_img').append($('<img id="cp_img">').attr('src', croppedImage));
					$('#64based_img').attr('value', croppedImage);
					document.querySelector(".crop_img").style.display = "none";
					// $('#submit').removeAttr("disabled");
					$('#pro_img').attr("disabled","disabled");
				});

				// reading the selected file
				reader.readAsDataURL(this.files[0]);


			} else {
				document.querySelector(".error-txt").style.display = "block";
				document.querySelector(".error-txt").innerText = "Invalid file type";
			}
		} else {
			document.querySelector(".error-txt").style.display = "block";
			document.querySelector(".error-txt").innerText = "Please select a file.";
		}
	});

});