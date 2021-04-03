    $(function(){
        $(".form-control").keyup(function(){
            //pega o css da tabela 
            var lista = $(this).attr('alt');
            if( $(this).val() != ""){
                $("."+lista+" a:first").hide();
				$("."+lista+" li").hide();
                $("."+lista+" a:contains-ci('" + $(this).val() + "')").parent("li").show();
           			  			
			} else{
                $("."+lista+" a").show();
				$("."+lista+" ul>li").show();
            }
        }); 
    });
    $.extend($.expr[":"], {
        "contains-ci": function(elem, i, match, array) {
            return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });