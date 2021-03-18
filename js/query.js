var editoverarr=document.getElementsByName("editover");
var editarr=document.getElementsByName("edit");

var newcontentarr = document.getElementsByName("newcontent");

var commentarr= document.getElementsByName("comment");
var commentcontentarr= document.getElementsByName("commentcontent");
var deletecommentarr= document.getElementsByName("deletecomment");
var commentoverarr= document.getElementsByName("commentover");

 for(let i = 0; i < editarr.length; i++){
    editarr[i]=document.getElementsByName("editover");
	editarr[i].onclick=function()
	{
		newcontentarr[i].style.display = "block";    // 显示
		editoverarr[i].style.display = "block";    // 显示
		editarr[i].style.display = "none";    // 显示
	}
	editoverarr[i]=document.getElementsByName("editover");
		editoverarr[i].onclick=function()
	   {
		  newcontentarr[i].style.display = "none";    // 隐藏
		  editoverarr[i].style.display = "none";    // 隐藏
		  editarr[i].style.display = "block";    // 显示
	   }
	   deletecommentarr[i]=document.getElementsByName("deletecomment");
	   commentarr[i].onclick=function()
	   {  deletecommentarr[i].style.display = "block";  // 显示
		  commentcontentarr[i].style.display = "block";    // 显示
		  commentoverarr[i].style.display = "block";    // 显示
		  commentarr[i].style.display = "none";    // 隐藏
	   }
	   commentoverarr[i]=document.getElementsByName("commentover");
	   commentoverarr[i].onclick=function()
	   { deletecommentarr[i].style.display = "none";  //隐藏
		  commentcontentarr[i].style.display = "block";    // 隐藏
		  commentoverarr[i].style.display = "none";    // 隐藏
		  commentarr[i].style.display = "block";    // 显示
	   }
	}

	




