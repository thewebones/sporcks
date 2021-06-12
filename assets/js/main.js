



/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/jquery-zoom/jquery.zoom.js":
/*!*************************************************!*\
  !*** ./node_modules/jquery-zoom/jquery.zoom.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*!\n\tZoom 1.7.21\n\tlicense: MIT\n\thttp://www.jacklmoore.com/zoom\n*/\n(function ($) {\n\tvar defaults = {\n\t\turl: false,\n\t\tcallback: false,\n\t\ttarget: false,\n\t\tduration: 120,\n\t\ton: 'mouseover', // other options: grab, click, toggle\n\t\ttouch: true, // enables a touch fallback\n\t\tonZoomIn: false,\n\t\tonZoomOut: false,\n\t\tmagnify: 1\n\t};\n\n\t// Core Zoom Logic, independent of event listeners.\n\t$.zoom = function(target, source, img, magnify) {\n\t\tvar targetHeight,\n\t\t\ttargetWidth,\n\t\t\tsourceHeight,\n\t\t\tsourceWidth,\n\t\t\txRatio,\n\t\t\tyRatio,\n\t\t\toffset,\n\t\t\t$target = $(target),\n\t\t\tposition = $target.css('position'),\n\t\t\t$source = $(source);\n\n\t\t// The parent element needs positioning so that the zoomed element can be correctly positioned within.\n\t\ttarget.style.position = /(absolute|fixed)/.test(position) ? position : 'relative';\n\t\ttarget.style.overflow = 'hidden';\n\t\timg.style.width = img.style.height = '';\n\n\t\t$(img)\n\t\t\t.addClass('zoomImg')\n\t\t\t.css({\n\t\t\t\tposition: 'absolute',\n\t\t\t\ttop: 0,\n\t\t\t\tleft: 0,\n\t\t\t\topacity: 0,\n\t\t\t\twidth: img.width * magnify,\n\t\t\t\theight: img.height * magnify,\n\t\t\t\tborder: 'none',\n\t\t\t\tmaxWidth: 'none',\n\t\t\t\tmaxHeight: 'none'\n\t\t\t})\n\t\t\t.appendTo(target);\n\n\t\treturn {\n\t\t\tinit: function() {\n\t\t\t\ttargetWidth = $target.outerWidth();\n\t\t\t\ttargetHeight = $target.outerHeight();\n\n\t\t\t\tif (source === target) {\n\t\t\t\t\tsourceWidth = targetWidth;\n\t\t\t\t\tsourceHeight = targetHeight;\n\t\t\t\t} else {\n\t\t\t\t\tsourceWidth = $source.outerWidth();\n\t\t\t\t\tsourceHeight = $source.outerHeight();\n\t\t\t\t}\n\n\t\t\t\txRatio = (img.width - targetWidth) / sourceWidth;\n\t\t\t\tyRatio = (img.height - targetHeight) / sourceHeight;\n\n\t\t\t\toffset = $source.offset();\n\t\t\t},\n\t\t\tmove: function (e) {\n\t\t\t\tvar left = (e.pageX - offset.left),\n\t\t\t\t\ttop = (e.pageY - offset.top);\n\n\t\t\t\ttop = Math.max(Math.min(top, sourceHeight), 0);\n\t\t\t\tleft = Math.max(Math.min(left, sourceWidth), 0);\n\n\t\t\t\timg.style.left = (left * -xRatio) + 'px';\n\t\t\t\timg.style.top = (top * -yRatio) + 'px';\n\t\t\t}\n\t\t};\n\t};\n\n\t$.fn.zoom = function (options) {\n\t\treturn this.each(function () {\n\t\t\tvar\n\t\t\tsettings = $.extend({}, defaults, options || {}),\n\t\t\t//target will display the zoomed image\n\t\t\ttarget = settings.target && $(settings.target)[0] || this,\n\t\t\t//source will provide zoom location info (thumbnail)\n\t\t\tsource = this,\n\t\t\t$source = $(source),\n\t\t\timg = document.createElement('img'),\n\t\t\t$img = $(img),\n\t\t\tmousemove = 'mousemove.zoom',\n\t\t\tclicked = false,\n\t\t\ttouched = false;\n\n\t\t\t// If a url wasn't specified, look for an image element.\n\t\t\tif (!settings.url) {\n\t\t\t\tvar srcElement = source.querySelector('img');\n\t\t\t\tif (srcElement) {\n\t\t\t\t\tsettings.url = srcElement.getAttribute('data-src') || srcElement.currentSrc || srcElement.src;\n\t\t\t\t}\n\t\t\t\tif (!settings.url) {\n\t\t\t\t\treturn;\n\t\t\t\t}\n\t\t\t}\n\n\t\t\t$source.one('zoom.destroy', function(position, overflow){\n\t\t\t\t$source.off(\".zoom\");\n\t\t\t\ttarget.style.position = position;\n\t\t\t\ttarget.style.overflow = overflow;\n\t\t\t\timg.onload = null;\n\t\t\t\t$img.remove();\n\t\t\t}.bind(this, target.style.position, target.style.overflow));\n\n\t\t\timg.onload = function () {\n\t\t\t\tvar zoom = $.zoom(target, source, img, settings.magnify);\n\n\t\t\t\tfunction start(e) {\n\t\t\t\t\tzoom.init();\n\t\t\t\t\tzoom.move(e);\n\n\t\t\t\t\t// Skip the fade-in for IE8 and lower since it chokes on fading-in\n\t\t\t\t\t// and changing position based on mousemovement at the same time.\n\t\t\t\t\t$img.stop()\n\t\t\t\t\t.fadeTo($.support.opacity ? settings.duration : 0, 1, $.isFunction(settings.onZoomIn) ? settings.onZoomIn.call(img) : false);\n\t\t\t\t}\n\n\t\t\t\tfunction stop() {\n\t\t\t\t\t$img.stop()\n\t\t\t\t\t.fadeTo(settings.duration, 0, $.isFunction(settings.onZoomOut) ? settings.onZoomOut.call(img) : false);\n\t\t\t\t}\n\n\t\t\t\t// Mouse events\n\t\t\t\tif (settings.on === 'grab') {\n\t\t\t\t\t$source\n\t\t\t\t\t\t.on('mousedown.zoom',\n\t\t\t\t\t\t\tfunction (e) {\n\t\t\t\t\t\t\t\tif (e.which === 1) {\n\t\t\t\t\t\t\t\t\t$(document).one('mouseup.zoom',\n\t\t\t\t\t\t\t\t\t\tfunction () {\n\t\t\t\t\t\t\t\t\t\t\tstop();\n\n\t\t\t\t\t\t\t\t\t\t\t$(document).off(mousemove, zoom.move);\n\t\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t\t);\n\n\t\t\t\t\t\t\t\t\tstart(e);\n\n\t\t\t\t\t\t\t\t\t$(document).on(mousemove, zoom.move);\n\n\t\t\t\t\t\t\t\t\te.preventDefault();\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t);\n\t\t\t\t} else if (settings.on === 'click') {\n\t\t\t\t\t$source.on('click.zoom',\n\t\t\t\t\t\tfunction (e) {\n\t\t\t\t\t\t\tif (clicked) {\n\t\t\t\t\t\t\t\t// bubble the event up to the document to trigger the unbind.\n\t\t\t\t\t\t\t\treturn;\n\t\t\t\t\t\t\t} else {\n\t\t\t\t\t\t\t\tclicked = true;\n\t\t\t\t\t\t\t\tstart(e);\n\t\t\t\t\t\t\t\t$(document).on(mousemove, zoom.move);\n\t\t\t\t\t\t\t\t$(document).one('click.zoom',\n\t\t\t\t\t\t\t\t\tfunction () {\n\t\t\t\t\t\t\t\t\t\tstop();\n\t\t\t\t\t\t\t\t\t\tclicked = false;\n\t\t\t\t\t\t\t\t\t\t$(document).off(mousemove, zoom.move);\n\t\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t);\n\t\t\t\t\t\t\t\treturn false;\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t}\n\t\t\t\t\t);\n\t\t\t\t} else if (settings.on === 'toggle') {\n\t\t\t\t\t$source.on('click.zoom',\n\t\t\t\t\t\tfunction (e) {\n\t\t\t\t\t\t\tif (clicked) {\n\t\t\t\t\t\t\t\tstop();\n\t\t\t\t\t\t\t} else {\n\t\t\t\t\t\t\t\tstart(e);\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\tclicked = !clicked;\n\t\t\t\t\t\t}\n\t\t\t\t\t);\n\t\t\t\t} else if (settings.on === 'mouseover') {\n\t\t\t\t\tzoom.init(); // Preemptively call init because IE7 will fire the mousemove handler before the hover handler.\n\n\t\t\t\t\t$source\n\t\t\t\t\t\t.on('mouseenter.zoom', start)\n\t\t\t\t\t\t.on('mouseleave.zoom', stop)\n\t\t\t\t\t\t.on(mousemove, zoom.move);\n\t\t\t\t}\n\n\t\t\t\t// Touch fallback\n\t\t\t\tif (settings.touch) {\n\t\t\t\t\t$source\n\t\t\t\t\t\t.on('touchstart.zoom', function (e) {\n\t\t\t\t\t\t\te.preventDefault();\n\t\t\t\t\t\t\tif (touched) {\n\t\t\t\t\t\t\t\ttouched = false;\n\t\t\t\t\t\t\t\tstop();\n\t\t\t\t\t\t\t} else {\n\t\t\t\t\t\t\t\ttouched = true;\n\t\t\t\t\t\t\t\tstart( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t})\n\t\t\t\t\t\t.on('touchmove.zoom', function (e) {\n\t\t\t\t\t\t\te.preventDefault();\n\t\t\t\t\t\t\tzoom.move( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );\n\t\t\t\t\t\t})\n\t\t\t\t\t\t.on('touchend.zoom', function (e) {\n\t\t\t\t\t\t\te.preventDefault();\n\t\t\t\t\t\t\tif (touched) {\n\t\t\t\t\t\t\t\ttouched = false;\n\t\t\t\t\t\t\t\tstop();\n\t\t\t\t\t\t\t}\n\t\t\t\t\t\t});\n\t\t\t\t}\n\t\t\t\t\n\t\t\t\tif ($.isFunction(settings.callback)) {\n\t\t\t\t\tsettings.callback.call(img);\n\t\t\t\t}\n\t\t\t};\n\n\t\t\timg.setAttribute('role', 'presentation');\n\t\t\timg.alt = '';\n\t\t\timg.src = settings.url;\n\t\t});\n\t};\n\n\t$.fn.zoom.defaults = defaults;\n}(window.jQuery));\n\n\n//# sourceURL=webpack:///./node_modules/jquery-zoom/jquery.zoom.js?");

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scripts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts */ \"./src/scripts/index.js\");\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./sass/main.scss */ \"./src/sass/main.scss\");\n/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n//# sourceURL=webpack:///./src/index.js?");

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./src/sass/main.scss?");

/***/ }),

