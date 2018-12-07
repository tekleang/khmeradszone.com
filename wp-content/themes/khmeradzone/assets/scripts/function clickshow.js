$(document).ready(function(){

	function clickShow(){
    $('[data-parent]').each(function(){
      var styleBox = $(this).data('parent');
      var dataSign = $(this).find('[data-sign]');
      var arrSign,arrSign2;
      $(this).prepend('<input class="txt-num-sign2" type="hidden" value="1">');
      $(this).find('[data-clickshow]').wrap('<div style="cursor:pointer;position:relative;"></div>');
      if (dataSign.data('sign')) {
        arrSign = dataSign.data('sign');
        arrSign2 = arrSign.split(',');
        var paddingLeft = $(this).find('[data-clickshow]').css('paddingLeft');
        var paddingTop = $(this).find('[data-clickshow]').css('paddingTop');
        $(this).find('[data-clickshow]').append('<span class="sSign-show font-main-color" style="font-size:25px;position:absolute;right:'+paddingLeft+';top:'+paddingTop+';">'+arrSign2[0]+'</span>');
      }
      if ($("[data-boxcontent]")) {
        $("[data-boxcontent]").hide();
      }
      $(this).find("[data-clickshow]").on('click',function(){
        var dataParent = $(this).parents('[data-parent]');
        var dataClick = $(this).data('clickshow');
        var elementShow = dataParent.find('[data-boxcontent]');
        var dataShow = elementShow.data('boxcontent');
        var numSign = dataParent.find('.txt-num-sign2').val();
        if (arrSign2) {
          $('.sSign-show').text(arrSign2[0]);
          if (numSign == 1) {
            $('.txt-num-sign2').val(1);
            dataParent.find('.sSign-show').text(arrSign2[1]);
            dataParent.find('.txt-num-sign2').val(2);
          }else {
            dataParent.find('.sSign-show').text(arrSign2[0]);
            dataParent.find('.txt-num-sign2').val(1);
          }
        }
        if (dataParent) {//if dataParent was input in element
          if (dataShow == 'slideToggle') {//if you want to show as slide Toggle
            $('[data-boxcontent]').stop().slideUp();
            dataParent.find('[data-boxcontent]').stop().slideToggle();
          }
        }
      });
    });
  }

  clickShow();

});