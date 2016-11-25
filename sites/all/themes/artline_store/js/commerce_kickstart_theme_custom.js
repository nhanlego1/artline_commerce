(function ($) {
  // Handle user toolbar when user is admin and have admin toolbar enabled.
  Drupal.behaviors.commerce_kickstart_theme_custom_toolbar = {
    attach: function(context, settings) {
      if ($('body').hasClass('toolbar')) {
        $(window, context).resize(function() {
          var toolbarHeight = $('div#toolbar').height();
          $('.zone-user-wrapper').css('top', toolbarHeight + 'px');
        });
      }
    }
  }
  // Disable input fields on price range when viewing the site
  // on normal devices.
  Drupal.behaviors.commerce_kickstart_theme_custom_search_api_ranges = {
    attach:function (context, settings) {
      $('body').bind('responsivelayout', function(e, d) {
        if ($(this).hasClass("responsive-layout-normal")) {
          $('div.search-api-ranges-widget').each(function() {
            $(this).find('input[name=range-from]').attr('readonly', true).unbind('keyup');
            $(this).find('input[name=range-to]').attr('readonly', true).unbind('keyup');
          });
        }
        else {
          $('body').unbind('responsivelayout');
        }
      });
    }
  }
  // Switch list elements to select lists on faceted blocks.
  Drupal.behaviors.commerce_kickstart_theme_custom_search = {
    attach: function(context, settings) {
      $('body', context).bind('responsivelayout', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          $('.block-facetapi', context).each(function(index) {
            var $facetBlock = $(this);

            // Clean up <li> children so select list looks okay.
            $facetBlock.find('label.element-invisible', context).remove();
            $facetBlock.find('span.element-invisible', context).remove();
            $facetBlock.find('input.facetapi-checkbox', context).remove();

            // Get block title.
            var list_title = $facetBlock.find('.block-title', context).text().toLowerCase();

            // Get list elements.
            var $list_element = $facetBlock.find('ul', context);
            $list_element.addClass('facetapi-lists');

            if(typeof $list_element !== 'undefined') {
              selectnav($list_element.attr('id'), {
                label: 'Select a ' + list_title + '...',
                activeclass: 'false'
              });
            }
          });
        }
        else {
          $('body').unbind('responsivelayout');
        }
      });
    }
  }

  Drupal.behaviors.commerce_kickstart_custom_more = {
    attach:function (context, settings) {
      $(".body-wrapper .more-less a.show").click(function(event){
        event.preventDefault();

        $('.more-less').animate({
        },2000, function() {
          $(this).prev().removeClass('less-body');
          $(".body-wrapper .more-less a.less").show();
          $(".body-wrapper .more-less a.show").hide();
        });
      });

      $(".body-wrapper .more-less a.less").click(function(event){
        event.preventDefault();

        $('.more-less').animate({
        },2000, function() {
          $(this).prev().addClass('less-body');
          $(".body-wrapper .more-less a.less").hide();
          $(".body-wrapper .more-less a.show").show();
        });
      });

      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
      $('.add-to-cart-detail select').niceSelect();

      //set chow hide checkbox
      $("span.color-label").each(function(){
        var color_ = $(this).attr('data');
        console.log('nhan');
        $(this).css('background',color_)
      });

      //translattion
      $(".customer_profile_billing legend span").text('Thông tin thanh toán');
      $(".customer_profile_shipping legend span").text('Thông tin giao hàng');
      $(".checkout-review tr.pane-title td").each(function(e){

        if(e == 1){
          $(this).text('Thông tin thanh toán');
        }
        if(e == 2){
          $(this).text('Thông tin giao hàng');
        }
      });
      $(".commerce-order-handler-area-order-total .component-type-commerce-price-formatted-amount .component-title").text('Tổng thanh toán');
    }
  }

  Drupal.behaviors.ArtlineColor = {
    attach:function (context, settings) {
      var color_ = $("body").attr('data');
      $("#block-nice-menus-1 ul.nice-menu-down li").css("background",color_);
      $(".zone-user-wrapper").css("background-color",color_);
      $("h2.block-title").css("color",color_);
      $(".category-wrapper h3 a").css("color",color_);
      $(".product-info-detail h2").css("color",color_);
      $(".commerce-product-sku span").css("color",color_);
      $(".node-product-type .field-name-commerce-price").css("color",color_);
      $("#artline-form-add-to-cart #edit-submit").css("background-color",color_);
    }
  }
})(jQuery);
