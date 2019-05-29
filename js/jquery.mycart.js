/*
* jQuery myCart - v1.1 - 2017-02-21
* http://asraf-uddin-ahmed.github.io/
* Copyright (c) 2017 Asraf Uddin Ahmed; Licensed None
*/

(function (Rs) {

  "use strict";

  var OptionManager = (function () {
    var objToReturn = {};

    var defaultOptions = {
      currencySymbol: 'Rs',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      cartItems: [],
      clickOnAddToCart: function(RsaddTocart) { },
      afterAddOnCart: function(products, totalPrice, totalQuantity) { },
      clickOnCartIcon: function(RscartIcon, products, totalPrice, totalQuantity) { },
      checkoutCart: function(products, totalPrice, totalQuantity) { },
      getDiscountPrice: function(products, totalPrice, totalQuantity) { return null; }
    };


    var getOptions = function (customOptions) {
      var options = Rs.extend({}, defaultOptions);
      if (typeof customOptions === 'object') {
        Rs.extend(options, customOptions);
      }
      return options;
    }

    objToReturn.getOptions = getOptions;
    return objToReturn;
  }());


  var ProductManager = (function(){
    var objToReturn = {};

    /*
    PRIVATE
    */
    localStorage.products = localStorage.products ? localStorage.products : "";
    var getIndexOfProduct = function(id){
      var productIndex = -1;
      var products = getAllProducts();
      Rs.each(products, function(index, value){
        if(value.id == id){
          productIndex = index;
          return;
        }
      });
      return productIndex;
    }
    var setAllProducts = function(products){
      localStorage.products = JSON.stringify(products);
    }
    var addProduct = function(id, name, summary, price, quantity, image) {
      var products = getAllProducts();
      products.push({
        id: id,
        name: name,
        summary: summary,
        price: price,
        quantity: quantity,
        image: image
      });
      setAllProducts(products);
    }

    /*
    PUBLIC
    */
    var getAllProducts = function(){
      try {
        var products = JSON.parse(localStorage.products);
        return products;
      } catch (e) {
        return [];
      }
    }
    var updatePoduct = function(id, quantity) {
      var productIndex = getIndexOfProduct(id);
      if(productIndex < 0){
        return false;
      }
      var products = getAllProducts();
      products[productIndex].quantity = typeof quantity === "undefined" ? products[productIndex].quantity * 1 + 1 : quantity;
      setAllProducts(products);
      return true;
    }
    var setProduct = function(id, name, summary, price, quantity, image) {
      if(typeof id === "undefined"){
        console.error("id required")
        return false;
      }
      if(typeof name === "undefined"){
        console.error("name required")
        return false;
      }
      if(typeof image === "undefined"){
        console.error("image required")
        return false;
      }
      if(!Rs.isNumeric(price)){
        console.error("price is not a number")
        return false;
      }
      if(!Rs.isNumeric(quantity)) {
        console.error("quantity is not a number");
        return false;
      }
      summary = typeof summary === "undefined" ? "" : summary;

      if(!updatePoduct(id)){
        addProduct(id, name, summary, price, quantity, image);
      }
    }
    var clearProduct = function(){
      setAllProducts([]);
    }
    var removeProduct = function(id){
      var products = getAllProducts();
      products = Rs.grep(products, function(value, index) {
        return value.id != id;
      });
      setAllProducts(products);
    }
    var getTotalQuantity = function(){
      var total = 0;
      var products = getAllProducts();
      Rs.each(products, function(index, value){
        total += value.quantity * 1;
      });
      return total;
    }
    var getTotalPrice = function(){
      var products = getAllProducts();
      var total = 0;
      Rs.each(products, function(index, value){
        total += value.quantity * value.price;
      });
      return total;
    }

    objToReturn.getAllProducts = getAllProducts;
    objToReturn.updatePoduct = updatePoduct;
    objToReturn.setProduct = setProduct;
    objToReturn.clearProduct = clearProduct;
    objToReturn.removeProduct = removeProduct;
    objToReturn.getTotalQuantity = getTotalQuantity;
    objToReturn.getTotalPrice = getTotalPrice;
    return objToReturn;
  }());


  var loadMyCartEvent = function(userOptions){

    var options = OptionManager.getOptions(userOptions);
    var RscartIcon = Rs("." + options.classCartIcon);
    var RscartBadge = Rs("." + options.classCartBadge);
    var classProductQuantity = options.classProductQuantity;
    var classProductRemove = options.classProductRemove;
    var classCheckoutCart = options.classCheckoutCart;

    var idCartModal = 'my-cart-modal';
    var idCartTable = 'my-cart-table';
    var idGrandTotal = 'my-cart-grand-total';
    var idEmptyCartMessage = 'my-cart-empty-message';
    var idDiscountPrice = 'my-cart-discount-price';
    var classProductTotal = 'my-product-total';
    var classAffixMyCartIcon = 'my-cart-icon-affix';


    if(userOptions.cartItems && userOptions.cartItems.constructor === Array) {
      ProductManager.clearProduct();
      Rs.each(options.cartItems, function() {
        ProductManager.setProduct(this.id, this.name, this.summary, this.price, this.quantity, this.image);
      });
    }

    RscartBadge.text(ProductManager.getTotalQuantity());

    if(!Rs("#" + idCartModal).length) {
      Rs('body').append(
        '<div class="modal fade" id="' + idCartModal + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
        '<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<table class="table table-hover table-responsive" id="' + idCartTable + '"></table>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
        '<a href="orderinfo.php"><button type="button" class="btn btn-primary ' + classCheckoutCart + '">Checkout</button></a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
      );
    }

    var drawTable = function(){
      var RscartTable = Rs("#" + idCartTable);
      RscartTable.empty();

      var products = ProductManager.getAllProducts();
      Rs.each(products, function(){
        var total = this.quantity * this.price;
        RscartTable.append(
          '<tr title="' + this.summary + '" data-id="' + this.id + '" data-price="' + this.price + '">' +
          '<td class="text-center" style="width: 30px;"><img width="30px" height="30px" src="' + this.image + '"/></td>' +
          '<td>' + this.name + '</td>' +
          '<td title="Unit Price">' + options.currencySymbol + this.price + '</td>' +
          '<td title="Quantity"><input type="number" min="1" style="width: 70px;" class="' + classProductQuantity + '" value="' + this.quantity + '"/></td>' +
          '<td title="Total" class="' + classProductTotal + '">' + options.currencySymbol  + total + '</td>' +
          '<td title="Remove from Cart" class="text-center" style="width: 30px;"><a href="javascript:void(0);" class="btn btn-xs btn-danger ' + classProductRemove + '">X</a></td>' +
          '</tr>'
        );
      });

      RscartTable.append(products.length ?
        '<tr>' +
        '<td></td>' +
        '<td><strong>Total</strong></td>' +
        '<td></td>' +
        '<td></td>' +
        '<td><strong id="' + idGrandTotal + '"></strong></td>' +
        '<td></td>' +
        '</tr>'
        : '<div class="alert alert-danger" role="alert" id="' + idEmptyCartMessage + '">Your cart is empty</div>'
      );

      var discountPrice = options.getDiscountPrice(products, ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
      if(products.length && discountPrice !== null) {
        RscartTable.append(
          '<tr style="color: red">' +
          '<td></td>' +
          '<td><strong>Total (including discount)</strong></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td><strong id="' + idDiscountPrice + '"></strong></td>' +
          '<td></td>' +
          '</tr>'
        );
      }

      showGrandTotal();
      showDiscountPrice();
    }
    var showModal = function(){
      drawTable();
      Rs("#" + idCartModal).modal('show');
    }
    var updateCart = function(){
      Rs.each(Rs("." + classProductQuantity), function(){
        var id = Rs(this).closest("tr").data("id");
        ProductManager.updatePoduct(id, Rs(this).val());
      });
    }
    var showGrandTotal = function(){
      Rs("#" + idGrandTotal).text(options.currencySymbol + ProductManager.getTotalPrice());
    }
    var showDiscountPrice = function(){
      Rs("#" + idDiscountPrice).text(options.currencySymbol + options.getDiscountPrice(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity()));
    }

    /*
    EVENT
    */
    if(options.affixCartIcon) {
      var cartIconBottom = RscartIcon.offset().top * 1 + RscartIcon.css("height").match(/\d+/) * 1;
      var cartIconPosition = RscartIcon.css('position');
      Rs(window).scroll(function () {
        Rs(window).scrollTop() >= cartIconBottom ? RscartIcon.addClass(classAffixMyCartIcon) : RscartIcon.removeClass(classAffixMyCartIcon);
      });
    }

    RscartIcon.click(function(){
      options.showCheckoutModal ? showModal() : options.clickOnCartIcon(RscartIcon, ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
    });

    Rs(document).on("input", "." + classProductQuantity, function () {
      var price = Rs(this).closest("tr").data("price");
      var id = Rs(this).closest("tr").data("id");
      var quantity = Rs(this).val();

      Rs(this).parent("td").next("." + classProductTotal).text("Rs" + price * quantity);
      ProductManager.updatePoduct(id, quantity);

      RscartBadge.text(ProductManager.getTotalQuantity());
      showGrandTotal();
      showDiscountPrice();
    });

    Rs(document).on('keypress', "." + classProductQuantity, function(evt){
      if(evt.keyCode == 38 || evt.keyCode == 40){
        return ;
      }
      evt.preventDefault();
    });

    Rs(document).on('click', "." + classProductRemove, function(){
      var Rstr = Rs(this).closest("tr");
      var id = Rstr.data("id");
      Rstr.hide(500, function(){
        ProductManager.removeProduct(id);
        drawTable();
        RscartBadge.text(ProductManager.getTotalQuantity());
      });
    });

    Rs("." + classCheckoutCart).click(function(){
      var products = ProductManager.getAllProducts();
      if(!products.length) {
        Rs("#" + idEmptyCartMessage).fadeTo('fast', 0.5).fadeTo('fast', 1.0);
        return ;
      }
      updateCart();
      options.checkoutCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
      ProductManager.clearProduct();
      RscartBadge.text(ProductManager.getTotalQuantity());
      Rs("#" + idCartModal).modal("hide");
    });

  }


  var MyCart = function (target, userOptions) {
    /*
    PRIVATE
    */
    var Rstarget = Rs(target);
    var options = OptionManager.getOptions(userOptions);
    var RscartIcon = Rs("." + options.classCartIcon);
    var RscartBadge = Rs("." + options.classCartBadge);

    /*
    EVENT
    */
    Rstarget.click(function(){
      options.clickOnAddToCart(Rstarget);

      var id = Rstarget.data('id');
      var name = Rstarget.data('name');
      var summary = Rstarget.data('summary');
      var price = Rstarget.data('price');
      var quantity = Rstarget.data('quantity');
      var image = Rstarget.data('image');

      ProductManager.setProduct(id, name, summary, price, quantity, image);
      RscartBadge.text(ProductManager.getTotalQuantity());

      options.afterAddOnCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
    });

  }


  Rs.fn.myCart = function (userOptions) {
    loadMyCartEvent(userOptions);
    return Rs.each(this, function () {
      new MyCart(this, userOptions);
    });
  }


})(jQuery);
