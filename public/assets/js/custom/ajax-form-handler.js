/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/ajax-form-handler.js ***!
  \*******************************************/
var initFormHandler = function initFormHandler() {
  var form = $('form');
  form.on('submit', function (e) {
    var tid, data, action, method, target;
    e.preventDefault();
    target = e.target;
    data = $(target).serializeArray();
    action = $(target).prop('action');
    method = $(target).prop('method');
    tid = $(target).attr('id');
    !tid ? tid = $(target).attr('name') : 'form.submit';
    $.ajax({
      url: action,
      method: method,
      data: data,
      error: function error(err) {
        console.error('form submit', err, 'tid:', tid);
        $.event.trigger("".concat(tid, ".error"), err);
      },
      success: function success(res) {
        console.info('form submit', res, 'tid:', tid);
        $.event.trigger("".concat(tid, ".success"), res);
      }
    });
  });
};

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  initFormHandler();
});
/******/ })()
;