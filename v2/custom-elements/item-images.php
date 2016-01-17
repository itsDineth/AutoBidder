<link rel="import" href="../components/paper-tabs/paper-tab.html">
<link rel="import" href="../components/paper-tabs/paper-tabs.html">
<link rel="import" href="../components/core-toolbar/core-toolbar.html">
<link rel="import" href="../components/paper-icon-button/paper-icon-button.html">
<link rel="import" href="../components/core-layout/core-layout.html">
<link rel="import" href="../components/paper-item/paper-item.html">
<link rel="import" href="../components/paper-ripple/paper-ripple.html">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><!--
--><script src="../assets/threesixty-slider-master/src/threesixty.js"></script><!--
--><link rel="stylesheet" href="../assets/Swiper-master/dist/idangerous.swiper.css"><!--
--><script defer src="../assets/Swiper-master/dist/idangerous.swiper.min.js"></script><!--
<script src="http://fsasso.com/labs/blur/js/StackBlur.js" type="text/javascript"></script>
<script src="http://fsasso.com/labs/blur/js/html2canvas.js" type="text/javascript"></script>-->
<script defer src="../assets/fullscreen/screenfull.min.js"></script>
<polymer-element name="item-images">

    <template>
<!--        <link rel="stylesheet" href="../assets/threesixty-slider-master/styles/threesixty.css">-->

        <style>

            .itemMediaWrapper {
                height: 100%;
                width:100%;
                background: #e5e5e5;
            }
            .itemMedia {
                width: 100%;
            }
            #parent {
                line-height: 400px;
            }
            .parent2 {
                line-height: 80px;
                display: inline-block;
                margin: 3px;
            }
            #parent img, .parent2 img {
                vertical-align: middle;
            }
            .swiper-container, .swiper-slide {
                width: 100%;
                height: 100%;
              }

              @media(min-width: 1200px) {
                  .desktopImages {
                        display: block;
                    }
                    .mobileImages {
                        display: none;
                    }
              }
              @media(max-width: 767px) {
                  .mobileImages {
                        display: none;
                    }
                    .desktopImages {
                        display: block;
                    }
                    .imageRoller {
                        display: none;
                    }
              }
              #image3d {
                  display: none;
              }
              #fullscreenicon {
                  display: none;
              }
              #currentImage { 
                cursor: pointer;
              }
              
            

        </style>
        
        <core-layout horizontal>
            <div class="itemMediaWrapper">
                <div id="images2d" style="width:100%">
                    <div class="desktopImages" style="width:100%">
                        <div class="itemMedia">
<!--                            <paper-shadow z="1"></paper-shadow>-->
                            <div id="parent">
                                <img on-click="{{imgfullscreen}}" id="currentImage" src="../img/wheels.jpg" style="width:100%" alt="" />
                            </div>
                        </div>

                        <core-layout class="imageRoller" align="center" justify="center" style="margin-top: -67px; position: relative; background: rgba(0,0,0,0.6) ">

                            <div>

                                <div  class="parent2">
<!--                                    <paper-shadow z="1"></paper-shadow>-->
                                    <img on-click="{{changePhoto}}" src="../img/wheels.jpg" style="height:70px" alt="" />
                                </div>
                                <div  class="parent2">
<!--                                    <paper-shadow z="1"></paper-shadow>-->
                                    <img on-click="{{changePhoto}}" src="../img/engine.jpg" style="height:70px" alt="" />
                                </div>
                                <div  class="parent2">
<!--                                    <paper-shadow z="1"></paper-shadow>-->
                                    <img on-click="{{changePhoto}}" src="../img/wheels.jpg" style="height:70px" alt="" />
                                </div>
                            </div>
                        </core-layout>
                    </div>                    
                </div>
<!--                <div class="mobileImages" style="display: none">
                    <div id="scon" class="swiper-container">
                        <div class="swiper-wrapper">
                            First Slide
                            <div class="swiper-slide"> 
                              <img src="../img/wheels.jpg" style="width:100%" alt="" />
                            </div>

                            Second Slide
                            <div class="swiper-slide">
                                <img src="../img/engine.jpg" style="width:100%" alt="" />
                            </div>

                            Third Slide
                            <div class="swiper-slide"> 
                              <img src="../img/wheels.jpg" style="width:100%" alt="" />
                            </div>
                            Etc..
                        </div>
                      </div>
                </div>-->

<div id="image3d" style="width: 100%; height: 500px;">
                    fdfdf
                </div>
                
                <div style="margin-top: 20px;  line-height: 50px;">
<!--                    <paper-shadow></paper-shadow>-->
                    <core-layout align="center" justify="center">
                        <div on-click="{{showPhotos}}" id="tdbutton" core-flex  style="background: #ccc; text-align:center">
                            <paper-shadow z="0"></paper-shadow>
                            <paper-ripple fit></paper-ripple>PHOTOS
                        </div>
                        <span style="width: 3px; background: transparent; height: 100%; ">&nbsp;</span>
                        <div on-click="{{showTST}}" id="thdbutton" core-flex style="background: #ccc;  text-align:center">
                            <paper-shadow z="0"></paper-shadow>
                            <paper-ripple fit></paper-ripple>360 VIEW
                        </div>
              
                    </core-layout>
                </div>
            </div>
            
        </core-layout>

    </template>
    
<script>

document.fullscreenEnabled = document.fullscreenEnabled || document.mozFullScreenEnabled || document.documentElement.webkitRequestFullScreen;

function requestFullscreen(element) {
    if (element.requestFullscreen) {
        element.requestFullscreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
    }
    return false;
}

if (document.fullscreenEnabled) {
    requestFullscreen(document.documentElement);
}

    Polymer('item-images', {
        ready: function () {
            var mySwiper = new Swiper(this.$.scon,{
            //Your options here:
            mode:'vertical',
            loop: true
            //etc..
          }); 
        },
        showPhotos: function () {
            (this.$.images2d).style.display='block';
            (this.$.image3d).style.display='none';
        },
        showTST: function () {
            (this.$.images2d).style.display='none';
            (this.$.image3d).style.display='block';
        },
        changePhoto: function (event, detail, sender) {
            var imagePath = sender.src;
            (this.$.currentImage).src=imagePath;
//
//            alert (detail);
        },
        imgfullscreen: function (event, detail, sender) {
            
            screenfull.toggle(sender);
            
        }
    });

</script>
</polymer-element>

