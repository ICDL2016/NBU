$(window).load(function(){var t;setTimeout(function(){t=$(".header").outerHeight()+10,$(".header-container").hasClass("sticky-fix")?$(".main").css("padding-top",$(".header").outerHeight()+10+"px"):$(".main").css("padding-top",t+"px")},50),$(window).scroll(function(){$("body").outerHeight()>$(window).outerHeight()+100&&($(this).scrollTop()>30?($(".header-container").not(".sticky-fix").addClass("sticky"),$(".header-container").hasClass("sticky-fix")||$(".main").css("padding-top",t+"px")):($(".header-container").not(".sticky-fix").removeClass("sticky"),$(".header-container").hasClass("sticky-fix")||$(".main").css("padding-top",t+"px")))})}),$(function(){if($(".fancybox").fancybox(),$("#bx-panel").length){var t;t=$("#bx-panel").hasClass("bx-panel-folded")?39:157,$(".header__actions").css("top",t+15+"px"),$(".header__nav").css("top",t+"px"),$(window).scroll(function(e){var s=$(this).scrollTop();s<=t&&($(".header-container").css("margin-top",-s+"px"),$(".header__actions").css("margin-top",-s+"px"),$(".header__nav").css("margin-top",-s+"px")),s>t&&($(".header-container").css("margin-top",-t+"px"),$(".header__actions").css("margin-top",-t+"px"),$(".header__nav").css("margin-top",-t+"px"))})}if($(".courses").length){var e=$(window).height()-$(".courses").offset().top-$(".footer").height();$(".courses").height(e),$(window).resize(function(){var t=$(window).height()-$(".courses").offset().top-$(".footer").height();$(".courses").height(t)})}var s=1,a=$(".sky");a.eq(0).fadeIn("slow");setInterval(function(){3==s&&(s=0),a.eq(s).fadeIn("slow").siblings().fadeOut(),++s},4e3);$(".js-toggle-title").each(function(){$(this).on("click",function(t){t.preventDefault(),$(this).parent().siblings().find(".js-toggle-item").slideUp("fast"),$(this).parent().siblings().find(".js-toggle-title").removeClass("active"),$(this).toggleClass("active").parent().find(".js-toggle-item").slideToggle("fast")})}),$(".js-authorize").on("click",function(t){t.preventDefault(),$(".js-tabs").slideToggle(),$(this).hide()}),$(".js-toggler").on("click tap",function(){$(this).toggleClass("active"),$(".nav").toggleClass("active")}),$(".js-tabs").on("click",".js-tabs-head",function(){var t=$(this);t.addClass("active").siblings().removeClass("active"),t.closest(".js-tabs").find(".js-tabs-item").removeClass("active").eq(t.index()).addClass("active")}),$(".click-nav > ul").toggleClass("no-js js"),$(".click-nav .js ul").hide(),$(".click-nav .js").click(function(t){$(".click-nav .js ul").slideToggle(200),$(".clicker").toggleClass("active"),$(".click-nav").toggleClass("click-active"),t.stopPropagation()}),$(document).click(function(){$(".click-nav .js ul").is(":visible")&&($(".click-nav .js ul",this).slideUp(),$(".clicker").removeClass("active"),$(".click-nav").removeClass("click-active"))}),$(".js-filters-block").each(function(){var t=$(this),e=$(".filters-block__options",t),s=($(".filters-block__item",t),$(".active",t)),a=$("input",t);s.length&&a.val(s.data("val")),e.on("click",".filters-block__item",function(){var t=$(this).data("val");$(".js-clear-filters").fadeIn(),$(this).addClass("active").siblings().removeClass("active"),a.val(t)})}),$(".js-clear-filters").on("click",function(t){t.preventDefault(),$(this).fadeOut().closest(".js-filters").find('input[type="hidden"]').val(""),$(this).closest(".js-filters").find(".filters-block__item").removeClass("active")}),$(".js-filters-close").on("click",function(t){t.preventDefault(),$(this).closest(".js-filters").fadeOut(),$(".js-filters-call").toggleClass("active"),$(".page-title").toggle()}),$(".js-filters-call").on("click",function(t){t.preventDefault(),$(this).toggleClass("active"),$(".fa-user").removeClass("active"),$(".page-title").toggle(),$(".js-filters").fadeToggle()}),$("body").on("click",".documents_table--main > tbody > .documents_table__row:not(.documents_table__row--additional)",function(t){$(this).toggleClass("documents_table__row--active").siblings().removeClass("documents_table__row--active")}),$("body").on("click",".js-toggle-row",function(t){t.preventDefault(),$(this).closest(".documents_table__row--additional").prev().toggleClass("documents_table__row--active").siblings().removeClass("documents_table__row--active")}),$("body").on("click",".documents_table__row:not(.documents_table__row--additional) select",function(t){t.stopPropagation()});var l=$(".documents_table--main");$(".js-add-document-row").on("click",function(t){t.preventDefault(),l.append('<tr class="documents_table__row "><td class="documents_table__cell">9</td> <td class="documents_table__cell">23.04.2016</td><td class="documents_table__cell">-</td> <td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td></tr><tr class="documents_table__row documents_table__row--additional "><td class="documents_table__cell" colspan="6"><table class="documents_table"><tr class="documents_table__row"><th class="documents_table__heading"></th><th class="documents_table__heading">Название курса</th><th class="documents_table__heading w130">Вид документа</th><th class="documents_table__heading w150">Номер документа</th><th class="documents_table__heading w130">Дата начала</th><th class="documents_table__heading w130">Дата окончания</th></tr><tr class="documents_table__row"><td class="documents_table__cell"></td> <td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell">-</td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td></tr></table><table class="documents_table"><tr class="documents_table__row"><th class="documents_table__heading"></th><th class="documents_table__heading w100">Индекс</th><th class="documents_table__heading w100">Страна</th><th class="documents_table__heading w100">Область</th><th class="documents_table__heading w100">Город</th><th class="documents_table__heading">Улица</th><th class="documents_table__heading w70">Дом</th><th class="documents_table__heading w70">Корпус</th><th class="documents_table__heading w100">Квартира</th></tr><tr class="documents_table__row"><td class="documents_table__cell"></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td></tr></table><table class="documents_table"><tr class="documents_table__row"><th class="documents_table__heading"></th><th class="documents_table__heading">Комментарий</th><th class="documents_table__heading w160">Идентификатор</th></tr><tr class="documents_table__row"><td class="documents_table__cell"></td><td class="documents_table__cell" contenteditable="true"><span></span></td><td class="documents_table__cell" contenteditable="true"><span></span></td></tr><tr class="documents_table__row documents_table__row--padding"><th class="documents_table__heading js-toggle-row"></th><th class="documents_table__heading" colspan="2"><div class="pull-left"><a class="btn" href="">Изменить</a><a class="btn" href="">Почта</a><a class="btn" href="">Печать</a></div><div class="pull-right"><a class="btn" href="">Готов</a><a class="btn" href="">Выдан</a></div></th></tr></table></td></tr>')})});