/***/ "./src/scripts/animated-width.js":
/*!***************************************!*\
  !*** ./src/scripts/animated-width.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function isInViewport(el) {\n  var rect = el.getBoundingClientRect();\n  return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);\n}\n\nfunction animateOnScroll(elements) {\n  if (elements) {\n    document.addEventListener('scroll', function () {\n      animateElements(elements);\n    }, {\n      passive: true\n    });\n  }\n}\n\nfunction animateElements(elements) {\n  $(elements).each(function () {\n    var _this = this;\n\n    if (this) {\n      var visible = isInViewport(this);\n      var width = $(this).data('width');\n\n      if (visible) {\n        setTimeout(function () {\n          $(_this).css('width', width);\n        }, 100);\n      } else {\n        $(this).css('width', 0);\n      }\n    }\n  });\n}\n\n$(function () {\n  var elementsOnScroll = document.querySelectorAll('.animated-width.on-scroll');\n  var elementsOnViewOnly = document.querySelectorAll('.animated-width.on-view');\n  animateOnScroll(elementsOnScroll);\n  animateElements(elementsOnViewOnly);\n});\n\n//# sourceURL=webpack:///./src/scripts/animated-width.js?");

/***/ }),

/***/ "./src/scripts/app.js":
/*!****************************!*\
  !*** ./src/scripts/app.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  console.log('Thanks for using html-shell!');\n});\n\n//# sourceURL=webpack:///./src/scripts/app.js?");

/***/ }),

