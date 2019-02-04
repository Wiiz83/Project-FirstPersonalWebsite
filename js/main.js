var $ = jQuery.noConflict();
jQuery(document).ready(function($) {
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');

  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
        });
      }
    }
  });
  
jQuery('.example-button').bind('click', click_example);
function click_example(e){
    var _t = jQuery(this);
    var _tid = _t.attr('id');
    if(_t.hasClass('active')){
        return;
    }
    jQuery('.example-button').removeClass('active');
    _t.addClass('active');
    
    if(_tid=='e-main'){
        $('.demo-mastercon .overlayhand').removeClass('hidden');
    }else{
        $('.demo-mastercon .overlayhand').addClass('hidden');
    }
    $('.currGallery').removeClass('currGallery').addClass('pastGallery');
    
    $('.pastGallery').each(function(){
        var _c = jQuery(this);
        _c.height(_c.height());
        _c.animate({
        'height' : 0
        ,'opacity' : 0
        })
        setTimeout(kill_pastGalleries, 1000);
    });
    var aux = '';
    if(_tid=='e-rotator3d'){
    aux = '<div class="videogallery-con currGallery" style="width:940px; height:300px;"> <!--START VIDEO GALLERY--> <div class="preloader"></div> <div id="preview-rotator3d" class="videogallery" style="width:940px; height:300px; opacity:0;"> <div class="vplayer-tobe" data-videoTitle="Big Buck Bunny" data-sourcemp4="video/test.m4v" data-sourceogg="video/test.ogv" data-previewimg="img/mg1.jpg"> <div class="menuDescription"> test </div> <div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted. </div> <div class="dzstag-tobe" data-starttime="12" data-endtime="18" data-left="100" data-top="50" data-width="50" data-height="50">this another tag you set </div> <div class="dzstag-tobe" data-starttime="3" data-endtime="7" data-left="200" data-top="50" data-width="70" data-height="70" data-link="http://google.com">this a tag you set </div> </div> <div class="vplayer-tobe" data-videoTitle="Big Buck Bunny" data-type="image" data-source="img/mg2.jpg" data-previewimg="img/mg2.jpg"> <div class="menuDescription"> teste2321s </div> <div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted.</div> </div> <div class="vplayer-tobe" data-videoTitle="Big Buck Bunny" data-type="image" data-source="img/mg3.jpg" data-previewimg="img/mg3.jpg"> <div class="menuDescription"> teste2321s </div> <div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted.</div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="7Ab7UOUtN_Q" data-previewimg="img/2.png"><div class="menuDescription"> youtube video</div> </div> </div> <!--END VIDEO GALLERY--> </div><script> var videoplayersettings = { autoplay : "off", videoWidth : 500, videoHeight : 300, constrols_out_opacity : 0.9, constrols_normal_opacity : 0.9 ,settings_hideControls : "off" ,design_skin: "sameasgallery" }; jQuery(document).ready(function($){ videoplayersettings.design_skin = "skin_aurora"; $("#preview-rotator3d").vGallery({ settings_mode:"rotator3d", menuSpace:0, nav_space: "0", randomise:"off", autoplay :"off", autoplayNext : "on", nav_type: "thumbs", menuitem_width:275, menuitem_height:30, menuitem_space:1, menu_position:"bottom", transition_type:"fade", design_skin: "skin_navtransparent", videoplayersettings : videoplayersettings ,embedCode:"" ,shareCode:"" ,logo: "" ,responsive: "on" }); }) </script>';
    }
    if(_tid=='e-rotator'){
    aux = '<div class="videogallery-con currGallery" style="width:940px; height:300px;"> <!--START VIDEO GALLERY--> <div class="preloader"></div> <div id="preview-rotator" class="videogallery" style="width:940px; height:80px; opacity:0;"> <div class="vplayer-tobe" data-type="audio" data-videoTitle="" data-source="video/adg3.mp3" data-sourceogg="video/adg3.ogg"> <div class="menuDescription"> <img class="thumb20" src="img/adg320.jpg"/> ADG3 - Song 1 </div> </div> <div class="vplayer-tobe" data-type="audio" data-videoTitle="" data-source="video/adg3.mp3" data-sourceogg="video/adg3.ogg"> <div class="menuDescription"> <img class="thumb20" src="img/adg320.jpg"/> ADG3 - Song 2 </div> </div> <div class="vplayer-tobe" data-type="audio" data-videoTitle="" data-source="video/adg3.mp3" data-sourceogg="video/adg3.ogg"> <div class="menuDescription"> <img class="thumb20" src="img/adg320.jpg"/> ADG3 - Song 3 </div> </div> </div> <!--END VIDEO GALLERY--> </div><script> var videoplayersettings = { autoplay : "off", videoWidth : 500, videoHeight : 300, constrols_out_opacity : 0.9, constrols_normal_opacity : 0.9 ,settings_hideControls : "off" ,design_skin: "sameasgallery" }; jQuery(document).ready(function($){ videoplayersettings.design_skin = "skin_aurora"; $("#preview-rotator").vGallery({ settings_mode:"rotator", menuSpace:0, nav_space: "0", randomise:"off", autoplay :"off", autoplayNext : "on", nav_type: "thumbs", menuitem_width:275, menuitem_height:30, menuitem_space:1, menu_position:"bottom", transition_type:"fade", design_skin: "skin_default", videoplayersettings : videoplayersettings ,embedCode:"" ,shareCode:"" ,logo: "" ,responsive: "on" }); });</script>';
    }
    if(_tid=='e-wall'){
    aux = '<div class="videogallery-con currGallery" style="width:940px; height:300px;"> <!--START VIDEO GALLERY--> <div class="preloader"></div> <div id="preview-wall" class="videogallery" style="width:940px; height:300px; opacity:0;"> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="7Ab7UOUtN_Q"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="Exit Interview by Tony Leech" data-type="youtube" data-src="QMrfXjDoHKQ"> <div class="videoDescription">PRODUCTION<br/>Canon 5D Mark II<br/>Canon 7D</div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="Howl Trailer" data-type="youtube" data-src="Ba9yazkl0UE"> <div class="videoDescription">As Allen Ginsberg talks about his life and art, his most famous poem is illustrated in animation while the obscenity trial of the work is dramatized.</div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="The Amazing Spider-Man" data-type="youtube" data-src="mBpgxs00MIA"> <div class="videoDescription">Peter Parker finds a clue that might help him understand why his parents disappeared when he was young.</div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="wdlst2F3JtU"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="The Revenant" data-type="youtube" data-src="uFLKO--pbqI"> <div class="videoDescription">This breakout horror comedy centers around a fallen soldier who somehow finds he has joined the ranks of the living dead. Bart Gregory (Anders) has just recently been laid to rest - so why is he still up and walking around? </div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="Rise of the Guardians" data-type="youtube" data-src="s-kzZWb0BLI"> <div class="videoDescription">When the evil spirit Pitch launches an assault on Earth, the Immortal Guardians team up to protect the innocence of children all around the world.</div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="Pp9xuquibQc"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="qmBJefhcbR4"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="The Hunter Trailer" data-type="youtube" data-src="qmBJefhcbR4"> <div class="videoDescription">Martin, a mercenary, is sent from Europe by a mysterious biotech company to the Tasmanian wilderness on a hunt for the last Tasmanian tiger.</div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="uke--WAb418"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-previewimg="{ytthumbimg}" data-videoTitle="YouTube Video" data-type="youtube" data-src="utVoFIpWDyw"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> </div><!--END VIDEO GALLERY--> </div><script> var videoplayersettings = { autoplay : "off", videoWidth : 500, videoHeight : 300, constrols_out_opacity : 0.9, constrols_normal_opacity : 0.9 ,settings_hideControls : "off" ,design_skin: "sameasgallery" }; jQuery(document).ready(function($){ videoplayersettings.design_skin = "skin_aurora"; jQuery("#preview-wall").vGallery({ settings_mode:"wall", menuSpace:0, nav_space: "0", randomise:"off", autoplay :"off", autoplayNext : "on", nav_type: "thumbs", menuitem_width:200, menuitem_height:100, menuitem_space:1, menu_position:"bottom", transition_type:"fade", design_skin: "skin_navtransparent", videoplayersettings : videoplayersettings ,embedCode:"" ,shareCode:"" ,logo: "" ,responsive: "on" }); });</script>';
    }
    if(_tid=='e-main'){
    aux = '<div class="videogallery-con currGallery" style="width:940px; height:300px;"> <!--START VIDEO GALLERY--> <div class="preloader"></div> <div id="vg1" class="videogallery skin_default" style="width:940px; height:300px; opacity:0;"> <div class="vplayer-tobe" data-videoTitle="Big Buck Bunny" data-sourcemp4="video/test.m4v" data-sourceogg="video/test.ogv"> <div class="menuDescription"><img src="img/thumb.png" class="imgblock"/> <div class="the-title">Big Buck Video</div> Here you can have a video description of your choosing. </div> <div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted. </div> <div class="dzstag-tobe" data-starttime="12" data-endtime="18" data-left="100" data-top="50" data-width="80" data-height="50">this is another tag </div> <div class="dzstag-tobe" data-starttime="3" data-endtime="7" data-left="200" data-top="50" data-width="70" data-height="70" data-link="http://google.com">this a tag you set </div> </div> <div class="vplayer-tobe" data-videoTitle="Big Buck Bunny" data-sourcemp4="video/test.m4v" data-sourceogg="video/test.ogv"> <div class="menuDescription"><img src="img/thumb.png" class="imgblock"/> <div class="the-title">Big Buck Video</div>Here you can have a video description of your choosing.</div><div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted.</div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="vimeo" data-src="31539657"><div class="menuDescription"><img src="img/thumbvimeo.jpg" class="imgblock"/><div class="the-title">This is an Vimeo video</div>The thumbnail can autogenerate...</div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="7Ab7UOUtN_Q"><div class="menuDescription">{ytthumb}<div class="the-title">This is an YouTube video</div>The thumbnail can autogenerate...</div> </div> <div class="vplayer-tobe" data-videoTitle="iPad Showcase" data-sourcemp4="video/test.m4v" data-sourceogg="video/test.ogv" data-adsource="img/imagead.png" data-adType="image" data-adTitle="This is an AD" data-adLink="http://google.com"><div class="menuDescription"><img src="img/thumb3.png" class="imgblock"/><div class="the-title">iPad showcase</div>Here you can have a video description of your choosing.</div></div> <div class="vplayer-tobe" data-videoTitle="3D Car Showroom" data-sourcemp4="video/test.m4v" data-sourceogg="video/test.ogv"><div class="menuDescription"><img src="img/thumb4.png" class="imgblock"/><div class="the-title">3D Car Showroom</div>Here you can have a video description of your choosing.</div></div> <div class="vplayer-tobe" data-sourcemp3="video/adg3.mp3" data-sourceogg="video/adg3.ogg" data-type="audio" data-audioimg="img/audioimg.jpg"><div class="menuDescription"><img src="img/thumb.png" class="imgblock"/><div class="the-title">Big Buck Audio</div>Here you can have a video description of your choosing.</div> <div class="videoDescription">You can have a description here. <em>HTML</em> encoding is not a problem. Special characters like <strong>&amp;</strong> are also accepted.</div></div> <div class="vplayer-tobe" data-source="img/2.jpg" data-type="image"><div class="menuDescription"><img src="img/thumb2.png" class="imgblock"/><div class="the-title">This is an image</div>Here you can have a video description of your choosing.</div></div> </div> <!--END VIDEO GALLERY--> </div><script> var videoplayersettings = { autoplay : "off", videoWidth : 500, videoHeight : 300, constrols_out_opacity : 0.9, constrols_normal_opacity : 0.9 ,settings_hideControls : "off" ,design_skin: "sameasgallery" }; jQuery(document).ready(function($){ videoplayersettings.design_skin = "skin_aurora"; $("#vg1").vGallery({ settings_mode:"normal", menuSpace:0, randomise:"off", autoplay :"off", autoplayNext : "on", nav_type: "thumbs", menuitem_width:275, menuitem_height:76, menuitem_space:1, menu_position:"right", transition_type:"fade", design_skin: "skin_navtransparent", videoplayersettings : videoplayersettings ,embedCode:"<div>here you can place your embed code - if you want automatic generation check one of our cms solutions</div>" ,shareCode:"<a class=icon href=# ><img src=img/facebook.png /></a><a class=icon href=# ><img src=img/twitter.png /></a><a class=icon href=# ><img src=img/youtube.png /><a class=icon href=# ><img src=img/vimeo.png /><a class=icon href=# ><img src=img/flickr.png /></a>" ,logo: "img/thelogo.png" ,responsive: "on" ,design_shadow:"on" }); });</script>';
    }
    if(_tid=='e-yt'){
    aux = '<div class="videogallery-con currGallery" style="width:940px; height:300px;"> <!--START VIDEO GALLERY--> <div class="preloader"></div> <div id="preview-ytchannel" class="videogallery skin_navtransparent" style="width:940px; height:400px; opacity:0;"> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="7Ab7UOUtN_Q"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="QMrfXjDoHKQ"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="Ba9yazkl0UE"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="mBpgxs00MIA"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="wdlst2F3JtU"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="uFLKO--pbqI"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="s-kzZWb0BLI"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="Pp9xuquibQc"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="qmBJefhcbR4"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="uke--WAb418"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> <div class="vplayer-tobe" data-videoTitle="YouTube Video" data-type="youtube" data-src="utVoFIpWDyw"><div class="menuDescription"><div class="thumb-round" style="background-image:url({ytthumbimg});"></div></div> </div> </div> <!--END VIDEO GALLERY--> </div><script> var videoplayersettings = { autoplay : "off", videoWidth : 500, videoHeight : 300, constrols_out_opacity : 0.9, constrols_normal_opacity : 0.9 ,settings_hideControls : "off" ,design_skin: "sameasgallery" }; jQuery(document).ready(function($){ videoplayersettings.design_skin = "skin_aurora"; $("#preview-ytchannel").vGallery({ menuSpace:0, nav_space: "10", randomise:"off", autoplay :"off", autoplayNext : "on", nav_type: "thumbsandarrows", menuitem_width:100, menuitem_height:100, menuitem_space:9, menu_position:"bottom", transition_type:"fade", design_skin: "skin_navtransparent", videoplayersettings : videoplayersettings ,embedCode:"<div>here you can place your embed code - if you want automatic generation check one of our cms solutions</div>" ,shareCode:"" ,logo: "img/thelogo.png" ,responsive: "on" }); });</script>';
    }
    
    jQuery('.demo-mastercon .one_full').append(aux);
    
    //console.log(_tid);
}
function kill_pastGalleries(){
    $('.pastGallery').remove();
}

  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
  $(window).bind('resize', handleResize);
  handleResize();
  function handleResize(e){
    //return;
      var ww = jQuery(this).width();
      if(ww < 940){
          $('.content-wrapper').css({
              'width' : ww
              ,'overflow-x' : 'hidden'
          })
      }else{
          $('.content-wrapper').css({
              'width' : ''
              ,'overflow-x' : 'auto'
          })
          
      }
  }
});
