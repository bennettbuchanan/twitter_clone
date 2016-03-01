function toggleFormVisibility()
{
  var frm_element = document.getElementById('post_frm'); 

  var vis = frm_element.style;
  
  if(vis.display=='' || vis.display=='none') {
	  vis.display = 'block';
  } else {
	  vis.display = 'none';
  }
}