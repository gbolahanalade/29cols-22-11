function changeGalleryPicture()
{
    var selectedImg = $('#galleryPicture')[0].files[0];

    if (selectedImg)
    {
        var previewId = document.getElementById('galleryImage');
        previewId.src = '';

        var oReader = new FileReader();
        oReader.onload = function(e)
        {
            previewId.src=e.target.result;
        }
        oReader.readAsDataURL(selectedImg);

        $('#uploadButton').removeClass('disabled');
    }
}

function uploadGalleryPicture()
{
    var file2 = document.getElementById('galleryPicture').files[0];
    var ext = file2.type;
    var caption = $('#caption').val();
    var formdata = new FormData();
    formdata.append("pic", file2);
    formdata.append("ext", ext);
    formdata.append("caption", caption);  // {'pic': file2, 'ext': ext, 'about':about}
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.open("POST", "http://localhost:8060/updateGallery");
    ajax.send(formdata);

}

function completeHandler(event)
{
    var response = this.responseText;
   alert('Gallery Saved!');
    window.location='http://localhost:8060/profile';
}
function progressHandler(event)
{
    var percent = (event.loaded / event.total) * 100;
    $('#mediaProgress').fadeIn();
    document.getElementById('progressBar').style.width = percent+'%';
}