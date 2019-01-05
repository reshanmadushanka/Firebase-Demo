<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Apartment</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Apartments</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong>Add Apartment</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form id="addData" class="" method="POST" action="">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" type="text" name="name" required="" id="name" placeholder="Enter Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input class="form-control col-md-12" type="text" name="price" id="price" required="" placeholder="Enter Price"/>
                                    </div>
                                    <label for="name">Geolocation</label>
                                    <div class="row col-md-12">
                                        <div class="col-md-6 mb-3">
                                            <label for="lat">latitude</label>
                                            <input step="0.01" type="number" class="form-control" name="lat" id="lat" required="" >
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="long">longitude</label>
                                            <input step="0.01" type="number" class="form-control"  id="long" name="long" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Rating</label>
                                        <input class="form-control col-md-12" type="number"  min="0" max="5" name="rate" id="rate" required="" placeholder="Enter Rate"/>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-md-offset-3">
                                            <button type="button" class="btn btn-primary btn-block desabled" id="submitData">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong>All Data</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Lat</th>
                                        <th>Long</th>
                                        <th>Rate</th>
                                        <th width="180" class="text-center">Action</th>
                                    </tr>
                                    <tbody id="tbody">

                                    </tbody>	
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" method="POST" class="apartment-remove-record-model">
                <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" style="width:55%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="custom-width-modalLabel">Delete Record</h4>
                                <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <h4>You Want You Sure Delete This Record?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Update Model -->
            <form action="" method="POST" class="aparatment-update-record-model form-horizontal">
                <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" style="width:55%;">
                        <div class="modal-content" style="overflow: hidden;">
                            <div class="modal-header">
                                <h4 class="modal-title" id="custom-width-modalLabel">Update Record</h4>
                                <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" id="updateBody">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success waves-effect waves-light updateRecord">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="https://www.gstatic.com/firebasejs/5.7.2/firebase.js"></script>
            <script>
// Initialize Firebase
var config = {
    apiKey: "AIzaSyCqJXdBYB41ZtGFBktl-7IifG2-XEC_DVM",
    authDomain: "apartment-b07bb.firebaseapp.com",
    databaseURL: "https://apartment-b07bb.firebaseio.com",
    projectId: "apartment-b07bb",
    storageBucket: "apartment-b07bb.appspot.com",
    messagingSenderId: "366881068623"
};
firebase.initializeApp(config);
var database = firebase.database();

var lastIndex = 0;

// Get Data
firebase.database().ref('apaertment/').on('value', function (snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function (index, value) {
        if (value) {
            htmls.push('<tr>\
                        <td>' + value.name + '</td>\
                        <td>' + value.price + '</td>\
                        <td>' + value.lat + '</td>\
                        <td>' + value.long + '</td>\
                        <td>' + value.range + '</td>\
                        <td><a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="' + index + '">Update</a>\
                        <a data-toggle="modal" data-target="#remove-modal" class="btn btn-outline-danger removeData" data-id="' + index + '">Delete</a></td>\
                </tr>');
        }
        lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitData").removeClass('desabled');
});
$('#submitData').on('click', function () {
    var values = $("#addData").serializeArray();
    var name = values[0].value;
    var price = values[1].value;
    var lat = values[2].value;
    var long = values[3].value;
    var range = values[4].value;
    var ID = lastIndex + 1;

    firebase.database().ref('apaertment/' + ID).set({
        name: name,
        price: price,
        lat: lat,
        long: long,
        range: range,
    });

    // Reassign lastID value
    lastIndex = ID;
    $("#addData input").val("");
});

var updateID = 0;
$('body').on('click', '.updateData', function () {
    updateID = $(this).attr('data-id');
    firebase.database().ref('apaertment/' + updateID).on('value', function (snapshot) {
        var values = snapshot.val();
        var updateData = '<div class="form-group">\
                        <label for="name">Name</label>\
                         <input class="form-control" type="text" value="' + values.name + '" name="name" required="" id="name" placeholder="Enter Name"/>\
                     </div>\
                    <div class="form-group">\
                          <label for="price">Price</label>\
                          <input class="form-control col-md-12"  value="' + values.price + '" type="text" name="price" id="price" required="" placeholder="Enter Price"/>\
                    </div>\
                    <label for="name">Geolocation</label>\
                          <div class="row col-md-12">\
                               <div class="col-md-6 mb-3">\
                                  <label for="lat">latitude</label>\
                                  <input step="0.01" type="number"  value="' + values.lat + '" class="form-control" name="lat" id="lat" required="" >\
                               </div>\
                               <div class="col-md-6 mb-3">\
                                  <label for="long">longitude</label>\
                                  <input step="0.01" type="number"  value="' + values.long + '" class="form-control"  id="long" name="long" required="">\
                               </div>\
                          </div>\
                    <div class="form-group">\
                          <label for="name">Rating</label>\
                          <input class="form-control col-md-12"  value="' + values.range + '" type="number"  min="0" max="5" name="rate" id="rate" required="" placeholder="Enter Rate"/>\
                    </div>';

        $('#updateBody').html(updateData);
    });
});

$('.updateRecord').on('click', function () {
    var values = $(".aparatment-update-record-model").serializeArray();
    var postData = {
        name: values[0].value,
        price: values[1].value,
        lat: values[2].value,
        long: values[3].value,
        range: values[4].value,
    };

    var updates = {};
    updates['/apaertment/' + updateID] = postData;

    firebase.database().ref().update(updates);

    $("#update-modal").modal('hide');
});


// Remove Data
$("body").on('click', '.removeData', function () {
    var id = $(this).attr('data-id');
    $('body').find('.apartment-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
});

$('.deleteMatchRecord').on('click', function () {
    var values = $(".apartment-remove-record-model").serializeArray();
    var id = values[0].value;
    firebase.database().ref('apaertment/' + id).remove();
    $('body').find('.apartment-remove-record-model').find("input").remove();
    $("#remove-modal").modal('hide');
});
$('.remove-data-from-delete-form').click(function () {
    $('body').find('.apartment-remove-record-model').find("input").remove();
});


            </script>
    </body>
</html>
