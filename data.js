$(document).ready(function () {

    $('#submit').click(function () {
    var url = $('#url').val();
    myurl = "http://localhost/jsonread/index.php";
    var data;
    $.ajax({
        type: 'GET',
        url: url,
        data: data,
        async: false,
        //beforeSend: function (xhr) {
           // if (xhr && xhr.overrideMimeType) {
             //   xhr.overrideMimeType('application/json;charset=utf-8');
           // }
       // },
        dataType: 'json',
        success: function (data, status, xhr) {
            //console.log(data);
            $("#callback").text(JSON.stringify(data.message));

        },
        error: function (data) {
            alert('Something Went wrong');
        },
    })
    });
});