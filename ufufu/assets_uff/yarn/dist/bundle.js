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

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/main.scss */ "./src/css/main.scss");
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_main_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/common */ "./src/js/common.js");
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_common__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/top */ "./src/js/top.js");
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_top__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_detail__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/detail */ "./src/js/detail.js");
/* harmony import */ var _js_detail__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_detail__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _js_order__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/order */ "./src/js/order.js");
/* harmony import */ var _js_order__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_order__WEBPACK_IMPORTED_MODULE_4__);






/***/ }),

/***/ "./src/js/common.js":
/*!**************************!*\
  !*** ./src/js/common.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  var headerHight = 62; //* ページ内リンクの指定

  $("a[href^='#']").not('.noscroll').click(function () {
    var href = $(this).attr('href');
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = target.offset().top - headerHight;
    $('html, body').animate({
      scrollTop: position
    }, 550, 'swing');
    return false;
  }); //* ページ外リンクの指定*/

  var urlHash = location.hash;

  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHight;
      $('body,html').stop().animate({
        scrollTop: position
      }, 500);
    }, 100);
  }

  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.nav').addClass('active');
      $('.navhamb').addClass('active');
      $('.drawer-nav').addClass('active');
    } else {
      $('.nav').removeClass('active');
      $('.navhamb').removeClass('active');
      $('.drawer-nav').removeClass('active');
    }
  });
});

/***/ }),

/***/ "./src/js/detail.js":
/*!**************************!*\
  !*** ./src/js/detail.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($('body').hasClass('detail')) {
    // 画像切り替え
    $('.subimg').on('click', function () {
      var src_chang = "";
      src_chang = $(this).children('img').attr('src');
      $(this).parent().parent().find('.mainimg').children('img').attr({
        'src': src_chang
      });
      return false;
    });
  }
});

/***/ }),

/***/ "./src/js/order.js":
/*!*************************!*\
  !*** ./src/js/order.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($('body').hasClass('page-id-8')) {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0" + (today.getMonth() + 1)).slice(-2);
    var dd = ("0" + today.getDate()).slice(-2);
    document.getElementById("today").value = yyyy + '-' + mm + '-' + dd;
    $('input[type="radio"]').on('click', function () {
      if ($('input[value="配送"]').is(':checked')) {
        $('.dnone_shudan').addClass('active');
        $('.your-ampm01').css('display', 'none');
        $('.your-ampm02').css('display', 'block');
      } else {
        $('.dnone_shudan').removeClass('active');
        $('.your-ampm01').css('display', 'block');
        $('.your-ampm02').css('display', 'none');
      }
    });
    $('input[type="checkbox"]').on('click', function () {
      if ($('input[value="その他"]').is(':checked')) {
        $('.dnone_shurui').addClass('active');
      } else {
        $('.dnone_shurui').removeClass('active');
      }
    });
    $('input[type="radio"]').on('click', function () {
      if ($('input[value="名入れあり"]').is(':checked')) {
        $('.dnone_naire').addClass('active');
      } else {
        $('.dnone_naire').removeClass('active');
      }
    });
    $('input[type="checkbox"]').on('click', function () {
      if ($('input[value="紙袋（○○円〜／個）"]').is(':checked')) {
        $('.dnone_housou').addClass('active');
      } else if ($('input[value="ギフトボックス（○○円〜／個）"]').is(':checked')) {
        $('.dnone_housou').addClass('active');
      } else {
        $('.dnone_housou').removeClass('active');
      }
    });
    $('.shomikigenclick').on('click', function () {
      if ($('input[value="あり"]', this).is(':checked')) {
        $('.dnone_shomikigen').addClass('active');
      } else {
        $('.dnone_shomikigen').removeClass('active');
      }
    });
  }

  if ($('body').hasClass('page-id-10')) {
    var today = new Date();
    today.setDate(today.getDate());
    var mm = today.getMonth() + 1;
    var dd = today.getDate();
    $('#visitmonth').val(mm);
    $('#visitday').val(dd);
    console.log(mm);
    console.log(dd);
    $('input[type="radio"]').on('click', function () {
      if ($('input[value="名入れあり"]').is(':checked')) {
        $('.dnone_naire').addClass('active');
      } else {
        $('.dnone_naire').removeClass('active');
      }
    });
    $('input[type="checkbox"]').on('click', function () {
      if ($('input[value="紙袋（○○円〜／個）"]').is(':checked')) {
        $('.dnone_housou').addClass('active');
      } else if ($('input[value="ギフトボックス（○○円〜／個）"]').is(':checked')) {
        $('.dnone_housou').addClass('active');
      } else {
        $('.dnone_housou').removeClass('active');
      }
    });
  }
});

/***/ }),

