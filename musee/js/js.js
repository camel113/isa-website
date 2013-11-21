var voletschoisi=false;
var couleurchoisi=false;
var sculpturechoisi=false;
var cheminsculpt='images/calques/';
var srcsculpture=null;
var srcsculpture2=null;
var srcsculpture3=null;
var srccouleur=null;
var srcvolet=null;
var sculnum="1";
var volets=null;
var scul1=null;
var scul2=null;
var scul3=null;
var txtnom=null;

$(document).ready(function(){

    //masquage des liste de sculpture du 21eme 
    $('#liste2').hide();
    $('#liste3').hide();  
    $('#liste4').hide();   
    $('#liste5').hide();  
    /**
     *RÃ©cupÃ©ration et initialisation de la balise canvas
     */
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
       
    $('#boxsculpt').hide();
    $('#listecouleur').hide();

    
    //Initialisation tooltip
    imagePreview();
    
    // Choix des volets (etape 1)
    $("#listevolets img").click(function(){
        $('#boxsculpt').show(1000);
        $('#listecouleur').show(1000);
        
        //        //Si tout change lors du changement de volets
        //        if((couleurchoisi==true) || (sculpturechoisi==true)){
        //            var confirmation = confirm('Si vous changez de volets maintenant alors...');
        //            alert(confirmation);
        //        }
    
        
        $('#listevolets .voletsel').each(function(){
            $(this).removeClass('voletsel');
        })
        $(this).addClass('voletsel');
        
        srcvolets=$(this).attr('alt');
        volets=$(this).attr('title');
        draw()       
        
    })
    
    //Choix des couleurs de fonds
    $('#listecouleur .color').live('click',function(){
        couleurchoisi=true;
        if($(this).attr('id')!='aucun'){
            srccouleur=$(this).attr('id');
        }else{
            srccouleur=null;
        }
        draw();
        $(this).removeClass('color');
        $('#listecouleur .colorselected').each(function(){
            $(this).removeClass('colorselected');
            $(this).addClass('color');
        })
        $(this).addClass('colorselected');
        
    })
    
    // Choix de la position de sculpture 
    $("#position .buttonsh").live('click',(function(){
        sculnum=$(this).attr('id');
        $(".buttonshsel").removeClass();
        $('#position a').addClass('buttonsh');
        $(this).removeClass();
        $(this).addClass('buttonshsel');
        
        
        if(sculnum=='1'){
            //Test quelle statue a ete place a cette posisiton
            $('.listesculpt div .sculsel').each(function(){
                $(this).removeClass('sculsel');
            })
            if(scul1!=null){
                $('.listesculpt div img').each(function(){
                    if($(this).attr('alt')==scul1){
                        $(this).addClass('sculsel');
                    }
                })
                
            }
        }
        if(sculnum=='2'){
            //Test quelle statue a ete place a cette posisiton
            $('.listesculpt div .sculsel').each(function(){
                $(this).removeClass('sculsel');
            })
            if(scul2!=null){
                $('.listesculpt div img').each(function(){
                    if($(this).attr('alt')==scul2){
                        $(this).addClass('sculsel');
                    }
                })
                
            }
        }
        if(sculnum=='3'){
            //Test quelle statue a ete place a cette posisiton
            $('.listesculpt div .sculsel').each(function(){
                $(this).removeClass('sculsel');
            })
            if(scul3!=null){
                $('.listesculpt div img').each(function(){
                    if($(this).attr('alt')==scul3){
                        $(this).addClass('sculsel');
                    }
                })
                
            }
        }
        
        
    })) 
    
    
    //Choix d une sculpture
    $('.listesculpt div .scul').live('click',function(){
        
        
        $('.sculsel').each(function(){
            $(this).removeClass('sculsel');
        })
        $(this).addClass('sculsel');
               
        // Test si on choisi la sculpture centrale, de gauche ou de droite (1,2,3)
        
        if(sculnum=="1"){
            sculpturechoisi=true;
            srcsculpture=$(this).attr('alt');
            scul1=srcsculpture;
            draw();

        }else{
            if(sculnum=="2"){
                sculpturechoisi=true;
                srcsculpture2=$(this).attr('alt');
                scul2=srcsculpture2;
                draw();

            }else{
                sculpturechoisi=true;
                srcsculpture3=$(this).attr('alt');
                scul3=srcsculpture3;
                draw();

            }
        }
    })

    //Supression d une sculpture
    $('.listesculpt .sculsel').live('click',function(){

        $(this).removeClass('sculsel');
               
        // Test si on choisi la sculpture centrale, de gauche ou de droite (1,2,3)
        
        if(sculnum=="1"){
            sculpturechoisi=false;
            srcsculpture=null;
            scul1=null;
            draw();

        }else{
            if(sculnum=="2"){
                sculpturechoisi=false;
                srcsculpture2=null;
                scul2=null;
                draw();

            }else{
                sculpturechoisi=false;
                srcsculpture3=null;
                scul3=null;
                draw();

            }
        }
        
        
    })
    
    
    
    function draw(){
        
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        var img = new Image();
        img.src = srcvolets;
        img.onload = function(){
            ctx.drawImage(img, 0, 0,canvas.width,canvas.height);            
            if(srccouleur!=null){
                var img2 = new Image();
                img2.src = 'images/couleurs/'+volets+'/'+srccouleur+'.png';
                img2.onload = function(){
                    ctx.drawImage(img2, 0, 0,canvas.width,canvas.height);
                    if(srcsculpture!=null){
                        var img3 = new Image();
                        img3.src = cheminsculpt+srcsculpture;
                        img3.onload = function(){
                            if(volets=='furno'){
                                ctx.drawImage(img3, 175, 235);
                            }else{
                                ctx.drawImage(img3, 175, 242);
                            }                           
                        }
                    }
                    if(srcsculpture2!=null){
                        var img4 = new Image();
                        img4.src = cheminsculpt+srcsculpture2;
                        img4.onload = function(){
                            if(volets=='furno'){
                                ctx.drawImage(img4, 260, 235);
                            }else{
                                ctx.drawImage(img4, 260, 242);
                            } 
                        }

                    }
                    if(srcsculpture3!=null){
                        var img5 = new Image();
                        img5.src = cheminsculpt+srcsculpture3;
                        img5.onload = function(){
                            if(volets=='furno'){
                                ctx.drawImage(img5, 355, 235);
                            }else{
                                ctx.drawImage(img5, 355, 242);
                            } 
                        }
                    }
                }
                
            //ELSE on recommence
            }else{
                if(srcsculpture!=null){
                    var img3 = new Image();
                    img3.src = cheminsculpt+srcsculpture;
                    img3.onload = function(){
                        if(volets=='furno'){
                            ctx.drawImage(img3, 175, 235);
                        }else{
                            ctx.drawImage(img3, 175, 242);
                        } 
                    }
                }
                if(srcsculpture2!=null){
                    var img4 = new Image();
                    img4.src = cheminsculpt+srcsculpture2;
                    img4.onload = function(){                   
                        if(volets=='furno'){
                            ctx.drawImage(img4, 260, 235);
                        }else{
                            ctx.drawImage(img4, 260, 242);
                        } 
                    }
                }
                if(srcsculpture3!=null){
                    var img5 = new Image();
                    img5.src = src3=cheminsculpt+srcsculpture3;
                    img5.onload = function(){                        
                        if(volets=='furno'){
                            ctx.drawImage(img5, 355, 235);
                        }else{
                            ctx.drawImage(img5, 355, 242);
                        } 
                    }
                }
                
            }
                            
        }
    }
  
  

    // Gestion de la phrase commanditaire
    
    $('#commandi').live('click',function(){
        $(this).replaceWith('<p class="txt" id="commandi2"><input type="text" id="f1-nom" maxlength="16"/></p>');
        $('#f1-nom').focus();
        $('body').click(function(){
            if($('#f1-nom').val()!=0){
                $("#f1-nom").replaceWith($('#f1-nom').val());
            }           
        })
        $('#f1-nom').live('keyup',function(e){
            if($('#f1-nom').val()!=0){
                if(e.keyCode==13){
                    $("#f1-nom").replaceWith($(this).val());           
                }
            }
        })
    })
    $('#commandi2').live('click',function(){
        $(this).replaceWith('<p class="txt" id="commandi3"><input type="text" id="f1-nom" maxlength="18" /></p>');
        $('#f1-nom').focus();
        $('#f1-nom').live('keyup',function(e){
            if($('#f1-nom').val()!=0){
                if(e.keyCode==13){
                    $("#f1-nom").replaceWith($(this).val());
                }   
            }
        })
    })
    $('#commandi3').live('click',function(){
        $(this).replaceWith('<p class="txt" id="commandi2"><input type="text" id="f1-nom" maxlength="18" /></p>');
        $('#f1-nom').focus();
        $('#f1-nom').live('keyup',function(e){
            if($('#f1-nom').val()!=0){
                if(e.keyCode==13){
                    $("#f1-nom").replaceWith($(this).val());
                } 
            }
        })
    })

    $('#maitre select').live('change',function(){
        $('#maitre').replaceWith('<p class="txt" id="master">'+$(this).val()+'</p>')
    });
    
    $('#master').live('click',function(){
        $(this).replaceWith('<p class="txt" id="maitre"><SELECT name="fonction"><OPTION VALUE=""></OPTION><OPTION VALUE="aux gros nez">aux gros nez</OPTION><OPTION VALUE="Hans Geiler">Hans Geiler</OPTION><OPTION VALUE="Hans Gieng">Hans Gieng</OPTION><OPTION VALUE="Hans Roditzer">Hans Roditzer</OPTION><OPTION VALUE="Martin Gramp">Martin Gramp</OPTION></SELECT></p>')
    })
    
    $('#maitre2 select').live('change',function(){
        $('#maitre2').replaceWith('<p class="txt" id="master2">'+$(this).val()+'</p>')
    });
    
    $('#master2').live('click',function(){
        $(this).replaceWith('<p class="txt" id="maitre2"><SELECT name="fonction"><OPTION VALUE=""></OPTION><OPTION VALUE="la sainte Vierge">la sainte Vierge</OPTION><OPTION VALUE="saint Michel">saint Michel</OPTION><OPTION VALUE="saint Georges">saint Georges</OPTION><OPTION VALUE="sainte Marie-Madeleine">sainte Marie-Madeleine</OPTION><OPTION VALUE="saint Léonard">saint Léonard</OPTION><OPTION VALUE="saint Wendelin">saint Wendelin</OPTION><OPTION VALUE="saint Eloi">saint Eloi</OPTION><OPTION VALUE="saint Ulrich">saint Ulrich</OPTION></SELECT></p>')
    })
    
    
    //Traitement du defilement des sculpture en cliquant sur suivant
    
    var listesuiv=0;
    //Traitement premiere liste de sculptures
    $('#liste1 .last').live('click',function(){
        $('#liste1').hide();
        $('#liste2').show(200);
    })
    //2eme liste
    $('#liste2 .first').live('click',function(){
        $('#liste2').hide();
        $('#liste1').show(200);
    })
    $('#liste2 .last').live('click',function(){
        $('#liste2').hide();
        $('#liste3').show(200);
    })
    //3eme liste
    $('#liste3 .first').live('click',function(){
        $('#liste3').hide();
        $('#liste2').show(200);
    })
    $('#liste3 .last').live('click',function(){
        $('#liste3').hide();
        $('#liste4').show(200);
    })
    //4eme liste
    $('#liste4 .first').live('click',function(){
        $('#liste4').hide();
        $('#liste3').show(200);
    })
    $('#liste4 .last').live('click',function(){
        $('#liste4').hide();
        $('#liste5').show(200);
    })
    //5eme liste
    $('#liste5 .first').live('click',function(){
        $('#liste5').hide();
        $('#liste4').show(200);
    })   

})

