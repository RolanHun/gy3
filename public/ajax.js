class Ajax{

    constructor(token){
    this.token = token;
   
    }


   ajaxApiGet(apivegpont, callback){   
        $.ajax(
            {
                url: apivegpont, 
                type: "GET",
                success: function(result){
                    callback(result);
                    
                }
            }
        );
    }
    
   ajaxApiDelete(apivegpont,id){
    
        $.ajax(
            
            {
                headers: {'X-CSRF-TOKEN': this.token},
                url: apivegpont+"/"+id, 
                type: "DELETE",
                
                error:function(data,textStatus,errorThrown){
                    console.log(data.responseJSON.message);
                        
                }
                
            }
        );
    }


    ajaxApiPut(apivegpont,id,data){
        $.ajax({
            headers:{'X-CSRF-TOKEN':this.token},
            type: "PUT",
            url: apivegpont+"/"+id,
            data: data,
           
            error:function(data,textStatus,errorThrown){
                console.log(data.responseJSON.message);
                   
            },
        })
    }

    ajaxApiPost(apivegpont,data,callback){
        $.ajax({
            headers:{'X-CSRF-TOKEN':this.token},
            type: "POST",
            url: apivegpont,
            data: data,
            success:function(){
                callback()
            },
            error:function(data,textStatus,errorThrown){
                console.log(data.responseJSON.message);
                   
            }
        })
    }


 

}