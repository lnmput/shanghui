$(document).ready(function(){
		//导出商户列表 ajax
//	$("#exportshanghu").click(function(){
//		var titie=this.title;
//		alert(titie);
//	});
	
		//删除商户
	$(".deleteshanghu").click(function(){
		var title=this.title;
		
		var r=confirm("你确定删除吗!");
		if (r==true)
		  {
		       window.location.href=title;
		  }
		else
		  {
		    return false;
		  }
	});
	
		//删除商会
	$(".deleteshanghui").click(function(){
		var title=this.title;
		
		var r=confirm("你确定删除吗!");
		if (r==true)
		  {
		  	 // alert(title);
		     window.location.href=title;
		  }
		else
		  {
		    return false;
		  }
	});
	
	
	//增加,修改商会判断

  $("#addshanghui_form,#updateshanghui_form").validate({
	    rules: {
	      shanghuiname: "required",
	      mastername: "required",
	      masterphone: {
	        required: true,
	        digits:true,
	        rangelength:[5,13]
	      },
	      masterwechat: {
	        
	      },
	      masterqq: {
	         digits:true,
	         rangelength:[5,13]
	      },
	      bankaccount: {
           digits:true,
	         rangelength:[10,40]
	      }
	    },
	    messages: {
	      shanghuiname: "请输入商会名",
	      mastername: "请输入商会负责人姓名",
	      masterphone: {
	        required: "请输入商会负责人手机号",
	        digits: "格式不正确",
	         rangelength:"格式不正确",
	      },
	      masterwechat: {
	      },
	      masterqq: {
           digits:"格式不正确",
           rangelength:"格式不正确",
	      },
	      bankaccount: {
	      	 digits:"格式不正确",
           rangelength:"格式不正确",
	      },
	    }
	});
	
		//增加,修改商户判断
	  $("#addshanghu_form,#updateshanghu_form").validate({
	    rules: {
	      shanghuname: "required",
	    },
	    messages: {
	      shanghuname: "请输入商会名",
	    }
	});
	


	
	
	
});
