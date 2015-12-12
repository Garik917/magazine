 $(document).ready(function(){

		$(function() {
    		var width = $(window).width();
		var left = width - 1200;
		var cssLeft = (left/2);
		var cssLeft = cssLeft + 230;
		$('.hoverMenu').css({left: cssLeft});
    		
		}); 
		
		$('.dropdownBlock .dropdown-toggle').click(function() {
			if($('.dropdown-menu').is(':visible')) {
				$('.dropdown-menu').hide();
			} else {
				
				$('.dropdown-menu').show();
			}
            
        });
		
		$('.dropdown-menu a').click(function() {
			
			var text = $(this).html();
			text = text + '<span class="caret"></span>';
			if($('.dropdown-menu').is(':visible')) {
				$('.dropdown-menu').hide();
			} else {
				
				$('.dropdown-menu').show();
			}
			
			$('.dropdown-toggle').html(text);
			
            
        });
		
		
		
		
		slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:3,
                minSlides:3,
                slideWidth:222,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:4,
                minSlides:4,
                slideWidth:300,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:4,
                minSlides:4,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });

		


            	$(".scroll-bar").mCustomScrollbar({
					scrollbarPosition:"inside",
					scrollInertia:450,
					theme:"light-2"
				});
				
				$(".scroll-nav").mCustomScrollbar({
					scrollbarPosition:"inside",
					scrollInertia:450,
					theme:"dark"
				});
				
				$('.parameters').click(function() {
                    if($('> .partContent', this).is(':visible')) {
						$('> .partContent', this).hide();
						$('header > .caret', this).addClass('drop');
						
					} else {
						$('> .partContent', this).show();
						$('header > .caret', this).removeClass('drop');
					}
                });


    $(".tabs li").on({
        click:function(){
            var tabName = $(this).data("tab");
            var this_= $(this);
            this_.parents(".tabs").next(".tabContent").children("div").each(function(){
                var className = $(this).attr("class");
                if(className==tabName){
                    this_.parents(".tabs").next(".tabContent").children("div").hide();
                    $(this).show();
                    this_.parents(".tabs").find("li").removeClass("active");
                    this_.addClass("active");
                }
            })
        }
    });
    $(".tabs2 li").on({
        click:function(){
            var tabName = $(this).data("tab");
            var this_= $(this);
            this_.parents(".tabs2").next(".tabContent").children("div").each(function(){
                var className = $(this).attr("class");
                if(className==tabName){
                    this_.parents(".tabs2").next(".tabContent").children("div").hide();
                    $(this).show();
                    this_.parents(".tabs2").find("li").removeClass("active");
                    this_.addClass("active");
                }
            })
        }
    });
    var slider1,slider2,slider3,slider4,slider5;

    $(window).resize(function(){

        if($(window).width()<=1024 && $(window).width()>950 ){
            slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:3,
                minSlides:3,
                slideWidth:222,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:4,
                minSlides:4,
                slideWidth:300,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:4,
                minSlides:4,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });
        }
        else if($(window).width()<=940 && $(window).width()>610)
        {
            slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:2,
                minSlides:2,
                slideWidth:240,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:3,
                minSlides:3,
                slideWidth:300,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:5,
                minSlides:5,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });
        }
        else if($(window).width()<=609 && $(window).width()>480)
        {
            slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:2,
                minSlides:2,
                slideWidth:240,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:2,
                minSlides:2,
                slideWidth:300,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:6,
                minSlides:6,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });
        }
        else if($(window).width()<=479 )
        {
            slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:1,
                minSlides:1,
                slideWidth:225,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:1,
                minSlides:1,
                slideWidth:240,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:3,
                minSlides:3,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });
        }else{
            slider1 = $(".banner>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider2 = $(".banner2>ul").bxSlider({
                pager:true,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true
            });
            slider3 = $(".gallery>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:4,
                minSlides:4,
                slideWidth:240,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider4 = $(".gallery2>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:true,
                responsive:true,
                maxSlides:5,
                minSlides:5,
                slideWidth:300,
                nextText:"",
                prevText:"",
                nextSelector:"#left",
                prevSelector:"#right"
            });
            slider5 = $(".galleryProduct>ul").bxSlider({
                pager:false,
                autoStart:true,
                speed:500,
                auto:false,
                responsive:true,
                maxSlides:7,
                minSlides:7,
                slideWidth:90,
                nextText:"",
                prevText:"",
                nextSelector:"#left2",
                prevSelector:"#right2"
            });
        }

    });

    $(".burgerBtn").click(function(){
        var this_=$(this);
        this_.toggleClass("active");
        this_.next(".nav2").slideToggle();
    });
    $(".sizeBtn").on({
        click:function(){
            var this_=$(this);
            $(".sizeBtn").removeClass("active");
            this_.addClass("active");
        }
    });
    $(".plus").on({
        click:function(){
            var this_=$(this);
            var val=parseInt(this_.parent().prev("input").val());
            val++;
            this_.parent().prev("input").val(val);
        }
    });
    $(".minus").on({
        click:function(){
            var this_=$(this);
            var val=parseInt(this_.parent().prev("input").val());
            if(val>1){
                val--;
                this_.parent().prev("input").val(val);
            }else{
                return false
            }
        }
    });
    $(".galleryProduct li a").on({
        click:function(){
            $(".galleryProduct li a").removeClass("active");
            var this_=$(this);
            var href=this_.attr("href");
            this_.addClass("active");
            $(".mainImg image").attr("src",href);
            return false
        }
    });
    $(".navCatalog > a").on({
        click:function(){
            var disp=$(this).next(".hoverMenu").css("display");
            if(disp==="none"){
                $(this).next(".hoverMenu").css({
                    display:"flex"
                })
            }else{
                $(this).next(".hoverMenu").css({
                    display:"none"
                })
            }
            return false
        }
    });
    $( "#slider-range1" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [75,300],
        slide: function( event, ui ) {
            console.log(ui.values[1]);
            $("#min").val( ui.values[0] + " грн" );
            $("#max").val( ui.values[1] + " грн" );
        }
    });

});

$(function(){
    $(window).scroll(function() {
        var top = $(document).scrollTop();
        if (top < 100) $(".mainPartHeader").css({top: '0', position: 'relative'});
        else $(".mainPartHeader").css({top: '0px', width: '100%', position: 'fixed'});
    });
});