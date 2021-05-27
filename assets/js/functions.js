$(document).ready( function(){
                
                /************************/
                /* SLIDE LEFT BUTTON */
                /***************************************/
                
                $("#button_left").on( "click", function(){
                    $("#slide_left").toggleClass("slide_left_open");/*Opens and closes the menu*/
                    if($("#slide_left").hasClass("slide_left_open")){/*If the menu is open, then:*/
                        $("#bsleft").attr('src','images/common/menu_icon2.png');/*Change the menu button icon*/
                    }else{
                        $("#bsleft").attr('src','images/common/menu_icon2.png');/*If the menu is closed, change to the original button icon*/
                    }
                });
                
                /************************/
                /* SLIDE RIGHT BUTTON */
                /***************************************/
    
                $("#button_right").on( "click", function(){
                    $("#slide_right").toggleClass("slide_right_open");/*Opens and closes the menu*/
                    if($("#slide_right").hasClass("slide_right_open")){/*If the menu is open, then:*/
                        $("#bsright").attr('src','images/common/close_right.png');/*Change the menu button icon*/
                    }else{
                        $("#bsright").attr('src','images/common/menu_icon.png');/*If the menu is closed, change to the original button icon*/
                    }
                });
                
                /************************/
                /* SLIDE TOP BUTTON */
                /***************************************/
    
                $("#button_top").on( "click", function(){
                    $("#slide_top").toggleClass("slide_top_open");/*Opens and closes the menu*/
                    if($("#slide_top").hasClass("slide_top_open")){/*If the menu is open, then:*/
                        $("#bstop").attr('src','images/common/close_top.png');/*Change the menu button icon*/
                    }else{
                        $("#bstop").attr('src','images/common/menu_icon.png');/*If the menu is closed, change to the original button icon*/
                    }
                });
                
                /************************/
                /* PUSH LEFT BUTTON */
                /***************************************/
    
                $("#button_push_left").on( "click", function(){
                    $("#push_left").toggleClass("push_left_open");/*Opens and closes the menu*/
                    $("body").toggleClass("body_open_left");/*Moves the page content to side when menu is open - the "Push" part*/
                    if($("#push_left").hasClass("push_left_open")){/*If the menu is open, then:*/
                        $("#bpleft").attr('src','images/common/menu_icon.png');/*Change the menu button icon*/
                    }else{
                        $("#bpleft").attr('src','images/common/menu_icon.png');/*If the menu is closed, change to the original button icon*/
                    }
                });
                
                /************************/
                /* PUSH RIGHT BUTTON */
                /***************************************/
    
                $("#button_push_right").on( "click", function(){
                    $("#push_right").toggleClass("push_right_open");/*Opens and closes the menu*/
                    $("body").toggleClass("body_open_right");/*Moves the page content to side when menu is open - the "Push" part*/
                    if($("#push_right").hasClass("push_right_open")){/*If the menu is open, then:*/
                        $("#bpright").attr('src','images/common/close_right.png');/*Change the menu button icon*/
                    }else{
                        $("#bpright").attr('src','images/common/menu_icon.png');/*If the menu is closed, change to the original button icon*/
                    }
                });

});