/***/ "./src/js/top.js":
/*!***********************!*\
  !*** ./src/js/top.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($('body').hasClass('home')) {
    var shuffleContent = function shuffleContent(container) {
      var content = container.find('.randumimg');
      var total = content.length;
      content.each(function () {
        content.eq(Math.floor(Math.random() * total)).prependTo(container);
      });
    };

    $(function () {
      shuffleContent($(".randum_area"));
    });
  }
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Nzcy9tYWluLnNjc3MiLCJ3ZWJwYWNrOi8vLy4vc3JjL2luZGV4LmpzIiwid2VicGFjazovLy8uL3NyYy9qcy9jb21tb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL2RldGFpbC5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvanMvb3JkZXIuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3RvcC5qcyJdLCJuYW1lcyI6WyIkIiwiaGVhZGVySGlnaHQiLCJub3QiLCJjbGljayIsImhyZWYiLCJhdHRyIiwidGFyZ2V0IiwicG9zaXRpb24iLCJvZmZzZXQiLCJ0b3AiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwidXJsSGFzaCIsImxvY2F0aW9uIiwiaGFzaCIsInN0b3AiLCJzZXRUaW1lb3V0Iiwid2luZG93Iiwic2Nyb2xsIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImhhc0NsYXNzIiwib24iLCJzcmNfY2hhbmciLCJjaGlsZHJlbiIsInBhcmVudCIsImZpbmQiLCJ0b2RheSIsIkRhdGUiLCJzZXREYXRlIiwiZ2V0RGF0ZSIsInl5eXkiLCJnZXRGdWxsWWVhciIsIm1tIiwiZ2V0TW9udGgiLCJzbGljZSIsImRkIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsInZhbHVlIiwiaXMiLCJjc3MiLCJ2YWwiLCJjb25zb2xlIiwibG9nIiwic2h1ZmZsZUNvbnRlbnQiLCJjb250YWluZXIiLCJjb250ZW50IiwidG90YWwiLCJsZW5ndGgiLCJlYWNoIiwiZXEiLCJNYXRoIiwiZmxvb3IiLCJyYW5kb20iLCJwcmVwZW5kVG8iXSwibWFwcGluZ3MiOiI7UUFBQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtR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IGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IFwiLi9zcmMvaW5kZXguanNcIik7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iLCJpbXBvcnQgXCIuL2Nzcy9tYWluLnNjc3NcIjtcbmltcG9ydCBcIi4vanMvY29tbW9uXCI7XG5pbXBvcnQgXCIuL2pzL3RvcFwiO1xuaW1wb3J0IFwiLi9qcy9kZXRhaWxcIjtcbmltcG9ydCBcIi4vanMvb3JkZXJcIjsiLCIkKGZ1bmN0aW9uICgpIHtcbiAgICBjb25zdCBoZWFkZXJIaWdodCA9IDYyO1xuICAgIC8vKiDjg5rjg7zjgrjlhoXjg6rjg7Pjgq/jga7mjIflrppcbiAgICAkKFwiYVtocmVmXj0nIyddXCIpLm5vdCgnLm5vc2Nyb2xsJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICAgICBjb25zdCBocmVmID0gJCh0aGlzKS5hdHRyKCdocmVmJyk7XG4gICAgICAgIGNvbnN0IHRhcmdldCA9ICQoaHJlZiA9PSAnIycgfHwgaHJlZiA9PSAnJyA/ICdodG1sJyA6IGhyZWYpO1xuICAgICAgICBjb25zdCBwb3NpdGlvbiA9IHRhcmdldC5vZmZzZXQoKS50b3AgLSBoZWFkZXJIaWdodDtcbiAgICAgICAgJCgnaHRtbCwgYm9keScpLmFuaW1hdGUoe1xuICAgICAgICAgICAgc2Nyb2xsVG9wOiBwb3NpdGlvblxuICAgICAgICB9LCA1NTAsICdzd2luZycpO1xuICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgfSk7XG4gICAgLy8qIOODmuODvOOCuOWkluODquODs+OCr+OBruaMh+WumiovXG4gICAgY29uc3QgdXJsSGFzaCA9IGxvY2F0aW9uLmhhc2g7XG4gICAgaWYgKHVybEhhc2gpIHtcbiAgICAgICAgJCgnYm9keSxodG1sJykuc3RvcCgpLnNjcm9sbFRvcCgwKTtcbiAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBjb25zdCB0YXJnZXQgPSAkKHVybEhhc2gpO1xuICAgICAgICAgICAgY29uc3QgcG9zaXRpb24gPSB0YXJnZXQub2Zmc2V0KCkudG9wIC0gaGVhZGVySGlnaHQ7XG4gICAgICAgICAgICAkKCdib2R5LGh0bWwnKS5zdG9wKCkuYW5pbWF0ZSh7XG4gICAgICAgICAgICAgICAgc2Nyb2xsVG9wOiBwb3NpdGlvblxuICAgICAgICAgICAgfSwgNTAwKTtcbiAgICAgICAgfSwgMTAwKTtcbiAgICB9XG5cblxuXG4gICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbiAoKSB7XG4gICAgICAgIGlmICgkKHRoaXMpLnNjcm9sbFRvcCgpID4gMjAwKSB7XG5cdCAgICAgICAgJCgnLm5hdicpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0ICAgICAgICAkKCcubmF2aGFtYicpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0ICAgICAgICAkKCcuZHJhd2VyLW5hdicpLmFkZENsYXNzKCdhY3RpdmUnKTtcbiAgICAgICAgfSBlbHNlIHtcblx0ICAgICAgICAkKCcubmF2JykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xuXHQgICAgICAgICQoJy5uYXZoYW1iJykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xuXHQgICAgICAgICQoJy5kcmF3ZXItbmF2JykucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xuICAgICAgICB9XG4gICAgfSk7XG59KTtcblxuIiwiJChmdW5jdGlvbiAoKSB7XG5cdGlmICgkKCdib2R5JykuaGFzQ2xhc3MoJ2RldGFpbCcpKSB7XG5cdFx0Ly8g55S75YOP5YiH44KK5pu/44GIXG5cdFx0JCgnLnN1YmltZycpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCl7XG5cdFx0XHR2YXIgc3JjX2NoYW5nID0gXCJcIjtcblx0XHRcdHNyY19jaGFuZyA9ICQodGhpcykuY2hpbGRyZW4oJ2ltZycpLmF0dHIoJ3NyYycpO1xuXHRcdFx0JCh0aGlzKS5wYXJlbnQoKS5wYXJlbnQoKS5maW5kKCcubWFpbmltZycpLmNoaWxkcmVuKCdpbWcnKS5hdHRyKHsnc3JjJzogc3JjX2NoYW5nfSk7XG5cdFx0XHRyZXR1cm4gZmFsc2UgXG5cdFx0fSk7XG4gICAgfVxufSk7IiwiJChmdW5jdGlvbiAoKSB7XG5cdGlmICgkKCdib2R5JykuaGFzQ2xhc3MoJ3BhZ2UtaWQtOCcpKSB7XG5cdFx0dmFyIHRvZGF5ID0gbmV3IERhdGUoKTtcblx0XHR0b2RheS5zZXREYXRlKHRvZGF5LmdldERhdGUoKSk7XG5cdFx0dmFyIHl5eXkgPSB0b2RheS5nZXRGdWxsWWVhcigpO1xuXHRcdHZhciBtbSA9IChcIjBcIisodG9kYXkuZ2V0TW9udGgoKSsxKSkuc2xpY2UoLTIpO1xuXHRcdHZhciBkZCA9IChcIjBcIit0b2RheS5nZXREYXRlKCkpLnNsaWNlKC0yKTtcblx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRvZGF5XCIpLnZhbHVlID0geXl5eSArICctJyArIG1tICsgJy0nICsgZGQ7XG5cdFx0JCgnaW5wdXRbdHlwZT1cInJhZGlvXCJdJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XHRpZigkKCdpbnB1dFt2YWx1ZT1cIumFjemAgVwiXScpLmlzKCc6Y2hlY2tlZCcpKXtcblx0XHRcdFx0JCgnLmRub25lX3NodWRhbicpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0XHRcdFx0JCgnLnlvdXItYW1wbTAxJykuY3NzKCdkaXNwbGF5Jywnbm9uZScpO1xuXHRcdFx0XHQkKCcueW91ci1hbXBtMDInKS5jc3MoJ2Rpc3BsYXknLCdibG9jaycpO1xuXHRcdFx0fWVsc2V7XG5cdFx0XHRcdCQoJy5kbm9uZV9zaHVkYW4nKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHRcdCQoJy55b3VyLWFtcG0wMScpLmNzcygnZGlzcGxheScsJ2Jsb2NrJyk7XG5cdFx0XHRcdCQoJy55b3VyLWFtcG0wMicpLmNzcygnZGlzcGxheScsJ25vbmUnKTtcblx0XHRcdH1cblx0XHR9KTtcblx0XHQkKCdpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0nKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcblx0XHRcdGlmKCQoJ2lucHV0W3ZhbHVlPVwi44Gd44Gu5LuWXCJdJykuaXMoJzpjaGVja2VkJykpe1xuXHRcdFx0XHQkKCcuZG5vbmVfc2h1cnVpJykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuXHRcdFx0fWVsc2V7XG5cdFx0XHRcdCQoJy5kbm9uZV9zaHVydWknKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9XG5cdFx0fSk7XG5cdFx0JCgnaW5wdXRbdHlwZT1cInJhZGlvXCJdJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XHRpZigkKCdpbnB1dFt2YWx1ZT1cIuWQjeWFpeOCjOOBguOCilwiXScpLmlzKCc6Y2hlY2tlZCcpKXtcblx0XHRcdFx0JCgnLmRub25lX25haXJlJykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuXHRcdFx0fWVsc2V7XG5cdFx0XHRcdCQoJy5kbm9uZV9uYWlyZScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcblx0XHRcdH1cblx0XHR9KTtcblx0XHQkKCdpbnB1dFt0eXBlPVwiY2hlY2tib3hcIl0nKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcblx0XHRcdGlmKCQoJ2lucHV0W3ZhbHVlPVwi57SZ6KKL77yI4peL4peL5YaG44Cc77yP5YCL77yJXCJdJykuaXMoJzpjaGVja2VkJykpe1xuXHRcdFx0XHQkKCcuZG5vbmVfaG91c291JykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuXHRcdFx0fWVsc2UgaWYoJCgnaW5wdXRbdmFsdWU9XCLjgq7jg5Xjg4jjg5zjg4Pjgq/jgrnvvIjil4vil4vlhobjgJzvvI/lgIvvvIlcIl0nKS5pcygnOmNoZWNrZWQnKSl7XG5cdFx0XHRcdCQoJy5kbm9uZV9ob3Vzb3UnKS5hZGRDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9ZWxzZXtcblx0XHRcdFx0JCgnLmRub25lX2hvdXNvdScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcblx0XHRcdH1cblx0XHR9KTtcblx0XHQkKCcuc2hvbWlraWdlbmNsaWNrJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XHRpZigkKCdpbnB1dFt2YWx1ZT1cIuOBguOCilwiXScsIHRoaXMpLmlzKCc6Y2hlY2tlZCcpKXtcblx0XHRcdFx0JCgnLmRub25lX3Nob21pa2lnZW4nKS5hZGRDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9ZWxzZXtcblx0XHRcdFx0JCgnLmRub25lX3Nob21pa2lnZW4nKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9XG5cdFx0fSk7XG5cdH1cblx0aWYgKCQoJ2JvZHknKS5oYXNDbGFzcygncGFnZS1pZC0xMCcpKSB7XG5cdFx0dmFyIHRvZGF5ID0gbmV3IERhdGUoKTtcblx0XHR0b2RheS5zZXREYXRlKHRvZGF5LmdldERhdGUoKSk7XG5cdFx0dmFyIG1tID0gKCh0b2RheS5nZXRNb250aCgpKzEpKTtcblx0XHR2YXIgZGQgPSAodG9kYXkuZ2V0RGF0ZSgpKTtcblx0XHQkKCcjdmlzaXRtb250aCcpLnZhbChtbSk7XG5cdFx0JCgnI3Zpc2l0ZGF5JykudmFsKGRkKTtcblx0XHRjb25zb2xlLmxvZyhtbSk7XG5cdFx0Y29uc29sZS5sb2coZGQpO1xuXHRcdCQoJ2lucHV0W3R5cGU9XCJyYWRpb1wiXScpLm9uKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdFx0aWYoJCgnaW5wdXRbdmFsdWU9XCLlkI3lhaXjgozjgYLjgopcIl0nKS5pcygnOmNoZWNrZWQnKSl7XG5cdFx0XHRcdCQoJy5kbm9uZV9uYWlyZScpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0XHRcdH1lbHNle1xuXHRcdFx0XHQkKCcuZG5vbmVfbmFpcmUnKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9XG5cdFx0fSk7XG5cdFx0JCgnaW5wdXRbdHlwZT1cImNoZWNrYm94XCJdJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XHRpZigkKCdpbnB1dFt2YWx1ZT1cIue0meiii++8iOKXi+KXi+WGhuOAnO+8j+WAi++8iVwiXScpLmlzKCc6Y2hlY2tlZCcpKXtcblx0XHRcdFx0JCgnLmRub25lX2hvdXNvdScpLmFkZENsYXNzKCdhY3RpdmUnKTtcblx0XHRcdH1lbHNlIGlmKCQoJ2lucHV0W3ZhbHVlPVwi44Ku44OV44OI44Oc44OD44Kv44K577yI4peL4peL5YaG44Cc77yP5YCL77yJXCJdJykuaXMoJzpjaGVja2VkJykpe1xuXHRcdFx0XHQkKCcuZG5vbmVfaG91c291JykuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuXHRcdFx0fWVsc2V7XG5cdFx0XHRcdCQoJy5kbm9uZV9ob3Vzb3UnKS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG5cdFx0XHR9XG5cdFx0fSk7XG5cdH1cbn0pOyIsIiQoZnVuY3Rpb24gKCkge1xuXHRpZiAoJCgnYm9keScpLmhhc0NsYXNzKCdob21lJykpIHtcblx0XHRmdW5jdGlvbiBzaHVmZmxlQ29udGVudChjb250YWluZXIpe1xuXHRcdFx0dmFyIGNvbnRlbnQgPSBjb250YWluZXIuZmluZCgnLnJhbmR1bWltZycpO1xuXHRcdFx0dmFyIHRvdGFsID0gY29udGVudC5sZW5ndGg7XG5cdFx0XHRjb250ZW50LmVhY2goZnVuY3Rpb24oKXtcblx0XHRcdFx0Y29udGVudC5lcShNYXRoLmZsb29yKE1hdGgucmFuZG9tKCkgKiB0b3RhbCkpLnByZXBlbmRUbyhjb250YWluZXIpO1xuXHRcdFx0fSk7XG5cdFx0fVxuXHRcdCQoZnVuY3Rpb24oKXtcblx0XHRcdHNodWZmbGVDb250ZW50KCQoXCIucmFuZHVtX2FyZWFcIikpO1xuXHRcdH0pO1xuICAgIH1cbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=