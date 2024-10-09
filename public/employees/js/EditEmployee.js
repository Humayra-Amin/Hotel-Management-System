function readURL(input) {
    let elem = document.querySelector('#file_upload');
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            elem.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}