// $Id$
Drupal.behaviors.reports = function (context) {
  alert("HI DRUPAL BEHAVIOR");
 /* $('a.categoryLink:not(.categoryLink-processed)', context).click(function () {
    // This function will get exceuted after the ajax request is completed successfully
    var updateProducts = function(data) {
      // The data parameter is a JSON object. The “products” property is the list of products items that was returned from the server response to the ajax request.
      $('#divProducts').html(data.products);
    }
    $.ajax({
      type: 'POST',
      url: this.href, // Which url should be handle the ajax request. This is the url defined in the <a> html tag
      success: updateProducts, // The js function that will be called upon success request
      dataType: 'json', //define the type of data that is going to get back from the server
      data: 'js=1' //Pass a key/value pair
    });
    return false;  // return false so the navigation stops here and not continue to the page in the link
}).addClass('categoryLink-processed');*/
}