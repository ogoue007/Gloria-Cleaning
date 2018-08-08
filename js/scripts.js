$(document).ready(function() {

  // Fixed menu on scroll

  var mainNavHeight = $('.navigation').innerHeight();
  var mainNavOffset = $('.navigation').offset();
  var realDistance = mainNavOffset.top + mainNavHeight;

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > realDistance) {
      $('.navigation').addClass('fixed-top');
      $('body').css({'margin-top' : mainNavHeight+'px'});
    } else {
      $('.navigation').removeClass('fixed-top');
      $('body').css({'margin-top' : '0px'});
    }
  });


  $('#contact_form').on('submit', function(e) {
      e.preventDefault();
      e.stopPropagation();

    var errors = [];

    //Validate the Name input field
    var name = $('#name').val();
    var nameField = $('#name');
    var nameDiv = nameField.parent();
    if (name.length < 3) {
      nameField.addClass('form-control is-invalid');
      nameDiv.addClass('is-invalid').find('small').html('Name Must Be 3 Characters Or More!');
      nameDiv.find('label').addClass('col-form-label');
      errors.push("1");
    } else {
      nameField.addClass('form-control is-valid').removeClass('is-invalid');
      nameDiv.addClass('is-valid').removeClass('is-invalid').find('small').html('success');
      nameDiv.find('label').addClass('col-form-label');
    }

    //Validate the Email input field
    var email = $('#email').val();
    var emailField = $('#email');
    var emailDiv = emailField.parent();
    if (email.length < 3) {
      emailField.addClass('form-control is-invalid');
      emailDiv.addClass('is-invalid').find('small').html('Email is invalid!');
      emailDiv.find('label').addClass('col-form-label');
      errors.push("2");
    } else {
      emailField.addClass('form-control is-valid').removeClass('is-invalid');
      emailDiv.addClass('is-valid').removeClass('is-invalid').find('small').html('success');
      emailDiv.find('label').addClass('col-form-label');
    }

    //Validate the Message input field
    var message = $('#message').val();
    var messageField = $('#message');
    var messageDiv = messageField.parent();
    if (message.length < 3) {
      messageField.addClass('form-control is-invalid');
      messageDiv.addClass('is-invalid').find('small').html('Please Message cannot be blank or less than a paragraph!');
      messageDiv.find('label').addClass('col-form-label is-valid');
      errors.push("3");
    } else {
      messageField.addClass('form-control is-valid').removeClass('is-invalid');
      messageDiv.addClass('is-valid').removeClass('is-invalid').find('small').html('success');
      messageDiv.find('label').addClass('col-form-label is-valid');
    }

     var contact_form = $('#contact_form');
    if(!errors.length > 0 ) {
      $.ajax({
        type: contact_form.attr('method'),
        url: contact_form.attr('action'),
        data: contact_form.serialize()
      }).done(function(data) {
        var result = data;
        var response = JSON.parse(result);
        $('#output').append(response.message).addClass('d-block').fadeIn();
      });
    }

  });
});
