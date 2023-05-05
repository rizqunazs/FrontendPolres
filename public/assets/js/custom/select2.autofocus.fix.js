/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/select2.autofocus.fix.js ***!
  \***********************************************/
$(function () {
  $(document).on("select2:open", function () {
    setTimeout(function () {
      document.querySelector(".select2-container--open .select2-search__field").focus();
    }, 500);
  });
});
/******/ })()
;