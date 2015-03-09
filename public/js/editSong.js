function changeSongPicture()
{
    var selectedImg = $('#songPicture')[0].files[0];

    if (selectedImg)
    {
        var previewId = document.getElementById('songImage');
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

function uploadSong()
{
    var file2 = document.getElementById('songPicture').files[0];
    var ext = file2.type;
    var title = $('#title').val();
    var des = $('#description').val();
    var formdata = new FormData();
    formdata.append("pic", file2);
    formdata.append("ext", ext);
    formdata.append("title", title);
    formdata.append("des", des);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.open("POST", "http://localhost:8060/updateSong");
    ajax.send(formdata);

}

function completeHandler(event)
{
    var response = this.responseText;
   alert('Song Saved!');
    window.location='http://localhost:8060/profile';
}
function progressHandler(event)
{
    var percent = (event.loaded / event.total) * 100;
    $('#mediaProgress').fadeIn();
    document.getElementById('progressBar').style.width = percent+'%';
}