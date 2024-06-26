jQuery.fn.extend({
    autoHeight: function () {
      function autoHeight_(element) {
        return jQuery(element)
          .css({ "height": 0, "overflow-y": "hidden" })
          .height(element.scrollHeight);
      }
      return this.each(function() {
        autoHeight_(this).on("input", function() {
          autoHeight_(this);
        });
      });
    }
  });