/***/ "./src/scripts/banner.js":
/*!*******************************!*\
  !*** ./src/scripts/banner.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  var banner = $(\"#banner\");\n  $(window).scroll(function () {\n    var scroll = $(window).scrollTop();\n    var offset_top = 180;\n\n    if (scroll >= offset_top) {\n      banner.addClass(\"banner--hidden\");\n    } else {\n      banner.removeClass(\"banner--hidden\");\n    }\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/banner.js?");

/***/ }),

/***/ "./src/scripts/cart.js":
/*!*****************************!*\
  !*** ./src/scripts/cart.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  $('.cart').removeClass('unanimated');\n});\n$(function () {\n  var cart = $('.cart');\n\n  if (cart[0]) {\n    $('.cart-toggler').on('click', function () {\n      $(cart).toggleClass('visible');\n      var progress = $(cart).find('.cart__progress');\n\n      if (progress) {\n        var width = $(progress).data('width');\n        $(progress).css('width', width || 0);\n      }\n    });\n  }\n});\n$(function () {\n  var cart = $('.cart');\n\n  if (cart[0]) {\n    $('.cart__backdrop').on('click', function () {\n      $(cart).removeClass('visible');\n      var progress = $(cart).find('.cart__progress');\n      $(progress).css('width', 0);\n    });\n  }\n});\n\n//# sourceURL=webpack:///./src/scripts/cart.js?");

/***/ }),

/***/ "./src/scripts/filters.js":
/*!********************************!*\
  !*** ./src/scripts/filters.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  var toggle = $('.filter-toggle');\n  var filters = toggle.closest('.running__filters-wrap');\n  toggle.on('click', function () {\n    filters.toggleClass('running__filters-wrap--visible');\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/filters.js?");

/***/ }),

/***/ "./src/scripts/img-zoom.config.js":
/*!****************************************!*\
  !*** ./src/scripts/img-zoom.config.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery_zoom__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery-zoom */ \"./node_modules/jquery-zoom/jquery.zoom.js\");\n/* harmony import */ var jquery_zoom__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery_zoom__WEBPACK_IMPORTED_MODULE_0__);\n\n$(document).ready(function () {\n  var elem = $('.product-slider__container img');\n\n  var addZoom = function addZoom() {\n    elem.wrap('<span style=\"display:inline-block\"></span>').css('display', 'block').parent().zoom();\n  };\n\n  var removeZoom = function removeZoom() {\n    elem.trigger('zoom.destroy');\n  };\n\n  if ($(window).innerWidth() > 768) {\n    addZoom();\n  } else {\n    removeZoom();\n  }\n});\n\n//# sourceURL=webpack:///./src/scripts/img-zoom.config.js?");

/***/ }),

/***/ "./src/scripts/inc-dec-handler.js":
/*!****************************************!*\
  !*** ./src/scripts/inc-dec-handler.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  var incBtn = $('.inc-dec-handler > .inc-btn');\n  var decBtn = $('.inc-dec-handler > .dec-btn');\n  var textValue = $('.inc-dec-handler > .inc-dec-value');\n  var control = $('.inc-dec-handler > .inc-dec-control');\n\n  function increment() {\n    var decrement = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;\n    var value = parseInt(control.val(), 10);\n    value = isNaN(value) ? 0 : value;\n    value += decrement ? value > 0 ? -1 : 0 : 1;\n    $(textValue).html(value);\n    $(control).val(value);\n  } // set default value\n\n\n  var defaultValue = $(control).val();\n  $(textValue).html(defaultValue);\n  $(incBtn).on('click', function () {\n    $(control)[0].stepUp(1);\n    $(textValue).html($(control).val());\n  });\n  $(decBtn).on('click', function () {\n    $(control)[0].stepDown(1);\n    $(textValue).html($(control).val());\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/inc-dec-handler.js?");

/***/ }),

/***/ "./src/scripts/index.js":
/*!******************************!*\
  !*** ./src/scripts/index.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _swiper_conf__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./swiper-conf */ \"./src/scripts/swiper-conf.js\");\n/* harmony import */ var _swiper_conf__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_swiper_conf__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _cart__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./cart */ \"./src/scripts/cart.js\");\n/* harmony import */ var _cart__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_cart__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _animated_width__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./animated-width */ \"./src/scripts/animated-width.js\");\n/* harmony import */ var _animated_width__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_animated_width__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _inc_dec_handler__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./inc-dec-handler */ \"./src/scripts/inc-dec-handler.js\");\n/* harmony import */ var _inc_dec_handler__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_inc_dec_handler__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _navbar__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./navbar */ \"./src/scripts/navbar.js\");\n/* harmony import */ var _navbar__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_navbar__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _top_bar__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./top-bar */ \"./src/scripts/top-bar.js\");\n/* harmony import */ var _top_bar__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_top_bar__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _banner__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./banner */ \"./src/scripts/banner.js\");\n/* harmony import */ var _banner__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_banner__WEBPACK_IMPORTED_MODULE_6__);\n/* harmony import */ var _filters__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./filters */ \"./src/scripts/filters.js\");\n/* harmony import */ var _filters__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_filters__WEBPACK_IMPORTED_MODULE_7__);\n/* harmony import */ var _img_zoom_config__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./img-zoom.config */ \"./src/scripts/img-zoom.config.js\");\n/* harmony import */ var _app__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./app */ \"./src/scripts/app.js\");\n/* harmony import */ var _app__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_app__WEBPACK_IMPORTED_MODULE_9__);\n\n\n\n\n\n\n\n\n\n\n\n//# sourceURL=webpack:///./src/scripts/index.js?");

/***/ }),

/***/ "./src/scripts/navbar.js":
/*!*******************************!*\
  !*** ./src/scripts/navbar.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  var navbar = $('#navbar');\n  $(window).scroll(function () {\n    var scroll = $(window).scrollTop();\n    var offset_top = 100;\n\n    if (scroll >= offset_top) {\n      $(navbar).addClass('navbar--scrolled');\n      $(navbar).find('.navbar__nav').addClass('navbar__nav--animated');\n    } else {\n      $(navbar).removeClass('navbar--scrolled');\n    }\n  });\n});\n$('#navbarToggle').on('click', function () {\n  var parent = $(this).closest('.navbar');\n  parent.toggleClass('navbar--collapsed');\n});\n$('.navbar__backdrop').on('click', function () {\n  var parent = $(this).closest('.navbar');\n  parent.removeClass('navbar--collapsed');\n});\n\n//# sourceURL=webpack:///./src/scripts/navbar.js?");

/***/ }),

/***/ "./src/scripts/swiper-conf.js":
/*!************************************!*\
  !*** ./src/scripts/swiper-conf.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }\n\nfunction _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\n$(function () {\n  var mobilePort = 576;\n  var mobileLand = 768;\n  var tabletPort = 992;\n  var tabletLand = 1024;\n  var commonProps = {\n    speed: 400,\n    loop: true,\n    slidesPerView: 1,\n    spaceBetween: 5,\n    pagination: {\n      el: \".none\",\n      clickable: true\n    },\n    navigation: {\n      nextEl: \".none\",\n      prevEl: \".none\",\n      disableOnInteraction: false\n    }\n  };\n  var bannerSlider = new Swiper(\".banner__slider\", _objectSpread(_objectSpread({}, commonProps), {}, {\n    spaceBetween: 15,\n    autoplay: {\n      delay: 3000,\n      disableOnInteraction: false\n    },\n    navigation: {\n      nextEl: \".banner__button-next\",\n      prevEl: \".banner__button-prev\"\n    }\n  }));\n  var quotesSectionSlider = new Swiper(\".quotes-section__slider\", _objectSpread(_objectSpread({}, commonProps), {}, {\n    spaceBetween: 0,\n    slidesPerView: 1,\n    breakpoints: _defineProperty({}, mobilePort, {\n      slidesPerView: 2\n    })\n  }));\n  var mobileProductsSlider = new Swiper(\".mobile-products-slider\", _objectSpread(_objectSpread({}, commonProps), {}, {\n    slidesPerView: 2,\n    slidesPerGroup: 1,\n    spaceBetween: 0,\n    autoplay: {\n      delay: 5000,\n      disableOnInteraction: false\n    },\n    breakpoints: _defineProperty({}, mobilePort, {\n      spaceBetween: 10\n    })\n  }));\n  var productGalleryThumbs = new Swiper(\".product-slider__gallery-thumbs\", {\n    spaceBetween: 10,\n    slidesPerView: 5,\n    loopedSlides: 5,\n    //looped slides should be the same\n    watchSlidesVisibility: true,\n    watchSlidesProgress: true,\n    direction: 'vertical',\n    allowTouchMove: false\n  });\n  var productSlider = new Swiper(\".product-slider__container\", {\n    slidesPerView: 1,\n    loopedSlides: 5,\n    //looped slides should be the same\n    navigation: {\n      nextEl: \".product-slider__button-next\",\n      prevEl: \".product-slider__button-prev\"\n    },\n    thumbs: {\n      swiper: productGalleryThumbs\n    },\n    pagination: {\n      el: \".product-slider__pagination\",\n      clickable: true\n    }\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/swiper-conf.js?");

/***/ }),

/***/ "./src/scripts/top-bar.js":
/*!********************************!*\
  !*** ./src/scripts/top-bar.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  updateTopBarWidth();\n  $(window).on('resize', function () {\n    updateTopBarWidth();\n  });\n  $(window).on('scroll', function () {\n    updateTopBarWidth();\n  });\n});\n\nvar updateTopBarWidth = function updateTopBarWidth() {\n  var topBar = $('#topBar');\n  var navbar = $('#navbar');\n  var height = $(navbar).outerHeight();\n  $(topBar).css('height', height);\n};\n\n//# sourceURL=webpack:///./src/scripts/top-bar.js?");

/***/ })

/******/ });