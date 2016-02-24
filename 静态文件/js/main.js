$(document).ready(function(){
	//增加,修改商会判断
    	
  // 在键盘按下并释放及提交后验证提交表单
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
	
	
	
	//添加,修改商品判断
	$("#addshangping_form,#updateshangping_form").validate({
	    rules: {
	      shangName: "required",
	      shangPrice: {
	      	 required: true,
	         number:true,
	      },
	      shangBase: {
	        required: true,
	        number:true,
	        range:[0,100]
	      },
	      ShangOne: {
	      	 required: true,
	         number:true,
	         range:[0,100]
	      },
	      ShangTwo: {
	      	 required: true,
	         number:true,
	         range:[0,100]
	      },
	      shangThree: {
	      	 required: true,
             number:true,
	         range:[0,100]
	      }
	    },
	    messages: {
	      shangName: "请输入商品名",
	      shangPrice: {
	      	 required: "请输入商品价格",
	         number:"格式不正确",
	      },
	      shangBase: {
	         required: "请输入基础佣金比例",
	         number:"格式不正确",
             range:"请输入0到100之间的数字",
	      },
	      ShangOne: {
	      	 required: "请输入一级佣金比例",
	      	 number:"格式不正确",
             range:"请输入0到100之间的数字",
	      },
	      ShangTwo: {
	      	 required: "请输入二级佣金比例",
             number:"格式不正确",
             range:"请输入0到100之间的数字",
	      },
	      shangThree: {
	      	  required: "请输入三级佣金比例",
	      	  number:"格式不正确",
              range:"请输入0到100之间的数字",
	      },
	    }
	});
	
	
	

	//增加,修改商户判断
	  $("#addshanghu_form,#updateshanghu_form").validate({
	    rules: {
	      shanghuname: "required",
	      mastername: "required",
	      masterphone:{
	      	 required: true,
	         digits:true,
	         rangelength:[5,13]
	      },
	      masterqq:{
	      	 digits:true,
	         rangelength:[5,13]
	      },
	      masterwechat:{},
	      masteremail:{
	      	required: true,
	        email:true
	      }
	    },
	    messages: {
	      shanghuname: "请输入商会名",
	      mastername: "请输入商会负责人姓名",
	      masterphone:{
	      	 required: "请输入商会负责人手机号",
	         digits: "格式不正确",
	         rangelength:"格式不正确",
	      },
	      masterqq:{
	      	 digits:"格式不正确",
           rangelength:"格式不正确",
	      },
	      masteremail:{
	      	required:"请输入商会负责人邮箱",
	      	email:"请输入合法的邮件地址"
	      }
	      
	    }
	});
 
	
});
