/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************************!*\
  !*** ./resources/js/delete-with-confirmation.js ***!
  \**************************************************/
var initDeleteHandler = function initDeleteHandler() {
  $(document).on('click', '.buttons-delete', function (e) {
    e.preventDefault();
    var url, tid, target;
    target = e.target;
    url = $(target).closest('a').prop('href');
    tid = $(target).closest('a').attr('id');
    tid ? tid = $(target).attr('id') : tid = 'delete-with-confirmation';
    Swal.fire({
      title: 'Anda yakin?',
      text: "Data yang sudah dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, hapus!'
    }).then(function (result) {
      if (result.isConfirmed) {
        $.ajax({
          method: 'delete',
          url: url,
          error: function error(err) {
            console.error('delete with confirmation', err, 'tid:', tid);
            $.event.trigger("".concat(tid, ".error"), err);
          },
          success: function success(res) {
            console.info('delete with confirmation', res, 'tid:', tid);
            $.event.trigger("".concat(tid, ".success"), res);
          }
        });
      }
    });
    $(this).off();
  });
};

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  initDeleteHandler();
});
/******/ })()
;