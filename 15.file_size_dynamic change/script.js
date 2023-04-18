$(document).ready(function() {
    $('#file').change(function() {
      var fileSize = this.files[0].size;
      var maxSize = 1048576;
      
      if (fileSize > maxSize) {
        $('#result-text').text('File size exceeds maximum limit of 1MB');
        $('#result-container').show().removeClass('success').addClass('error');
      } else {
        $('#result-text').text('File size is ' + fileSize + ' bytes');
        $('#result-container').show().removeClass('error').addClass('success');
      }
    });
    
    $('#submit-btn').click(function(e) {
      e.preventDefault();
      $('#file').trigger('click');
    });
  });
  