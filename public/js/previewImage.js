function previewImage() {
  const preview = document.querySelector('.img-upload');
  const file = document.querySelector('#img-upload').files[0];

  const reader = new FileReader();

  reader.addEventListener("load", () => {
      preview.src = reader.result;
  }, false);

  if (file) {
      reader.readAsDataURL(file);
  }
}